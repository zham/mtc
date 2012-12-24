<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_052784363e01877689d4f910ebaeb0df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'field_rows' => array($this, 'block_field_rows'),
            'field_row' => array($this, 'block_field_row'),
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "children"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 12
    public function block_field_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"));
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_field_label($context, array $blocks = array())
    {
        // line 25
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "
        ";
        // line 27
        if ($this->getContext($context, "required")) {
            // line 28
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 30
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 136,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 129,  288 => 124,  149 => 67,  175 => 66,  401 => 160,  363 => 142,  359 => 141,  354 => 139,  342 => 135,  326 => 126,  322 => 125,  305 => 118,  291 => 111,  286 => 123,  280 => 106,  219 => 78,  213 => 85,  210 => 75,  206 => 73,  180 => 68,  169 => 75,  159 => 93,  166 => 73,  631 => 382,  622 => 376,  618 => 374,  616 => 370,  606 => 367,  601 => 365,  596 => 363,  592 => 361,  581 => 353,  575 => 350,  571 => 349,  565 => 346,  555 => 339,  537 => 327,  530 => 323,  523 => 319,  519 => 317,  517 => 314,  509 => 310,  499 => 303,  492 => 299,  460 => 280,  428 => 265,  416 => 258,  398 => 159,  392 => 242,  388 => 240,  340 => 210,  327 => 200,  308 => 184,  283 => 168,  279 => 167,  274 => 165,  269 => 163,  201 => 80,  666 => 211,  663 => 210,  658 => 157,  654 => 154,  648 => 153,  644 => 151,  640 => 149,  635 => 148,  632 => 147,  629 => 146,  624 => 145,  621 => 144,  617 => 115,  614 => 114,  608 => 113,  603 => 110,  597 => 109,  589 => 107,  586 => 106,  582 => 105,  577 => 103,  569 => 100,  562 => 99,  559 => 98,  556 => 97,  547 => 334,  544 => 93,  541 => 92,  536 => 91,  531 => 89,  528 => 88,  521 => 83,  510 => 81,  507 => 80,  501 => 51,  497 => 50,  493 => 49,  488 => 47,  484 => 294,  480 => 292,  472 => 43,  468 => 283,  464 => 41,  459 => 39,  455 => 38,  450 => 37,  447 => 36,  437 => 32,  431 => 29,  426 => 27,  423 => 263,  420 => 25,  411 => 215,  409 => 210,  406 => 209,  400 => 206,  389 => 154,  386 => 200,  380 => 198,  375 => 232,  367 => 193,  344 => 184,  303 => 182,  297 => 168,  294 => 167,  276 => 117,  264 => 98,  258 => 110,  256 => 93,  250 => 108,  247 => 143,  231 => 95,  174 => 62,  172 => 126,  164 => 59,  462 => 138,  456 => 279,  413 => 130,  408 => 253,  405 => 128,  396 => 158,  394 => 203,  391 => 202,  382 => 237,  378 => 148,  376 => 115,  373 => 231,  371 => 113,  368 => 144,  364 => 192,  352 => 219,  349 => 138,  346 => 185,  339 => 133,  333 => 178,  328 => 176,  319 => 99,  317 => 171,  312 => 96,  298 => 127,  296 => 126,  287 => 85,  282 => 121,  278 => 82,  273 => 102,  270 => 101,  267 => 100,  254 => 72,  251 => 71,  245 => 69,  243 => 141,  238 => 99,  235 => 107,  226 => 82,  216 => 61,  212 => 59,  186 => 82,  324 => 91,  320 => 172,  295 => 177,  272 => 81,  265 => 78,  262 => 111,  260 => 157,  257 => 73,  248 => 107,  239 => 149,  234 => 138,  232 => 65,  229 => 94,  207 => 83,  170 => 63,  167 => 43,  147 => 87,  585 => 354,  580 => 197,  574 => 102,  572 => 101,  566 => 190,  557 => 187,  553 => 96,  549 => 185,  542 => 184,  538 => 183,  533 => 90,  526 => 179,  518 => 177,  515 => 313,  512 => 175,  506 => 162,  502 => 160,  500 => 159,  494 => 155,  483 => 153,  479 => 152,  476 => 44,  473 => 285,  461 => 138,  458 => 136,  453 => 164,  451 => 277,  446 => 275,  444 => 137,  441 => 33,  438 => 135,  434 => 268,  425 => 124,  417 => 131,  415 => 121,  412 => 120,  404 => 252,  402 => 127,  399 => 126,  393 => 115,  385 => 152,  377 => 236,  374 => 147,  369 => 194,  366 => 107,  358 => 222,  356 => 140,  353 => 103,  345 => 136,  343 => 100,  335 => 95,  332 => 137,  330 => 177,  325 => 175,  323 => 135,  318 => 124,  315 => 87,  301 => 128,  292 => 83,  275 => 82,  271 => 114,  268 => 163,  266 => 79,  259 => 77,  255 => 109,  252 => 92,  244 => 66,  237 => 86,  228 => 103,  221 => 99,  214 => 95,  199 => 57,  183 => 69,  163 => 73,  157 => 55,  154 => 45,  130 => 48,  105 => 37,  101 => 49,  98 => 66,  76 => 24,  118 => 36,  114 => 34,  110 => 39,  106 => 35,  56 => 14,  249 => 74,  246 => 89,  241 => 87,  236 => 98,  233 => 66,  225 => 64,  222 => 90,  220 => 138,  217 => 87,  203 => 81,  194 => 76,  191 => 53,  182 => 80,  173 => 46,  168 => 44,  160 => 72,  155 => 92,  150 => 43,  144 => 43,  136 => 40,  85 => 28,  83 => 26,  100 => 27,  61 => 16,  10 => 43,  151 => 53,  65 => 16,  45 => 9,  36 => 5,  18 => 2,  143 => 49,  140 => 52,  119 => 34,  112 => 43,  66 => 21,  21 => 3,  68 => 22,  209 => 180,  205 => 129,  196 => 77,  192 => 54,  189 => 73,  178 => 71,  176 => 46,  165 => 60,  161 => 58,  152 => 60,  148 => 64,  145 => 49,  141 => 55,  134 => 51,  132 => 43,  127 => 47,  123 => 38,  109 => 36,  93 => 28,  90 => 31,  54 => 12,  133 => 49,  124 => 56,  111 => 33,  80 => 26,  60 => 14,  52 => 17,  97 => 30,  95 => 30,  88 => 32,  78 => 37,  71 => 37,  25 => 5,  72 => 21,  64 => 35,  53 => 13,  34 => 5,  92 => 23,  86 => 30,  79 => 24,  19 => 1,  42 => 10,  40 => 8,  29 => 6,  26 => 3,  224 => 91,  215 => 136,  211 => 134,  204 => 84,  200 => 87,  195 => 48,  193 => 79,  190 => 84,  188 => 69,  185 => 75,  179 => 115,  177 => 67,  171 => 67,  162 => 59,  158 => 57,  156 => 56,  153 => 68,  146 => 64,  142 => 48,  137 => 46,  126 => 39,  120 => 37,  117 => 56,  103 => 28,  74 => 38,  47 => 15,  32 => 5,  24 => 3,  22 => 3,  23 => 29,  17 => 1,  69 => 21,  63 => 17,  58 => 26,  49 => 11,  43 => 8,  37 => 11,  20 => 2,  139 => 47,  131 => 61,  128 => 46,  125 => 36,  121 => 55,  115 => 50,  107 => 51,  99 => 33,  96 => 63,  91 => 27,  82 => 25,  77 => 23,  75 => 18,  57 => 13,  50 => 12,  46 => 13,  44 => 14,  39 => 7,  33 => 4,  30 => 7,  27 => 3,  135 => 41,  129 => 38,  122 => 71,  116 => 33,  113 => 40,  108 => 38,  104 => 40,  102 => 6,  94 => 32,  89 => 22,  87 => 26,  84 => 29,  81 => 28,  73 => 23,  70 => 18,  67 => 18,  62 => 22,  59 => 21,  55 => 14,  51 => 23,  48 => 10,  41 => 7,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
