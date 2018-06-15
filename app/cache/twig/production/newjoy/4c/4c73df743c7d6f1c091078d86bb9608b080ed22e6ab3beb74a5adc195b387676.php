<?php

/* Block/position_menu.twig */
class __TwigTemplate_f94a43b12f5f413b45d7d0addfeab3fac1c3cb64fee5fe17ec26977aa204942b extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"/user_data/css/menu_top.css\">
<style>


</style>
<div class=\"top_menu1 position\" id=\"myHeader\">
<div class=\"container-fluid inner\">
  <ul class=\"menu-dau1\" >

    <li  class=\"col-md-3 col-xs-3\">
      <a href=\"http://newjoy.co.jp/products/list?category_id=&name=\"> 
<span class=\"p-scroll-nav__icon u-icon--heart\"></span ><span class=\"m\">商品一覧</span></a>
    </li>
    <li  class=\"col-md-3 col-xs-3 \">
      <a href=\"http://newjoy.co.jp/user_data/ranking\"> <span class=\"p-scroll-nav__icon u-icon--crown\"></span><span class=\"m\">ランキング</span></a>
    </li>
    <li  class=\"col-md-3 col-xs-3\">
      <a href=\"http://newjoy.co.jp/products/list?category_id=10\"><span class=\"p-scroll-nav__icon u-icon--feature\"></span><span class=\"m\">特集ページ</span></a>
    </li>
    <li  class=\"col-md-3 col-xs-3\">
      <a href=\"/user_data/all_category\"><span class=\"p-scroll-nav__icon u-icon--category\"></span><span class=\"m\">カテゴリ</span></a>
    </li>
   </ul>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/position_menu.twig";
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
        return new Twig_Source("", "Block/position_menu.twig", "/home/kir021669/public_html/newjoy.co.jp/app/template/newjoy/Block/position_menu.twig");
    }
}
