<?php

/* Block/footer.twig */
class __TwigTemplate_d2f56cc57c59a185c12e4458f4f0af80dc97fce81050ad2aa523ba390a8067f4 extends Twig_Template
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
        echo "
<style>
#footer a {
    color: black;
}
#footer a:hover {
    color: black;
}
#footer li {
    margin: 0;
    line-height: 25px;
    padding: 0;
list-style: none;
}
#footer {
    background: #ffffff;
}
.footer_logo_area {
     margin-top: 0;
}
.subtitle li{
width:100%;
text-align: left;
}
#footer {
    margin-top: 0;
}

@media only screen and (max-width: 768px)
{
#footer {
    margin-top: 0;
}
.footer-list{
margin: 0 15px;
}

}
.calendar table:last-child{
display:none;
}
.list li a, .subtitle li a{
background: url(/user_data/images/square.png);
    background-repeat: no-repeat;
    background-position: center left;
    padding-left: 10px;
}
.list li a:hover, .subtitle li a:hover{
     color:black;
     text-decoration:underline;
}

</style>
<div class=\"container-fluid inner\">
    <div class=\"row footer-list\">
        <div class=\"col-md-3 col-sm-4 col-xs-6 list\">
        <h4>お問合わせ</h4>
        <li><a href=\"http://newjoy.co.jp/contact\">お問合せはこちら</a></li>
<br>
     <h4>コンテンツ</h4>
<div class=\"subtitle\">
<li><a href=\"http://newjoy.co.jp/user_data/ranking\">ランキング</a></li>
<li><a href=\"http://newjoy.co.jp/user_data/all_category\">カテゴリー一覧</a></li>
<li><a href=\"#\">ブランド一覧</a></li>
</div>
        </div>

        <div class=\"col-md-3  col-xs-6\">
        <h4>ご利用ガイド</h4>
<div class=\"subtitle\">
<li><a href=\"#\"> 送料・お支払い方法</a></li>
<li><a href=\"#\"> お届けについて</a></li>
<li><a href=\"http://newjoy.co.jp/user_data/faq\"> よくある質問</a></li>
<li><a href=\"#\"> サイズガイド一覧</a></li>
</div>
        </div>
        <div class=\"col-md-3  col-xs-6\">
        <h4>会員サービス</h4>
<div  class=\"subtitle\">
<li><a href=\"http://newjoy.co.jp/entry\">新規会員登録</a></li>
<li><a href=\"https://newjoy.co.jp/mypage/favorite\">お気に入り登録一覧</a></li>
</div>
        </div>
        <div class=\"col-md-3  col-sm-4 col-xs-6\">
        
        </div>";
    }

    public function getTemplateName()
    {
        return "Block/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/footer.twig", "/home/kir021669/public_html/newjoy.co.jp/app/template/newjoy/Block/footer.twig");
    }
}
