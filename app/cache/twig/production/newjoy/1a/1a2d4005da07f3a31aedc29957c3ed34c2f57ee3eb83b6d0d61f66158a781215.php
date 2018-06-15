<?php

/* Block/special.twig */
class __TwigTemplate_fd8f8af9b648d3638ea8ec590aae2276dad43d30be70b8980642bad28cf7810b extends Twig_Template
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
        if ((null === $this->getAttribute(($context["Category"] ?? null), "id", array()))) {
            // line 2
            echo "\t<div class=\"img-flex col-sm-6 col-xs-12\">
\t\t<a href=\"/products/list?category_id=17\"><img src=\"/user_data/special/r8-180322yql-04s.jpg\" alt=\"\"></a>
\t</div>
\t<div class=\"img-flex col-sm-6 col-xs-12\">
\t\t<a href=\"/products/list?category_id=28\"><img src=\"/user_data/special/r8-0602yql-02s.jpg\" alt=\"\"></a>
\t</div>
\t<div class=\"img-flex col-sm-6 col-xs-12\">
\t\t<a href=\"/products/list?category_id=26\"><img src=\"/user_data/special/r8-180322yql-01s.jpg\" alt=\"\"></a>
\t</div>
\t<div class=\"img-flex col-sm-6 col-xs-12\">
\t\t<a href=\"/products/list?category_id=31\"><img src=\"/user_data/special/r8-171120yql-03s.jpg\" alt=\"\"></a>
\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "Block/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/special.twig", "/home/kir021669/public_html/newjoy.co.jp/app/template/newjoy/Block/special.twig");
    }
}
