<?php

/* Point/Resource/template/default/Event/ProductDetail/detail_point.twig */
class __TwigTemplate_f58dcb8020085cd44c5bc00bba25df56d8ca125115904e0b9ab6a3469386145b extends Twig_Template
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
        echo "<p id=\"detail_description_box__sale_point\" class=\"text-primary\">
    ";
        // line 2
        if (($this->getAttribute(($context["point"] ?? null), "min", array()) != $this->getAttribute(($context["point"] ?? null), "max", array()))) {
            // line 3
            echo "        加算ポイント：<span>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["point"] ?? null), "min", array())), "html", null, true);
            echo "</span><span class=\"small\">pt</span> ～
        <span>";
            // line 4
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["point"] ?? null), "max", array())), "html", null, true);
            echo "</span><span class=\"small\">pt</span>
    ";
        } else {
            // line 6
            echo "        加算ポイント：<span>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["point"] ?? null), "max", array())), "html", null, true);
            echo "</span><span class=\"small\">pt</span>
    ";
        }
        // line 8
        echo "</p>

";
    }

    public function getTemplateName()
    {
        return "Point/Resource/template/default/Event/ProductDetail/detail_point.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 6,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Point/Resource/template/default/Event/ProductDetail/detail_point.twig", "/home/kir021669/public_html/newjoy.co.jp/app/Plugin/Point/Resource/template/default/Event/ProductDetail/detail_point.twig");
    }
}
