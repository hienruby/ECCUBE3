<?php

/* __string_template__1de3a4a227aa0da473ed7f5b469fd10ec3715f54998c6e42443d4f7f80a173b3 */
class __TwigTemplate_3d311e8e1bab936abb691d461a00f26e5ff51f0cf8b823cca8b0386221b7740c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__1de3a4a227aa0da473ed7f5b469fd10ec3715f54998c6e42443d4f7f80a173b3", 22);
        $this->blocks = array(
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
        $context["mypageno"] = "index";
        // line 26
        $context["body_class"] = "mypage";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
        // line 29
        echo "<style>
div.table .tbody .tr > .td {
    padding: 0;
}
.historylist_column .table.item_box .tbody .item_detail {
    padding: 8px 0;
    text-align: left;
    padding-left: 5px;
}
.historylist_column .item_box .item_detail .item_name{
 font-weight: normal;
    color: #333;
}
dl, dt, dd{
    margin: 0;
    padding: 3px;
}
.item_name {
    color: black;
    margin: 0px;
}
.historylist_column .table.item_box .td {
    vertical-align: top;
}
div.table .tbody .tr > .td {
    padding: 14px 0px;
}
</style>
    <h1 class=\"page-heading\">マイページ/ご注文履歴</h1>
    <div id=\"history_wrap\" class=\"container-fluid\">

        ";
        // line 60
        $this->loadTemplate("Mypage/navi.twig", "__string_template__1de3a4a227aa0da473ed7f5b469fd10ec3715f54998c6e42443d4f7f80a173b3", 60)->display($context);
        // line 61
        echo "
        <p class=\"txt_center\">
    現在の保有ポイントは「<span class=\"text-primary\">0 pt</span>」です。<br/>
        ※1pt＝<span class=\"text-primary\">1円</span>でご利用いただけます。
</p>

<div id=\"history_list\" class=\"row\">
            <div id=\"history_list__body\" class=\"col-md-12\">

                ";
        // line 70
        if (($this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()) > 0)) {
            // line 71
            echo "                    <p id=\"history_list__total_count\" class=\"intro\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "totalItemCount", array()), "html", null, true);
            echo "件</strong>の履歴があります。</p>

                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                // line 74
                echo "                        <div id=\"history_list__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                echo "\" class=\"historylist_column row\">
                            <div id=\"history_list__item_info--";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                echo "\" class=\"col-sm-4\">
                                <div id=\"history_list__order_date--";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                echo "\" class=\"order_date\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Order"], "order_date", array()), "Y/m/d H:i:s"), "html", null, true);
                echo "</div>
                                <dl id=\"history_list__order_detail--";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                echo "\" class=\"order_detail\">
                                    <dt id=\"history_list__header_order_id--";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                echo "\"  >ご注文番号：</dt>
                                    <dd id=\"history_list__order_id--";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                echo "\" style=\"font-size: 18px;\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                echo "</dd>
                                    ";
                // line 80
                if ($this->getAttribute(($context["BaseInfo"] ?? null), "option_mypage_order_status_display", array())) {
                    // line 81
                    echo "                                        <dt id=\"history_list__header_order_status--";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" >ご注文状況：</dt>
                                        <dd id=\"history_list__order_status--";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "CustomerOrderStatus", array()), "html", null, true);
                    echo "</dd>
                                    ";
                }
                // line 84
                echo "                                </dl>
                                <p id=\"history_list__detail_button--";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                echo "\"><a class=\"btn btn-default btn-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("mypage_history", array("id" => $this->getAttribute($context["Order"], "id", array()))), "html", null, true);
                echo "\">詳細を見る</a></p>
                            </div>
                            <div id=\"history_detail_list--";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                echo "\" class=\"col-sm-8\">
                                ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["Order"], "OrderDetails", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["OrderDetail"]) {
                    // line 89
                    echo "                                    <div id=\"history_detail_list__body--";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
                    echo "\" class=\"item_box table\">
                                        <div id=\"history_detail_list__body_inner--";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
                    echo "\" class=\"tbody\">
                                            <div id=\"history_detail_list__item--";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
                    echo "\" class=\"tr\">
                                                <div id=\"history_detail_list__image--";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
                    echo "\" class=\"item_photo td\">
                                                    ";
                    // line 93
                    if ((null === $this->getAttribute($context["OrderDetail"], "Product", array()))) {
                        // line 94
                        echo "                                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
                        echo "\" />
                                                    ";
                    } else {
                        // line 96
                        echo "                                                        ";
                        if ($this->getAttribute($context["OrderDetail"], "enable", array())) {
                            // line 97
                            echo "                                                            <img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct($this->getAttribute($this->getAttribute($context["OrderDetail"], "product", array()), "MainListImage", array())), "html", null, true);
                            echo "\">
                                                        ";
                        } else {
                            // line 99
                            echo "                                                            <img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getNoImageProduct(""), "html", null, true);
                            echo "\" />
                                                        ";
                        }
                        // line 101
                        echo "                                                    ";
                    }
                    // line 102
                    echo "                                                </div>
                                                <dl id=\"history_detail_list__item_info--";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
                    echo "\" class=\"item_detail td\">
                                                    <dt id=\"history_detail_list__product_name--";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
                    echo "\" class=\"item_name\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "product_name", array()), "html", null, true);
                    echo "</dt>
                                                    <dd id=\"history_detail_list__category_name--";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
                    echo "\" class=\"item_pattern \">
                                                        ";
                    // line 106
                    if ( !twig_test_empty($this->getAttribute($context["OrderDetail"], "class_category_name1", array()))) {
                        // line 107
                        echo "                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "class_category_name1", array()), "html", null, true);
                        echo "
                                                        ";
                    }
                    // line 109
                    echo "                                                        ";
                    if ( !twig_test_empty($this->getAttribute($context["OrderDetail"], "class_category_name1", array()))) {
                        // line 110
                        echo "                                                            / ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "class_category_name2", array()), "html", null, true);
                        echo "
                                                        ";
                    }
                    // line 112
                    echo "                                                    ";
                    // line 121
                    echo "
";
                    // line 122
                    if ($this->getAttribute($this->getAttribute(($context["plgOrderDetails"] ?? null), $this->getAttribute($context["Order"], "id", array()), array(), "array", false, true), $this->getAttribute($context["OrderDetail"], "id", array()), array(), "array", true, true)) {
                        // line 123
                        echo "    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["plgOrderDetails"] ?? null), $this->getAttribute($context["Order"], "id", array()), array(), "array"), $this->getAttribute($context["OrderDetail"], "id", array()), array(), "array"));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                            // line 124
                            echo "        ";
                            if ((($this->getAttribute($context["loop"], "index0", array()) != 0) ||  !twig_test_empty($this->getAttribute($context["OrderDetail"], "classcategory_name1", array())))) {
                                echo "<br />";
                            }
                            // line 125
                            echo "        ";
                            echo nl2br(twig_escape_filter($this->env, $context["label"], "html", null, true));
                            echo "
    ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 127
                    echo "</dd>
                                                    <dd id=\"history_detail_list__price--";
                    // line 128
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Order"], "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "id", array()), "html", null, true);
                    echo "\" class=\"item_price\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Plugin\ConvertYenMark\Twig\Extension\EccubeExtension')->getPriceFilter($this->getAttribute($context["OrderDetail"], "price_inc_tax", array())), "html", null, true);
                    echo " ×";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["OrderDetail"], "quantity", array()), "html", null, true);
                    echo "</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div><!--/item_box-->
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderDetail'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "                            </div>
                        </div><!--/historylist_column-->
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "
                    ";
            // line 138
            $this->loadTemplate("pagination.twig", "__string_template__1de3a4a227aa0da473ed7f5b469fd10ec3715f54998c6e42443d4f7f80a173b3", 138)->display(array_merge($context, array("pages" => $this->getAttribute(($context["pagination"] ?? null), "paginationData", array()))));
            // line 139
            echo "
                ";
        } else {
            // line 141
            echo "                    <p id=\"history_list__not_result_message\" class=\"intro\">ご注文履歴がありません。</p>
                ";
        }
        // line 143
        echo "
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__1de3a4a227aa0da473ed7f5b469fd10ec3715f54998c6e42443d4f7f80a173b3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 143,  338 => 141,  334 => 139,  332 => 138,  329 => 137,  321 => 134,  303 => 128,  300 => 127,  282 => 125,  277 => 124,  259 => 123,  257 => 122,  254 => 121,  252 => 112,  246 => 110,  243 => 109,  237 => 107,  235 => 106,  229 => 105,  221 => 104,  215 => 103,  212 => 102,  209 => 101,  201 => 99,  193 => 97,  190 => 96,  182 => 94,  180 => 93,  174 => 92,  168 => 91,  162 => 90,  155 => 89,  151 => 88,  147 => 87,  140 => 85,  137 => 84,  130 => 82,  125 => 81,  123 => 80,  117 => 79,  113 => 78,  109 => 77,  103 => 76,  99 => 75,  94 => 74,  90 => 73,  84 => 71,  82 => 70,  71 => 61,  69 => 60,  36 => 29,  33 => 28,  29 => 22,  27 => 26,  25 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__1de3a4a227aa0da473ed7f5b469fd10ec3715f54998c6e42443d4f7f80a173b3", "");
    }
}
