<?php

/* __string_template__90839766c966b63f329211fd02db8f69f62326bda855d51105cec278365f6be1 */
class __TwigTemplate_e6b458d410024836cac5dc65a1e98a254aee3e43f21a7d13b6e3e8d87adb0243 extends Twig_Template
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
        // line 1
        echo "<style>
@media only screen and (max-width: 768px){
.cart .btn_area .btn-sm {
    height: auto;
    font-size: 16px;
    line-height: 22px;
    padding: 12px 8px;
    border-radius: 5px;
}
}
@media only screen and (min-width: 768px){
#cart_area p {
    border: none;
    float: right;
    min-width: 256px;
}
.btn_area .btn {
    height: 40px;
    line-height: 40px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
}
.cart .btn_area .btn {
    width: 100%;
    border-radius: 4px;
}
}
.bold{
font-weight:bold;
color:black;
font-size:14px;
}
.cart .item_box .item_price {
    font-size: 16px;
    font-weight: normal;
color:black;
}
</style>
<div id=\"cart_area\">
    <p class=\"clearfix cart-trigger\"><a href=\"#cart\">
            <svg class=\"cb cb-shopping-cart\">
                <use xlink:href=\"#cb-shopping-cart\"/>
            </svg>
            <span class=\"badge\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Cart"] ?? null), "total_quantity", array()), "html", null, true);
        echo "</span>
            <svg class=\"cb cb-close\">
                <use xlink:href=\"#cb-close\"/>
            </svg>
        </a>
        <span class=\"cart_price pc\">合計 <span class=\"price\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute(($context["Cart"] ?? null), "total_price", array())), "html", null, true);
        echo "</span></span></p>
    <div id=\"cart\" class=\"cart\">
        <div class=\"inner\">
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "eccube.front.cart.error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 54
            echo "                <div class=\"message\">
                    <p class=\"errormsg bg-danger\">
                        <svg class=\"cb cb-warning\"><use xlink:href=\"#cb-warning\" /></svg>";
            // line 56
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["error"]), "html", null, true));
            echo "
                    </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Cart"] ?? null), "CartItems", array()));
        foreach ($context['_seq'] as $context["key"] => $context["CartItem"]) {
            // line 61
            echo "                ";
            $context["ProductClass"] = $this->getAttribute($context["CartItem"], "Object", array());
            // line 62
            echo "                ";
            $context["Product"] = $this->getAttribute(($context["ProductClass"] ?? null), "Product", array());
            // line 63
            echo "                <div class=\"item_box clearfix\">
                    <div class=\"item_photo\"><img
                                src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute(($context["Product"] ?? null), "MainListImage", array())), "html", null, true);
            echo "\"
                                alt=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
            echo "\"></div>
                    <dl class=\"item_detail\">
                        <dt class=\"item_name_2\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Product"] ?? null), "name", array()), "html", null, true);
            echo "</dt>
                        <dd class=\"item_pattern\">";
            // line 70
            if ($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory1", array())) {
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory1", array()), "ClassName", array()), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory1", array()), "html", null, true);
                // line 72
                if ($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory2", array())) {
                    // line 73
                    echo "<br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory2", array()), "ClassName", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["ProductClass"] ?? null), "ClassCategory2", array()), "html", null, true);
                }
            }
            // line 76
            echo "</dd>
                        ";
            // line 86
            echo "
";
            // line 87
            if ($this->getAttribute(($context["CartOptions"] ?? null), $context["key"], array(), "array", true, true)) {
                // line 88
                echo "<dd class=\"item_pattern\">
    ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["CartOptions"] ?? null), $context["key"], array(), "array"), "label", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                    // line 90
                    echo "        ";
                    if (($this->getAttribute($context["loop"], "index0", array()) != 0)) {
                        echo "<br />";
                    }
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "</dd>
";
            }
            // line 93
            echo "<dd class=\"item_price\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["CartItem"], "price", array())), "html", null, true);
            echo "×";
            echo twig_escape_filter($this->env, $this->getAttribute($context["CartItem"], "quantity", array()), "html", null, true);
            echo " 
                        </dd><br><br>
                       <p class=\"bold\">合計: <span id=\"demo\" class=\"price\"></span></p>
<script>
var x=";
            // line 97
            echo twig_escape_filter($this->env, ($this->getAttribute($context["CartItem"], "price", array()) * $this->getAttribute($context["CartItem"], "quantity", array())), "html", null, true);
            echo ";
console.log(x);
console.log(x.toLocaleString());
 document.getElementById(\"demo\").innerHTML =x.toLocaleString()+\"円\";
</script>
                    </dl>
                </div><!--/item_box-->
                
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['CartItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["Cart"] ?? null), "CartItems", array())) > 0)) {
            // line 107
            echo "
                <div class=\"btn_area\">
                    <ul>
                        <li>
                            <a href=\"";
            // line 111
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("cart");
            echo "\" class=\"btn btn-primary\">カートへ進む</a>
                        </li>
                        <li>
                            <button type=\"button\" class=\"btn btn-default btn-sm cart-trigger\">キャンセル</button>
                        </li>
                    </ul>
                </div>
            ";
        } else {
            // line 119
            echo "                <div class=\"btn_area\">
                    <div class=\"message\">
                        <p class=\"errormsg bg-danger\" style=\"margin-bottom: 20px;\">
                            現在カート内に<br>商品はございません。
                        </p>
                    </div>
                </div>
            ";
        }
        // line 127
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__90839766c966b63f329211fd02db8f69f62326bda855d51105cec278365f6be1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 127,  239 => 119,  228 => 111,  222 => 107,  219 => 106,  204 => 97,  194 => 93,  190 => 92,  170 => 90,  153 => 89,  150 => 88,  148 => 87,  145 => 86,  142 => 76,  135 => 73,  133 => 72,  129 => 71,  127 => 70,  123 => 68,  118 => 66,  112 => 65,  108 => 63,  105 => 62,  102 => 61,  97 => 60,  87 => 56,  83 => 54,  79 => 53,  73 => 50,  65 => 45,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__90839766c966b63f329211fd02db8f69f62326bda855d51105cec278365f6be1", "");
    }
}
