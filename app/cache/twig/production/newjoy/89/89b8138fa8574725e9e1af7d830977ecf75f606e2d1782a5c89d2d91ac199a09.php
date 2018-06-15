<?php

/* GmoPaymentGateway/View/mypage_navi_add.twig */
class __TwigTemplate_5a03d20dd9729f7b719cd14f925e1df77e0b997ab3ad37a613622da8d6350e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('main', $context, $blocks);
    }

    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "    <li class=\"";
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter(($context["mypageno"] ?? null), "")) : ("")) == "card")) {
            echo "active";
        }
        echo "\"><a";
        if ((((array_key_exists("mypageno", $context)) ? (_twig_default_filter(($context["mypageno"] ?? null), "")) : ("")) != "card")) {
            echo " href=\"";
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("gmo_mypage_change_card");
            echo "\"";
        }
        echo ">カード情報編集</a></li>
";
    }

    public function getTemplateName()
    {
        return "GmoPaymentGateway/View/mypage_navi_add.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 7,  23 => 6,  20 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GmoPaymentGateway/View/mypage_navi_add.twig", "/home/kir021669/public_html/newjoy.co.jp/app/Plugin/GmoPaymentGateway/View/mypage_navi_add.twig");
    }
}
