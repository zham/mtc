<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_2b1c2dfe7077d25649e42540db752002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div>

    <div class=\"sonata-ba-field ";
        // line 14
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 15
        $this->displayBlock('field', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 26
        $this->displayBlock('errors', $context, $blocks);
        // line 27
        echo "        </div>

    </div>
</div>";
    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "field_element"));
    }

    // line 16
    public function block_label($context, array $blocks = array())
    {
        // line 17
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 18
            echo "                ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "field_element"), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "name"));
            echo "
            ";
        } else {
            // line 20
            echo "                ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "field_element"));
            echo "
            ";
        }
        // line 22
        echo "            <br />
        ";
    }

    // line 26
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "field_element"));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 199,  580 => 197,  574 => 195,  572 => 194,  566 => 190,  557 => 187,  553 => 186,  549 => 185,  542 => 184,  538 => 183,  533 => 181,  526 => 179,  518 => 177,  515 => 176,  512 => 175,  506 => 162,  502 => 160,  500 => 159,  494 => 155,  483 => 153,  479 => 152,  476 => 151,  473 => 150,  461 => 138,  458 => 137,  453 => 164,  451 => 150,  446 => 147,  444 => 137,  441 => 136,  438 => 135,  434 => 131,  425 => 124,  417 => 122,  415 => 121,  412 => 120,  404 => 118,  402 => 117,  399 => 116,  393 => 115,  385 => 113,  377 => 111,  374 => 110,  369 => 109,  366 => 107,  358 => 105,  356 => 104,  353 => 103,  345 => 101,  343 => 100,  335 => 95,  332 => 94,  330 => 93,  325 => 90,  323 => 89,  318 => 86,  315 => 85,  301 => 84,  292 => 83,  275 => 82,  271 => 81,  268 => 80,  266 => 79,  259 => 77,  255 => 76,  252 => 75,  244 => 71,  237 => 69,  228 => 67,  221 => 65,  214 => 63,  199 => 57,  183 => 52,  163 => 49,  157 => 47,  154 => 46,  130 => 36,  105 => 46,  101 => 39,  98 => 42,  76 => 29,  118 => 48,  114 => 46,  110 => 171,  106 => 45,  56 => 24,  249 => 74,  246 => 70,  241 => 68,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 62,  217 => 64,  203 => 56,  194 => 53,  191 => 52,  182 => 49,  173 => 46,  168 => 44,  160 => 48,  155 => 17,  150 => 75,  144 => 43,  136 => 40,  85 => 37,  83 => 22,  100 => 34,  61 => 18,  10 => 43,  151 => 45,  65 => 30,  45 => 25,  36 => 24,  18 => 11,  143 => 50,  140 => 56,  119 => 32,  112 => 48,  66 => 17,  21 => 11,  68 => 30,  209 => 58,  205 => 58,  196 => 56,  192 => 54,  189 => 77,  178 => 71,  176 => 47,  165 => 50,  161 => 61,  152 => 58,  148 => 44,  145 => 43,  141 => 55,  134 => 39,  132 => 52,  127 => 35,  123 => 34,  109 => 47,  93 => 134,  90 => 28,  54 => 23,  133 => 44,  124 => 49,  111 => 32,  80 => 35,  60 => 20,  52 => 11,  97 => 43,  95 => 135,  88 => 38,  78 => 26,  71 => 31,  25 => 14,  72 => 29,  64 => 17,  53 => 25,  34 => 20,  92 => 41,  86 => 38,  79 => 61,  19 => 11,  42 => 27,  40 => 26,  29 => 15,  26 => 14,  224 => 66,  215 => 90,  211 => 62,  204 => 84,  200 => 55,  195 => 80,  193 => 79,  190 => 78,  188 => 53,  185 => 76,  179 => 72,  177 => 51,  171 => 45,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 56,  142 => 42,  137 => 51,  126 => 50,  120 => 52,  117 => 47,  103 => 44,  74 => 13,  47 => 28,  32 => 13,  24 => 14,  22 => 12,  23 => 12,  17 => 1,  69 => 20,  63 => 16,  58 => 17,  49 => 15,  43 => 20,  37 => 21,  20 => 11,  139 => 54,  131 => 51,  128 => 55,  125 => 54,  121 => 48,  115 => 50,  107 => 42,  99 => 44,  96 => 23,  91 => 39,  82 => 36,  77 => 14,  75 => 33,  57 => 24,  50 => 24,  46 => 21,  44 => 9,  39 => 23,  33 => 16,  30 => 16,  27 => 15,  135 => 57,  129 => 50,  122 => 53,  116 => 31,  113 => 45,  108 => 30,  104 => 30,  102 => 45,  94 => 40,  89 => 132,  87 => 74,  84 => 73,  81 => 29,  73 => 22,  70 => 19,  67 => 20,  62 => 28,  59 => 14,  55 => 16,  51 => 21,  48 => 22,  41 => 25,  38 => 24,  35 => 18,  31 => 15,  28 => 15,);
    }
}
