<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig */
class __TwigTemplate_b808b508fbd9e9b9b6ca32f7125c85c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"));
            echo "
";
        } elseif (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "getChild", array(0 => $this->getAttribute($this->getContext($context, "field_description"), "name")), "method"));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderAction("sonata.admin.controller.admin:getShortObjectDescriptionAction", array(), array("query" => array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "uniqid"))));
                    // line 30
                    echo "                ";
                }
                // line 31
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 33
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
                echo "
            </span>
        ";
            } else {
                // line 36
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 37
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
                echo "
            </span>
        ";
            }
            // line 40
            echo "
        <span id=\"field_actions_";
            // line 41
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-actions\">

            ";
            // line 43
            if (((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method"))) {
                // line 44
                echo "                <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                echo "\"
                    onclick=\"return start_field_dialog_form_list_";
                // line 45
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                    class=\"sonata-ba-action\"
                    title=\"";
                // line 47
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                echo "\"
                    >
                    <img src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/application_view_list.png"), "html", null, true);
                echo "\"
                         alt=\"";
                // line 50
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                echo "\"
                    />
                </a>
            ";
            }
            // line 54
            echo "
            ";
            // line 55
            if (((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method"))) {
                // line 56
                echo "                <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\"
                    onclick=\"return start_field_dialog_form_add_";
                // line 57
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                    class=\"sonata-ba-action\"
                    title=\"";
                // line 59
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                echo "\"
                    >
                        <img src=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html", null, true);
                echo "\" alt=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                echo "\" />
                </a>
            ";
            }
            // line 64
            echo "
            ";
            // line 65
            if (((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method"))) {
                // line 66
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 67
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                    class=\"sonata-ba-action\"
                    title=\"";
                // line 69
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_delete", array(), "SonataAdminBundle");
                echo "\"
                    >
                    <img src=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/cancel.png"), "html", null, true);
                echo "\"
                         alt=\"";
                // line 72
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_delete", array(), "SonataAdminBundle");
                echo "\"
                    />
                </a>
            ";
            }
            // line 76
            echo "
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
            // line 79
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">

        </div>
    </div>

    ";
            // line 84
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 71,  631 => 382,  622 => 376,  618 => 374,  616 => 370,  606 => 367,  601 => 365,  596 => 363,  592 => 361,  581 => 353,  575 => 350,  571 => 349,  565 => 346,  555 => 339,  537 => 327,  530 => 323,  523 => 319,  519 => 317,  517 => 314,  509 => 310,  499 => 303,  492 => 299,  460 => 280,  428 => 265,  416 => 258,  398 => 248,  392 => 242,  388 => 240,  340 => 210,  327 => 200,  308 => 184,  283 => 168,  279 => 167,  274 => 165,  269 => 163,  201 => 128,  666 => 211,  663 => 210,  658 => 157,  654 => 154,  648 => 153,  644 => 151,  640 => 149,  635 => 148,  632 => 147,  629 => 146,  624 => 145,  621 => 144,  617 => 115,  614 => 114,  608 => 113,  603 => 110,  597 => 109,  589 => 107,  586 => 106,  582 => 105,  577 => 103,  569 => 100,  562 => 99,  559 => 98,  556 => 97,  547 => 334,  544 => 93,  541 => 92,  536 => 91,  531 => 89,  528 => 88,  521 => 83,  510 => 81,  507 => 80,  501 => 51,  497 => 50,  493 => 49,  488 => 47,  484 => 294,  480 => 292,  472 => 43,  468 => 283,  464 => 41,  459 => 39,  455 => 38,  450 => 37,  447 => 36,  437 => 32,  431 => 29,  426 => 27,  423 => 263,  420 => 25,  411 => 215,  409 => 210,  406 => 209,  400 => 206,  389 => 201,  386 => 200,  380 => 198,  375 => 232,  367 => 193,  344 => 184,  303 => 182,  297 => 168,  294 => 167,  276 => 166,  264 => 161,  258 => 158,  256 => 157,  250 => 144,  247 => 143,  231 => 146,  174 => 127,  172 => 126,  164 => 120,  462 => 138,  456 => 279,  413 => 130,  408 => 253,  405 => 128,  396 => 243,  394 => 203,  391 => 202,  382 => 237,  378 => 197,  376 => 115,  373 => 231,  371 => 113,  368 => 229,  364 => 192,  352 => 219,  349 => 87,  346 => 185,  339 => 181,  333 => 178,  328 => 176,  319 => 99,  317 => 171,  312 => 96,  298 => 93,  296 => 86,  287 => 85,  282 => 83,  278 => 82,  273 => 81,  270 => 164,  267 => 79,  254 => 72,  251 => 71,  245 => 69,  243 => 141,  238 => 67,  235 => 66,  226 => 63,  216 => 61,  212 => 59,  186 => 51,  324 => 91,  320 => 172,  295 => 177,  272 => 81,  265 => 78,  262 => 160,  260 => 157,  257 => 73,  248 => 67,  239 => 149,  234 => 138,  232 => 65,  229 => 61,  207 => 54,  170 => 72,  167 => 43,  147 => 42,  585 => 354,  580 => 197,  574 => 102,  572 => 101,  566 => 190,  557 => 187,  553 => 96,  549 => 185,  542 => 184,  538 => 183,  533 => 90,  526 => 179,  518 => 177,  515 => 313,  512 => 175,  506 => 162,  502 => 160,  500 => 159,  494 => 155,  483 => 153,  479 => 152,  476 => 44,  473 => 285,  461 => 138,  458 => 136,  453 => 164,  451 => 277,  446 => 275,  444 => 137,  441 => 33,  438 => 135,  434 => 268,  425 => 124,  417 => 131,  415 => 121,  412 => 120,  404 => 252,  402 => 127,  399 => 126,  393 => 115,  385 => 113,  377 => 236,  374 => 110,  369 => 194,  366 => 107,  358 => 222,  356 => 189,  353 => 103,  345 => 101,  343 => 100,  335 => 95,  332 => 94,  330 => 177,  325 => 175,  323 => 89,  318 => 88,  315 => 87,  301 => 94,  292 => 83,  275 => 82,  271 => 81,  268 => 163,  266 => 79,  259 => 77,  255 => 76,  252 => 154,  244 => 66,  237 => 139,  228 => 67,  221 => 65,  214 => 63,  199 => 57,  183 => 50,  163 => 49,  157 => 47,  154 => 116,  130 => 57,  105 => 44,  101 => 16,  98 => 66,  76 => 34,  118 => 21,  114 => 46,  110 => 19,  106 => 71,  56 => 53,  249 => 74,  246 => 153,  241 => 68,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 138,  217 => 136,  203 => 132,  194 => 53,  191 => 53,  182 => 79,  173 => 46,  168 => 44,  160 => 48,  155 => 17,  150 => 43,  144 => 43,  136 => 74,  85 => 59,  83 => 38,  100 => 34,  61 => 27,  10 => 43,  151 => 65,  65 => 28,  45 => 25,  36 => 32,  18 => 11,  143 => 79,  140 => 61,  119 => 32,  112 => 46,  66 => 49,  21 => 18,  68 => 30,  209 => 58,  205 => 129,  196 => 54,  192 => 54,  189 => 119,  178 => 47,  176 => 46,  165 => 42,  161 => 69,  152 => 88,  148 => 64,  145 => 80,  141 => 55,  134 => 39,  132 => 26,  127 => 35,  123 => 55,  109 => 49,  93 => 64,  90 => 39,  54 => 40,  133 => 44,  124 => 83,  111 => 32,  80 => 57,  60 => 30,  52 => 20,  97 => 43,  95 => 135,  88 => 38,  78 => 37,  71 => 7,  25 => 3,  72 => 32,  64 => 16,  53 => 25,  34 => 16,  92 => 43,  86 => 38,  79 => 62,  19 => 2,  42 => 20,  40 => 18,  29 => 22,  26 => 13,  224 => 62,  215 => 136,  211 => 134,  204 => 84,  200 => 131,  195 => 48,  193 => 79,  190 => 84,  188 => 52,  185 => 118,  179 => 115,  177 => 76,  171 => 110,  162 => 104,  158 => 118,  156 => 67,  153 => 66,  146 => 56,  142 => 92,  137 => 36,  126 => 70,  120 => 54,  117 => 49,  103 => 66,  74 => 13,  47 => 112,  32 => 15,  24 => 20,  22 => 13,  23 => 12,  17 => 11,  69 => 30,  63 => 31,  58 => 3,  49 => 38,  43 => 19,  37 => 18,  20 => 12,  139 => 54,  131 => 34,  128 => 55,  125 => 56,  121 => 48,  115 => 50,  107 => 30,  99 => 45,  96 => 63,  91 => 14,  82 => 36,  77 => 14,  75 => 8,  57 => 23,  50 => 21,  46 => 21,  44 => 19,  39 => 78,  33 => 16,  30 => 14,  27 => 14,  135 => 59,  129 => 25,  122 => 53,  116 => 31,  113 => 50,  108 => 30,  104 => 47,  102 => 27,  94 => 44,  89 => 20,  87 => 41,  84 => 40,  81 => 35,  73 => 36,  70 => 18,  67 => 33,  62 => 56,  59 => 14,  55 => 22,  51 => 35,  48 => 20,  41 => 19,  38 => 18,  35 => 40,  31 => 15,  28 => 15,);
    }
}
