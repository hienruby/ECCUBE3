<?php

/* __string_template__3f34d01d574affdc13dbb6efddca2c660b568cb68fe322c5a69913633efaa463 */
class __TwigTemplate_8f76ddbe464d6f59a70183a06a8b9683a94b2bd8d37698681de2aac12a62dc13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        echo "
<!--最近チェックした商品-->
";
        // line 12
        if (($context["checkedItems"] ?? null)) {
            // line 13
            echo "<link rel=\"stylesheet\" href=\"/user_data/css/check_product.css\">
<div id=\"checkeditem\" class=\"item_gallery title border\">
  ";
            // line 15
            if ((($context["delete"] ?? null) == 0)) {
                // line 16
                echo "    <h2 class=\"heading row \">
      <h4 class=\" col-md-12 \">Checked items
</h4>
<p class=\"small col-md-12\">✦ 最近チェックした商品 ✦ </p>

      <div class=\"heading02\">
        <a href=\"";
                // line 22
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("block_checkeditem_delete");
                echo "\" class=\"btn xoa btn-sm\">履歴を削除</a>
      </div>
    </h2>
  ";
            } else {
                // line 26
                echo "    <h2 class=\"heading\">最近チェックした商品</h2>
  ";
            }
            // line 28
            echo "    <div class=\"row\">
      ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["checkedItems"] ?? null), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["checkedItem"]) {
                // line 30
                echo "        <div class=\"five-co\">
            <div class=\"pickup_item\">
                <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($context["checkedItem"], "id", array()))), "html", null, true);
                echo "\">
                    <div class=\"item_photo\"><img src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($context["checkedItem"], "main_list_image", array())), "html", null, true);
                echo "\"></div>
                    <dl>
                     <!-- <dt class=\"item_name\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["checkedItem"], "name", array()), "html", null, true);
                echo "</dt>-->
                                     <div class=\"h-name\">
                                    <script>
                                    <!--
                                    var x = \"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["checkedItem"], "name", array()), "html", null, true);
                echo "\";
                                    document.write(x.slice(0,28)); //-->
                                    </script>...
                                    </div>
                      <dd class=\"item_price\">
                      ";
                // line 44
                if ($this->getAttribute($context["checkedItem"], "hasProductClass", array())) {
                    // line 45
                    if (($this->getAttribute($context["checkedItem"], "getPrice02Min", array()) == $this->getAttribute($context["checkedItem"], "getPrice02Max", array()))) {
                        // line 46
                        echo "                          <p class=\"normal_price\"><span class=\"price01_default\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["checkedItem"], "getPrice02IncTaxMin", array())), "html", null, true);
                        echo "</span></p>
                          ";
                    } elseif (( !(null === $this->getAttribute(                    // line 47
$context["checkedItem"], "getPrice02Min", array())) &&  !(null === $this->getAttribute($context["checkedItem"], "getPrice02Max", array())))) {
                        // line 48
                        echo "                          <p class=\"normal_price\"><span class=\"price01_default\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["checkedItem"], "getPrice02IncTaxMin", array())), "html", null, true);
                        echo "</span> ～ <span class=\"price01_default\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["checkedItem"], "getPrice02IncTaxMax", array())), "html", null, true);
                        echo "</span></p>
                          ";
                    }
                    // line 50
                    echo "                      ";
                } else {
                    // line 51
                    if ( !(null === $this->getAttribute($context["checkedItem"], "getPrice02Max", array()))) {
                        // line 52
                        echo "                          <p class=\"normal_price\"><span class=\"price01_default\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["checkedItem"], "getPrice02IncTaxMin", array())), "html", null, true);
                        echo "</span></p>
                          ";
                    }
                    // line 54
                    echo "                      ";
                }
                // line 55
                echo "</dd>
                    </dl>
                </a>
            </div>
          </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checkedItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    </div>

</div>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__3f34d01d574affdc13dbb6efddca2c660b568cb68fe322c5a69913633efaa463";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 61,  120 => 55,  117 => 54,  111 => 52,  109 => 51,  106 => 50,  98 => 48,  96 => 47,  91 => 46,  89 => 45,  87 => 44,  79 => 39,  72 => 35,  65 => 33,  61 => 32,  57 => 30,  53 => 29,  50 => 28,  46 => 26,  39 => 22,  31 => 16,  29 => 15,  25 => 13,  23 => 12,  19 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__3f34d01d574affdc13dbb6efddca2c660b568cb68fe322c5a69913633efaa463", "");
    }
}
