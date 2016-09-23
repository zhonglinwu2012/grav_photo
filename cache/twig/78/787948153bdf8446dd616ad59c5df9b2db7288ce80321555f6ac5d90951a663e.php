<?php

/* links.html.twig */
class __TwigTemplate_58f131915e0ba9251bf4753bbe837de8125f923d843859abcf7e1e8efffcea85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "links.html.twig", 1);
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
        <div class=\"row_7\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-md-8 col-sm-8\">
                        <h2 class=\"pad_bot2\">";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
                        <div class=\"row links\">
                            ";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "links", array())) {
            // line 12
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "links", array()), 4));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 13
                echo "                                <div class=\"col-lg-6 col-md-6 col-sm-6\">
                                  ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 15
                    echo "                                    <h3><a class=\"btn-link4\" href=\"";
                    echo $this->getAttribute($context["link"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["link"], "text", array());
                    echo "</a></h3>
                                    <p>";
                    // line 16
                    echo $this->getAttribute($context["link"], "description", array());
                    echo "</p>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                        ";
        }
        // line 21
        echo "                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4\">
                    <h2>";
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title2", array());
        echo "</h2>
                    <ul class=\"list2\">
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "friendlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 27
            echo "                            <li><a href=\"";
            echo $this->getAttribute($context["link"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["link"], "text", array());
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </ul> 
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  96 => 27,  92 => 26,  87 => 24,  82 => 21,  79 => 20,  72 => 18,  64 => 16,  57 => 15,  53 => 14,  50 => 13,  45 => 12,  43 => 11,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div id="content">*/
/*         <div class="row_7">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-8 col-md-8 col-sm-8">*/
/*                         <h2 class="pad_bot2">{{ page.header.title }}</h2>*/
/*                         <div class="row links">*/
/*                             {% if page.header.links %}*/
/*                             {% for row in page.header.links|batch(4) %}*/
/*                                 <div class="col-lg-6 col-md-6 col-sm-6">*/
/*                                   {% for link in row %}*/
/*                                     <h3><a class="btn-link4" href="{{ link.url }}">{{ link.text }}</a></h3>*/
/*                                     <p>{{ link.description }}</p>*/
/*                                   {% endfor %}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-lg-4 col-md-4 col-sm-4">*/
/*                     <h2>{{ page.header.title2 }}</h2>*/
/*                     <ul class="list2">*/
/*                         {% for link in page.header.friendlinks %}*/
/*                             <li><a href="{{ link.url }}">{{ link.text }}</a></li>*/
/*                         {% endfor %}*/
/*                     </ul> */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
