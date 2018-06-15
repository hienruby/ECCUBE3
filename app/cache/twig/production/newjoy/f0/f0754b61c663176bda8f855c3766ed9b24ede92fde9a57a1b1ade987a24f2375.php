<?php

/* __string_template__dcf88cc5cec9da57e52daab068d4b0273ca0c2a4f8a64ea5165d1d4812d8867d */
class __TwigTemplate_b7af3f7517fc65e5807e27437ef7ddd1113a9d2c41c26e6b2b877814e7e2ec53 extends Twig_Template
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 23
            echo "<style>



@media only screen and (min-width: 768px){
#login_box .column {
    background: #f3f4f400;
}
.top a:hover {
    text-decoration: underline!important;
    color: #9797a1;
}
}
</style>
    <div id=\"member\" class=\"member drawer_block pc\" style=\"margin-top: -20px\">
        <ul class=\"top member_link \">
            <li>
                <a href=\"";
            // line 40
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage");
            echo "\">
                    <svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg>マイページ
                </a>
            </li>
            ";
            // line 44
            if (($this->getAttribute(($context["BaseInfo"] ?? null), "option_favorite_product", array()) == 1)) {
                // line 45
                echo "                <li><a href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage_favorite");
                echo "\" ><svg class=\"cb cb-heart-circle\"><use xlink:href=\"#cb-heart-circle\"></use></svg>お気に入り</a></li>
            ";
            }
            // line 47
            echo "            <li>
                <a href=\"";
            // line 48
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("logout");
            echo "\">
                    <svg class=\"cb cb-lock-circle\"><use xlink:href=\"#cb-lock-circle\" /></svg>ログアウト
                </a>
            </li>
        </ul>
    </div>
";
        } else {
            // line 55
            echo "    <div id=\"member\" class=\"member drawer_block pc\"  style=\"margin-top: -20px\">
        <ul class=\" top member_link\">
            <li>
                <a href=\"";
            // line 58
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("entry");
            echo "\" >
                    <svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg>新規会員登録
                </a>
            </li>
            ";
            // line 62
            if (($this->getAttribute(($context["BaseInfo"] ?? null), "option_favorite_product", array()) == 1)) {
                // line 63
                echo "                <li><a href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage_favorite");
                echo "\" ><svg class=\"cb cb-heart-circle\"><use xlink:href=\"#cb-heart-circle\"></use></svg>お気に入り</a></li>
            ";
            }
            // line 65
            echo "            <li>
                <a href=\"";
            // line 66
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage_login");
            echo "\" >
                    <svg class=\"cb cb-lock-circle\"><use xlink:href=\"#cb-lock-circle\" /></svg>ログイン
                </a>
            </li>
        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__dcf88cc5cec9da57e52daab068d4b0273ca0c2a4f8a64ea5165d1d4812d8867d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 66,  88 => 65,  82 => 63,  80 => 62,  73 => 58,  68 => 55,  58 => 48,  55 => 47,  49 => 45,  47 => 44,  40 => 40,  21 => 23,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__dcf88cc5cec9da57e52daab068d4b0273ca0c2a4f8a64ea5165d1d4812d8867d", "");
    }
}
