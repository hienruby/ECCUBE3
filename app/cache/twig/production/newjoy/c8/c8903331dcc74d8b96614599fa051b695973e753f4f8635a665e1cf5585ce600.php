<?php

/* __string_template__79d03dc7432c13b2347d1b3bde0058e412e90c34526d105b95aee0c7d3cab4f1 */
class __TwigTemplate_4a034f253da31415a79626b028f8d36194abdfc20455b8a9b7982a7167bbedc2 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"/user_data/css/category_main1.css\">
<style>
.sanpham a::after {
    content: \"›\";
    float: right;
}
@font-face {
  font-family: myFirstFont;
  src: url('/user_data/font/DIDOTLTSTD-ITALIC_2.OTF');
}

.title h4 {
  font-family:myFirstFont!important;
  text-align:center;
  font-size: 30px;
  font-weight: normal;
}
</style>
<div class=\" mainmenu\">
  <div class=\"row \">
    <div class=\"col-sm-12\">

      <div id=\"cate-left\" class=\"title\">
        <h4>  Category
<p class=\"small\"> ✦  カテゴリ一覧  ✦</p></h4>
        <div class=\"\">
          <div class=\"\">

            ";
        // line 38
        echo "
            <ul class=\"category-nav1\">
              ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 41
            echo "              ";
            echo $this->getAttribute($this, "tree", array(0 => $context["Category"]), "method");
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </ul>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    // line 29
    public function gettree($__Category__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "Category" => $__Category__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "            ";
            if (($this->getAttribute(($context["Category"] ?? null), "id", array()) != 63)) {
                // line 31
                echo "            <li class=\"col-md-3 col-xs-6 sanpham\">
                <a href=\"";
                // line 32
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Category"] ?? null), "id", array()), "html", null, true);
                echo "\">
                    ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Category"] ?? null), "name", array()), "html", null, true);
                echo "
                </a>
            </li>
            ";
            }
            // line 37
            echo "            ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "__string_template__79d03dc7432c13b2347d1b3bde0058e412e90c34526d105b95aee0c7d3cab4f1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 37,  101 => 33,  95 => 32,  92 => 31,  89 => 30,  77 => 29,  66 => 43,  57 => 41,  53 => 40,  49 => 38,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__79d03dc7432c13b2347d1b3bde0058e412e90c34526d105b95aee0c7d3cab4f1", "");
    }
}
