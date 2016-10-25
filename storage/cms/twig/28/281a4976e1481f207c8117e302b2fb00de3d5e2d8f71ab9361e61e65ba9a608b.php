<?php

/* C:\wamp64\www\octobercms\install-master/themes/demo/partials/explain/ajax.htm */
class __TwigTemplate_ee5e7e0b2665986039ad7cbc04c025bb22d2e3577228fea04a4c8cff4c24da8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_14ab929e7faf14aa4dfcce365d80c472808e86ba36a0b466ddca53a5009e108d' => array($this, 'block___internal_14ab929e7faf14aa4dfcce365d80c472808e86ba36a0b466ddca53a5009e108d'),
            '__internal_ce4e6d0df2bb7af68d0cb08e8a19f132825c45f7d602310e4e302bbe3c92fa81' => array($this, 'block___internal_ce4e6d0df2bb7af68d0cb08e8a19f132825c45f7d602310e4e302bbe3c92fa81'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<!-- This file is an explanation of the AJAX page -->

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>

<pre>";
        // line 9
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_14ab929e7faf14aa4dfcce365d80c472808e86ba36a0b466ddca53a5009e108d", $context, $blocks));
        // line 24
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-tags\"></i> &nbsp; The <code>calcresult</code> partial:
</p>

<pre>";
        // line 32
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_ce4e6d0df2bb7af68d0cb08e8a19f132825c45f7d602310e4e302bbe3c92fa81", $context, $blocks));
        // line 37
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-code\"></i> &nbsp; The <code>onTest</code> PHP code:
</p>

<pre>function onTest()
{
    \$value1 = input('value1');
    \$value2 = input('value2');
    \$operation = input('operation');

    switch (\$operation) {
        case '+' : 
            \$this['result'] = \$value1 + \$value2;
            break;
        case '-' : 
            \$this['result'] = \$value1 - \$value2;
            break;
        case '*' : 
            \$this['result'] = \$value1 * \$value2;
            break;
        default : 
            \$this['result'] = \$value1 / \$value2;
            break;
    }
}</pre>";
    }

    // line 9
    public function block___internal_14ab929e7faf14aa4dfcce365d80c472808e86ba36a0b466ddca53a5009e108d($context, array $blocks = array())
    {
        echo "<!-- The form -->
<form data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" value=\"15\" name=\"value1\">
    <select name=\"operation\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" value=\"5\" name=\"value2\">
    <button type=\"submit\">Calculate</button>
</form>

<!-- The result -->
<div id=\"result\">";
        // line 23
        echo "{% partial \"calcresult\" %}";
        echo "</div>
";
    }

    // line 32
    public function block___internal_ce4e6d0df2bb7af68d0cb08e8a19f132825c45f7d602310e4e302bbe3c92fa81($context, array $blocks = array())
    {
        // line 33
        echo "{% if result %}";
        echo "
    The result is ";
        // line 34
        echo "{{ result }}";
        echo ".
";
        // line 35
        echo "{% else %}";
        echo "
    Click the <em>Calculate</em> button to find the answer.
";
        // line 37
        echo "{% endif %}";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\octobercms\\install-master/themes/demo/partials/explain/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  112 => 35,  108 => 34,  104 => 33,  101 => 32,  95 => 23,  77 => 9,  45 => 37,  43 => 32,  33 => 24,  31 => 9,  21 => 1,);
    }
}
/* <hr />*/
/* */
/* <!-- This file is an explanation of the AJAX page -->*/
/* */
/* <p class="lead">*/
/*     <i class="icon-copy"></i> &nbsp; The HTML markup for this example:*/
/* </p>*/
/* */
/* <pre>{% filter escape %}<!-- The form -->*/
/* <form data-request="onTest" data-request-update="calcresult: '#result'">*/
/*     <input type="text" value="15" name="value1">*/
/*     <select name="operation">*/
/*         <option>+</option>*/
/*         <option>-</option>*/
/*         <option>*</option>*/
/*         <option>/</option>*/
/*     </select>*/
/*     <input type="text" value="5" name="value2">*/
/*     <button type="submit">Calculate</button>*/
/* </form>*/
/* */
/* <!-- The result -->*/
/* <div id="result">{{ "{% partial \"calcresult\" %}" }}</div>*/
/* {% endfilter %}</pre>*/
/* */
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-tags"></i> &nbsp; The <code>calcresult</code> partial:*/
/* </p>*/
/* */
/* <pre>{% filter escape %}*/
/* {{ "{% if result %}" }}*/
/*     The result is {{ "{{ result }}" }}.*/
/* {{ "{% else %}" }}*/
/*     Click the <em>Calculate</em> button to find the answer.*/
/* {{ "{% endif %}" }}{% endfilter %}</pre>*/
/* */
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-code"></i> &nbsp; The <code>onTest</code> PHP code:*/
/* </p>*/
/* */
/* <pre>function onTest()*/
/* {*/
/*     $value1 = input('value1');*/
/*     $value2 = input('value2');*/
/*     $operation = input('operation');*/
/* */
/*     switch ($operation) {*/
/*         case '+' : */
/*             $this['result'] = $value1 + $value2;*/
/*             break;*/
/*         case '-' : */
/*             $this['result'] = $value1 - $value2;*/
/*             break;*/
/*         case '*' : */
/*             $this['result'] = $value1 * $value2;*/
/*             break;*/
/*         default : */
/*             $this['result'] = $value1 / $value2;*/
/*             break;*/
/*     }*/
/* }</pre>*/
