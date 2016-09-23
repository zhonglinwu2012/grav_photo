<?php

/* partials/head.html.twig */
class __TwigTemplate_da439aaee9e43816080e37d822e6cf9409e723a29e14009007f6fc1ca6b5d7bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
 
";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
  ";
        // line 2
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/knacss.min.css", 1 => 100), "method");
        // line 3
        echo "  ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/ionicons.min.css", 1 => 100), "method");
        echo " 
  ";
        // line 4
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/main.min.css", 1 => 10), "method");
        echo "  
  ";
        // line 5
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"), "method");
        // line 6
        echo "  ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.min.css"), "method");
        // line 7
        echo "
";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
  ";
        // line 13
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        echo " 
  ";
        // line 14
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 15
        echo "
";
        // line 17
        echo "  
    
  ";
        // line 19
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.js", 1 => array("group" => "bottom")), "method");
        // line 20
        echo "
  ";
        // line 21
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery-accessible-tabs-aria.js", 1 => array("group" => "bottom")), "method");
        // line 22
        echo "
  ";
        // line 23
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery-ui.min.js", 1 => array("group" => "bottom")), "method");
        // line 24
        echo " 
  ";
        // line 25
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.lettering.js", 1 => array("group" => "bottom")), "method");
        // line 26
        echo "
  ";
        // line 27
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fittext.js", 1 => array("group" => "bottom")), "method");
        // line 28
        echo "
  ";
        // line 29
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.textillate.js", 1 => array("group" => "bottom")), "method");
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  103 => 28,  101 => 27,  98 => 26,  96 => 25,  93 => 24,  91 => 23,  88 => 22,  86 => 21,  83 => 20,  81 => 19,  77 => 17,  74 => 15,  72 => 14,  68 => 13,  63 => 12,  58 => 7,  55 => 6,  53 => 5,  49 => 4,  44 => 3,  42 => 2,  37 => 1,  33 => 31,  31 => 12,  26 => 10,  23 => 9,  21 => 1,);
    }
}
/* {% block stylesheets %} */
/*   {% do assets.addCss('theme://css/knacss.min.css',100) %}*/
/*   {% do assets.addCss('theme://css/ionicons.min.css',100) %} */
/*   {% do assets.addCss('theme://css/main.min.css',10) %}  */
/*   {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') %}*/
/*   {% do assets.addCss('theme://css/animate.min.css') %}*/
/* */
/* {% endblock %}*/
/* */
/* {{ assets.css() }}*/
/*  */
/* {% block javascripts %} */
/*   {% do assets.addJs('jquery',101) %} */
/*   {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}*/
/* */
/* {# group bottom #}*/
/*   */
/*     */
/*   {% do assets.addJs('theme://js/main.js', {group: 'bottom'}) %}*/
/* */
/*   {% do assets.addJs('theme://js/jquery-accessible-tabs-aria.js', {group: 'bottom'}) %}*/
/* */
/*   {% do assets.addJs('theme://js/jquery-ui.min.js', {group: 'bottom'}) %}*/
/*  */
/*   {% do assets.addJs('theme://js/jquery.lettering.js', {group: 'bottom'}) %}*/
/* */
/*   {% do assets.addJs('theme://js/jquery.fittext.js', {group: 'bottom'}) %}*/
/* */
/*   {% do assets.addJs('theme://js/jquery.textillate.js', {group: 'bottom'}) %}*/
/* {% endblock %}*/
/* {{ assets.js() }}*/
