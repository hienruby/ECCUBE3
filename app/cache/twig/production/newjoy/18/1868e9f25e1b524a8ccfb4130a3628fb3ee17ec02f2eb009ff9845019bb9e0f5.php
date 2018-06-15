<?php

/* Point/Resource/template/default/Event/ShoppingConfirm/point_summary.twig */
class __TwigTemplate_cb4a8dfc0b9962b8441cde52c07011939eab74c7b5f9d545fcdecd7f1439e33d extends Twig_Template
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
        echo "<br/>
<dl id=\"summary_box__customer_point\">
    <dt>利用ポイント</dt>
    <dd class=\"text-primary\">";
        // line 4
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["point"] ?? null), "use", array())), "html", null, true);
        echo " pt</dd>
</dl>
<dl id=\"summary_box__customer_point\">
    <dt>加算ポイント</dt>
    <dd>";
        // line 8
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["point"] ?? null), "add", array())), "html", null, true);
        echo " pt</dd>
</dl>

";
    }

    public function getTemplateName()
    {
        return "Point/Resource/template/default/Event/ShoppingConfirm/point_summary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Point/Resource/template/default/Event/ShoppingConfirm/point_summary.twig", "/home/kir021669/public_html/newjoy.co.jp/app/Plugin/Point/Resource/template/default/Event/ShoppingConfirm/point_summary.twig");
    }
}
