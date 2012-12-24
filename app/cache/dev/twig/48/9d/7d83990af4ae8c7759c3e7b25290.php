<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_489d7d83990af4ae8c7759c3e7b25290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["url"] = (($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) ? ("edit") : ("create"));
        // line 3
        echo "
    ";
        // line 4
        if ((!$this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => $this->getContext($context, "url")), "method"))) {
            // line 5
            echo "        <div>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 9
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => $this->getContext($context, "url"), 1 => array("id" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "uniqid" => $this->getAttribute($this->getContext($context, "admin"), "uniqid"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
            echo " method=\"POST\">

            ";
            // line 11
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "errors")) > 0)) {
                // line 12
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 13
                echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
                echo "
                </div>
            ";
            }
            // line 16
            echo "
            ";
            // line 17
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 18
            echo "
            ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "formgroups"));
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 20
                echo "                <fieldset ";
                if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                    echo "class=\"sonata-ba-fielset-collapsed\"";
                }
                echo ">
                    <legend>
                        ";
                // line 22
                if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                    // line 23
                    echo "                            <a href=\"\" class=\"sonata-ba-collapsed\" title=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_expand", array(), "SonataAdminBundle");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 25
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "
                        ";
                }
                // line 27
                echo "                    </legend>

                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 30
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_group"), "fields"));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 31
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                        // line 32
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), $this->getContext($context, "field_name"), array(), "array"));
                        echo "
                            ";
                    }
                    // line 34
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 35
                echo "                    </div>
                </fieldset>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 38
            echo "
            ";
            // line 39
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 40
            echo "
            ";
            // line 41
            echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
            echo "

            ";
            // line 43
            $this->displayBlock('formactions', $context, $blocks);
            // line 73
            echo "        </form>
    ";
        }
        // line 75
        echo "
";
    }

    // line 17
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
    }

    // line 39
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
    }

    // line 43
    public function block_formactions($context, array $blocks = array())
    {
        // line 44
        echo "            <div class=\"actions\">
                ";
        // line 45
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isxmlhttprequest")) {
            // line 46
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
                // line 47
                echo "                        <input type=\"submit\" class=\"btn primary\" name=\"btn_update\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update", array(), "SonataAdminBundle");
                echo "\"/>
                    ";
            } else {
                // line 49
                echo "                        <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create", array(), "SonataAdminBundle");
                echo "\"/>
                    ";
            }
            // line 51
            echo "                ";
        } else {
            // line 52
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "admin"), "supportsPreviewMode")) {
                // line 53
                echo "                        <input class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_preview", array(), "SonataAdminBundle");
                echo "\"/>
                    ";
            }
            // line 55
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
                // line 56
                echo "                        <input type=\"submit\" class=\"btn primary\" name=\"btn_update_and_edit\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_edit_again", array(), "SonataAdminBundle");
                echo "\"/>

                        ";
                // line 58
                if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 59
                    echo "                            <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle");
                    echo "\"/>
                        ";
                }
                // line 61
                echo "
                        ";
                // line 62
                if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "delete"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "DELETE", 1 => $this->getContext($context, "object")), "method"))) {
                    // line 63
                    echo "                            ";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("delete_or", array(), "SonataAdminBundle");
                    // line 64
                    echo "                            <a class=\"btn danger\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "delete", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_delete", array(), "SonataAdminBundle");
                    echo "</a>
                        ";
                }
                // line 66
                echo "                    ";
            } else {
                // line 67
                echo "                        <input class=\"btn primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_edit_again", array(), "SonataAdminBundle");
                echo "\"/>
                        <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                // line 68
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle");
                echo "\"/>
                    ";
            }
            // line 70
            echo "                ";
        }
        // line 71
        echo "            </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  249 => 71,  246 => 70,  241 => 68,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 62,  217 => 61,  211 => 59,  209 => 58,  203 => 56,  200 => 55,  194 => 53,  191 => 52,  188 => 51,  182 => 49,  176 => 47,  173 => 46,  171 => 45,  168 => 44,  165 => 43,  160 => 39,  155 => 17,  150 => 75,  146 => 73,  144 => 43,  139 => 41,  136 => 40,  134 => 39,  131 => 38,  108 => 31,  104 => 30,  99 => 27,  93 => 25,  85 => 23,  83 => 22,  75 => 20,  71 => 19,  66 => 17,  63 => 16,  57 => 13,  54 => 12,  52 => 11,  38 => 6,  35 => 5,  33 => 4,  30 => 3,  27 => 2,  21 => 1,  126 => 46,  123 => 35,  117 => 34,  111 => 32,  103 => 35,  100 => 34,  92 => 32,  89 => 31,  81 => 29,  78 => 28,  70 => 26,  68 => 18,  64 => 23,  61 => 22,  53 => 18,  47 => 16,  44 => 9,  41 => 14,  10 => 43,);
    }
}
