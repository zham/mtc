<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_6fbf3b0a4b838c1aabb9c79310e46ba9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "id"), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>";
    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 13,  23 => 12,  18 => 11,  151 => 60,  146 => 57,  140 => 56,  135 => 53,  131 => 51,  129 => 50,  124 => 49,  119 => 48,  117 => 47,  113 => 45,  109 => 43,  107 => 42,  102 => 41,  97 => 40,  95 => 39,  90 => 37,  87 => 36,  84 => 35,  72 => 29,  65 => 25,  62 => 24,  55 => 23,  52 => 22,  49 => 21,  46 => 20,  34 => 16,  29 => 12,  86 => 31,  80 => 34,  74 => 28,  71 => 27,  67 => 26,  63 => 24,  57 => 23,  51 => 21,  48 => 20,  44 => 19,  40 => 19,  37 => 17,  32 => 15,  26 => 14,);
    }
}
