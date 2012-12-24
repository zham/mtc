<?php

/* MtcShopBundle:shop:index.html.twig */
class __TwigTemplate_92ae745b5ace5e3d825ca7dca6739c92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MtcShopBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MtcShopBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $this->env->loadTemplate("MtcShopBundle:shop:header.html.twig")->display($context);
        // line 8
        echo " 

\t<div class=\"container\">
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"twelve columns\">
\t\t\t\t<ul class=\"nav-bar\">
\t\t\t\t\t<li><a href=\"#\">A propos</a></li>
\t\t\t\t\t<li class=\"has-flyout\">
\t\t\t\t\t\t<a href=\"#\">Boucherie</a>
\t\t\t\t\t\t<a href=\"#\" class=\"flyout-toggle\"><span> </span></a>
\t\t\t\t\t\t<ul class=\"flyout\">
\t\t\t\t\t\t\t<li><a href=\"#\">Boeuf</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Porc</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Agneau</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Volaille</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"has-flyout\">
\t\t\t\t\t\t<a href=\"#\">Charcuterie</a>
\t\t\t\t\t\t<a href=\"#\" class=\"flyout-toggle\"><span></span></a>
\t\t\t\t\t\t<div class=\"flyout\">
\t\t\t\t\t\tContent...
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"has-flyout\">
\t\t\t\t\t\t<a href=\"#\">Traiteur</a>
\t\t\t\t\t\t<a href=\"#\" class=\"flyout-toggle\"><span></span></a>
\t\t\t\t\t\t<div class=\"flyout\">
\t\t\t\t\t\tContent...
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"has-flyout\">
\t\t\t\t\t\t<a href=\"#\">Buffet</a>
\t\t\t\t\t\t<a href=\"#\" class=\"flyout-toggle\"><span></span></a>
\t\t\t\t\t\t<div class=\"flyout\">
\t\t\t\t\t\tContent...
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"has-flyout\">
\t\t\t\t\t\t<a href=\"#\">Menus</a>
\t\t\t\t\t\t<a href=\"#\" class=\"flyout-toggle\"><span></span></a>
\t\t\t\t\t\t<div class=\"flyout\">
\t\t\t\t\t\tContent...
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">\t\t\t

\t\t\t\t<div class=\"twelve columns\">

\t\t\t\t\t<div class=\"slider-background\"></div>

\t\t\t\t\t<div id=\"featured\">

\t\t\t\t\t\t<img src=\"http://placehold.it/980x390\" alt=\"Overflow: Hidden No More\" data-caption=\"#htmlCaption\"/>
\t\t\t\t\t\t<img src=\"http://placehold.it/980x390\" alt=\"Overflow: Hidden No More\" data-caption=\"#htmlCaption\"/>
\t\t\t\t\t\t<img src=\"http://placehold.it/980x390\" alt=\"Overflow: Hidden No More\" data-caption=\"#htmlCaption\"/>

\t\t\t\t\t</div>

\t\t\t\t\t<!-- Captions for Orbit -->

\t\t\t\t\t<span class=\"orbit-caption\" id=\"htmlCaption\" style=\"margin-left:10px;\">Bienvenue sur ... application de commande et livraison de course en ligne..</span>

\t\t\t\t</div>

