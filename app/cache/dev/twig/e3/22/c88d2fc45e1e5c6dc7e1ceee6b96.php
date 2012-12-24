<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_e322c88d2fc45e1e5c6dc7e1ceee6b96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions\">
        <ul>
            ";
        // line 17
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 18
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
            // line 21
            echo "                <li class=\"btn sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_list", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 23
        echo "        </ul>
    </div>
";
    }

    // line 27
    public function block_side_menu($context, array $blocks = array())
    {
        if (array_key_exists("action", $context)) {
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array(), "list");
        }
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "
    Redefine the content block in your action template

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 60,  65 => 25,  45 => 17,  36 => 14,  18 => 1,  143 => 50,  140 => 56,  119 => 48,  112 => 15,  66 => 18,  21 => 3,  68 => 29,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 52,  145 => 56,  141 => 55,  134 => 23,  132 => 49,  127 => 19,  123 => 18,  109 => 43,  93 => 33,  90 => 37,  54 => 23,  133 => 44,  124 => 49,  111 => 37,  80 => 30,  60 => 27,  52 => 22,  97 => 40,  95 => 39,  88 => 26,  78 => 25,  71 => 30,  25 => 13,  72 => 29,  64 => 17,  53 => 13,  34 => 16,  92 => 20,  86 => 31,  79 => 47,  19 => 2,  42 => 16,  40 => 17,  29 => 15,  26 => 14,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 57,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 47,  103 => 12,  74 => 28,  47 => 29,  32 => 15,  24 => 11,  22 => 6,  23 => 12,  17 => 1,  69 => 20,  63 => 24,  58 => 9,  49 => 21,  43 => 20,  37 => 16,  20 => 1,  139 => 26,  131 => 51,  128 => 43,  125 => 42,  121 => 40,  115 => 16,  107 => 42,  99 => 34,  96 => 34,  91 => 33,  82 => 19,  77 => 16,  75 => 24,  57 => 23,  50 => 11,  46 => 21,  44 => 19,  39 => 15,  33 => 17,  30 => 4,  27 => 12,  135 => 53,  129 => 50,  122 => 46,  116 => 42,  113 => 45,  108 => 40,  104 => 24,  102 => 41,  94 => 24,  89 => 54,  87 => 36,  84 => 35,  81 => 26,  73 => 19,  70 => 26,  67 => 26,  62 => 24,  59 => 14,  55 => 23,  51 => 21,  48 => 20,  41 => 8,  38 => 7,  35 => 18,  31 => 4,  28 => 1,);
    }
}
