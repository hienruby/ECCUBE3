<?php

/* __string_template__d839e30ea5a676bc0abac20dee15f81f2d8a3b07ff7c0befc100caf97c78e1cd */
class __TwigTemplate_3cf0858325e252dce70a07cf4597617e44b94294866cadc26303996f63b611c4 extends Twig_Template
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
        echo "<style>
 .recom{
padding-top:15px;
}
.item_price {
              text-align: center;
              font-size: 16px;
              color:black;
             font-weight:800;
              }

</style>
<!-- ▼item_list▼ -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"../user_data/css/osusume1.css\">
<div class=\"row title recom\">
<h4 class=\"col-md-12\">Recommend
<p class=\"small\">✦  おすすめ商品 ✦ </p></h4>
<div class=\"wrapp\">
<div id=\"item_list hien\">
    <div class=\"row carousel1 border\" data-flickity='{ \"autoPlay\": true,\"freeScroll\": true,\"groupCells\": 4,\"wrapAround\": true}'>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recommend_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["RecommendProduct"]) {
            // line 30
            echo "            <div class=\"five-co carousel-cell\">
                <div class=\"pickup_item\">
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"item_photo\"><img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "mainFileName", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "name", array()), "html", null, true);
            echo "\"></div>
                      <!---  <div class=\"h-name item-comment\" class=\"comment\">";
            // line 34
            echo nl2br($this->getAttribute($context["RecommendProduct"], "comment", array()));
            echo "</div>-->
                        <dl>
                      <!--<dt class=\"item_name\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "name", array()), "html", null, true);
            echo "</dt>--> 
                       <div class=\"h-name\">
                                    <script>
                                    <!--
                                    var x = \"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "name", array()), "html", null, true);
            echo "\";
                                    document.write(x.slice(0,26)); //-->
                                    </script>...
                                    </div>

                            <dd class=\"item_price\">
                                ";
            // line 46
            if ($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "hasProductClass", array())) {
                // line 47
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "getPrice02Min", array()) == $this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "getPrice02Max", array()))) {
                    // line 48
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "getPrice02IncTaxMin", array())), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 50
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "getPrice02IncTaxMin", array())), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "getPrice02IncTaxMax", array())), "html", null, true);
                    echo "
                                    ";
                }
                // line 52
                echo "                                ";
            } else {
                // line 53
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($this->getAttribute($context["RecommendProduct"], "Product", array()), "getPrice02IncTaxMin", array())), "html", null, true);
                echo "
                                ";
            }
            // line 55
            echo "                            </dd>
                        </dl>
                    </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RecommendProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </div>
</div>
</div>
</div>

<script src=\"../user_data/flickity/flickity.pkgd.min.js\"></script>

<!-- ▲item_list▲ -->";
    }

    public function getTemplateName()
    {
        return "__string_template__d839e30ea5a676bc0abac20dee15f81f2d8a3b07ff7c0befc100caf97c78e1cd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 61,  110 => 55,  104 => 53,  101 => 52,  93 => 50,  87 => 48,  84 => 47,  82 => 46,  73 => 40,  66 => 36,  61 => 34,  53 => 33,  49 => 32,  45 => 30,  41 => 29,  19 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__d839e30ea5a676bc0abac20dee15f81f2d8a3b07ff7c0befc100caf97c78e1cd", "");
    }
}
