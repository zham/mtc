<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_70619dc17a8f086b8e4db01ef27bafe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Symfony\">
                </a>
                <form id=\"symfony-search\" method=\"GET\" action=\"http://symfony.com/search\">
                    <label for=\"symfony-search-field\"><span>Search on Symfony Website</span></label>
                    <input name=\"q\" id=\"symfony-search-field\" type=\"search\" placeholder=\"Search on Symfony website\" class=\"medium_txt\">
                    <input type=\"submit\" class=\"symfony-button-grey\" value=\"OK\" />
                </form>
            </div>

            ";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method")) {
            // line 23
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 27
        echo "
            ";
        // line 28
        $this->displayBlock('content_header', $context, $blocks);
        // line 37
        echo "
            <div class=\"symfony-content\">
                ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "            </div>

            ";
        // line 43
        if (array_key_exists("code", $context)) {
            // line 44
            echo "                <h2>Code behind this page</h2>
                <div class=\"symfony-content\">";
            // line 45
            echo $this->getContext($context, "code");
            echo "</div>
            ";
        }
        // line 47
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 28
    public function block_content_header($context, array $blocks = array())
    {
        // line 29
        echo "                <ul id=\"menu\">
                    ";
        // line 30
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 33
        echo "                </ul>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 30
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 31
        echo "                        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Demo Home</a></li>
                    ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 67,  175 => 76,  401 => 160,  363 => 142,  359 => 141,  354 => 139,  342 => 135,  326 => 126,  322 => 125,  305 => 118,  291 => 111,  286 => 109,  280 => 106,  219 => 78,  213 => 76,  210 => 75,  206 => 73,  180 => 66,  169 => 75,  159 => 93,  166 => 73,  631 => 382,  622 => 376,  618 => 374,  616 => 370,  606 => 367,  601 => 365,  596 => 363,  592 => 361,  581 => 353,  575 => 350,  571 => 349,  565 => 346,  555 => 339,  537 => 327,  530 => 323,  523 => 319,  519 => 317,  517 => 314,  509 => 310,  499 => 303,  492 => 299,  460 => 280,  428 => 265,  416 => 258,  398 => 159,  392 => 242,  388 => 240,  340 => 210,  327 => 200,  308 => 184,  283 => 168,  279 => 167,  274 => 165,  269 => 163,  201 => 128,  666 => 211,  663 => 210,  658 => 157,  654 => 154,  648 => 153,  644 => 151,  640 => 149,  635 => 148,  632 => 147,  629 => 146,  624 => 145,  621 => 144,  617 => 115,  614 => 114,  608 => 113,  603 => 110,  597 => 109,  589 => 107,  586 => 106,  582 => 105,  577 => 103,  569 => 100,  562 => 99,  559 => 98,  556 => 97,  547 => 334,  544 => 93,  541 => 92,  536 => 91,  531 => 89,  528 => 88,  521 => 83,  510 => 81,  507 => 80,  501 => 51,  497 => 50,  493 => 49,  488 => 47,  484 => 294,  480 => 292,  472 => 43,  468 => 283,  464 => 41,  459 => 39,  455 => 38,  450 => 37,  447 => 36,  437 => 32,  431 => 29,  426 => 27,  423 => 263,  420 => 25,  411 => 215,  409 => 210,  406 => 209,  400 => 206,  389 => 154,  386 => 200,  380 => 198,  375 => 232,  367 => 193,  344 => 184,  303 => 182,  297 => 168,  294 => 167,  276 => 166,  264 => 98,  258 => 158,  256 => 93,  250 => 144,  247 => 143,  231 => 84,  174 => 62,  172 => 126,  164 => 120,  462 => 138,  456 => 279,  413 => 130,  408 => 253,  405 => 128,  396 => 158,  394 => 203,  391 => 202,  382 => 237,  378 => 148,  376 => 115,  373 => 231,  371 => 113,  368 => 144,  364 => 192,  352 => 219,  349 => 138,  346 => 185,  339 => 133,  333 => 178,  328 => 176,  319 => 99,  317 => 171,  312 => 96,  298 => 93,  296 => 86,  287 => 85,  282 => 83,  278 => 82,  273 => 102,  270 => 101,  267 => 100,  254 => 72,  251 => 71,  245 => 69,  243 => 141,  238 => 67,  235 => 66,  226 => 82,  216 => 61,  212 => 59,  186 => 82,  324 => 91,  320 => 172,  295 => 177,  272 => 81,  265 => 78,  262 => 160,  260 => 157,  257 => 73,  248 => 67,  239 => 149,  234 => 138,  232 => 65,  229 => 83,  207 => 179,  170 => 72,  167 => 43,  147 => 87,  585 => 354,  580 => 197,  574 => 102,  572 => 101,  566 => 190,  557 => 187,  553 => 96,  549 => 185,  542 => 184,  538 => 183,  533 => 90,  526 => 179,  518 => 177,  515 => 313,  512 => 175,  506 => 162,  502 => 160,  500 => 159,  494 => 155,  483 => 153,  479 => 152,  476 => 44,  473 => 285,  461 => 138,  458 => 136,  453 => 164,  451 => 277,  446 => 275,  444 => 137,  441 => 33,  438 => 135,  434 => 268,  425 => 124,  417 => 131,  415 => 121,  412 => 120,  404 => 252,  402 => 127,  399 => 126,  393 => 115,  385 => 152,  377 => 236,  374 => 147,  369 => 194,  366 => 107,  358 => 222,  356 => 140,  353 => 103,  345 => 136,  343 => 100,  335 => 95,  332 => 129,  330 => 177,  325 => 175,  323 => 89,  318 => 124,  315 => 87,  301 => 94,  292 => 83,  275 => 82,  271 => 81,  268 => 163,  266 => 79,  259 => 77,  255 => 76,  252 => 92,  244 => 66,  237 => 86,  228 => 67,  221 => 65,  214 => 63,  199 => 57,  183 => 67,  163 => 73,  157 => 71,  154 => 55,  130 => 57,  105 => 32,  101 => 49,  98 => 66,  76 => 29,  118 => 69,  114 => 30,  110 => 50,  106 => 42,  56 => 15,  249 => 74,  246 => 89,  241 => 87,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 138,  217 => 136,  203 => 132,  194 => 87,  191 => 53,  182 => 80,  173 => 46,  168 => 44,  160 => 72,  155 => 92,  150 => 43,  144 => 43,  136 => 40,  85 => 43,  83 => 57,  100 => 25,  61 => 23,  10 => 43,  151 => 65,  65 => 32,  45 => 19,  36 => 6,  18 => 2,  143 => 65,  140 => 54,  119 => 43,  112 => 43,  66 => 49,  21 => 1,  68 => 50,  209 => 180,  205 => 129,  196 => 54,  192 => 54,  189 => 119,  178 => 47,  176 => 46,  165 => 60,  161 => 71,  152 => 60,  148 => 64,  145 => 80,  141 => 55,  134 => 51,  132 => 26,  127 => 47,  123 => 30,  109 => 61,  93 => 25,  90 => 45,  54 => 17,  133 => 39,  124 => 56,  111 => 29,  80 => 56,  60 => 27,  52 => 29,  97 => 51,  95 => 47,  88 => 43,  78 => 37,  71 => 18,  25 => 2,  72 => 39,  64 => 24,  53 => 11,  34 => 8,  92 => 29,  86 => 38,  79 => 39,  19 => 12,  42 => 8,  40 => 22,  29 => 6,  26 => 5,  224 => 81,  215 => 136,  211 => 134,  204 => 84,  200 => 72,  195 => 48,  193 => 79,  190 => 84,  188 => 69,  185 => 68,  179 => 115,  177 => 63,  171 => 75,  162 => 59,  158 => 70,  156 => 69,  153 => 68,  146 => 64,  142 => 63,  137 => 63,  126 => 31,  120 => 45,  117 => 56,  103 => 26,  74 => 35,  47 => 13,  32 => 7,  24 => 2,  22 => 14,  23 => 5,  17 => 1,  69 => 33,  63 => 39,  58 => 22,  49 => 10,  43 => 12,  37 => 11,  20 => 23,  139 => 82,  131 => 61,  128 => 46,  125 => 59,  121 => 55,  115 => 50,  107 => 51,  99 => 40,  96 => 63,  91 => 38,  82 => 27,  77 => 54,  75 => 37,  57 => 23,  50 => 10,  46 => 9,  44 => 9,  39 => 7,  33 => 5,  30 => 14,  27 => 5,  135 => 59,  129 => 75,  122 => 71,  116 => 33,  113 => 63,  108 => 28,  104 => 55,  102 => 6,  94 => 21,  89 => 23,  87 => 44,  84 => 40,  81 => 41,  73 => 28,  70 => 27,  67 => 16,  62 => 25,  59 => 22,  55 => 12,  51 => 16,  48 => 28,  41 => 7,  38 => 12,  35 => 7,  31 => 6,  28 => 7,);
    }
}
