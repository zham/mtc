<?php

/* MtcShopBundle:Security:login.html.twig */
class __TwigTemplate_d74e401502f583b27e2af5838587a0fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 23
        echo "
";
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "
<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"\" />

    <label for=\"username\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "UserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" />

    <label for=\"password\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "UserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "UserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "UserBundle"), "html", null, true);
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "MtcShopBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  43 => 14,  37 => 11,  25 => 2,  20 => 23,  18 => 2,  83 => 57,  77 => 54,  70 => 51,  68 => 50,  17 => 1,  148 => 52,  143 => 50,  140 => 49,  134 => 23,  127 => 19,  123 => 18,  119 => 17,  115 => 16,  112 => 15,  109 => 14,  87 => 52,  84 => 51,  82 => 49,  79 => 47,  66 => 36,  62 => 35,  55 => 20,  51 => 30,  47 => 29,  41 => 26,  21 => 1,  103 => 12,  100 => 25,  95 => 27,  93 => 25,  89 => 54,  80 => 56,  75 => 19,  71 => 18,  67 => 16,  59 => 14,  53 => 11,  49 => 10,  44 => 28,  42 => 8,  39 => 14,  36 => 6,  31 => 8,  28 => 7,  209 => 180,  207 => 179,  34 => 12,  32 => 7,  29 => 6,  26 => 5,);
    }
}
