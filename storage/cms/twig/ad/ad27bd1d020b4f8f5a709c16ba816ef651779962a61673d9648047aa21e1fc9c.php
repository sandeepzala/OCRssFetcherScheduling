<?php

/* C:\wamp64\www\octobercms\install-master/plugins/adrenth/rssfetcher/components/items/default.htm */
class __TwigTemplate_c2e1b0b13cbb672114b189eb37363785dee053e40778be79de517df8967e92ed extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    <div>
        <h2><a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</a></h2>

        ";
            // line 5
            if ($this->getAttribute($context["item"], "category", array())) {
                // line 6
                echo "            <p>Category: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "category", array()), "html", null, true);
                echo "</p>
        ";
            }
            // line 8
            echo "
        <p>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "pub_date", array()), "Y-m-d"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
            echo "</p>

        ";
            // line 11
            if ($this->getAttribute($context["item"], "comments", array())) {
                // line 12
                echo "            <p><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "comments", array()), "html", null, true);
                echo "\" target=\"_blank\">Read comments</a></p>
        ";
            }
            // line 14
            echo "
        <p><em>Source: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "source", array()), "html", null, true);
            if ($this->getAttribute($context["item"], "author", array())) {
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author", array()), "html", null, true);
            }
            echo "</em></p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\octobercms\\install-master/plugins/adrenth/rssfetcher/components/items/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  59 => 14,  53 => 12,  51 => 11,  44 => 9,  41 => 8,  35 => 6,  33 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for item in __SELF__.items %}*/
/*     <div>*/
/*         <h2><a href="{{ item.link }}" target="_blank">{{ item.title }}</a></h2>*/
/* */
/*         {% if item.category %}*/
/*             <p>Category: {{ item.category }}</p>*/
/*         {% endif %}*/
/* */
/*         <p>{{ item.pub_date|date('Y-m-d') }} - {{ item.description }}</p>*/
/* */
/*         {% if item.comments %}*/
/*             <p><a href="{{ item.comments }}" target="_blank">Read comments</a></p>*/
/*         {% endif %}*/
/* */
/*         <p><em>Source: {{ item.source }}{% if item.author %}, {{ item.author }}{% endif %}</em></p>*/
/*     </div>*/
/* {% endfor %}*/
/* */
