<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_f44efa5ec47b8f76b888b96376624144 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "editable")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "EDIT", 1 => $this->getContext($context, "object")), "method"))) {
            // line 17
            echo "    ";
            if ($this->getContext($context, "value")) {
                // line 18
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute($this->getContext($context, "field_description"), "name"), "objectId" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "value" => 0, "code" => $this->getAttribute($this->getContext($context, "admin"), "code", array(0 => $this->getContext($context, "object")), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <img
                src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/accept.png"), "html", null, true);
                echo "\"
                alt=\"";
                // line 21
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                echo "\"
                />
        </a>
    ";
            } else {
                // line 25
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute($this->getContext($context, "field_description"), "name"), "objectId" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "value" => 1, "code" => $this->getAttribute($this->getContext($context, "admin"), "code", array(0 => $this->getContext($context, "object")), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <img
                src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/exclamation.png"), "html", null, true);
                echo "\"
                alt=\"";
                // line 28
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                echo "\" />
        </a>
    ";
            }
        } else {
            // line 32
            echo "    ";
            if ($this->getContext($context, "value")) {
                // line 33
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/accept.png"), "html", null, true);
                echo "\" alt=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                echo "\" />
    ";
            } else {
                // line 35
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/exclamation.png"), "html", null, true);
                echo "\" alt=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                echo "\" />
    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 35,  70 => 32,  63 => 28,  53 => 25,  46 => 21,  31 => 16,  114 => 23,  100 => 22,  94 => 21,  59 => 27,  45 => 25,  39 => 23,  35 => 21,  29 => 15,  27 => 13,  18 => 11,  21 => 12,  17 => 11,  666 => 211,  663 => 210,  658 => 157,  654 => 154,  648 => 153,  644 => 151,  640 => 149,  635 => 148,  632 => 147,  629 => 146,  624 => 145,  621 => 144,  617 => 115,  614 => 114,  608 => 113,  603 => 110,  597 => 109,  589 => 107,  586 => 106,  582 => 105,  577 => 103,  569 => 100,  562 => 99,  559 => 98,  556 => 97,  547 => 95,  544 => 93,  541 => 92,  536 => 91,  531 => 89,  528 => 88,  521 => 83,  510 => 81,  507 => 80,  501 => 51,  497 => 50,  493 => 49,  488 => 47,  484 => 46,  480 => 45,  472 => 43,  468 => 42,  464 => 41,  459 => 39,  455 => 38,  450 => 37,  447 => 36,  437 => 32,  431 => 29,  426 => 27,  423 => 26,  420 => 25,  411 => 215,  409 => 210,  406 => 209,  400 => 206,  394 => 203,  391 => 202,  389 => 201,  386 => 200,  380 => 198,  378 => 197,  375 => 196,  367 => 193,  364 => 192,  352 => 187,  346 => 185,  344 => 184,  339 => 181,  333 => 178,  328 => 176,  320 => 172,  317 => 171,  303 => 170,  297 => 168,  294 => 167,  276 => 166,  270 => 164,  264 => 161,  262 => 160,  258 => 158,  256 => 157,  250 => 144,  247 => 143,  243 => 141,  234 => 138,  231 => 137,  203 => 132,  200 => 131,  182 => 130,  179 => 129,  174 => 127,  172 => 126,  164 => 120,  158 => 118,  152 => 88,  143 => 79,  126 => 70,  120 => 68,  103 => 66,  99 => 64,  96 => 63,  76 => 20,  73 => 33,  67 => 58,  60 => 55,  54 => 36,  51 => 35,  49 => 25,  38 => 18,  34 => 16,  32 => 16,  30 => 14,  28 => 13,  26 => 14,  24 => 11,  585 => 199,  580 => 197,  574 => 102,  572 => 101,  566 => 190,  557 => 187,  553 => 96,  549 => 185,  542 => 184,  538 => 183,  533 => 90,  526 => 179,  518 => 177,  515 => 82,  512 => 175,  506 => 162,  502 => 160,  500 => 159,  494 => 155,  483 => 153,  479 => 152,  476 => 44,  473 => 150,  461 => 138,  458 => 137,  453 => 164,  451 => 150,  446 => 147,  444 => 137,  441 => 33,  438 => 135,  434 => 131,  425 => 124,  417 => 122,  415 => 121,  412 => 120,  404 => 118,  402 => 117,  399 => 116,  393 => 115,  385 => 113,  377 => 111,  374 => 110,  369 => 194,  366 => 107,  358 => 190,  356 => 189,  353 => 103,  345 => 101,  343 => 100,  335 => 95,  332 => 94,  330 => 177,  325 => 175,  323 => 89,  318 => 86,  315 => 85,  301 => 84,  292 => 83,  275 => 82,  271 => 81,  268 => 163,  266 => 79,  259 => 77,  255 => 76,  252 => 155,  249 => 74,  244 => 71,  237 => 139,  228 => 67,  224 => 66,  221 => 65,  217 => 136,  214 => 63,  211 => 134,  205 => 58,  199 => 57,  196 => 56,  192 => 54,  188 => 53,  183 => 52,  177 => 128,  165 => 50,  163 => 49,  160 => 48,  157 => 47,  154 => 116,  151 => 45,  148 => 86,  145 => 80,  142 => 42,  139 => 41,  136 => 74,  130 => 72,  127 => 35,  123 => 69,  119 => 32,  116 => 31,  110 => 171,  108 => 170,  105 => 169,  101 => 167,  98 => 166,  95 => 135,  93 => 134,  89 => 132,  87 => 74,  84 => 73,  82 => 62,  79 => 62,  77 => 31,  71 => 29,  68 => 28,  65 => 57,  62 => 56,  56 => 53,  50 => 17,  42 => 20,  40 => 19,  36 => 18,  33 => 17,);
    }
}
