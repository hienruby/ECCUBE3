<?php
/*
 * Plugin Name : ProductOption
 *
 * Copyright (C) 2015 BraTech Co., Ltd. All Rights Reserved.
 * http://www.bratech.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\ProductOption\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ExecutionContext;

class AddOptionCartExtension extends AbstractTypeExtension
{

    public $app;
    public $ProductOptions = null;

    public function __construct(\Silex\Application $app)
    {
        $this->app = $app;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $build_options)
    {
        $app = $this->app;
        $ProductOptions = $build_options['product_option'];
        $this->ProductOptions = $ProductOptions;

        if ('POST' === $app['request']->getMethod() && $ProductOptions === null) {
            $Product = $build_options['product'];
            $ProductOptions = $app['eccube.productoption.repository.product_option']->getListByProductId($Product->getId());
        }

        if (is_array($ProductOptions)) {
            foreach ($ProductOptions as $ProductOption) {
                $Product = $ProductOption->getProduct();
                if($Product->getStockFind()){
                    $Option = $ProductOption->getOption();
                    $type_id = $Option->getType()->getId();
                    $options = array(
                        'label' => $Option->getName(),
                    );
                    if ($Option->getIsRequired()) {
                        $options['required'] = true;
                        $options['constraints'] = array(
                            new Assert\NotBlank(),
                        );
                    } else {
                        $options['required'] = false;
                    }
                    if ($type_id == 1) {
                        $options['expanded'] = false;
                        $options['multiple'] = false;
                        $options['choices'] = $Option->getOptionCategoriesSelect();
                        $options['empty_value'] = false;
                        if ($options['required'] === true) {
                            if($Option->getDisableCategory()){
                                $options['constraints'][] = new Assert\NotEqualTo(array(
                                    'value' => $Option->getDisableCategory()->getId(),
                                    'message' => 'This value should not be blank.',
                                ));
                            }
                        }
                        if($Option->getDefaultCategory()){
                            $options['data'] = $Option->getDefaultCategory()->getId();
                        }
                        $form_type = 'choice';
                    } elseif ($type_id == 2) {
                        $options['expanded'] = true;
                        $options['multiple'] = false;
                        $options['choices'] = $Option->getOptionCategoriesSelect();
                        $options['empty_value'] = false;
                        if ($options['required'] === true) {
                            if($Option->getDisableCategory()){
                                $options['constraints'][] = new Assert\NotEqualTo(array(
                                    'value' => $Option->getDisableCategory()->getId(),
                                    'message' => 'This value should not be blank.',
                                ));
                            }
                        }
                        if($Option->getDefaultCategory()){
                            $options['data'] = $Option->getDefaultCategory()->getId();
                        }else{
                            $options['data'] = key($options['choices']);
                        }
                        $form_type = 'choice';
                    } elseif ($type_id == 5) {
                        $options['expanded'] = true;
                        $options['multiple'] = true;
                        $options['choices'] = $Option->getOptionCategoriesSelect();
                        $options['empty_value'] = false;
                        if($Option->getDefaultCategory()){
                            $data = array();
                            foreach($Option->getDefaultCategory() as $defaultCategory){
                                $data[] = $defaultCategory->getId();
                            }
                            $options['data'] = $data;
                        }
                        $form_type = 'choice';
                    } elseif ($type_id == 3) {
                        $form_type = 'text';
                        $OptionCategories = $Option->getOptionCategories();
                        if(count($OptionCategories) > 0){
                            $options['attr'] = array('placeholder' => $OptionCategories[0]->getName(), 'data' => $OptionCategories[0]->getId());
                        }
                    } elseif ($type_id == 4) {
                        $form_type = 'textarea';
                        $OptionCategories = $Option->getOptionCategories();
                        if(count($OptionCategories) > 0){
                            $options['attr'] = array('placeholder' => $OptionCategories[0]->getName(), 'data' => $OptionCategories[0]->getId());
                        }
                    } elseif ($type_id == 6) {
                        $form_type = 'date';
                        $options['input'] = 'datetime';
                        $options['widget'] = 'single_text';
                        $options['format'] = 'yyyy-MM-dd';
                        $options['empty_value'] = array('year' => '----', 'month' => '--', 'day' => '--');
                        $OptionCategories = $Option->getOptionCategories();
                        if(count($OptionCategories) > 0){
                            $options['attr'] = array('placeholder' => $OptionCategories[0]->getName(), 'data' => $OptionCategories[0]->getId());
                        }
                    } elseif ($type_id == 7) {
                        $form_type = 'integer';
                        $options['attr'] = array('class' => 'number','maxlength' => $this->app['config']['int_len']);
                        $OptionCategories = $Option->getOptionCategories();
                        if(count($OptionCategories) > 0){
                            $options['attr']['placeholder'] = $OptionCategories[0]->getName();
                            $options['attr']['data'] = $OptionCategories[0]->getId();
                        }
                        $options['constraints'][] = new Assert\Regex(array('pattern' => '/^\d+$/'));
                    }
                    $builder->add('productoption' . $Option->getId(), $form_type, $options);
                }
            }
        }

        $builder
            ->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) use($app, $build_options) {
                $ProductOptions = $build_options['product_option'];

                if ('POST' === $app['request']->getMethod() && $ProductOptions === null) {
                    $Product = $build_options['product'];
                    $ProductOptions = $app['eccube.productoption.repository.product_option']->getListByProductId($Product->getId());
                }

                $data = $event->getData();
                $form = $event->getForm();

                if($data['mode'] === 'add_favorite'){
                    if (is_array($ProductOptions)) {
                        foreach ($ProductOptions as $ProductOption) {
                            $Product = $ProductOption->getProduct();
                            if($Product->getStockFind()){
                                $Option = $ProductOption->getOption();
                                $type_id = $Option->getType()->getId();
                                $options = array();
                                $options['required'] = false;
                                if ($type_id == 1) {
                                    $options['expanded'] = false;
                                    $options['multiple'] = false;
                                    $options['choices'] = $Option->getOptionCategoriesSelect();
                                    $options['empty_value'] = false;
                                    $form_type = 'choice';
                                } elseif ($type_id == 2) {
                                    $options['expanded'] = true;
                                    $options['multiple'] = false;
                                    $options['choices'] = $Option->getOptionCategoriesSelect();
                                    $options['empty_value'] = false;
                                    $form_type = 'choice';
                                } elseif ($type_id == 3) {
                                    $form_type = 'text';
                                } elseif ($type_id == 4) {
                                    $form_type = 'textarea';
                                } elseif ($type_id == 6) {
                                    $form_type = 'date';
                                }elseif ($type_id == 7) {
                                    $form_type = 'integer';
                                }
                                $form->remove('productoption' . $Option->getId());
                                $form->add('productoption' . $Option->getId(), $form_type, $options);
                            }
                        }
                    }
                }
            });

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) use($app, $build_options){
            $form = $event->getForm();

            $ProductOptions = $build_options['product_option'];

            if ('POST' === $app['request']->getMethod() && $ProductOptions === null) {
                $Product = $build_options['product'];
                $ProductOptions = $app['eccube.productoption.repository.product_option']->getListByProductId($Product->getId());
            }

            if (is_array($ProductOptions)) {
                foreach ($ProductOptions as $ProductOption) {
                    $Option = $ProductOption->getOption();
                    $type_id = $Option->getType()->getId();
                    if($type_id == 5){
                        $min = $Option->getRequireMin();
                        $max = $Option->getRequireMax();
                        $Options = $form['productoption'.$Option->getId()]->getData();
                        if($min == 1 && $max == 1){
                            if(count($Options) != 1){
                                $form['productoption'.$Option->getId()]->addError(new FormError('チェックされていません。'));
                            }
                        }elseif($min == $max && strlen($min) != 0){
                            if(count($Options) != $min){
                                $form['productoption'.$Option->getId()]->addError(new FormError($min.'つ選択してください。'));
                            }
                        }else{
                            if($min > 0){
                                if(count($Options) < $min){
                                    $form['productoption'.$Option->getId()]->addError(new FormError($min.'つ以上選択してください。'));
                                }
                            }
                            if($max > 0){
                                if(count($Options) > $max){
                                    $form['productoption'.$Option->getId()]->addError(new FormError('選択できるのは'.($max).'つまでです。'));
                                }
                            }
                        }
                    }
                }
            }
        });
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'product_option' => null,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return 'add_cart';
    }

}
