<?php

/* C:\wamp64\www\octobercms\install-master/themes/rainlab-vanilla/pages/rss-items.htm */
class __TwigTemplate_9e3fab116fd7d8e4d24e340c523718515841cc571652772fda768b788fb083aa extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("rssItems"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\octobercms\\install-master/themes/rainlab-vanilla/pages/rss-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% component 'rssItems' %}*/
