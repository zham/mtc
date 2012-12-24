<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_199e5582928c84087af9685a164ab2c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        if (twig_test_empty($this->getContext($context, "value"))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getContext($context, "value"), "F j, Y"), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 28,  64 => 25,  61 => 24,  56 => 23,  53 => 22,  42 => 19,  39 => 18,  34 => 18,  32 => 16,  37 => 13,  31 => 16,  22 => 12,  19 => 11,  146 => 56,  139 => 54,  132 => 52,  126 => 50,  124 => 49,  121 => 48,  117 => 47,  114 => 46,  107 => 42,  103 => 40,  101 => 39,  98 => 38,  94 => 37,  91 => 36,  88 => 35,  82 => 33,  76 => 29,  68 => 27,  65 => 26,  57 => 24,  54 => 23,  46 => 21,  43 => 20,  35 => 18,  33 => 17,  29 => 15,  26 => 14,);
    }
}
