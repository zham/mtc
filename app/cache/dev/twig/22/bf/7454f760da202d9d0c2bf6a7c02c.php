<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_22bf7454f760da202d9d0c2bf6a7c02c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<th>";
        // line 12
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>";
    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getAttribute($this->getContext($context, "field_description"), "label")), "method"), "html", null, true);
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        echo nl2br(twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 13,  31 => 12,  22 => 12,  19 => 11,  146 => 56,  139 => 54,  132 => 52,  126 => 50,  124 => 49,  121 => 48,  117 => 47,  114 => 46,  107 => 42,  103 => 40,  101 => 39,  98 => 38,  94 => 37,  91 => 36,  88 => 35,  82 => 33,  76 => 29,  68 => 27,  65 => 26,  57 => 24,  54 => 23,  46 => 21,  43 => 20,  35 => 18,  33 => 17,  29 => 15,  26 => 13,);
    }
}
