<?php

/* error.html.twig */
class __TwigTemplate_cc297b5d46da125a1a22f8a5c58e50a335a284af5a50b2d027124db4d490faa5 extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"content\">
    <div class=\"row_10\">
        <div class=\"container\">
          <div class=\"row block-404\">
            <div class=\"col-lg-7 col-md-7 col-sm-7\">
                <figure class=\"img-polaroid\"><img src=\"";
        // line 8
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/img/404.jpg\" alt=\"\"></figure>
            </div>
            <div class=\"col-lg-3 col-md-5 col-sm-5 forminfo\">
                <div>
                    <h2 class=\"title404_1\">Error ";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h2>
                    ";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
                </div>
            </div>  
          </div> 
        </div>
    </div>
</div>
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
        return array (  49 => 13,  45 => 12,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* {% block content %}*/
/* <div id="content">*/
/*     <div class="row_10">*/
/*         <div class="container">*/
/*           <div class="row block-404">*/
/*             <div class="col-lg-7 col-md-7 col-sm-7">*/
/*                 <figure class="img-polaroid"><img src="{{ theme_url }}/img/404.jpg" alt=""></figure>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-5 col-sm-5 forminfo">*/
/*                 <div>*/
/*                     <h2 class="title404_1">Error {{ page.header.http_response_code }}</h2>*/
/*                     {{ page.content }}*/
/*                 </div>*/
/*             </div>  */
/*           </div> */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
