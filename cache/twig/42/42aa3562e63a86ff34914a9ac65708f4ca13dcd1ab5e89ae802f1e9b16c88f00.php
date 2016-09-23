<?php

/* partials/heading.html.twig */
class __TwigTemplate_c17a85e28c477d5befe406d52a135f925ea2f58a03440650be61deed308054a4 extends Twig_Template
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
        $context["head"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "heading", array());
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "display", array())) {
            // line 4
            echo "
<section id=\"heading\">
  <div class=\"heading-color ";
            // line 6
            echo (((isset($context["bgcol_theme"]) ? $context["bgcol_theme"] : null)) ? ("") : ("heading-gray"));
            echo "\">
    <div class=\"container grid-2 pvl\">
      <div class=\"heading-content left ml0\">
        <h1 class=\"mb0\">
        ";
            // line 10
            if ($this->getAttribute((isset($context["head"]) ? $context["head"] : null), "other_title", array())) {
                // line 11
                echo "        
         ";
                // line 12
                echo $this->getAttribute((isset($context["head"]) ? $context["head"] : null), "other_title", array());
                echo "
         
         ";
            } else {
                // line 15
                echo "         
         ";
                // line 16
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
                echo "
         ";
            }
            // line 17
            echo "         
        </h1>        
      </div>
      ";
            // line 20
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array()) && $this->getAttribute((isset($context["head"]) ? $context["head"] : null), "bread", array()))) {
                // line 21
                echo "      <div class=\"breadcrumbs tiny-hidden txtright\">
        ";
                // line 22
                $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/heading.html.twig", 22)->display($context);
                // line 23
                echo "      </div>  
      ";
            }
            // line 25
            echo "          
      </div>    
  </div>  
</section>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/heading.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  68 => 23,  66 => 22,  63 => 21,  61 => 20,  56 => 17,  51 => 16,  48 => 15,  42 => 12,  39 => 11,  37 => 10,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set head = page.header.heading %}*/
/* */
/* {% if head.display %}*/
/* */
/* <section id="heading">*/
/*   <div class="heading-color {{bgcol_theme? '':'heading-gray'}}">*/
/*     <div class="container grid-2 pvl">*/
/*       <div class="heading-content left ml0">*/
/*         <h1 class="mb0">*/
/*         {% if head.other_title %}*/
/*         */
/*          {{head.other_title}}*/
/*          */
/*          {% else %}*/
/*          */
/*          {{page.header.title}}*/
/*          {% endif %}         */
/*         </h1>        */
/*       </div>*/
/*       {% if config.plugins.breadcrumbs.enabled and head.bread %}*/
/*       <div class="breadcrumbs tiny-hidden txtright">*/
/*         {% include 'partials/breadcrumbs.html.twig' %}*/
/*       </div>  */
/*       {% endif %}*/
/*           */
/*       </div>    */
/*   </div>  */
/* </section>*/
/* */
/* {% endif %}*/
/* */
