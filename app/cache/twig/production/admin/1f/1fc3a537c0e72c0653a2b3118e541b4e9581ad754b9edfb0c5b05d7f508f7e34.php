<?php

/* GmoPaymentGateway/View/admin/cutomer_edit.twig */
class __TwigTemplate_48b68b06f2803048fcb0c25c3a7ec5dfeae72805a62101a68c6d7b31e510918a extends Twig_Template
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
        // line 5
        echo "
";
        // line 7
        echo "<div class=\"box accordion\">
    <div class=\"box-header toggle active\">
        <h3 class=\"box-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "GmoPaymentGateway", array()), "const", array()), "PG_MULPAY_SERVICE_NAME", array()), "html", null, true);
        echo "決済情報<svg class=\"cb cb-angle-down icon_down\"> <use xlink:href=\"#cb-angle-down\" /></svg></h3>
    </div><!-- /.box-header -->
    <div class=\"box-body accpanel\" style=\"display: block;\">
        <div class=\"form-horizontal\">
            <div class=\"form-group\">
                <div class=\"col-sm-2\" style=\"margin-bottom: 10px;\">GMOメンバーID</div>
                <div class=\"col-sm-9 col-lg-10\">
                    <div class=\"form-inline\">
                        ";
        // line 17
        echo twig_escape_filter($this->env, ($context["GmoMemberId"] ?? null), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "GmoPaymentGateway/View/admin/cutomer_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 17,  26 => 9,  22 => 7,  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GmoPaymentGateway/View/admin/cutomer_edit.twig", "/home/kir021669/public_html/newjoy.co.jp/app/Plugin/GmoPaymentGateway/View/admin/cutomer_edit.twig");
    }
}
