<?php

/* about.html.twig */
class __TwigTemplate_2ebe524c8a92c647ce182b832ba2a09e128145c34d089aaedf9711dc00b7d995 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "about.html.twig", 1);
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
        echo "<div id=\"content\">
    <div class=\"row_5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-7 col-sm-7 reserve_table\">
                    ";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
                </div>
                
                <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4\">
                    <h2>";
        // line 13
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "work", array()), "title", array());
        echo "</h2>
                    <hr class=\"line2\">
                    <p class=\"title5\">";
        // line 15
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "work", array()), "description", array());
        echo ".</p>
                    <h2 class=\"pad_bot1\">";
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hiretitle", array());
        echo "</h2>

                    ";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simple_form", array()), "enabled", array())) {
            // line 19
            echo "                        ";
            $context["simple_form_config"] = (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "simple_form", array())) ? ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "simple_form", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "photographer", array()), "simple_form", array())));
            // line 20
            echo "                        ";
            echo call_user_func_array($this->env->getFunction('simple_form')->getCallable(), array((isset($context["simple_form_config"]) ? $context["simple_form_config"] : null)));
            echo "
                    ";
        }
        // line 22
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  64 => 20,  61 => 19,  59 => 18,  54 => 16,  50 => 15,  45 => 13,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <div id="content">*/
/*     <div class="row_5">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-7 col-md-7 col-sm-7 reserve_table">*/
/*                     {{ page.content }}*/
/*                 </div>*/
/*                 */
/*                 <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4">*/
/*                     <h2>{{ page.header.work.title }}</h2>*/
/*                     <hr class="line2">*/
/*                     <p class="title5">{{ page.header.work.description }}.</p>*/
/*                     <h2 class="pad_bot1">{{ page.header.hiretitle }}</h2>*/
/* */
/*                     {% if config.plugins.simple_form.enabled %}*/
/*                         {% set simple_form_config = page.header.simple_form ?: config.themes.photographer.simple_form %}*/
/*                         {{ simple_form(simple_form_config) }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
