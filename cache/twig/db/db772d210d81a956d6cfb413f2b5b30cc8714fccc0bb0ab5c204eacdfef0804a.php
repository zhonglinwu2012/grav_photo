<?php

/* error.html.twig */
class __TwigTemplate_219444ec168ab1e7ba523526d6d0f907fced87dbe7c1590d16967538b93fcd86 extends Twig_Template
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
        echo "<section>
\t<div id=\"error\" class=\"container txtcenter\">
\t\t<div>
\t\t\t<h1>Error ";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h1>
\t\t\t<p>
\t\t\t\t";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t\t
\t\t\t</p>
\t\t</div>
\t\t
\t</div>
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
        return array (  41 => 9,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <section>*/
/* 	<div id="error" class="container txtcenter">*/
/* 		<div>*/
/* 			<h1>Error {{ page.header.http_response_code }}</h1>*/
/* 			<p>*/
/* 				{{ page.content }}*/
/* 				*/
/* 			</p>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* </section>*/
/* {% endblock %}*/
/* */
