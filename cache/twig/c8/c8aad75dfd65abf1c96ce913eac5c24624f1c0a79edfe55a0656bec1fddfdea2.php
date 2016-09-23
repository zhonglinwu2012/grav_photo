<?php

/* modular/footer.html.twig */
class __TwigTemplate_74d9a99c201f347d5346ee30b6c395efe2ebb427caca644458828c9750f5e3ec extends Twig_Template
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
        echo "<div class=\"row_4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 chef row4_col\">
                <h2>";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "about", array()), "title", array());
        echo "</h2>
                <figure>";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "about", array()), "image", array()), array(), "array");
        echo "</figure>
                <p class=\"title3\">";
        // line 7
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "about", array()), "title2", array());
        echo "</p>
                <p>";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "about", array()), "text", array());
        echo "</p>
                <a href=\"";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "about", array()), "readme_url", array());
        echo "\" class=\"btn-link btn-link2\">";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "about", array()), "readme_text", array());
        echo "<span></span></a>
            </div>
            <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 row4_col\">
                <h2>";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "services_title", array());
        echo "</h2>                        
                <ul class=\"list2\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "services", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "                       <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "text", array());
            echo "</a></li>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "               </ul> 
           </div>
           <div class=\"col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 locations row4_col\">
            <h2>";
        // line 20
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "locations", array()), "title", array());
        echo "</h2>
            <figure>";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "locations", array()), "logo", array()), array(), "array");
        echo "</figure>
            <p class=\"title4\">";
        // line 22
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "locations", array()), "text", array());
        echo "</p>
            <hr class=\"line1\">
            <a href=\"mailto:";
        // line 24
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "locations", array()), "email", array());
        echo "\" class=\"btn-link btn-link3\"><span></span>";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "locations", array()), "email", array());
        echo "</a>
        </div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  82 => 22,  78 => 21,  74 => 20,  69 => 17,  58 => 15,  54 => 14,  49 => 12,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="row_4">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-md-4 col-sm-4 chef row4_col">*/
/*                 <h2>{{ page.header.about.title }}</h2>*/
/*                 <figure>{{ page.media[page.header.about.image] }}</figure>*/
/*                 <p class="title3">{{ page.header.about.title2 }}</p>*/
/*                 <p>{{ page.header.about.text }}</p>*/
/*                 <a href="{{ page.header.about.readme_url }}" class="btn-link btn-link2">{{ page.header.about.readme_text }}<span></span></a>*/
/*             </div>*/
/*             <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 row4_col">*/
/*                 <h2>{{ page.header.services_title }}</h2>                        */
/*                 <ul class="list2">*/
/*                     {% for item in page.header.services %}*/
/*                        <li><a href="{{ item.url }}">{{ item.text }}</a></li>*/
/*                    {% endfor %}*/
/*                </ul> */
/*            </div>*/
/*            <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 locations row4_col">*/
/*             <h2>{{ page.header.locations.title }}</h2>*/
/*             <figure>{{ page.media[page.header.locations.logo] }}</figure>*/
/*             <p class="title4">{{ page.header.locations.text }}</p>*/
/*             <hr class="line1">*/
/*             <a href="mailto:{{ page.header.locations.email }}" class="btn-link btn-link3"><span></span>{{ page.header.locations.email }}</a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </div>*/