\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"twelve columns\">
\t\t\t\t<h2><a href=\"#\">Nouveautés</a></h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">\t\t\t
\t\t\t<div class=\"three columns\">
\t\t\t\t<h3><a href=\"#\">Article 01</a></h3>
\t\t\t\t<a href=\"#\"><img src=\"http://placehold.it/200x200\" alt=\"Article 01\" class=\"imgwithborder\"></a>
\t\t\t\t<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition...</p>
\t\t\t\t<a href=\"#\">Lire &rarr;</a>
\t\t\t</div>
\t\t\t<div class=\"three columns\">
\t\t\t\t<h3><a href=\"#\">Article 02</a></h3>
\t\t\t\t<a href=\"#\"><img src=\"http://placehold.it/200x200\" alt=\"Article 02\" class=\"imgwithborder\"></a>
\t\t\t\t<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition...</p>
\t\t\t\t<a href=\"#\">Lire &rarr;</a>
\t\t\t</div>
\t\t\t<div class=\"three columns\">
\t\t\t\t<h3><a href=\"#\">Article 03</a></h3>
\t\t\t\t<a href=\"#\"><img src=\"http://placehold.it/200x200\" alt=\"Article 03\" class=\"imgwithborder\"></a>
\t\t\t\t<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition...</p>
\t\t\t\t<a href=\"#\">Lire &rarr;</a>
\t\t\t</div>
\t\t\t<div class=\"three columns\">
\t\t\t\t<h3><a href=\"#\">Article 04</a></h3>
\t\t\t\t<a href=\"#\"><img src=\"http://placehold.it/200x200\" alt=\"Article 04\" class=\"imgwithborder\"></a>
\t\t\t\t<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition...</p>
\t\t\t\t<a href=\"#\">Lire &rarr;</a>
\t\t\t</div>\t\t\t
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"twelve columns\"><hr /></div>
\t\t</div>\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"twelve columns\">
\t\t\t\t<h2><a href=\"#\">Meilleurs Ventes</a></h2>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">\t\t\t
\t\t\t<div class=\"three columns\">
\t\t\t\t<h3><a href=\"#\">Article 01</a></h3>
\t\t\t\t<a href=\"#\"><img src=\"http://placehold.it/200x200\" alt=\"Article 01\" class=\"imgwithborder\"></a>
\t\t\t\t<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition...</p>
\t\t\t\t<a href=\"#\">Lire &rarr;</a>
\t\t\t</div>
\t\t\t<div class=\"three columns\">
\t\t\t\t<h3><a href=\"#\">Article 02</a></h3>
\t\t\t\t<a href=\"#\"><img src=\"http://placehold.it/200x200\" alt=\"Article 02\" class=\"imgwithborder\"></a>
\t\t\t\t<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition...</p>
\t\t\t\t<a href=\"#\">Lire &rarr;</a>
\t\t\t</div>
\t\t\t<div class=\"three columns\">
\t\t\t\t<h3><a href=\"#\">Article 03</a></h3>
\t\t\t\t<a href=\"#\"><img src=\"http://placehold.it/200x200\" alt=\"Article 03\" class=\"imgwithborder\"></a>
\t\t\t\t<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition...</p>
\t\t\t\t<a href=\"#\">Lire &rarr;</a>
\t\t\t</div>
\t\t\t<div class=\"three columns\">
\t\t\t\t<h3><a href=\"#\">Article 04</a></h3>
\t\t\t\t<a href=\"#\"><img src=\"http://placehold.it/200x200\" alt=\"Article 04\" class=\"imgwithborder\"></a>
\t\t\t\t<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition...</p>
\t\t\t\t<a href=\"#\">Lire &rarr;</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"twelve columns\"><hr /></div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"four columns\">
\t\t\t\t<h4>Contactez-nous</h4>
\t\t\t\t<ul class=\"vcard\" style=\"border:0px;\">
\t\t\t\t\t<li class=\"org\"><strong>mtcommande.fr</strong></li>
\t\t\t\t\t<li class=\"fn\"><strong>Boucherie Maison Terrier</strong></li>
\t\t\t\t\t<li class=\"adr\">
\t\t\t\t\t<li class=\"street-address\">16, rue du Musée</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t\t<span class=\"postal-code\">59270</span> <span class=\"locality\">Bailleul</span>,
\t\t\t\t\t\t\t<span class=\"region\">Nord</span>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"country-name\">France</li>
\t\t\t\t\t<li>Tel: <span class=\"tel\"> <a href=\"tel:0328492769\">+33(0)3.28.49.27.69</a></span></li>
\t\t\t\t\t<li>Email: <span class=\"email\">contact@mtcommande.fr</span></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"four columns\">
\t\t\t\t<h4>Informations</h4>
\t\t\t\t<ul class=\"vcard\" style=\"border:0px;\">
\t\t\t\t\t<li><a href=\"\">Conditions d'utilisation</a></li>
\t\t\t\t\t<li><a href=\"\">A propos</a></li>
\t\t\t\t\t<li><a href=\"\">A propos</a></li>
\t\t\t\t\t<li><a href=\"\">Politique de confidentialité</a></li>
\t\t\t\t\t<li><a href=\"\">Droits de rétractation</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"four columns\">
\t\t\t\t<h4>...</h4>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"myModal\" class=\"reveal-modal [expand, xlarge, large, medium, small]\">
  \t\t
  \t\t";
        // line 179
        $this->env->loadTemplate("MtcShopBundle:Security:login.html.twig")->display($context);
        // line 180
        echo "  \t\t
        \t
  \t\t\t<a class=\"close-reveal-modal\">&#215;</a>
\t\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "MtcShopBundle:shop:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 180,  207 => 179,  34 => 8,  32 => 7,  29 => 6,  26 => 5,);
    }
}
