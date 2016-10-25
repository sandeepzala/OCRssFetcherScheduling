<?php

/* C:\wamp64\www\octobercms\install-master/themes/demo/pages/rss-feeds.htm */
class __TwigTemplate_867512f8474064c9f8cdfad0457b6cef8a3f9a7701a18a3ec70babc9b45980e3 extends Twig_Template
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
        return "C:\\wamp64\\www\\octobercms\\install-master/themes/demo/pages/rss-feeds.htm";
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
