<?php

/* ::layout.html.twig */
class __TwigTemplate_945b6cd9811b0aef139a1f0489709004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
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
<html>
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width\" />
\t

\t\t<title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t
\t\t";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "\t\t<!--  script type=\"text/javascript\">alert(\"toto\");</script-->\t
\t\t";
        // line 28
        echo "\t
\t\t\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascripts/modernizr.foundation.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascripts/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type='text/javascript' src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascripts/jquery.orbit-1.3.0.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!--[if lt IE 9]>
\t\t\t\t<script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
\t\t\t<![endif]-->
\t\t\t<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascripts/foundation.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("javascripts/app.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t        \$(document).ready(function() {
\t\t            \$('#featured').orbit({
\t\t                    \"bullets\" : true,
\t\t                    \"animation\" : \"fade\"
\t\t                });
\t\t        });
\t\t     </script>
\t\t    
\t\t";
        // line 47
        echo "\t</head>
";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 51
        echo "\t
";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "<script type=\"text/javascript\">
  \$(document).ready(function() {
    \$(\"#myModal\").click(function() {
      \$(\"#myModal\").reveal();
    }
    \$('#myModal').trigger('reveal:close');
    );
  });
</script>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome to Mtcommande";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "\t\t
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/foundation-icons-general-enclosed.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/foundation-icons-social.css"), "html", null, true);
        echo "\">
\t\t\t<!--link rel=\"stylesheet\" href=\"css/orbit-1.3.0.css\"-->
\t\t\t<!--[if lt IE 9]>
\t\t\t<link rel=\"stylesheet\" href=\"css/ie.css\"><![endif]-->
\t\t\t<!--  link rel=\"stylesheet\" href=\"";
        // line 23
        echo "\" type=\"text/css\" /-->
\t\t\t<!--  link rel=\"stylesheet\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/smoothness/jquery-ui.css\" /-->
\t\t";
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        // line 50
        echo "\t";
        $this->env->loadTemplate("MtcShopBundle:shop:header.html.twig")->display($context);
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 52,  143 => 50,  140 => 49,  134 => 23,  127 => 19,  123 => 18,  119 => 17,  115 => 16,  112 => 15,  109 => 14,  87 => 52,  84 => 51,  82 => 49,  79 => 47,  66 => 36,  62 => 35,  55 => 31,  51 => 30,  47 => 29,  41 => 26,  21 => 1,  103 => 12,  100 => 25,  95 => 27,  93 => 25,  89 => 54,  80 => 20,  75 => 19,  71 => 18,  67 => 16,  59 => 14,  53 => 11,  49 => 10,  44 => 28,  42 => 8,  39 => 14,  36 => 6,  31 => 3,  28 => 2,  209 => 180,  207 => 179,  34 => 12,  32 => 7,  29 => 6,  26 => 5,);
    }
}
