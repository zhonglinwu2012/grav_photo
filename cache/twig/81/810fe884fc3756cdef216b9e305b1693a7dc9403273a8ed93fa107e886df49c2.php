<?php

/* partials/head.html.twig */
class __TwigTemplate_46653a50703893ab431616de9f12c65f38690bc029039518f418dcabd9682bc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<title>";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " ";
        } else {
            echo " ";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
            echo " ";
        }
        echo "</title>
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "<link href='//fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\"
    integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\"
    crossorigin=\"anonymous\">
";
        // line 13
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://fonts/font-awesome/css/font-awesome.min.css", 1 => 101), "method");
        // line 14
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/style.css", 1 => 101), "method");
        // line 15
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/mobile-menu.css", 1 => 101), "method");
        // line 16
        echo " ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 21
            echo "        <script src=\"//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"//oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    ";
        }
        // line 24
        echo "
    ";
        // line 25
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/jquery-2.1.4.min.js"), "method");
        // line 26
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/smoothscroll.js"), "method");
        // line 27
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/mobile-menu.js"), "method");
        // line 28
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/flexSlider/jquery.flexslider-min.js"), "method");
        // line 29
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/scripts.js"), "method");
        // line 30
        echo "
    ";
        // line 31
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"
        integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\"
        crossorigin=\"anonymous\"></script>
";
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
        return array (  109 => 31,  106 => 30,  103 => 29,  100 => 28,  97 => 27,  94 => 26,  92 => 25,  89 => 24,  84 => 21,  81 => 20,  78 => 19,  71 => 16,  69 => 15,  67 => 14,  65 => 13,  58 => 8,  55 => 7,  51 => 19,  48 => 18,  46 => 7,  40 => 3,  34 => 2,  22 => 1,);
    }
}
/* <title>{% if header.title %}{{ header.title }} {% else %} {{ site.title }} {% endif %}</title>*/
/* {% block head %}*/
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/* {% block stylesheets %}*/
/* <link href='//fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>*/
/* <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>*/
/* <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"*/
/*     integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"*/
/*     crossorigin="anonymous">*/
/* {% do assets.add('theme://fonts/font-awesome/css/font-awesome.min.css', 101) %}*/
/* {% do assets.add('theme://css/style.css', 101) %}*/
/* {% do assets.add('theme://css/mobile-menu.css', 101) %}*/
/*  {{ assets.css() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {% if browser.getBrowser == 'msie' and browser.getVersion <= 9 %}*/
/*         <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*         <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     {% endif %}*/
/* */
/*     {% do assets.add('theme://js/jquery-2.1.4.min.js') %}*/
/*     {% do assets.add('theme://js/smoothscroll.js') %}*/
/*     {% do assets.add('theme://js/mobile-menu.js') %}*/
/*     {% do assets.add('theme://js/flexSlider/jquery.flexslider-min.js') %}*/
/*     {% do assets.add('theme://js/scripts.js') %}*/
/* */
/*     {{ assets.js() }}*/
/* */
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"*/
/*         integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"*/
/*         crossorigin="anonymous"></script>*/
/* {% endblock %}*/
/* {% endblock head %}*/
/* */
