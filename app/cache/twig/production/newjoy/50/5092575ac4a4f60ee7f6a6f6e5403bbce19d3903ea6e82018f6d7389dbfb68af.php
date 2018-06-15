<?php

/* Block/plg_shiro8_new_product_block.twig */
class __TwigTemplate_7d8a19a0472a430ec85603f02a326f4c33c7e9fa48c185f236fc2157fc776310 extends Twig_Template
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
        // line 22
        echo "<link rel=\"stylesheet\" href=\"/user_data/css/new_product1.css\">
<style>
@font-face {
  font-family: myFirstFont;
  src: url('/user_data/font/DIDOTLTSTD-ITALIC_2.OTF');
}

.title h4 {
  font-family:myFirstFont!important;
  text-align:center;
  font-size: 30px;
  font-weight: normal;
}
</style>
<div class=\"row border\">
            <div id=\"contents_top\" class=\"col-md-12 title\">
<h4 class=\"col-md-12 \">New item
<p class=\"small\">✦  新商品 ✦ </p>
</h4>
       <div id=\"item_list border\">
                    <div class=\"row\">
                        ";
        // line 43
        if ((twig_length_filter($this->env, ($context["Products"] ?? null)) > 0)) {
            // line 44
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 45
                echo "                                <div class=\"five-co\">
                                    <div class=\"pickup_item\">
                                        <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
                echo "\">
                                            <div class=\"item_photo\">
                                                <div class=\"tagCtrol\">NEW</div>
                                                <img src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($context["Product"], "main_list_image", array())), "html", null, true);
                echo "\">
                                            </div>
                                            ";
                // line 52
                if ($this->getAttribute($context["Product"], "description_list", array())) {
                    // line 53
                    echo "                                                <p class=\"item_comment text-warning\">";
                    echo nl2br($this->getAttribute($context["Product"], "description_list", array()));
                    echo "</p>
                                            ";
                }
                // line 55
                echo "                                            <dl>
                                              <!--<dt class=\"item_name\">";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "name", array()), "html", null, true);
                echo "</dt>-->
                                     <div class=\"h-name\">
                                    <script>
                                    <!--
                                    var x = \"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "name", array()), "html", null, true);
                echo "\";
                                    document.write(x.slice(0,26)); //-->
                                    </script>...
                                    </div>
                                                
                                                ";
                // line 65
                if ($this->getAttribute($context["Product"], "hasProductClass", array())) {
                    // line 66
                    echo "                                                    ";
                    if (($this->getAttribute($context["Product"], "getPrice02Min", array()) == $this->getAttribute($context["Product"], "getPrice02Max", array()))) {
                        // line 67
                        echo "                                                        <dd class=\"item_price\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                        echo "</dd>
                                                    ";
                    } else {
                        // line 69
                        echo "                                                        <dd class=\"item_price\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                        echo " ～ ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMax", array())), "html", null, true);
                        echo "</dd>
                                                    ";
                    }
                    // line 71
                    echo "                                                ";
                } else {
                    // line 72
                    echo "                                                    <dd class=\"item_price\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                    echo "</dd>
                                                ";
                }
                // line 74
                echo "                                                
                                            </dl>
                                        </a>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "

                        ";
        }
        // line 83
        echo "                    </div>

                  </div>
            </div>
            <div class=\"col-md-2 col-md-offset-10 motto\" id=\"motto\"><a href=\"http://newjoy.co.jp/products/list?mode=&category_id=&name=&pageno=1&disp_number=30&orderby=2\">もっと見る</a></div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/plg_shiro8_new_product_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 83,  131 => 80,  120 => 74,  114 => 72,  111 => 71,  103 => 69,  97 => 67,  94 => 66,  92 => 65,  84 => 60,  77 => 56,  74 => 55,  68 => 53,  66 => 52,  59 => 50,  53 => 47,  49 => 45,  44 => 44,  42 => 43,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/plg_shiro8_new_product_block.twig", "/home/kir021669/public_html/newjoy.co.jp/app/template/newjoy/Block/plg_shiro8_new_product_block.twig");
    }
}
