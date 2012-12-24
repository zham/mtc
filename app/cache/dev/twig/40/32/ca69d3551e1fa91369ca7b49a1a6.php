<?php

/* MtcShopBundle:shop:customer_admin_list_commande.html.twig */
class __TwigTemplate_4032ca69d3551e1fa91369ca7b49a1a6 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"fr\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"fr\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"fr\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"fr\"> <!--<![endif]-->
<head>
\t<meta charset=\"utf-8\" />
\t<meta name=\"viewport\" content=\"width=device-width\" />

\t<title>Welcome to Mtcommande</title>
\t<link rel=\"stylesheet\" href=\"css/foundation.css\">
\t<link rel=\"stylesheet\" href=\"css/app.css\">
\t<link rel=\"stylesheet\" href=\"css/foundation-icons-general-enclosed.css\">
\t<link rel=\"stylesheet\" href=\"css/foundation-icons-social.css\">
\t<!--link rel=\"stylesheet\" href=\"css/orbit-1.3.0.css\"-->
\t<!--[if lt IE 9]>
\t\t<link rel=\"stylesheet\" href=\"css/ie.css\">
\t<![endif]-->
\t
\t<script src=\"javascripts/modernizr.foundation.js\"></script>
\t<script src=\"javascripts/jquery.min.js\"></script>
\t<script type='text/javascript' src='javascripts/jquery.orbit-1.3.0.min.js'></script>
\t<!--[if lt IE 9]>
\t\t<script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
\t<script src=\"javascripts/foundation.js\"></script>
\t<script src=\"javascripts/app.js\"></script>
\t <script type=\"text/javascript\">
        \$(document).ready(function() {
        });
        </script>
