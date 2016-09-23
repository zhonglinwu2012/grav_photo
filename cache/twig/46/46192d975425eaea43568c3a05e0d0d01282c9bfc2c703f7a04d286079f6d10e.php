<?php

/* partials/menu.html.twig */
class __TwigTemplate_dc4df7652ef84019152730dfb56a94aa1132cbb767e8da0c9333ce95edf10c42 extends Twig_Template
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
        echo "<div id=\"menu-e\" class=\"menu\">

  <div class=\"container\">
   
    <button class=\"menu-toggle\">
      <i class=\"ion-android-menu\"></i>
    </button>
    
    <div class=\"menu-logo\">
      <a href=\"";
        // line 10
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/\">
       ";
        // line 11
        if ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "logo", array())) {
            // line 12
            echo "        <img class=\"pts\" src=\"";
            echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
            echo "/images/";
            echo $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "logo", array());
            echo "\" alt=\"logo\">
        ";
        } else {
            // line 14
            echo "        <span>";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
            echo "</span>
        ";
        }
        // line 16
        echo "        </a>
    </div>
    
     <div class=\"nav\">     
      
      <nav class=\"nav-links\" role=\"navigation\">
        ";
        // line 22
        $this->loadTemplate("partials/navigation.html.twig", "partials/menu.html.twig", 22)->display($context);
        // line 23
        echo "      </nav>
      
    </div>

  <div id=\"shade\"></div>
</div>
</div> ";
    }

    public function getTemplateName()
    {
        return "partials/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 23,  58 => 22,  50 => 16,  44 => 14,  36 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
/* <div id="menu-e" class="menu">*/
/* */
/*   <div class="container">*/
/*    */
/*     <button class="menu-toggle">*/
/*       <i class="ion-android-menu"></i>*/
/*     </button>*/
/*     */
/*     <div class="menu-logo">*/
/*       <a href="{{base_url}}/">*/
/*        {% if theme_config.logo %}*/
/*         <img class="pts" src="{{ theme_url }}/images/{{theme_config.logo}}" alt="logo">*/
/*         {% else %}*/
/*         <span>{{site.title}}</span>*/
/*         {% endif %}*/
/*         </a>*/
/*     </div>*/
/*     */
/*      <div class="nav">     */
/*       */
/*       <nav class="nav-links" role="navigation">*/
/*         {% include 'partials/navigation.html.twig' %}*/
/*       </nav>*/
/*       */
/*     </div>*/
/* */
/*   <div id="shade"></div>*/
/* </div>*/
/* </div> */
