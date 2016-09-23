<?php

/* error.html.twig */
class __TwigTemplate_1768255fe7ad106d9bfe61d3f4af83fdd04b632c700a7bbe18addec1bd1a9cbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"single-page-title\">
    <div class=\"container text-center\">
        <h2>Error ";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h2>
    </div>
</section>

<section class=\"ptb-100\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <section class="single-page-title">*/
/*     <div class="container text-center">*/
/*         <h2>Error {{ page.header.http_response_code }}</h2>*/
/*     </div>*/
/* </section>*/
/* */
/* <section class="ptb-100">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             {{ page.content }}*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
