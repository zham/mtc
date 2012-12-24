<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig */
class __TwigTemplate_dffcafc82858217727a37f08ac91cd39 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin")) {
            // line 13
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 14
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" >
            ";
            // line 15
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
            echo "
        </span>

        <span id=\"field_actions_";
            // line 18
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 19
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method"))) {
                // line 20
                echo "                <a
                    href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\"
                    onclick=\"return start_field_dialog_form_add_";
                // line 22
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                    class=\"sonata-ba-action\"
                    title=\"";
                // line 24
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                echo "\"
                    >
                        <img
                            src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html", null, true);
                echo "\"
                            alt=\"";
                // line 28
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                echo "\"
                        />
                </a>
            ";
            }
            // line 32
            echo "        </span>

        <div style=\"display: none\" id=\"field_dialog_";
            // line 34
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">
        </div>
    </div>

    ";
            // line 38
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 34,  65 => 28,  55 => 24,  50 => 22,  46 => 21,  31 => 15,  22 => 13,  20 => 12,  17 => 11,  462 => 138,  458 => 136,  456 => 135,  451 => 134,  434 => 132,  417 => 131,  413 => 130,  408 => 129,  405 => 128,  402 => 127,  399 => 126,  396 => 125,  394 => 124,  391 => 123,  382 => 118,  378 => 116,  376 => 115,  373 => 114,  371 => 113,  368 => 112,  364 => 92,  358 => 90,  352 => 88,  349 => 87,  346 => 86,  339 => 107,  333 => 104,  330 => 103,  328 => 102,  325 => 101,  319 => 99,  317 => 98,  312 => 96,  301 => 94,  298 => 93,  296 => 86,  287 => 85,  282 => 83,  278 => 82,  273 => 81,  270 => 80,  267 => 79,  257 => 73,  254 => 72,  251 => 71,  245 => 69,  243 => 68,  238 => 67,  235 => 66,  232 => 65,  226 => 63,  224 => 62,  216 => 61,  212 => 59,  196 => 54,  186 => 51,  183 => 50,  178 => 47,  158 => 45,  153 => 44,  147 => 42,  102 => 27,  96 => 23,  94 => 22,  73 => 19,  49 => 122,  42 => 79,  39 => 78,  37 => 18,  34 => 49,  29 => 41,  24 => 11,  169 => 75,  163 => 73,  157 => 71,  149 => 67,  143 => 65,  137 => 36,  125 => 32,  122 => 58,  120 => 57,  109 => 52,  107 => 30,  101 => 49,  95 => 47,  77 => 41,  72 => 32,  69 => 37,  67 => 17,  59 => 14,  56 => 13,  51 => 25,  48 => 24,  43 => 20,  40 => 20,  32 => 42,  249 => 71,  246 => 70,  241 => 68,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 62,  217 => 61,  211 => 59,  209 => 58,  203 => 56,  200 => 55,  194 => 53,  191 => 53,  188 => 52,  182 => 49,  176 => 47,  173 => 46,  171 => 45,  168 => 44,  165 => 43,  160 => 72,  155 => 17,  150 => 43,  146 => 73,  144 => 43,  139 => 41,  136 => 40,  134 => 39,  131 => 34,  108 => 31,  104 => 30,  99 => 25,  93 => 25,  85 => 23,  83 => 38,  75 => 40,  71 => 19,  66 => 17,  63 => 16,  57 => 13,  54 => 12,  52 => 123,  38 => 6,  35 => 17,  33 => 4,  30 => 3,  27 => 14,  21 => 1,  126 => 46,  123 => 31,  117 => 56,  111 => 32,  103 => 35,  100 => 34,  92 => 32,  89 => 20,  81 => 29,  78 => 28,  70 => 18,  68 => 18,  64 => 16,  61 => 27,  53 => 18,  47 => 112,  44 => 111,  41 => 19,  10 => 43,);
    }
}
