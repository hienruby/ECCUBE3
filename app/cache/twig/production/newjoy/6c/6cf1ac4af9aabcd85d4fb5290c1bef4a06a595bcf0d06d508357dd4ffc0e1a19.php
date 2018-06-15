<?php

/* __string_template__fc13df57ffced9b1f816169830193153b39b41f20defebaa7b0bda8c5d0b8bb2 */
class __TwigTemplate_866ce54dd0c4806389d1fc931c05df787e7910d60bd6d0793883d5ecbce0241c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__fc13df57ffced9b1f816169830193153b39b41f20defebaa7b0bda8c5d0b8bb2", 22);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
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
        // line 24
        $context["body_class"] = "product_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 27
        echo "<link rel=\"stylesheet\" href=\"/user_data/css/free_area.css\">
";
    }

    // line 30
    public function block_javascript($context, array $blocks = array())
    {
        // line 31
        echo "    <script>
        // 並び順を変更
        function fnChangeOrderBy(orderby) {
            eccube.setValue('orderby', orderby);
            eccube.setValue('pageno', 1);
            eccube.submitForm();
        }

        // 表示件数を変更
        function fnChangeDispNumber(dispNumber) {
            eccube.setValue('disp_number', dispNumber);
            eccube.setValue('pageno', 1);
            eccube.submitForm();
        }
        // 商品表示BOXの高さを揃える
        \$(window).load(function() {
            \$('.product_item').matchHeight();
        });
    </script>
";
    }

    // line 52
    public function block_main($context, array $blocks = array())
    {
        // line 53
        echo "<style>
.intro {
    color: #525263;
    font-size: 16px;
     margin-right: 0;
}
#list_header_menu li a{
color: #333;
}
@media only screen and (min-width: 768px)
#topicpath li {
    font-size: 14px;
}
.item_price {
    color: black;
    font-weight: bold;
    font-size: 14px;
}
.it{
margin-bottom:25px;
}
</style>
    <form name=\"form1\" id=\"form1\" method=\"get\" action=\"?\">
        ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["search_form"] ?? null), 'widget');
        echo "
    </form>
    <!-- ▼topicpath▼ -->
    <div id=\"topicpath\" class=\"row\">
        <ol id=\"list_header_menu\">
            <li><a href=\"";
        // line 81
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
        echo "\">全商品</a></li>
            ";
        // line 82
        if ( !(null === ($context["Category"] ?? null))) {
            // line 83
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Category"] ?? null), "path", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["Path"]) {
                // line 84
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Path"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Path"], "name", array()), "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Path'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "            ";
        }
        // line 87
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["search_form"] ?? null), "vars", array()), "value", array()), "name", array())) {
            // line 88
            echo "            <li>「";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["search_form"] ?? null), "vars", array()), "value", array()), "name", array()), "html", null, true);
            echo "」の検索結果</li>
            ";
        }
        // line 90
        echo "        </ol>
    </div>
<div class=\"child-cat\">
\t";
        // line 93
        if ((twig_length_filter($this->env, $this->getAttribute(($context["Category"] ?? null), "children", array())) > 0)) {
            // line 94
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["Category"] ?? null), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                // line 95
                echo "\t\t<a href=\"";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_list");
                echo "?category_id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ChildCategory"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ChildCategory"], "name", array()), "html", null, true);
                echo "</a>
\t\t";
                // line 96
                if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                    echo "｜";
                }
                // line 97
                echo "\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t";
        }
        // line 99
        echo "</div>
    <!-- ▲topicpath▲ -->
    <div id=\"result_info_box\" class=\"row\">
        <form name=\"page_navi_top\" id=\"page_navi_top\" action=\"?\">
            <p id=\"result_info_box__item_count\" class=\"intro col-sm-6\"><strong><span id=\"productscount\">";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()), "html", null, true);
        echo "</span>件</strong>の商品がみつかりました。
            </p>

            <div id=\"result_info_box__menu_box\" class=\"col-sm-6 no-padding\">
                <ul id=\"result_info_box__menu\" class=\"pagenumberarea clearfix\">
                    <li id=\"result_info_box__disp_menu\">
                        ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["disp_number_form"] ?? null), 'widget', array("id" => "", "attr" => array("onchange" => "javascript:fnChangeDispNumber(this.value);")));
        echo "
                    </li>
                    <li id=\"result_info_box__order_menu\">
                        ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["order_by_form"] ?? null), 'widget', array("id" => "", "attr" => array("onchange" => "javascript:fnChangeOrderBy(this.value);")));
        echo "
                    </li>
                </ul>
            </div>

            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["disp_number_form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 118
            echo "                ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 119
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                    ";
                // line 120
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                    ";
                // line 121
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                ";
            }
            // line 123
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "
            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order_by_form"] ?? null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 126
            echo "                ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 127
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                    ";
                // line 128
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                    ";
                // line 129
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                ";
            }
            // line 131
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "

        </form>
    </div>

    <!-- ▼item_list▼ -->
    <div id=\"item_list\">
        <div class=\"row no-padding\">
            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 141
            echo "                <div id=\"result_list_box--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
            echo "\" class=\"col-sm-3 col-xs-6 it\">
                    <div id=\"result_list__item--";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
            echo "\" class=\"product_item\">
                        <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("product_detail", array("id" => $this->getAttribute($context["Product"], "id", array()))), "html", null, true);
            echo "\">
                            <div id=\"result_list__image--";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
            echo "\" class=\"item_photo\">
                                <img src=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($context["Product"], "main_list_image", array())), "html", null, true);
            echo "\">
                            </div>
                            <dl id=\"result_list__detail--";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
            echo "\">
                                <!--<dt id=\"result_list__name--";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
            echo "\" class=\"item_name\">  -->
                                <div class=\"h-name\">
                                    <script>
                                  
                                    var x = \"";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "name", array()), "html", null, true);
            echo "\";
                                    document.write(x.slice(0,28)); 
                                    </script>...
                                    </div>
