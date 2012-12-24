<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_d5aff644d0c43c536bb8825768e3f5d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "filter_form"), "vars"), "errors")) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "filter", true), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "filter_form"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "filter"), "fielddescription"), "options"), "name"));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "filter_form"));
            echo "
        ";
        }
        // line 20
        echo "        <br />
    ";
    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "filter_form"));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 71,  246 => 70,  241 => 68,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 62,  217 => 61,  203 => 56,  194 => 53,  191 => 52,  182 => 49,  173 => 46,  168 => 44,  160 => 39,  155 => 17,  150 => 75,  144 => 43,  136 => 40,  85 => 23,  83 => 22,  100 => 34,  61 => 22,  10 => 43,  151 => 60,  65 => 24,  45 => 15,  36 => 14,  18 => 1,  143 => 50,  140 => 56,  119 => 48,  112 => 15,  66 => 17,  21 => 1,  68 => 18,  209 => 58,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 47,  165 => 43,  161 => 61,  152 => 58,  148 => 52,  145 => 56,  141 => 55,  134 => 39,  132 => 49,  127 => 19,  123 => 35,  109 => 43,  93 => 25,  90 => 37,  54 => 18,  133 => 44,  124 => 49,  111 => 32,  80 => 30,  60 => 20,  52 => 11,  97 => 40,  95 => 39,  88 => 26,  78 => 28,  71 => 19,  25 => 13,  72 => 29,  64 => 23,  53 => 18,  34 => 16,  92 => 32,  86 => 31,  79 => 47,  19 => 11,  42 => 14,  40 => 17,  29 => 23,  26 => 22,  224 => 96,  215 => 90,  211 => 59,  204 => 84,  200 => 55,  195 => 80,  193 => 79,  190 => 78,  188 => 51,  185 => 76,  179 => 72,  177 => 71,  171 => 45,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 73,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 34,  103 => 35,  74 => 28,  47 => 16,  32 => 15,  24 => 14,  22 => 6,  23 => 12,  17 => 1,  69 => 20,  63 => 16,  58 => 9,  49 => 21,  43 => 20,  37 => 25,  20 => 1,  139 => 41,  131 => 38,  128 => 43,  125 => 42,  121 => 40,  115 => 16,  107 => 42,  99 => 27,  96 => 34,  91 => 33,  82 => 19,  77 => 16,  75 => 20,  57 => 13,  50 => 11,  46 => 21,  44 => 9,  39 => 15,  33 => 4,  30 => 3,  27 => 2,  135 => 53,  129 => 50,  122 => 46,  116 => 42,  113 => 45,  108 => 31,  104 => 30,  102 => 41,  94 => 24,  89 => 31,  87 => 36,  84 => 35,  81 => 29,  73 => 19,  70 => 26,  67 => 26,  62 => 24,  59 => 14,  55 => 23,  51 => 21,  48 => 16,  41 => 14,  38 => 6,  35 => 24,  31 => 4,  28 => 1,);
    }
}
