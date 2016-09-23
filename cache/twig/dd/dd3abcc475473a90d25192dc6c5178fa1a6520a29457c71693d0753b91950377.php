<?php

/* partials/base.html.twig */
class __TwigTemplate_a09a40ef0b5aced1f1c09d7a0dc878a1b256988ecdc132880a37f30a6dbca443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "

<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">

<head>

  ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "    
</head>

<body id=\"top\">

  <div id=\"ws\" class=\"wrap-site\">
   
  
    
  ";
        // line 30
        echo "       
    ";
        // line 31
        $this->loadTemplate("partials/menu.html.twig", "partials/base.html.twig", 31)->display($context);
        // line 32
        echo "  
  ";
        // line 34
        echo "   
  ";
        // line 36
        echo "    
    <main id=\"main\" role=\"main\">
     
      <div class=\"page-content ";
        // line 39
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
        ";
        // line 40
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "home", array(), "method")) {
            // line 41
            echo "          ";
            $this->loadTemplate("partials/heading.html.twig", "partials/base.html.twig", 41)->display($context);
            // line 42
            echo "        ";
        }
        echo "         
        
        ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "        
      </div>

    </main>
    
  ";
        // line 51
        echo "    
        
  ";
        // line 54
        echo "    
    ";
        // line 55
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template", array()) == "error")) {
            // line 56
            echo "    
    ";
        } else {
            // line 58
            echo "    
    <footer id=\"footer\">
      ";
            // line 60
            $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 60)->display($context);
            // line 61
            echo "      ";
            $this->displayBlock('bottom', $context, $blocks);
            // line 64
            echo "    </footer>
    ";
        }
        // line 66
        echo "    
  ";
        // line 68
        echo "  </div>
  ";
        // line 69
        $this->loadTemplate("partials/theme-style.html.twig", "partials/base.html.twig", 69)->display($context);
        // line 70
        echo "</body>

</html>";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "  
  <meta charset=\"utf-8\" />
  <title>";
        // line 12
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
  ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
  <link rel=\"canonical\" href=\"";
        // line 16
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" /> 
  ";
        // line 17
        $this->loadTemplate("partials/head.html.twig", "partials/base.html.twig", 17)->display($context);
        echo " 
  
  ";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 61
    public function block_bottom($context, array $blocks = array())
    {
        // line 62
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 62,  170 => 61,  164 => 44,  157 => 17,  153 => 16,  149 => 15,  146 => 14,  144 => 13,  136 => 12,  132 => 10,  129 => 9,  123 => 70,  121 => 69,  118 => 68,  115 => 66,  111 => 64,  108 => 61,  106 => 60,  102 => 58,  98 => 56,  96 => 55,  93 => 54,  89 => 51,  82 => 45,  80 => 44,  74 => 42,  71 => 41,  69 => 40,  65 => 39,  60 => 36,  57 => 34,  54 => 32,  52 => 31,  49 => 30,  38 => 20,  36 => 9,  29 => 5,  24 => 2,  22 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* */
/* */
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getActive ?: theme_config.default_lang }}">*/
/* */
/* <head>*/
/* */
/*   {% block head %}*/
/*   */
/*   <meta charset="utf-8" />*/
/*   <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*   {% include 'partials/metadata.html.twig' %}*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*   <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png', true) }}" />*/
/*   <link rel="canonical" href="{{ page.url(true, true) }}" /> */
/*   {% include 'partials/head.html.twig' %} */
/*   */
/*   {% endblock head%}*/
/*     */
/* </head>*/
/* */
/* <body id="top">*/
/* */
/*   <div id="ws" class="wrap-site">*/
/*    */
/*   */
/*     */
/*   {# block nav #}*/
/*        */
/*     {% include 'partials/menu.html.twig' %}*/
/*   */
/*   {# endblock nav #}*/
/*    */
/*   {# block main #}*/
/*     */
/*     <main id="main" role="main">*/
/*      */
/*       <div class="page-content {{page.header.body_classes}}">*/
/*         {% if not page.home() %}*/
/*           {% include 'partials/heading.html.twig' %}*/
/*         {% endif %}         */
/*         */
/*         {% block content %} {% endblock %}*/
/*         */
/*       </div>*/
/* */
/*     </main>*/
/*     */
/*   {# endblock main #}*/
/*     */
/*         */
/*   {# block footer #}*/
/*     */
/*     {% if page.template == 'error' %}*/
/*     */
/*     {% else %}*/
/*     */
/*     <footer id="footer">*/
/*       {% include 'partials/footer.html.twig' %}*/
/*       {% block bottom %}*/
/*         {{ assets.js('bottom') }}*/
/*       {% endblock %}*/
/*     </footer>*/
/*     {% endif %}*/
/*     */
/*   {# endblock footer #}*/
/*   </div>*/
/*   {% include 'partials/theme-style.html.twig' %}*/
/* </body>*/
/* */
/* </html>*/
