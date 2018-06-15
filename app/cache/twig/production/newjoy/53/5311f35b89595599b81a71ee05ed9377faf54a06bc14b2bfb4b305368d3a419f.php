<?php

/* Block/recommendify3_product_block.twig */
class __TwigTemplate_58536bba57bfca9fde9c1185821d5c046a5791f0517b49cdcfe1687d48b4f320 extends Twig_Template
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
        // line 9
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/js/owl.carousel.min.js\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/css/owl.carousel.min.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "user_data_urlpath", array()), "html", null, true);
        echo "/css/owl.theme.min.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<script>
    \$(function(){
        \$('.owl-carousel').owlCarousel({
            responsive: true,
            items : 5,
        });
    });
</script>
";
        // line 20
        if ( !twig_test_empty(($context["Recommendify3Products"] ?? null))) {
            // line 21
            echo "<h2 class=\"heading row \"></h2>
<h4 class=\"recommendify col-md-12\" style=\"font-family:myFirstFont!important; text-align:center; font-size: 30px; font-weight: normal;\">Bought items</h4>
<p class=\"small col-md-12\" style=\"margin-bottom:10px\">✦ 一緒に買われている商品 ✦</p>
";
        }
        // line 25
        echo "<div class=\"owl-carousel\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Recommendify3Products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 27
            echo "    <div class=\"item\" style=\"padding:0 10px;\">
        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
            echo "\">
            <div class=\"item_photo\">
                <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($context["Product"], "main_list_image", array())), "html", null, true);
            echo "\">
            </div>
            <dl>
                <dt class=\"item_name\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "name", array()), "html", null, true);
            echo "</dt>
                ";
            // line 34
            if ($this->getAttribute($context["Product"], "description_list", array())) {
                // line 35
                echo "                <dd class=\"item_comment\">";
                echo nl2br($this->getAttribute($context["Product"], "description_list", array()));
                echo "</dd>
                ";
            }
            // line 37
            echo "                ";
            if ($this->getAttribute($context["Product"], "hasProductClass", array())) {
                // line 38
                echo "                ";
                if (($this->getAttribute($context["Product"], "getPrice02Min", array()) == $this->getAttribute($context["Product"], "getPrice02Max", array()))) {
                    // line 39
                    echo "                <dd class=\"item_price\">
                    ";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                    echo "
                </dd>
                ";
                } else {
                    // line 43
                    echo "                <dd class=\"item_price\">
                    ";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMax", array())), "html", null, true);
                    echo "
                </dd>
                ";
                }
                // line 47
                echo "                ";
            } else {
                // line 48
                echo "                <dd class=\"item_price\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                echo "</dd>
                ";
            }
            // line 50
            echo "            </dl>
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "Block/recommendify3_product_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 54,  122 => 50,  116 => 48,  113 => 47,  105 => 44,  102 => 43,  96 => 40,  93 => 39,  90 => 38,  87 => 37,  81 => 35,  79 => 34,  75 => 33,  67 => 30,  62 => 28,  59 => 27,  55 => 26,  52 => 25,  46 => 21,  44 => 20,  30 => 11,  24 => 10,  19 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/recommendify3_product_block.twig", "/home/kir021669/public_html/newjoy.co.jp/app/template/newjoy/Block/recommendify3_product_block.twig");
    }
}
