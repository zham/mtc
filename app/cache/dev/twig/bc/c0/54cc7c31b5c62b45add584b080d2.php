<?php

/* MtcShopBundle:shop:header.html.twig */
class __TwigTemplate_bcc054cc7c31b5c62b45add584b080d2 extends Twig_Template
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
        // line 1
        echo "<div class=\"row\">
\t\t\t<div class=\"five columns\">
\t\t\t\t&nbsp;
\t\t\t</div>
\t\t\t<div class=\"five columns headinfos\">
\t\t\t\t<ul class=\"social-share\">
\t\t\t\t\t<li>Partager-nous sur :</li>
\t\t\t\t\t<li><a href=\"\"><span class=\"glyph social\">d</span> Facebook</a></li>
\t\t\t\t\t<li><a href=\"\"><span class=\"glyph social\">e</span> Twitter</a></li>
\t\t\t\t\t<li><a href=\"\"><span class=\"glyph social\">l</span> Google +</a></li>
\t\t\t\t</ul>
\t\t\t\t 
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"three columns\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"twelve columns\">
\t\t\t\t\t\t<h2 style=\"font-size:24px;\">Mtcommande</h2>
\t\t\t\t\t\t<p>Commande et livraison de course en ligne.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"three columns\">
\t\t\t\t<form action=\"#\" method=\"#\" class=\"nice\">
\t\t\t\t\t<div class=\"row collapse\">
\t\t\t\t\t\t<div class=\"twelve columns\">
\t\t\t\t\t\t\t<label for=\"search\">Mots : Steack haché...</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row collapse\">
\t\t\t\t\t\t<div class=\"eight mobile-three columns\">
\t\t\t\t\t\t\t<input type=\"text\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"four mobile-one columns\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"postfix button\"><span class=\"glyph general-enclosed\">=</span> Ok</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t<div class=\"three columns\">
\t\t\t\t<div class=\"row account\">
\t\t\t\t\t<div class=\"twelve columns\">
\t\t\t\t\t\t<ul class=\"nav-bar\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"has-flyout\">
\t\t\t\t\t\t\t\t<a href=\"\" data-reveal-id=\"myModal\">
\t\t\t\t\t\t\t\t\t<span class=\"glyph social\">x</span >
\t\t\t\t\t\t\t\t\t\t";
        // line 50
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 51
            echo "\t\t\t\t\t\t                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " 
\t\t\t\t\t\t                
\t\t\t\t\t\t\t            ";
        } else {
            // line 54
            echo "\t\t\t\t\t\t\t            \tIdentifiez-vous
\t\t\t\t\t\t\t                ";
            // line 56
            echo "\t\t\t\t\t\t\t            ";
        }
        // line 57
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flyout-toggle\"><span> </span></a>
\t\t\t\t\t\t\t\t<ul class=\"flyout\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Votre compte</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Vos commandes</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Vos listes</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Vos adresses</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Vos informations personnelles</a></li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"three columns\">
\t\t\t\t<div class=\"row cart\">
\t\t\t\t\t<div class=\"twelve columns\">
\t\t\t\t\t\t<ul class=\"nav-bar\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"has-flyout\">
\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"glyph general-enclosed\">2</span> Panier - 1 article(s)</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flyout-toggle\"><span> </span></a>
\t\t\t\t\t\t\t\t<ul class=\"flyout\">
\t\t\t\t\t\t\t\t\t\t<li>Expédition : 6.00€</li>
\t\t\t\t\t\t\t\t\t\t<li>Taxe : 19.60€</li>
\t\t\t\t\t\t\t\t\t\t<li>Total : 25.60€</li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"medium button\">Commander</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t
";
    }

    public function getTemplateName()
    {
        return "MtcShopBundle:shop:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 57,  77 => 54,  70 => 51,  68 => 50,  17 => 1,  148 => 52,  143 => 50,  140 => 49,  134 => 23,  127 => 19,  123 => 18,  119 => 17,  115 => 16,  112 => 15,  109 => 14,  87 => 52,  84 => 51,  82 => 49,  79 => 47,  66 => 36,  62 => 35,  55 => 31,  51 => 30,  47 => 29,  41 => 26,  21 => 1,  103 => 12,  100 => 25,  95 => 27,  93 => 25,  89 => 54,  80 => 56,  75 => 19,  71 => 18,  67 => 16,  59 => 14,  53 => 11,  49 => 10,  44 => 28,  42 => 8,  39 => 14,  36 => 6,  31 => 3,  28 => 2,  209 => 180,  207 => 179,  34 => 12,  32 => 7,  29 => 6,  26 => 5,);
    }
}
