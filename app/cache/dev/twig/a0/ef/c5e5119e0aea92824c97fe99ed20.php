<?php

/* SimpleThingsEntityAuditBundle:Audit:view_revision.html.twig */
class __TwigTemplate_a0efc5e5119e0aea92824c97fe99ed20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SimpleThingsEntityAuditBundle::layout.html.twig");

        $this->blocks = array(
            'simplethings_entityaudit_content' => array($this, 'block_simplethings_entityaudit_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SimpleThingsEntityAuditBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Entities changed in revision ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "rev"), "html", null, true);
        echo "</h1>

<p><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("simple_things_entity_audit_home"), "html", null, true);
        echo "\">Home</a></p>

<table>
    <thead><tr>
        <th>Class Name</th>
        <th>Identifiers</th>
        <th>Revision Type</th>
    </tr></thead>
    <tbody>
";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "changedEntities"));
        foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
            // line 16
            echo "    <tr>
        <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("simple_things_entity_audit_viewentity_detail", array("rev" => $this->getAttribute($this->getContext($context, "revision"), "rev"), "className" => $this->getAttribute($this->getContext($context, "changedEntity"), "className"), "id" => twig_join_filter($this->getAttribute($this->getContext($context, "changedEntity"), "id"), ","))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "className"), "html", null, true);
            echo "</a></td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getContext($context, "changedEntity"), "id"), ", "), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "revisionType"), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "    </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle:Audit:view_revision.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 67,  175 => 76,  401 => 160,  363 => 142,  359 => 141,  354 => 139,  342 => 135,  326 => 126,  322 => 125,  305 => 118,  291 => 111,  286 => 109,  280 => 106,  219 => 78,  213 => 76,  210 => 75,  206 => 73,  180 => 66,  169 => 75,  159 => 58,  166 => 73,  631 => 382,  622 => 376,  618 => 374,  616 => 370,  606 => 367,  601 => 365,  596 => 363,  592 => 361,  581 => 353,  575 => 350,  571 => 349,  565 => 346,  555 => 339,  537 => 327,  530 => 323,  523 => 319,  519 => 317,  517 => 314,  509 => 310,  499 => 303,  492 => 299,  460 => 280,  428 => 265,  416 => 258,  398 => 159,  392 => 242,  388 => 240,  340 => 210,  327 => 200,  308 => 184,  283 => 168,  279 => 167,  274 => 165,  269 => 163,  201 => 128,  666 => 211,  663 => 210,  658 => 157,  654 => 154,  648 => 153,  644 => 151,  640 => 149,  635 => 148,  632 => 147,  629 => 146,  624 => 145,  621 => 144,  617 => 115,  614 => 114,  608 => 113,  603 => 110,  597 => 109,  589 => 107,  586 => 106,  582 => 105,  577 => 103,  569 => 100,  562 => 99,  559 => 98,  556 => 97,  547 => 334,  544 => 93,  541 => 92,  536 => 91,  531 => 89,  528 => 88,  521 => 83,  510 => 81,  507 => 80,  501 => 51,  497 => 50,  493 => 49,  488 => 47,  484 => 294,  480 => 292,  472 => 43,  468 => 283,  464 => 41,  459 => 39,  455 => 38,  450 => 37,  447 => 36,  437 => 32,  431 => 29,  426 => 27,  423 => 263,  420 => 25,  411 => 215,  409 => 210,  406 => 209,  400 => 206,  389 => 154,  386 => 200,  380 => 198,  375 => 232,  367 => 193,  344 => 184,  303 => 182,  297 => 168,  294 => 167,  276 => 166,  264 => 98,  258 => 158,  256 => 93,  250 => 144,  247 => 143,  231 => 84,  174 => 62,  172 => 126,  164 => 120,  462 => 138,  456 => 279,  413 => 130,  408 => 253,  405 => 128,  396 => 158,  394 => 203,  391 => 202,  382 => 237,  378 => 148,  376 => 115,  373 => 231,  371 => 113,  368 => 144,  364 => 192,  352 => 219,  349 => 138,  346 => 185,  339 => 133,  333 => 178,  328 => 176,  319 => 99,  317 => 171,  312 => 96,  298 => 93,  296 => 86,  287 => 85,  282 => 83,  278 => 82,  273 => 102,  270 => 101,  267 => 100,  254 => 72,  251 => 71,  245 => 69,  243 => 141,  238 => 67,  235 => 66,  226 => 82,  216 => 61,  212 => 59,  186 => 82,  324 => 91,  320 => 172,  295 => 177,  272 => 81,  265 => 78,  262 => 160,  260 => 157,  257 => 73,  248 => 67,  239 => 149,  234 => 138,  232 => 65,  229 => 83,  207 => 54,  170 => 72,  167 => 43,  147 => 53,  585 => 354,  580 => 197,  574 => 102,  572 => 101,  566 => 190,  557 => 187,  553 => 96,  549 => 185,  542 => 184,  538 => 183,  533 => 90,  526 => 179,  518 => 177,  515 => 313,  512 => 175,  506 => 162,  502 => 160,  500 => 159,  494 => 155,  483 => 153,  479 => 152,  476 => 44,  473 => 285,  461 => 138,  458 => 136,  453 => 164,  451 => 277,  446 => 275,  444 => 137,  441 => 33,  438 => 135,  434 => 268,  425 => 124,  417 => 131,  415 => 121,  412 => 120,  404 => 252,  402 => 127,  399 => 126,  393 => 115,  385 => 152,  377 => 236,  374 => 147,  369 => 194,  366 => 107,  358 => 222,  356 => 140,  353 => 103,  345 => 136,  343 => 100,  335 => 95,  332 => 129,  330 => 177,  325 => 175,  323 => 89,  318 => 124,  315 => 87,  301 => 94,  292 => 83,  275 => 82,  271 => 81,  268 => 163,  266 => 79,  259 => 77,  255 => 76,  252 => 92,  244 => 66,  237 => 86,  228 => 67,  221 => 65,  214 => 63,  199 => 57,  183 => 67,  163 => 73,  157 => 71,  154 => 55,  130 => 57,  105 => 32,  101 => 49,  98 => 66,  76 => 29,  118 => 21,  114 => 23,  110 => 50,  106 => 71,  56 => 15,  249 => 74,  246 => 89,  241 => 87,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 138,  217 => 136,  203 => 132,  194 => 87,  191 => 53,  182 => 80,  173 => 46,  168 => 44,  160 => 72,  155 => 17,  150 => 43,  144 => 43,  136 => 60,  85 => 59,  83 => 43,  100 => 22,  61 => 14,  10 => 43,  151 => 65,  65 => 27,  45 => 19,  36 => 25,  18 => 1,  143 => 65,  140 => 51,  119 => 43,  112 => 46,  66 => 49,  21 => 18,  68 => 19,  209 => 58,  205 => 129,  196 => 54,  192 => 54,  189 => 119,  178 => 47,  176 => 46,  165 => 60,  161 => 71,  152 => 88,  148 => 64,  145 => 80,  141 => 55,  134 => 48,  132 => 26,  127 => 35,  123 => 55,  109 => 52,  93 => 64,  90 => 42,  54 => 17,  133 => 44,  124 => 56,  111 => 40,  80 => 57,  60 => 18,  52 => 12,  97 => 31,  95 => 47,  88 => 28,  78 => 37,  71 => 29,  25 => 3,  72 => 39,  64 => 19,  53 => 14,  34 => 7,  92 => 29,  86 => 38,  79 => 26,  19 => 12,  42 => 8,  40 => 8,  29 => 4,  26 => 3,  224 => 81,  215 => 136,  211 => 134,  204 => 84,  200 => 72,  195 => 48,  193 => 79,  190 => 84,  188 => 69,  185 => 68,  179 => 115,  177 => 63,  171 => 75,  162 => 59,  158 => 70,  156 => 69,  153 => 68,  146 => 64,  142 => 63,  137 => 63,  126 => 35,  120 => 57,  117 => 56,  103 => 66,  74 => 30,  47 => 15,  32 => 16,  24 => 2,  22 => 14,  23 => 12,  17 => 11,  69 => 19,  63 => 39,  58 => 22,  49 => 13,  43 => 9,  37 => 6,  20 => 12,  139 => 54,  131 => 61,  128 => 46,  125 => 59,  121 => 55,  115 => 50,  107 => 51,  99 => 45,  96 => 63,  91 => 14,  82 => 27,  77 => 22,  75 => 40,  57 => 23,  50 => 20,  46 => 40,  44 => 28,  39 => 6,  33 => 17,  30 => 14,  27 => 8,  135 => 59,  129 => 25,  122 => 58,  116 => 31,  113 => 50,  108 => 30,  104 => 47,  102 => 27,  94 => 21,  89 => 45,  87 => 41,  84 => 40,  81 => 35,  73 => 22,  70 => 25,  67 => 33,  62 => 25,  59 => 29,  55 => 34,  51 => 16,  48 => 11,  41 => 8,  38 => 8,  35 => 6,  31 => 6,  28 => 15,);
    }
}
