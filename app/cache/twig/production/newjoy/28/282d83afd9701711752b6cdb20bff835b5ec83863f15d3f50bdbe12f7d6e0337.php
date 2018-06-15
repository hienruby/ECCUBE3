<?php

/* __string_template__baa4c3b4d4b4366fff8fd5c36668064c0ccaf1f6d8705a5e95634031779a203c */
class __TwigTemplate_2318ba1d47a01a6b6c1760c8e7d7c4b9c2eebfcc9cae0d5b7ea981e84e535232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__baa4c3b4d4b4366fff8fd5c36668064c0ccaf1f6d8705a5e95634031779a203c", 1);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["body_class"] = "front_page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        // line 6
        echo "<script>
\$(function(){
    \$('.main_visual').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        speed: 300
    });
});
</script>
";
    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        // line 19
        echo "   
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title></title>
</head>

    <script src=\"user_data/js/jssor.slider-27.0.3.min.js\" type=\"text/javascript\"></script>
    <script src=\"user_data/js/slider.js\" type=\"text/javascript\">
        
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 111 css*/
        .jssort111 .p {position:absolute;top:0;left:0;width:200px;height:100px;background-color:#000;}
        .jssort111 .p img {position:absolute;top:0;left:0;width:100%;height:100%;}
        .jssort111 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.45;}
        .jssort111 .p:hover .t{opacity:.8;}
        .jssort111 .pav .t, .jssort111 .pdn .t, .jssort111 .p:hover.pdn .t{opacity:1;}
        .jssort111 .ti {position:absolute;bottom:0px;left:0px;width:100%;height:28px;line-height:28px;text-align:center;font-size:12px;color:#fff;background-color:rgba(0,0,0,.3)}
        .jssort111 .pav .ti, .jssort111 .pdn .ti, .jssort111 .p:hover.pdn .ti{color:#000;background-color:rgba(255,255,255,.6);}
    </style>
    <div id=\"jssor_1\" style=\"position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:560px;overflow:hidden;visibility:hidden;\">
        <!-- Loading Screen -->
        <div data-u=\"loading\" class=\"jssorl-009-spin\" style=\"position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);\">
           
        </div>
        <div data-u=\"slides\" style=\"cursor:default;position:relative;top:0px;left:0px;width:980px;height:480px;overflow:hidden;\">
            <div>
                <img data-u=\"image\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv01.jpg\" />
                <div data-u=\"thumb\">
                    <img data-u=\"thumb\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv01.jpg\" />
                    <div class=\"ti\">Slide Description</div>
                </div>
            </div>
            <div>
                <img data-u=\"image\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv02.jpg\" />
                <div data-u=\"thumb\">
                    <img data-u=\"thumb\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv02.jpg\" />
                    <div class=\"ti\">Slide Description</div>
                </div>
            </div>
            <div>
                <img data-u=\"image\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv03.jpg\" />
                <div data-u=\"thumb\">
                    <img data-u=\"thumb\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv03.jpg\" />
                    <div class=\"ti\">Slide Description</div>
                </div>
            </div>
  <div>
                <img data-u=\"image\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv03.jpg\" />
                <div data-u=\"thumb\">
                    <img data-u=\"thumb\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv03.jpg\" />
                    <div class=\"ti\">Slide Description</div>
                </div>
            </div>
  <div>
                <img data-u=\"image\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv03.jpg\" />
                <div data-u=\"thumb\">
                    <img data-u=\"thumb\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv03.jpg\" />
                    <div class=\"ti\">Slide Description</div>
                </div>
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u=\"thumbnavigator\" class=\"jssort111\" style=\"position:absolute;left:0px;bottom:0px;width:980px;height:100px;cursor:default;\" data-autocenter=\"1\" data-scale-bottom=\"0.75\">
            <div data-u=\"slides\">
                <div data-u=\"prototype\" class=\"p\">
                    <div data-u=\"thumbnailtemplate\" class=\"t\"></div>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u=\"arrowleft\" class=\"jssora051\" style=\"width:55px;height:55px;top:162px;left:25px;\" data-autocenter=\"2\" data-scale=\"0.75\" data-scale-left=\"0.75\">
            <svg viewbox=\"0 0 16000 16000\" style=\"position:absolute;top:0;left:0;width:100%;height:100%;\">
                <polyline class=\"a\" points=\"11040,1920 4960,8000 11040,14080 \"></polyline>
            </svg>
        </div>
        <div data-u=\"arrowright\" class=\"jssora051\" style=\"width:55px;height:55px;top:162px;right:25px;\" data-autocenter=\"2\" data-scale=\"0.75\" data-scale-right=\"0.75\">
            <svg viewbox=\"0 0 16000 16000\" style=\"position:absolute;top:0;left:0;width:100%;height:100%;\">
                <polyline class=\"a\" points=\"4960,1920 11040,8000 4960,14080 \"></polyline>
            </svg>
        </div>
    </div>
    <script type=\"text/javascript\">jssor_1_slider_init();</script>
    



";
    }

    public function getTemplateName()
    {
        return "__string_template__baa4c3b4d4b4366fff8fd5c36668064c0ccaf1f6d8705a5e95634031779a203c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 97,  154 => 95,  146 => 90,  141 => 88,  133 => 83,  128 => 81,  120 => 76,  115 => 74,  107 => 69,  102 => 67,  52 => 19,  49 => 18,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__baa4c3b4d4b4366fff8fd5c36668064c0ccaf1f6d8705a5e95634031779a203c", "");
    }
}