</head>
<body>
\t<div class=\"container\">
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"three columns\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"twelve columns\">
\t\t\t\t\t\t<h2 style=\"font-size:24px;\">Mtcommande</h2>
\t\t\t\t\t\t<p>Commande et livraison de course en ligne.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"three columns\">
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"three columns\">
\t\t\t\t<div class=\"row account\">
\t\t\t\t\t<div class=\"twelve columns\">
\t\t\t\t\t\t<ul class=\"nav-bar\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"has-flyout\">
\t\t\t\t\t\t\t\t<a href=\"\"><span class=\"glyph social\">x</span> Welcome, Jack</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flyout-toggle\"><span> </span></a>
\t\t\t\t\t\t\t\t<ul class=\"flyout\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Votre compte</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Vos listes</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Vos commandes</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Vos listes</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Vos adresses</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Vos informations personnelles</a></li>
\t\t\t\t\t\t\t\t</ul>
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
\t\t<div class=\"row\">
\t\t\t<div class=\"twelve columns\">
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"twelve columns\">
\t\t\t\t<ul class=\"breadcrumbs\">
\t\t\t\t\t<li><a href=\"#\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"#\">Mon compte</a></li>
\t\t\t\t\t<li class=\"current\"><a href=\"#\">Historique et détails de mes commandes</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">\t\t\t
\t\t\t<div class=\"twelve columns\">\t\t\t\t
\t\t\t\t<fieldset> 
\t\t\t\t\t<legend>Historique et détails de mes commandes</legend>
\t\t\t\t\t<dl class=\"nice contained tabs\">
\t\t\t\t\t\t<dd><a href=\"#top\" class=\"active\">Top Swaps</a></dd>
\t\t\t\t\t\t<dd><a href=\"#popular\">Popular</a></dd>
\t\t\t\t\t\t<dd><a href=\"#trending\">Trending</a></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"nice tabs-content contained\">
\t\t\t\t\t\t<li class=\"active\" id=\"topTab\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"two columns phone-one\">
\t\t\t\t\t\t\t\t\t<a href=\"book.html\"><img src=\"http://placehold.it/150x200\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"seven columns phone-two\">
\t\t\t\t\t\t\t\t\t<h5><a href=\"\">Stardust</a></h5>
\t\t\t\t\t\t\t\t\t<p>In the tranquil fields and meadows of long-ago England, there is a small hamlet that has stood on a jut of granite for 600 years...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"three columns phone-one\">
\t\t\t\t\t\t\t\t\t<a href=\"book.html\" class=\"small blue radius nice button\">Swap for This Book</a>
\t\t\t\t\t\t\t\t\t<span>16 copies available</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"two columns phone-one\">
\t\t\t\t\t\t\t\t\t<a href=\"book.html\"><img src=\"http://placehold.it/150x200\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"seven columns phone-two\">
\t\t\t\t\t\t\t\t\t<h5><a href=\"\">American Gods</a></h5>
\t\t\t\t\t\t\t\t\t<p>A storm is coming&hellip;</p>
\t\t\t\t\t\t\t\t\t<p>Locked behind bars for three years, Shadow did his time, quietly waiting for the magic day when he could return to Eagle Point, Indiana...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"three columns phone-one\">
\t\t\t\t\t\t\t\t\t<a href=\"book.html\" class=\"small blue radius nice button\">Swap for This Book</a>
\t\t\t\t\t\t\t\t\t<span>16 copies available</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"two columns phone-one\">
\t\t\t\t\t\t\t\t\t<a href=\"book.html\"><img src=\"http://placehold.it/150x200\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"seven columns phone-two\">
\t\t\t\t\t\t\t\t\t<h5><a href=\"\">Anansi Boys</a></h5>
\t\t\t\t\t\t\t\t\t<p>Fat Charlie Nancy's normal life ended the moment his father dropped dead on a Florida karaoke stage. Charlie didn't know his dad was a god. And he never knew he had a brother.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"three columns phone-one\">
\t\t\t\t\t\t\t\t\t<a href=\"book.html\" class=\"small blue radius nice button\">Swap for This Book</a>
\t\t\t\t\t\t\t\t\t<span>16 copies available</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li id=\"popularTab\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"two columns phone-one\">
\t\t\t\t\t\t\t\t\t<a href=\"book.html\"><img src=\"http://placehold.it/150x200\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"seven columns phone-two\">
\t\t\t\t\t\t\t\t\t<h5><a href=\"\">Mobile First</a></h5>
\t\t\t\t\t\t\t\t\t<p>Our industry’s long wait for the complete, strategic guide to mobile web design is finally over. Former Yahoo! design architect and co-creator of Bagcheck Luke Wroblewski knows more about mobile experience than the rest of us, and packs all he knows into this entertaining, to-the-point guidebook.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"three columns phone-one\">
\t\t\t\t\t\t\t\t\t<a href=\"book.html\" class=\"small blue radius nice button\">Swap for This Book</a>
\t\t\t\t\t\t\t\t\t<span>9 copies available</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"two columns phone-one\">
\t\t\t\t\t\t\t\t\t<a href=\"book.html\"><img src=\"http://placehold.it/150x200\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"seven columns phone-two\">
\t\t\t\t\t\t\t\t\t<h5><a href=\"\">Designing for Emotion</a></h5>
\t\t\t\t\t\t\t\t\t<p>Make your users fall in love with your site via the precepts packed into this brief, charming book by MailChimp user experience design lead Aarron Walter.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"three columns phone-one\">
\t\t\t\t\t\t\t\t\t<a href=\"book.html\" class=\"small blue radius nice button\">Swap for This Book</a>
\t\t\t\t\t\t\t\t\t<span>16 copies available</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li id=\"trendingTab\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"two columns phone-one\">
\t\t\t\t\t\t\t\t\t<a href=\"book.html\"><img src=\"http://placehold.it/150x200\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"seven columns phone-two\">
\t\t\t\t\t\t\t\t\t<h5><a href=\"\">A Game of Thrones</a></h5>
\t\t\t\t\t\t\t\t\t<p>Martin's Seven Kingdoms resemble England during the Wars of the Roses, with the Stark and Lannister families standing in for the Yorks and Lancasters. The story of these two families and their struggle to control the Iron Throne dominates the foreground...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"three columns phone-one\">
\t\t\t\t\t\t\t\t\t<a href=\"book.html\" class=\"small blue radius nice button\">Swap for This Book</a>
\t\t\t\t\t\t\t\t\t<span>4 copies available</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"two columns phone-one\">
\t\t\t\t\t\t\t\t\t<a href=\"book.html\"><img src=\"http://placehold.it/150x200\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"seven columns phone-two\">
\t\t\t\t\t\t\t\t\t<h5><a href=\"\">A Clash of Kings</a></h5>
\t\t\t\t\t\t\t\t\t<p>The Seven Kingdoms have come apart. Joffrey, Queen Cersei's sadistic son, ascends the Iron Throne following the death of Robert Baratheon, the Usurper, who won it in battle...</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"three columns phone-one\">
\t\t\t\t\t\t\t\t\t<a href=\"book.html\" class=\"small blue radius nice button\">Swap for This Book</a>
\t\t\t\t\t\t\t\t\t<span>7 copies available</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</fieldset>\t\t\t\t
\t\t\t</div>
\t\t</div>\t\t
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
\t</div>\t
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MtcShopBundle:shop:customer_admin_list_commande.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  149 => 67,  175 => 76,  401 => 160,  363 => 142,  359 => 141,  354 => 139,  342 => 135,  326 => 126,  322 => 125,  305 => 118,  291 => 111,  286 => 109,  280 => 106,  219 => 78,  213 => 76,  210 => 75,  206 => 73,  180 => 66,  169 => 75,  159 => 93,  166 => 73,  631 => 382,  622 => 376,  618 => 374,  616 => 370,  606 => 367,  601 => 365,  596 => 363,  592 => 361,  581 => 353,  575 => 350,  571 => 349,  565 => 346,  555 => 339,  537 => 327,  530 => 323,  523 => 319,  519 => 317,  517 => 314,  509 => 310,  499 => 303,  492 => 299,  460 => 280,  428 => 265,  416 => 258,  398 => 159,  392 => 242,  388 => 240,  340 => 210,  327 => 200,  308 => 184,  283 => 168,  279 => 167,  274 => 165,  269 => 163,  201 => 128,  666 => 211,  663 => 210,  658 => 157,  654 => 154,  648 => 153,  644 => 151,  640 => 149,  635 => 148,  632 => 147,  629 => 146,  624 => 145,  621 => 144,  617 => 115,  614 => 114,  608 => 113,  603 => 110,  597 => 109,  589 => 107,  586 => 106,  582 => 105,  577 => 103,  569 => 100,  562 => 99,  559 => 98,  556 => 97,  547 => 334,  544 => 93,  541 => 92,  536 => 91,  531 => 89,  528 => 88,  521 => 83,  510 => 81,  507 => 80,  501 => 51,  497 => 50,  493 => 49,  488 => 47,  484 => 294,  480 => 292,  472 => 43,  468 => 283,  464 => 41,  459 => 39,  455 => 38,  450 => 37,  447 => 36,  437 => 32,  431 => 29,  426 => 27,  423 => 263,  420 => 25,  411 => 215,  409 => 210,  406 => 209,  400 => 206,  389 => 154,  386 => 200,  380 => 198,  375 => 232,  367 => 193,  344 => 184,  303 => 182,  297 => 168,  294 => 167,  276 => 166,  264 => 98,  258 => 158,  256 => 93,  250 => 144,  247 => 143,  231 => 84,  174 => 62,  172 => 126,  164 => 120,  462 => 138,  456 => 279,  413 => 130,  408 => 253,  405 => 128,  396 => 158,  394 => 203,  391 => 202,  382 => 237,  378 => 148,  376 => 115,  373 => 231,  371 => 113,  368 => 144,  364 => 192,  352 => 219,  349 => 138,  346 => 185,  339 => 133,  333 => 178,  328 => 176,  319 => 99,  317 => 171,  312 => 96,  298 => 93,  296 => 86,  287 => 85,  282 => 83,  278 => 82,  273 => 102,  270 => 101,  267 => 100,  254 => 72,  251 => 71,  245 => 69,  243 => 141,  238 => 67,  235 => 66,  226 => 82,  216 => 61,  212 => 59,  186 => 82,  324 => 91,  320 => 172,  295 => 177,  272 => 81,  265 => 78,  262 => 160,  260 => 157,  257 => 73,  248 => 67,  239 => 149,  234 => 138,  232 => 65,  229 => 83,  207 => 54,  170 => 72,  167 => 43,  147 => 87,  585 => 354,  580 => 197,  574 => 102,  572 => 101,  566 => 190,  557 => 187,  553 => 96,  549 => 185,  542 => 184,  538 => 183,  533 => 90,  526 => 179,  518 => 177,  515 => 313,  512 => 175,  506 => 162,  502 => 160,  500 => 159,  494 => 155,  483 => 153,  479 => 152,  476 => 44,  473 => 285,  461 => 138,  458 => 136,  453 => 164,  451 => 277,  446 => 275,  444 => 137,  441 => 33,  438 => 135,  434 => 268,  425 => 124,  417 => 131,  415 => 121,  412 => 120,  404 => 252,  402 => 127,  399 => 126,  393 => 115,  385 => 152,  377 => 236,  374 => 147,  369 => 194,  366 => 107,  358 => 222,  356 => 140,  353 => 103,  345 => 136,  343 => 100,  335 => 95,  332 => 129,  330 => 177,  325 => 175,  323 => 89,  318 => 124,  315 => 87,  301 => 94,  292 => 83,  275 => 82,  271 => 81,  268 => 163,  266 => 79,  259 => 77,  255 => 76,  252 => 92,  244 => 66,  237 => 86,  228 => 67,  221 => 65,  214 => 63,  199 => 57,  183 => 67,  163 => 73,  157 => 71,  154 => 55,  130 => 57,  105 => 32,  101 => 49,  98 => 66,  76 => 29,  118 => 69,  114 => 23,  110 => 50,  106 => 42,  56 => 15,  249 => 74,  246 => 89,  241 => 87,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 138,  217 => 136,  203 => 132,  194 => 87,  191 => 53,  182 => 80,  173 => 46,  168 => 44,  160 => 72,  155 => 92,  150 => 43,  144 => 43,  136 => 60,  85 => 37,  83 => 43,  100 => 25,  61 => 31,  10 => 43,  151 => 65,  65 => 32,  45 => 19,  36 => 6,  18 => 2,  143 => 65,  140 => 54,  119 => 43,  112 => 43,  66 => 49,  21 => 3,  68 => 19,  209 => 58,  205 => 129,  196 => 54,  192 => 54,  189 => 119,  178 => 47,  176 => 46,  165 => 60,  161 => 71,  152 => 60,  148 => 64,  145 => 80,  141 => 55,  134 => 51,  132 => 26,  127 => 47,  123 => 46,  109 => 61,  93 => 25,  90 => 42,  54 => 17,  133 => 44,  124 => 56,  111 => 40,  80 => 20,  60 => 27,  52 => 29,  97 => 51,  95 => 27,  88 => 43,  78 => 37,  71 => 18,  25 => 2,  72 => 39,  64 => 19,  53 => 11,  34 => 17,  92 => 29,  86 => 38,  79 => 26,  19 => 12,  42 => 8,  40 => 22,  29 => 6,  26 => 3,  224 => 81,  215 => 136,  211 => 134,  204 => 84,  200 => 72,  195 => 48,  193 => 79,  190 => 84,  188 => 69,  185 => 68,  179 => 115,  177 => 63,  171 => 75,  162 => 59,  158 => 70,  156 => 69,  153 => 68,  146 => 64,  142 => 63,  137 => 63,  126 => 35,  120 => 45,  117 => 56,  103 => 26,  74 => 35,  47 => 15,  32 => 11,  24 => 2,  22 => 14,  23 => 5,  17 => 1,  69 => 33,  63 => 39,  58 => 22,  49 => 10,  43 => 14,  37 => 11,  20 => 23,  139 => 82,  131 => 61,  128 => 46,  125 => 59,  121 => 55,  115 => 50,  107 => 51,  99 => 40,  96 => 63,  91 => 38,  82 => 27,  77 => 35,  75 => 19,  57 => 23,  50 => 18,  46 => 19,  44 => 9,  39 => 7,  33 => 17,  30 => 14,  27 => 4,  135 => 59,  129 => 75,  122 => 71,  116 => 44,  113 => 63,  108 => 30,  104 => 55,  102 => 41,  94 => 21,  89 => 23,  87 => 41,  84 => 40,  81 => 39,  73 => 34,  70 => 25,  67 => 16,  62 => 25,  59 => 14,  55 => 20,  51 => 16,  48 => 28,  41 => 8,  38 => 12,  35 => 6,  31 => 8,  28 => 7,);
    }
}
