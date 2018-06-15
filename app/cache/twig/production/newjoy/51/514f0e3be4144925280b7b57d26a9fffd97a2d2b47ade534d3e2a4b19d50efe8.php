<?php

/* Block/notes.twig */
class __TwigTemplate_3bea60fa62e665741a95ecd3b7233c17b3c4b5e1117d7612b167c037d3b747c3 extends Twig_Template
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
        echo "<style>
.notes {
    margin: 10px ;
    padding: 10px ;
    text-align: center ;
    box-shadow: 0 0 0 3px #ad8a57 inset, 0 0 0 5px rgba(173, 138, 138, 0.5) inset ;
    position: relative ;
    z-index: 100 ;
    background: #fff ;
    overflow: hidden ;
}

.notes:before {
  border-radius: 50% ;
  display: block ;
  position: absolute ;
  top: -5px ;
  left: -5px ;
  width: 10px ;
  height: 10px ;
  content: \"\" ;
  background-color: #ad8a57 ;
  box-shadow: 0 0 0 2px #fff, 0 0 0 5px #ad8a57, 0 0 0 7px rgba(173, 138, 138, 0.5) ;
}

.notes span::before {
  border-radius: 50% ;
  display: block ;
  position: absolute ;
  top: -5px ;
  right: -5px ;
  width: 10px ;
  height: 10px ;
  content: \"\" ;
  background-color: #ad8a57 ;
  box-shadow: 0 0 0 2px #fff, 0 0 0 5px #ad8a57, 0 0 0 7px rgba(173, 138, 138, 0.5) ;
}


.notes::after {
  border-radius: 50% ;
  display: block ;
  position: absolute ;
  bottom: -5px ;
  left: -5px ;
  width: 10px ;
  height: 10px ;
  content: \"\" ;
  background-color: #ad8a57 ;
  box-shadow: 0 0 0 2px #fff, 0 0 0 5px #ad8a57, 0 0 0 7px rgba(173, 138, 138, 0.5) ;
}

.notes span::after {
  border-radius: 50% ;
  display: block;
  position: absolute ;
  bottom: -5px ;
  right: -5px ;
  width: 10px ;
  height: 10px ;
  content: \"\" ;
  background-color: #ad8a57 ;
  box-shadow: 0 0 0 2px #fff, 0 0 0 5px #ad8a57, 0 0 0 7px rgba(173, 138, 138, 0.5) ;
}

</style>
<table width=\"100%\">
\t<tr>
\t\t<th class=\"notes\" colspan=\"2\"><span>注意事項</span></th>
\t</tr>
\t<tr>
\t\t<td colspan=\"2\">
\t\t★ページの閲覧環境によって、掲載写真と実際の商品の色合いが異なる場合があります。<br>
\t\t★モデルに小物を使う場合がございますが、商品に含まれませんのでご了承下さい。<br>
\t\t★製造過程、出荷過程の間に出来た細かなキズ・ヨゴレなど気付かない場合がございます。お店で購入するような完璧品をお求めの方、細かい部分まで気になさる方は、ご購入をご遠慮ください。<br>
\t\t★商品の仕様は、製造元の都合により予告なく変更することがあります。<br>
\t\t★一部商品はボタンの穴が開いていない場合もございますが、不良品ではございませんのでご了承ください。<br>
\t\t★土日祝祭日のご注文およびお問い合わせへの弊社からのご連絡は、翌営業日となります。<br>
\t\t★お届けした商品に不備がございましたら、商品ご到着後5日以内にご連絡ください。早急に対応させていただきます。なお期日を過ぎた場合はお受け致しかねますので予めご了承ください。<br>
\t\t★海外製品のため、詳細タグなし<br>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td class=\"col-md-6 col-xs-12\" style=\"padding:5px;\"><a href=\"#\"><img src=\"/user_data/images/housei.png\" width=\"100%\"></a></td>
\t\t<td class=\"col-md-6 col-xs-12\" style=\"padding:5px;\"><a href=\"/user_data/faq#henpin\"><img src=\"/user_data/images/henpin.png\" width=\"100%\"></a></td>
\t</tr>
</table>";
    }

    public function getTemplateName()
    {
        return "Block/notes.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/notes.twig", "/home/kir021669/public_html/newjoy.co.jp/app/template/newjoy/Block/notes.twig");
    }
}
