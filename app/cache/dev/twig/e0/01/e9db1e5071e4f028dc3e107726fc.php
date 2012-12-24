<?php

/* SonataAdminBundle:Form:silex_form_div_layout.html.twig */
class __TwigTemplate_e001e9db1e5071e4f028dc3e107726fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'choice_widget' => array($this, 'block_choice_widget'),
            'field_widget' => array($this, 'block_field_widget'),
            'generic_label' => array($this, 'block_generic_label'),
            'field_row' => array($this, 'block_field_row'),
            'field_errors' => array($this, 'block_field_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('field_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('generic_label', $context, $blocks);
        // line 58
        echo "
";
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('field_row', $context, $blocks);
        // line 72
        echo "
";
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('field_errors', $context, $blocks);
    }

    // line 3
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    ";
        if ($this->getContext($context, "expanded")) {
            // line 6
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo " class=\"inputs-list\">
        ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 8
                echo "            <li>
                ";
                // line 9
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "child"), null, array("in_list_checkbox" => true, "widget" => $this->env->getExtension('form')->renderWidget($this->getContext($context, "child"))));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 12
            echo "        </ul>
    ";
        } else {
            // line 14
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 15
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 16
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value")), "html", null, true);
                echo "</option>
        ";
            }
            // line 18
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 19
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 20
                echo "            ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
            ";
                // line 21
                if (((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0) && (!(null === $this->getContext($context, "separator"))))) {
                    // line 22
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 24
                echo "        ";
            }
            // line 25
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 26
            echo "        ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 32
    public function block_field_widget($context, array $blocks = array())
    {
        // line 33
        ob_start();
        // line 34
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 35
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 41
    public function block_generic_label($context, array $blocks = array())
    {
        // line 42
        ob_start();
        // line 43
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 44
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " required")));
            // line 45
            echo "    ";
        }
        // line 46
        echo "    ";
        if (((array_key_exists("in_list_checkbox", $context) && $this->getContext($context, "in_list_checkbox")) && array_key_exists("widget", $context))) {
            // line 47
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">
            ";
            // line 48
            echo $this->getContext($context, "widget");
            echo "
            <span>
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
            echo "
            </span>
        </label>
    ";
        } else {
            // line 54
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 61
    public function block_field_row($context, array $blocks = array())
    {
        // line 62
        ob_start();
        // line 63
        echo "    <div class=\"clearfix ";
        echo (((0 < twig_length_filter($this->env, $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"))))) ? ("error") : (""));
        echo " \">
        ";
        // line 64
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null)));
        echo "
        <div class=\"input\">
            ";
        // line 66
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
            ";
        // line 67
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 75
    public function block_field_errors($context, array $blocks = array())
    {
        // line 76
        ob_start();
        // line 77
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 78
            echo "        ";
            if (((!$this->getAttribute($this->getContext($context, "form"), "hasParent")) || twig_in_filter("repeated", $this->getAttribute($this->getContext($context, "form"), "get", array(0 => "types"), "method")))) {
                // line 79
                echo "            <div class=\"clearfix error\">
        ";
            }
            // line 81
            echo "        <span class=\"help-inline\">
            ";
            // line 82
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 83
                echo "                ";
                if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                    // line 84
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                    echo "
                ";
                }
                // line 86
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 87
            echo "        </span>
        ";
            // line 88
            if (((!$this->getAttribute($this->getContext($context, "form"), "hasParent")) || twig_in_filter("repeated", $this->getAttribute($this->getContext($context, "form"), "get", array(0 => "types"), "method")))) {
                // line 89
                echo "            </div>
        ";
            }
            // line 91
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:silex_form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  324 => 91,  265 => 78,  260 => 76,  257 => 75,  239 => 64,  232 => 62,  229 => 61,  207 => 54,  195 => 48,  176 => 46,  150 => 35,  118 => 21,  113 => 20,  91 => 14,  78 => 9,  75 => 8,  66 => 6,  58 => 3,  25 => 3,  22 => 2,  61 => 4,  48 => 72,  43 => 60,  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  974 => 284,  952 => 283,  950 => 282,  947 => 281,  935 => 276,  931 => 275,  926 => 274,  924 => 273,  921 => 272,  912 => 266,  906 => 264,  903 => 263,  898 => 262,  896 => 261,  893 => 260,  886 => 255,  877 => 253,  873 => 252,  870 => 251,  867 => 250,  865 => 249,  862 => 248,  854 => 244,  852 => 243,  849 => 242,  842 => 237,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 228,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  794 => 214,  792 => 213,  789 => 212,  781 => 208,  778 => 207,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 198,  741 => 197,  738 => 196,  730 => 190,  727 => 189,  725 => 188,  722 => 187,  715 => 184,  712 => 183,  709 => 182,  701 => 178,  698 => 177,  696 => 176,  693 => 175,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  661 => 164,  656 => 162,  653 => 161,  645 => 157,  642 => 156,  637 => 154,  626 => 149,  613 => 143,  611 => 142,  600 => 137,  595 => 135,  592 => 134,  584 => 130,  581 => 129,  579 => 128,  567 => 121,  554 => 119,  548 => 117,  545 => 116,  543 => 115,  540 => 114,  532 => 108,  530 => 104,  525 => 103,  519 => 101,  516 => 100,  514 => 99,  511 => 98,  498 => 91,  490 => 89,  485 => 88,  474 => 84,  471 => 83,  432 => 72,  429 => 71,  419 => 65,  416 => 64,  413 => 63,  407 => 61,  405 => 60,  397 => 58,  388 => 55,  361 => 48,  357 => 47,  349 => 45,  347 => 44,  319 => 35,  304 => 33,  300 => 32,  295 => 84,  287 => 29,  285 => 28,  282 => 27,  272 => 81,  267 => 21,  253 => 15,  248 => 67,  245 => 12,  233 => 6,  226 => 4,  223 => 3,  219 => 288,  216 => 287,  209 => 272,  206 => 271,  201 => 260,  198 => 259,  193 => 247,  191 => 242,  185 => 239,  180 => 235,  178 => 226,  175 => 225,  173 => 45,  170 => 44,  167 => 43,  162 => 41,  155 => 196,  149 => 193,  147 => 34,  144 => 186,  137 => 175,  134 => 174,  132 => 26,  129 => 25,  124 => 160,  122 => 154,  117 => 147,  112 => 141,  109 => 140,  107 => 18,  104 => 133,  102 => 126,  97 => 114,  92 => 98,  74 => 70,  72 => 43,  69 => 42,  64 => 26,  57 => 12,  52 => 12,  81 => 35,  70 => 32,  63 => 5,  53 => 25,  46 => 61,  31 => 16,  114 => 146,  100 => 22,  94 => 113,  59 => 20,  45 => 25,  39 => 17,  35 => 40,  29 => 4,  27 => 31,  18 => 1,  21 => 12,  17 => 11,  666 => 211,  663 => 210,  658 => 163,  654 => 154,  648 => 153,  644 => 151,  640 => 155,  635 => 148,  632 => 147,  629 => 150,  624 => 148,  621 => 147,  617 => 115,  614 => 114,  608 => 141,  603 => 110,  597 => 136,  589 => 107,  586 => 106,  582 => 105,  577 => 127,  569 => 100,  562 => 99,  559 => 120,  556 => 97,  547 => 95,  544 => 93,  541 => 92,  536 => 91,  531 => 89,  528 => 88,  521 => 83,  510 => 81,  507 => 80,  501 => 51,  497 => 50,  493 => 49,  488 => 47,  484 => 46,  480 => 45,  472 => 43,  468 => 42,  464 => 41,  459 => 39,  455 => 79,  450 => 77,  447 => 36,  437 => 32,  431 => 29,  426 => 27,  423 => 26,  420 => 25,  411 => 215,  409 => 210,  406 => 209,  400 => 59,  394 => 57,  391 => 202,  389 => 201,  386 => 54,  380 => 198,  378 => 53,  375 => 196,  367 => 193,  364 => 192,  352 => 46,  346 => 185,  344 => 43,  339 => 181,  333 => 178,  328 => 176,  320 => 89,  317 => 171,  303 => 170,  297 => 168,  294 => 167,  276 => 166,  270 => 22,  264 => 161,  262 => 77,  258 => 158,  256 => 16,  250 => 14,  247 => 143,  243 => 141,  234 => 63,  231 => 137,  203 => 269,  200 => 50,  182 => 130,  179 => 47,  174 => 127,  172 => 126,  164 => 120,  158 => 118,  152 => 195,  143 => 79,  126 => 24,  120 => 22,  103 => 66,  99 => 15,  96 => 63,  76 => 20,  73 => 33,  67 => 27,  60 => 55,  54 => 75,  51 => 74,  49 => 2,  38 => 41,  34 => 18,  32 => 38,  30 => 32,  28 => 13,  26 => 3,  24 => 2,  585 => 199,  580 => 197,  574 => 126,  572 => 101,  566 => 190,  557 => 187,  553 => 96,  549 => 185,  542 => 184,  538 => 183,  533 => 90,  526 => 179,  518 => 177,  515 => 82,  512 => 175,  506 => 162,  502 => 92,  500 => 159,  494 => 90,  483 => 153,  479 => 86,  476 => 85,  473 => 150,  461 => 138,  458 => 137,  453 => 78,  451 => 150,  446 => 147,  444 => 137,  441 => 33,  438 => 135,  434 => 73,  425 => 124,  417 => 122,  415 => 121,  412 => 120,  404 => 118,  402 => 117,  399 => 116,  393 => 115,  385 => 113,  377 => 111,  374 => 51,  369 => 194,  366 => 49,  358 => 190,  356 => 189,  353 => 103,  345 => 101,  343 => 100,  335 => 39,  332 => 94,  330 => 177,  325 => 175,  323 => 37,  318 => 88,  315 => 87,  301 => 86,  292 => 83,  275 => 82,  271 => 81,  268 => 79,  266 => 79,  259 => 17,  255 => 76,  252 => 155,  249 => 74,  244 => 66,  237 => 7,  228 => 5,  224 => 66,  221 => 65,  217 => 136,  214 => 281,  211 => 280,  205 => 58,  199 => 57,  196 => 248,  192 => 54,  188 => 241,  183 => 236,  177 => 128,  165 => 42,  163 => 49,  160 => 205,  157 => 204,  154 => 116,  151 => 45,  148 => 86,  145 => 33,  142 => 32,  139 => 181,  136 => 74,  130 => 72,  127 => 161,  123 => 69,  119 => 153,  116 => 31,  110 => 19,  108 => 170,  105 => 169,  101 => 16,  98 => 166,  95 => 135,  93 => 134,  89 => 97,  87 => 12,  84 => 82,  82 => 77,  79 => 76,  77 => 71,  71 => 7,  68 => 28,  65 => 57,  62 => 21,  56 => 53,  50 => 17,  42 => 20,  40 => 58,  36 => 18,  33 => 5,);
    }
}
