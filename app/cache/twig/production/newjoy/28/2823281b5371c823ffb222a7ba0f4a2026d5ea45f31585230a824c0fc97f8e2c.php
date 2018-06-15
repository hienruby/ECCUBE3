<?php

/* __string_template__1224b92e65776c52d96e0b0df4996dc9a4dd67a9ca71e1ab12d5b867dfe46c57 */
class __TwigTemplate_289fb1d7825c37f648520951dffb151bb1fca93cfaa5de3bfc25925634efe329 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<link rel=\"stylesheet\" href=\"/user_data/css/admin3.css\">
<link rel=\"stylesheet\" href=\"/user_data/css/sm-category2.css\">
<style>
.p {
    padding-left: 0px!important;
}
.p2:hover { 
  color: #d6a4b0;
}
.tt{
   font-size: 16px;
    padding-left: 15px;
    padding: 5px;
    font-weight: bold;
    border: 1px solid #e8e8e8;
    margin: 0 16px;
margin-left: 0;
}
.fa-hien:before{
content:\"+\";
}
.j{
margin-left:0!important;
}
.treeview-menu1 .j{
padding-right:0!important;
}

</style>
<div class=\"pp sp-cat2 drawer_block pc\">
<div id=\"\" class=\"title\">
<p class=\"tt\"> カテゴリ一覧 </p>
            <div class=\"navbar-default sidebar1\" >
                <div class=\"sidebar-nav1 \">
            ";
        // line 60
        echo "              <ul class=\"sidebar-menu1 \" data-widget=\"tree1\">
              ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 62
            echo "              ";
            echo $this->getAttribute($this, "tree", array(0 => $context["Category"]), "method");
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
</div>
</div>
<script src=\"/user_data/js/adminlte.js\"></script>
<script>
(function(\$){
    \$('.treeview1> a ').on('click',function(){
        if(\$(this).hasClass('open1')){
            \$(this).removeClass('open1');
            \$(this).next().slideUp();
           
        }
        else{
            \$('.treeview-menu1 li').removeClass('treeview1');
            \$(this).next().slideDown();
        }
    });
})(jQuery);
</script>";
    }

    // line 36
    public function gettree($__Category__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "Category" => $__Category__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 37
            echo "            ";
            if (($this->getAttribute(($context["Category"] ?? null), "id", array()) != 63)) {
                // line 38
                echo "            <li class=\"v  j treeview1 col-xs-12\">
               <a class=\"p2\" href=\"";
                // line 39
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Category"] ?? null), "id", array()), "html", null, true);
                echo "\">
                    ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Category"] ?? null), "name", array()), "html", null, true);
                echo "
         <span class=\" s pull-right-container\">
         <i class=\"fa fa-hien pull-right\"></i>
            </span>                </a>        
              ";
                // line 44
                if ((twig_length_filter($this->env, $this->getAttribute(($context["Category"] ?? null), "children", array())) > 0)) {
                    // line 45
                    echo "                
                <ul class=\"treeview-menu1 p\">
              <li class=\" j col-xs-12\">
                <a class=\"p2\" href=\"";
                    // line 48
                    echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["Category"] ?? null), "id", array()), "html", null, true);
                    echo "\">
                    すべて
                </a>
                </li>
                  ";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Category"] ?? null), "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                        // line 53
                        echo "                    ";
                        echo $this->getAttribute($this, "tree", array(0 => $context["ChildCategory"]), "method");
                        echo "
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "                </ul>
              ";
                }
                // line 57
                echo "            </li>
            ";
            }
            // line 59
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
        return "__string_template__1224b92e65776c52d96e0b0df4996dc9a4dd67a9ca71e1ab12d5b867dfe46c57";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 59,  161 => 57,  157 => 55,  148 => 53,  144 => 52,  135 => 48,  130 => 45,  128 => 44,  121 => 40,  115 => 39,  112 => 38,  109 => 37,  97 => 36,  72 => 64,  63 => 62,  59 => 61,  56 => 60,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__1224b92e65776c52d96e0b0df4996dc9a4dd67a9ca71e1ab12d5b867dfe46c57", "");
    }
}
