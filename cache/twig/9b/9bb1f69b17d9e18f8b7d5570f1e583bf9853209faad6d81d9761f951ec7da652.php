<?php

/* partials/header.html.twig */
class __TwigTemplate_b24f4ce8bfe908f4610de2719248db2ebc116360912c3cd1cf198a0c1d21b671 extends Twig_Template
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
        echo "<header id=\"header\">
      <div class=\"container\">
        <h1 class=\"navbar-brand navbar-brand_\"><a href=\"";
        // line 3
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\"><img alt=\"Grill point\" src=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/img/logo.png\"></a></h1>
      </div>
      <div class=\"menuheader\">
          <div class=\"container\">
            <nav class=\"navbar navbar-default navbar-static-top tm_navbar\" role=\"navigation\">
                ";
        // line 8
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 8)->display($context);
        // line 9
        echo "            </nav>
          </div>
      </div>
</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  33 => 8,  23 => 3,  19 => 1,);
    }
}
/* <header id="header">*/
/*       <div class="container">*/
/*         <h1 class="navbar-brand navbar-brand_"><a href="{{ base_url_absolute }}"><img alt="Grill point" src="{{ theme_url }}/img/logo.png"></a></h1>*/
/*       </div>*/
/*       <div class="menuheader">*/
/*           <div class="container">*/
/*             <nav class="navbar navbar-default navbar-static-top tm_navbar" role="navigation">*/
/*                 {% include 'partials/navigation.html.twig' %}*/
/*             </nav>*/
/*           </div>*/
/*       </div>*/
/* </header>*/