<!--</dt>-->
                                ";
            // line 157
            if ($this->getAttribute($context["Product"], "description_list", array())) {
                // line 158
                echo "                                    <dd id=\"result_list__description_list--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                echo "\" class=\"item_comment\">";
                echo nl2br($this->getAttribute($context["Product"], "description_list", array()));
                echo "</dd>
                                ";
            }
            // line 160
            echo "                                ";
            if ($this->getAttribute($context["Product"], "hasProductClass", array())) {
                // line 161
                echo "                                    ";
                if (($this->getAttribute($context["Product"], "getPrice02Min", array()) == $this->getAttribute($context["Product"], "getPrice02Max", array()))) {
                    // line 162
                    echo "                                    <dd id=\"result_list__price02_inc_tax--";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "\" class=\"item_price\">
                                        ";
                    // line 163
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                    echo "
                                    </dd>
                                    ";
                } else {
                    // line 166
                    echo "                                    <dd id=\"result_list__price02_inc_tax--";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                    echo "\" class=\"item_price\">
                                        ";
                    // line 167
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMax", array())), "html", null, true);
                    echo "
                                    </dd>
                                    ";
                }
                // line 170
                echo "                                ";
            } else {
                // line 171
                echo "                                    <dd id=\"result_list__price02_inc_tax--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Product"], "id", array()), "html", null, true);
                echo "\" class=\"item_price\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["Product"], "getPrice02IncTaxMin", array())), "html", null, true);
                echo "</dd>
                                ";
            }
            // line 173
            echo "                            </dl>
                        </a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "        </div>

    </div>
    <!-- ▲item_list▲ -->
    ";
        // line 182
        if (($this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()) > 0)) {
            // line 183
            echo "        ";
            $this->loadTemplate("pagination.twig", "__string_template__fc13df57ffced9b1f816169830193153b39b41f20defebaa7b0bda8c5d0b8bb2", 183)->display(array_merge($context, array("pages" => $this->getAttribute(($context["pagination"] ?? null), "paginationData", array()))));
            // line 184
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__fc13df57ffced9b1f816169830193153b39b41f20defebaa7b0bda8c5d0b8bb2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 184,  406 => 183,  404 => 182,  398 => 178,  388 => 173,  380 => 171,  377 => 170,  369 => 167,  364 => 166,  358 => 163,  353 => 162,  350 => 161,  347 => 160,  339 => 158,  337 => 157,  329 => 152,  322 => 148,  318 => 147,  311 => 145,  307 => 144,  303 => 143,  299 => 142,  294 => 141,  290 => 140,  280 => 132,  274 => 131,  269 => 129,  265 => 128,  260 => 127,  257 => 126,  253 => 125,  250 => 124,  244 => 123,  239 => 121,  235 => 120,  230 => 119,  227 => 118,  223 => 117,  215 => 112,  209 => 109,  200 => 103,  194 => 99,  191 => 98,  177 => 97,  173 => 96,  164 => 95,  146 => 94,  144 => 93,  139 => 90,  133 => 88,  130 => 87,  127 => 86,  114 => 84,  109 => 83,  107 => 82,  103 => 81,  95 => 76,  70 => 53,  67 => 52,  44 => 31,  41 => 30,  36 => 27,  33 => 26,  29 => 22,  27 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__fc13df57ffced9b1f816169830193153b39b41f20defebaa7b0bda8c5d0b8bb2", "");
    }
}
