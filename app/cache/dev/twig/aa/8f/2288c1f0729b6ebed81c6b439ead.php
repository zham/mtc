<?php

/* FOSUserBundle::form.html.twig */
class __TwigTemplate_aa8f2288c1f0729b6ebed81c6b439ead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('field_label', $context, $blocks);
    }

    public function block_field_label($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "id"), array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  18 => 1,  143 => 50,  140 => 49,  119 => 17,  112 => 15,  66 => 36,  21 => 2,  68 => 18,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 52,  145 => 56,  141 => 55,  134 => 23,  132 => 49,  127 => 19,  123 => 18,  109 => 14,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 26,  60 => 15,  52 => 13,  97 => 25,  95 => 21,  88 => 26,  78 => 25,  71 => 14,  25 => 4,  72 => 16,  64 => 17,  53 => 13,  34 => 12,  92 => 20,  86 => 24,  79 => 47,  19 => 2,  42 => 9,  40 => 7,  29 => 4,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 12,  74 => 27,  47 => 29,  32 => 11,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 20,  63 => 18,  58 => 9,  49 => 11,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 16,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 49,  77 => 25,  75 => 24,  57 => 15,  50 => 13,  46 => 10,  44 => 28,  39 => 14,  33 => 6,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 24,  89 => 54,  87 => 52,  84 => 51,  81 => 26,  73 => 19,  70 => 26,  67 => 19,  62 => 35,  59 => 23,  55 => 31,  51 => 30,  48 => 10,  41 => 26,  38 => 8,  35 => 7,  31 => 4,  28 => 4,);
    }
}
