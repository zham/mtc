<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_4e15be98037a6735098bb37116c55905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
            'list_filters' => array($this, 'block_list_filters'),
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayBlock('preview', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 17
        echo "
    <div class=\"sonata-ba-filter\">
        ";
        // line 19
        $this->displayBlock('list_filters', $context, $blocks);
        // line 20
        echo "    </div>
    <div class=\"sonata-ba-list\">
        ";
        // line 22
        $this->displayBlock('list_table', $context, $blocks);
        // line 23
        echo "    </div>
";
    }

    // line 13
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
    }

    // line 15
    public function block_list($context, array $blocks = array())
    {
    }

    // line 16
    public function block_show($context, array $blocks = array())
    {
    }

    // line 19
    public function block_list_filters($context, array $blocks = array())
    {
    }

    // line 22
    public function block_list_table($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  36 => 14,  18 => 1,  143 => 50,  140 => 49,  119 => 17,  112 => 15,  66 => 18,  21 => 3,  68 => 18,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 52,  145 => 56,  141 => 55,  134 => 23,  132 => 49,  127 => 19,  123 => 18,  109 => 14,  93 => 33,  90 => 32,  54 => 12,  133 => 44,  124 => 41,  111 => 37,  80 => 26,  60 => 15,  52 => 13,  97 => 25,  95 => 21,  88 => 26,  78 => 25,  71 => 20,  25 => 4,  72 => 15,  64 => 17,  53 => 13,  34 => 5,  92 => 20,  86 => 24,  79 => 47,  19 => 2,  42 => 16,  40 => 8,  29 => 3,  26 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 12,  74 => 27,  47 => 29,  32 => 5,  24 => 11,  22 => 6,  23 => 3,  17 => 1,  69 => 20,  63 => 18,  58 => 9,  49 => 19,  43 => 15,  37 => 6,  20 => 1,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 16,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 19,  77 => 16,  75 => 24,  57 => 23,  50 => 11,  46 => 11,  44 => 28,  39 => 15,  33 => 13,  30 => 4,  27 => 12,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 24,  89 => 54,  87 => 22,  84 => 51,  81 => 26,  73 => 19,  70 => 26,  67 => 14,  62 => 13,  59 => 14,  55 => 22,  51 => 20,  48 => 8,  41 => 8,  38 => 7,  35 => 7,  31 => 4,  28 => 1,);
    }
}
