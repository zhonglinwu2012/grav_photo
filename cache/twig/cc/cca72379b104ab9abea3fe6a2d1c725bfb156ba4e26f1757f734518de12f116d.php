<?php

/* location.html.twig */
class __TwigTemplate_e8d79a851bac69cca46cce4249ea7b2ca70182cd697fe037a17541256cc9a459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "location.html.twig", 1);
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
        echo "    <div id=\"content\">
        <div class=\"row_8\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 gmap\">
                        <div class=\"map\">";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "map", array());
        echo "</div>
                  </div>  
              </div> 
              <div class=\"row\">
                <div class=\"col-lg-4 col-md-4 col-sm-4 address\">
                    ";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
                </div>
                <div class=\"col-lg-8 col-md-8 col-sm-8 address\">
                    <h2>";
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title2", array());
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
        echo "            </div>
        </div> 
    </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  61 => 20,  58 => 19,  56 => 18,  52 => 17,  46 => 14,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div id="content">*/
/*         <div class="row_8">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12 col-md-12 col-sm-12 gmap">*/
/*                         <div class="map">{{ page.header.map }}</div>*/
/*                   </div>  */
/*               </div> */
/*               <div class="row">*/
/*                 <div class="col-lg-4 col-md-4 col-sm-4 address">*/
/*                     {{ page.content }}*/
/*                 </div>*/
/*                 <div class="col-lg-8 col-md-8 col-sm-8 address">*/
/*                     <h2>{{ page.header.title2 }}</h2>*/
/*                     {% if config.plugins.simple_form.enabled %}*/
/*                         {% set simple_form_config = page.header.simple_form ?: config.themes.photographer.simple_form %}*/
/*                         {{ simple_form(simple_form_config) }}*/
/*                     {% endif %}*/
/*             </div>*/
/*         </div> */
/*     </div>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
