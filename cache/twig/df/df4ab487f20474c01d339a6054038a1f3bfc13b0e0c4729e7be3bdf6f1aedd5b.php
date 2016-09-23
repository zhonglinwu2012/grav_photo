<?php

/* modular/slider.html.twig */
class __TwigTemplate_279f6a816dd2e0fc774440e4b49e28bdccbe642c1337cadc542854ddc2599274 extends Twig_Template
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
        echo "<div class=\"slider\">
    <div class=\"camera_wrap\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "             <div data-src=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "        ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "modular/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="slider">*/
/*     <div class="camera_wrap">*/
/*         {% for item in page.media.images %}*/
/*              <div data-src="{{ item.url }}"></div>*/
/*         {% endfor %}*/
/*         {{ content }}*/
/*     </div>*/
/* </div>*/
/* */
/* */
