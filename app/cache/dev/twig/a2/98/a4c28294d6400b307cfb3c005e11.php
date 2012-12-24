<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_a298a4c28294d6400b307cfb3c005e11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        ";
            $context["group_visible"] = false;
            // line 17
            echo "
        ";
            // line 19
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                if ((!$this->getContext($context, "group_visible"))) {
                    // line 20
                    echo "            ";
                    if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")))) {
                        // line 21
                        echo "                ";
                        $context["group_visible"] = true;
                        // line 22
                        echo "            ";
                    }
                    // line 23
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 24
            echo "
        ";
            // line 25
            if ($this->getContext($context, "group_visible")) {
                // line 26
                echo "        <table class=\"zebra-striped sonata-ba-list bordered-table\">
            <thead>
                <tr>
                    <th colspan=\"3\">";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), $this->getAttribute($this->getContext($context, "group"), "label_catalogue")), "html", null, true);
                echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
                // line 34
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 35
                    echo "                    ";
                    if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")))) {
                        // line 36
                        echo "                        <tr>
                            <td class=\"sonata-ba-list-label\">";
                        // line 37
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                        echo "</td>
                            <td>
                                ";
                        // line 39
                        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
                            // line 40
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                            echo "\">
                                        <img src=\"";
                            // line 41
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html", null, true);
                            echo "\"  alt=\"";
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                            echo "\" />";
                            // line 42
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                            // line 43
                            echo "</a>
                                ";
                        }
                        // line 45
                        echo "                            </td>
                            <td>
                                ";
                        // line 47
                        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 48
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">
                                        <img src=\"";
                            // line 49
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/application_view_list.png"), "html", null, true);
                            echo "\" alt=\"";
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                            echo "\" />";
                            // line 50
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                            // line 51
                            echo "</a>
                                ";
                        }
                        // line 53
                        echo "                            </td>
                        </tr>
                    ";
                    }
                    // line 56
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 57
                echo "            </tbody>
        </table>
        ";
            }
            // line 60
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 60,  146 => 57,  140 => 56,  135 => 53,  131 => 51,  129 => 50,  124 => 49,  119 => 48,  117 => 47,  113 => 45,  109 => 43,  107 => 42,  102 => 41,  97 => 40,  95 => 39,  90 => 37,  87 => 36,  84 => 35,  72 => 29,  65 => 25,  62 => 24,  55 => 23,  52 => 22,  49 => 21,  46 => 20,  34 => 16,  29 => 15,  86 => 31,  80 => 34,  74 => 28,  71 => 27,  67 => 26,  63 => 24,  57 => 23,  51 => 21,  48 => 20,  44 => 19,  40 => 19,  37 => 17,  32 => 15,  26 => 14,);
    }
}
