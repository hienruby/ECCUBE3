<?php

/* Block/pg_calendar.twig */
class __TwigTemplate_bab0bf21eda91226de9869ebd200c010d7e5711d5f8875b0f3bece1cf7dafd74 extends Twig_Template
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
        // line 2
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/pg_calendar.css\">
\t<link rel=\"stylesheet\" href=\"/user_data/css/calendar.css\">
<style>
#calendar td {
    text-align: center;
    border: 1px solid #f1f1f1;
    background: #FFFFFF;
   color: black;
}
.calendar th, .calendar td {
    padding: 3px;
}
@media only screen and (min-width: 1000px){
#calendar {
    margin: 0px;
    padding: 0 20px;
}
}
</style>
\t<div class=\"row calen\" style=\"margin: auto;\">
\t
\t<div class=\"col-sm-12 col-xs-12 calendarOver\">
\t\t<div id=\"calendar\" class=\"calendar hidden-xs\">\t
\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($this->getAttribute(($context["HolidayConfig"] ?? null), "0", array(), "array"), "config_data", array(), "array") - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["roop"]) {
            // line 26
            echo "\t\t";
            $context["day"] = twig_date_converter($this->env, "first day of this month");
            // line 27
            echo "\t\t";
            $context["month"] = twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["day"] ?? null), (("+" . $context["roop"]) . " month")), "n");
            // line 28
            echo "\t\t";
            $context["year"] = twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["day"] ?? null), (("+" . $context["roop"]) . " month")), "Y");
            // line 29
            echo "
\t\t";
            // line 30
            if ((($context["month"] ?? null) != "1")) {
                // line 31
                echo "\t\t";
                $context["roop_week"] = (twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_date_modify_filter($this->env, ($context["day"] ?? null), (("+" . ($context["roop"] + 1)) . " month")), "-1 day"), "W") - twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["day"] ?? null), ((((($context["year"] ?? null) . "-") . ($context["month"] ?? null)) . "-") . "01")), "W"));
                // line 32
                echo "\t\t";
            } else {
                // line 33
                echo "\t\t";
                $context["roop_week"] = (twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_date_modify_filter($this->env, ($context["day"] ?? null), (("+" . ($context["roop"] + 1)) . " month")), "-1 day"), "W") - 1);
                // line 34
                echo "\t\t";
            }
            // line 35
            echo "
\t\t";
            // line 36
            if ((twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_date_modify_filter($this->env, ($context["day"] ?? null), (("+" . ($context["roop"] + 1)) . " month")), "-1 day"), "w") == "0")) {
                // line 37
                echo "\t\t";
                $context["roop_week"] = (($context["roop_week"] ?? null) + 1);
                // line 38
                echo "\t\t";
            }
            // line 39
            echo "\t\t";
            $context["day"] = twig_date_modify_filter($this->env, twig_date_modify_filter($this->env, ($context["day"] ?? null), (("+" . $context["roop"]) . " month")), (("-" . twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["day"] ?? null), (("+" . $context["roop"]) . " month")), "w")) . "days"));
            // line 40
            echo "
\t\t\t<table>
\t\t\t\t<caption>";
            // line 42
            echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
            echo "年";
            echo twig_escape_filter($this->env, ($context["month"] ?? null), "html", null, true);
            echo "月</caption>
\t\t\t\t<thead><tr><th id=\"sunday\">日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th id=\"saturday\">土</th></tr></thead>
\t\t\t\t<tbody>
\t\t";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($context["roop_week"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 46
                echo "\t\t\t\t\t<tr>
\t\t";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 6));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 48
                    echo "\t\t";
                    if ((twig_date_format_filter($this->env, ($context["day"] ?? null), "n") == ($context["month"] ?? null))) {
                        // line 49
                        echo "\t\t";
                        if ($this->getAttribute(($context["HolidayWeek"] ?? null), $context["j"], array(), "array")) {
                            // line 50
                            echo "\t\t\t\t\t\t<td class=\"holiday\">";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["day"] ?? null), "j"), "html", null, true);
                            echo "</td>
\t\t";
                        } else {
                            // line 52
                            echo "\t\t";
                            if (($this->getAttribute($this->getAttribute(($context["Holidays"] ?? null), ($context["month"] ?? null), array(), "array", false, true), twig_date_format_filter($this->env, ($context["day"] ?? null), "j"), array(), "array", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["Holidays"] ?? null), ($context["month"] ?? null), array(), "array"), twig_date_format_filter($this->env, ($context["day"] ?? null), "j"), array(), "array")))) {
                                // line 53
                                echo "\t\t\t\t\t\t<td class=\"holiday\">";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["day"] ?? null), "j"), "html", null, true);
                                echo "</td>
\t\t";
                            } else {
                                // line 55
                                echo "\t\t\t\t\t\t<td>";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["day"] ?? null), "j"), "html", null, true);
                                echo "</td>
\t\t";
                            }
                            // line 57
                            echo "\t\t";
                        }
                        // line 58
                        echo "\t\t";
                    } else {
                        // line 59
                        echo "\t\t\t\t\t\t<td>&nbsp;</td>
\t\t";
                    }
                    // line 61
                    echo "\t\t";
                    $context["day"] = twig_date_modify_filter($this->env, ($context["day"] ?? null), "+1day");
                    // line 62
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t</div>
\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "Block/pg_calendar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 68,  166 => 65,  159 => 63,  153 => 62,  150 => 61,  146 => 59,  143 => 58,  140 => 57,  134 => 55,  128 => 53,  125 => 52,  119 => 50,  116 => 49,  113 => 48,  109 => 47,  106 => 46,  102 => 45,  94 => 42,  90 => 40,  87 => 39,  84 => 38,  81 => 37,  79 => 36,  76 => 35,  73 => 34,  70 => 33,  67 => 32,  64 => 31,  62 => 30,  59 => 29,  56 => 28,  53 => 27,  50 => 26,  46 => 25,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/pg_calendar.twig", "/home/kir021669/public_html/newjoy.co.jp/app/template/newjoy/Block/pg_calendar.twig");
    }
}
