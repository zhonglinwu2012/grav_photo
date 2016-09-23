<?php

/* partials/base.html.twig */
class __TwigTemplate_b5c1559b778dd46a75ac0821f5118d2d294a9b5812bd461c2bd965be0f7c5612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 59
        echo "    </head>
    <body>
        ";
        // line 61
        $this->displayBlock('header', $context, $blocks);
        // line 64
        echo "
        ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "

        <script src=\"";
        // line 70
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/bootstrap.min.js\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 71
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/tm-scripts.js\" type=\"text/javascript\" ></script>

        ";
        // line 73
        $this->displayBlock('footer', $context, $blocks);
        // line 76
        echo "
    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/img/favicon.ico\" />

         ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

        <script>
        \$(window).load( function(){

         jQuery('.camera_wrap').camera();

     });
        </script>

        ";
        // line 54
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) < 9))) {
            // line 55
            echo "                 <div style='text-align:center'><a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\"><img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" /></a></div>
         ";
        }
        // line 57
        echo "
        ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.css"), "method");
        // line 13
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 14
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/camera.css"), "method");
        // line 15
        echo "
                ";
        // line 16
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) < 9))) {
            // line 17
            echo "               ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/tm/css/tm_docs.css"), "method");
            // line 18
            echo "                ";
        }
        // line 19
        echo "
        ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 25
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery-migrate-1.2.1.js"), "method");
        // line 26
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/superfish.js"), "method");
        // line 27
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.easing.1.3.js"), "method");
        // line 28
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.mobilemenu.js"), "method");
        // line 29
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.ui.totop.js"), "method");
        // line 30
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.touchSwipe.min.js"), "method");
        // line 31
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.equalheights.js"), "method");
        // line 32
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/camera.js"), "method");
        // line 33
        echo "
            ";
        // line 34
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) > 9)) || ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) != "msie"))) {
            // line 35
            echo "                 ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.mobile.customized.min.js"), "method");
            // line 36
            echo "            ";
        }
        // line 37
        echo "
            ";
        // line 38
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) < 9))) {
            // line 39
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/assets/js/html5shiv.js"), "method");
            // line 40
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/assets/js/respond.min.js"), "method");
            // line 41
            echo "            ";
        }
        // line 42
        echo "
        ";
    }

    // line 61
    public function block_header($context, array $blocks = array())
    {
        // line 62
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 62)->display($context);
        // line 63
        echo "        ";
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "        ";
    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
    }

    // line 73
    public function block_footer($context, array $blocks = array())
    {
        // line 74
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 74)->display($context);
        // line 75
        echo "        ";
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
        return array (  247 => 75,  244 => 74,  241 => 73,  236 => 66,  232 => 67,  229 => 66,  226 => 65,  222 => 63,  219 => 62,  216 => 61,  211 => 42,  208 => 41,  205 => 40,  202 => 39,  200 => 38,  197 => 37,  194 => 36,  191 => 35,  189 => 34,  186 => 33,  183 => 32,  180 => 31,  177 => 30,  174 => 29,  171 => 28,  168 => 27,  165 => 26,  162 => 25,  159 => 24,  156 => 23,  151 => 19,  148 => 18,  145 => 17,  143 => 16,  140 => 15,  137 => 14,  134 => 13,  131 => 12,  128 => 11,  123 => 57,  119 => 55,  117 => 54,  103 => 44,  101 => 23,  95 => 21,  93 => 11,  88 => 9,  85 => 8,  83 => 7,  75 => 6,  72 => 5,  69 => 4,  62 => 76,  60 => 73,  55 => 71,  51 => 70,  47 => 68,  45 => 65,  42 => 64,  40 => 61,  36 => 59,  34 => 4,  29 => 2,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getLanguage ?: 'en' }}">*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8" />*/
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/*         {% include 'partials/metadata.html.twig' %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*         <link rel="icon" type="image/png" href="{{ theme_url }}/img/favicon.ico" />*/
/* */
/*          {% block stylesheets %}*/
/*                 {% do assets.addCss('theme://css/bootstrap.css') %}*/
/*                 {% do assets.addCss('theme://css/style.css') %}*/
/*                 {% do assets.addCss('theme://css/camera.css') %}*/
/* */
/*                 {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}*/
/*                {% do assets.addCss('theme://assets/tm/css/tm_docs.css') %}*/
/*                 {% endif %}*/
/* */
/*         {% endblock %}*/
/*         {{ assets.css() }}*/
/* */
/*         {% block javascripts %}*/
/*             {% do assets.add('jquery',101) %}*/
/*             {% do assets.addJs('theme://js/jquery-migrate-1.2.1.js') %}*/
/*             {% do assets.addJs('theme://js/superfish.js') %}*/
/*             {% do assets.addJs('theme://js/jquery.easing.1.3.js') %}*/
/*             {% do assets.addJs('theme://js/jquery.mobilemenu.js') %}*/
/*             {% do assets.addJs('theme://js/jquery.ui.totop.js') %}*/
/*             {% do assets.addJs('theme://js/jquery.touchSwipe.min.js') %}*/
/*             {% do assets.addJs('theme://js/jquery.equalheights.js') %}*/
/*             {% do assets.addJs('theme://js/camera.js') %}*/
/* */
/*             {% if browser.getBrowser == 'msie' and browser.getVersion > 9 or browser.getBrowser != 'msie' %}*/
/*                  {% do assets.addJs('theme://js/jquery.mobile.customized.min.js') %}*/
/*             {% endif %}*/
/* */
/*             {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}*/
/*                 {% do assets.addJs('theme://assets/assets/js/html5shiv.js') %}*/
/*                 {% do assets.addJs('theme://assets/assets/js/respond.min.js') %}*/
/*             {% endif %}*/
/* */
/*         {% endblock %}*/
/*         {{ assets.js() }}*/
/* */
/*         <script>*/
/*         $(window).load( function(){*/
/* */
/*          jQuery('.camera_wrap').camera();*/
/* */
/*      });*/
/*         </script>*/
/* */
/*         {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}*/
/*                  <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>*/
/*          {% endif %}*/
/* */
/*         {% endblock head%}*/
/*     </head>*/
/*     <body>*/
/*         {% block header %}*/
/*              {% include 'partials/header.html.twig' %}*/
/*         {% endblock %}*/
/* */
/*         {% block body %}*/
/*             {% block content %}{% endblock %}*/
/*         {% endblock %}*/
/* */
/* */
/*         <script src="{{ theme_url }}/js/bootstrap.min.js" type="text/javascript" ></script>*/
/*         <script src="{{ theme_url }}/js/tm-scripts.js" type="text/javascript" ></script>*/
/* */
/*         {% block footer %}*/
/*              {% include 'partials/footer.html.twig' %}*/
/*         {% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
