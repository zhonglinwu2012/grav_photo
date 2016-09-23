<?php

/* modular/welcome.html.twig */
class __TwigTemplate_69e155f343040cff1d95740a5da3e5bf9a992a9aae842822533dbc2f47f8e8a9 extends Twig_Template
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
        echo "<div class=\"row_1\">
    <div class=\"container\">
        <p class=\"title1\">";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</p>
        <p class=\"title2\">";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array());
        echo "</p>
        ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 7
            echo "            <a href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\" class=\"";
            echo $this->getAttribute($context["button"], "class", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="row_1">*/
/*     <div class="container">*/
/*         <p class="title1">{{ page.header.title }}</p>*/
/*         <p class="title2">{{ page.header.description }}</p>*/
/*         {{ content }}*/
/*         {% for button in page.header.buttons %}*/
/*             <a href="{{ button.url }}" class="{{ button.class }}">{{ button.text }}</a>*/
/*         {% endfor %}            */
/*     </div>*/
/* </div>*/
