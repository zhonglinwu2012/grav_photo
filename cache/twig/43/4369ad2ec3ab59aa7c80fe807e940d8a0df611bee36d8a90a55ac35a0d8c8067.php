<?php

/* modular/categories.html.twig */
class __TwigTemplate_d244d64e3aa6c4fa13584e1519ede0be985ee911a3155970f7997a35fb86d5d3 extends Twig_Template
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
        echo "<div class=\"row_2\">
    <div class=\"container\">
        <div class=\"row\">
            <ul class=\"list1\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "categories", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "                    <li class=\"col-lg-4 col-md-4 col-sm-4 listbox";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\">
                        <div class=\"";
            // line 7
            echo $this->getAttribute($context["category"], "class", array());
            echo "\">
                            <a href=\"#\">
                                ";
            // line 9
            if (($this->getAttribute($context["category"], "title_position", array()) == "top")) {
                // line 10
                echo "                                    <p>";
                echo $this->getAttribute($context["category"], "title", array());
                echo "</p>
                                ";
            }
            // line 12
            echo "                                <figure>";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["category"], "image", array()), array(), "array");
            echo "</figure>
                                ";
            // line 13
            if (($this->getAttribute($context["category"], "title_position", array()) == "bottom")) {
                // line 14
                echo "                                    <p>";
                echo $this->getAttribute($context["category"], "title", array());
                echo "</p>
                                ";
            }
            // line 16
            echo "                            </a>
                        </div>
                    </li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  73 => 16,  67 => 14,  65 => 13,  60 => 12,  54 => 10,  52 => 9,  47 => 7,  42 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="row_2">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <ul class="list1">*/
/*                 {% for category in page.header.categories %}*/
/*                     <li class="col-lg-4 col-md-4 col-sm-4 listbox{{ loop.index }}">*/
/*                         <div class="{{ category.class }}">*/
/*                             <a href="#">*/
/*                                 {% if category.title_position == 'top' %}*/
/*                                     <p>{{ category.title }}</p>*/
/*                                 {% endif %}*/
/*                                 <figure>{{ page.media[category.image] }}</figure>*/
/*                                 {% if category.title_position == 'bottom' %}*/
/*                                     <p>{{ category.title }}</p>*/
/*                                 {% endif %}*/
/*                             </a>*/
/*                         </div>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*                 {{ content }}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
