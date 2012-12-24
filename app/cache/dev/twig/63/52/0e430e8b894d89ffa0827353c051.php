<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_63520e430e8b894d89ffa0827353c051 extends Twig_Template
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

    // line 13
    public function block_field($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
            // line 15
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        } else {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "value"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "catalogue")), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 199,  580 => 197,  574 => 195,  572 => 194,  566 => 190,  557 => 187,  553 => 186,  549 => 185,  542 => 184,  538 => 183,  533 => 181,  526 => 179,  518 => 177,  515 => 176,  512 => 175,  506 => 162,  502 => 160,  500 => 159,  494 => 155,  483 => 153,  479 => 152,  476 => 151,  473 => 150,  461 => 138,  458 => 137,  453 => 164,  451 => 150,  446 => 147,  444 => 137,  441 => 136,  438 => 135,  434 => 131,  425 => 124,  417 => 122,  415 => 121,  412 => 120,  404 => 118,  402 => 117,  399 => 116,  393 => 115,  385 => 113,  377 => 111,  374 => 110,  369 => 109,  366 => 107,  358 => 105,  356 => 104,  353 => 103,  345 => 101,  343 => 100,  335 => 95,  332 => 94,  330 => 93,  325 => 90,  323 => 89,  318 => 86,  315 => 85,  301 => 84,  292 => 83,  275 => 82,  271 => 81,  268 => 80,  266 => 79,  259 => 77,  255 => 76,  252 => 75,  244 => 71,  237 => 69,  228 => 67,  221 => 65,  214 => 63,  199 => 57,  183 => 52,  163 => 49,  157 => 47,  154 => 46,  130 => 36,  105 => 44,  101 => 39,  98 => 42,  76 => 29,  118 => 48,  114 => 46,  110 => 171,  106 => 45,  56 => 24,  249 => 74,  246 => 70,  241 => 68,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 62,  217 => 64,  203 => 56,  194 => 53,  191 => 52,  182 => 49,  173 => 46,  168 => 44,  160 => 48,  155 => 17,  150 => 75,  144 => 43,  136 => 40,  85 => 37,  83 => 37,  100 => 34,  61 => 18,  10 => 43,  151 => 45,  65 => 30,  45 => 25,  36 => 18,  18 => 11,  143 => 50,  140 => 56,  119 => 32,  112 => 46,  66 => 17,  21 => 13,  68 => 30,  209 => 58,  205 => 58,  196 => 56,  192 => 54,  189 => 77,  178 => 71,  176 => 47,  165 => 50,  161 => 61,  152 => 58,  148 => 44,  145 => 43,  141 => 55,  134 => 39,  132 => 52,  127 => 35,  123 => 51,  109 => 47,  93 => 134,  90 => 39,  54 => 25,  133 => 44,  124 => 49,  111 => 32,  80 => 36,  60 => 27,  52 => 11,  97 => 43,  95 => 135,  88 => 38,  78 => 26,  71 => 31,  25 => 14,  72 => 29,  64 => 28,  53 => 25,  34 => 18,  92 => 40,  86 => 38,  79 => 61,  19 => 2,  42 => 19,  40 => 20,  29 => 14,  26 => 13,  224 => 66,  215 => 90,  211 => 62,  204 => 84,  200 => 55,  195 => 80,  193 => 79,  190 => 78,  188 => 53,  185 => 76,  179 => 72,  177 => 51,  171 => 45,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 56,  142 => 42,  137 => 51,  126 => 50,  120 => 50,  117 => 49,  103 => 44,  74 => 13,  47 => 28,  32 => 15,  24 => 14,  22 => 12,  23 => 12,  17 => 11,  69 => 30,  63 => 28,  58 => 17,  49 => 15,  43 => 21,  37 => 3,  20 => 2,  139 => 54,  131 => 51,  128 => 55,  125 => 54,  121 => 48,  115 => 50,  107 => 42,  99 => 44,  96 => 23,  91 => 39,  82 => 36,  77 => 14,  75 => 33,  57 => 26,  50 => 24,  46 => 21,  44 => 9,  39 => 23,  33 => 17,  30 => 14,  27 => 15,  135 => 57,  129 => 50,  122 => 53,  116 => 31,  113 => 45,  108 => 30,  104 => 30,  102 => 45,  94 => 40,  89 => 132,  87 => 38,  84 => 73,  81 => 35,  73 => 32,  70 => 32,  67 => 29,  62 => 28,  59 => 27,  55 => 5,  51 => 21,  48 => 22,  41 => 4,  38 => 17,  35 => 17,  31 => 16,  28 => 15,);
    }
}
