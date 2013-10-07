<?php

/* ::layout.html.twig */
class __TwigTemplate_dc0a63ac9b46cf35fc54a3c4d769c1f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'acteur' => array($this, 'block_acteur'),
            'body' => array($this, 'block_body'),
            'docedit_body' => array($this, 'block_docedit_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t
\t\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "\t</head>
\t
\t<body style=\"font-size:13px\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
            \t<div class=\"span1\">
                \t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/UL-Logo.jpg"), "html", null, true);
        echo "\" alt=\"Logo UL\" />   
                </div>
                <div class=\"span4\" style=\"float:left\">
                \t<p><b>Université de Lorraine</b></p>
                    <small>Application intranet d'édition de documents</small>
                </div>
                <div class=\"span4 offset3\">
\t\t\t\t\t";
        // line 28
        $this->displayBlock('acteur', $context, $blocks);
        // line 30
        echo "                </div>
            </div>
\t\t
\t\t\t<div id=\"menuAccueil\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li><a href=\"#\" >Attestations <i class=\"icon-chevron-down\"></i></a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-cog\"></i>Scolarité</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-tag\"></i>Provisoire de diplôme</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#\">Relevés <i class=\"icon-chevron-down\"></i></a>
\t\t\t\t\t\t<ul >
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-cog\"></i>Notes Finales</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-tag\"></i>Notes Provisoire</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-edit\"></i>Notes sans logo</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#\">Détails des notes</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t
\t\t\t<br /><br />
\t\t\t
\t\t\t<div class=\"row centerblanc\">
\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "\t\t\t\t";
        $this->displayBlock('docedit_body', $context, $blocks);
        // line 62
        echo "\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t
\t\t<footer>
            <div class=\"container\">
                <div class=\"row\", style=\"background: none repeat scroll #FFEF44\">
                    <div class=\"span1\">
                        <center><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/UL-Logo.jpg"), "html", null, true);
        echo "\" alt=\"Logo CkelProcess\" /></center>
                    </div>
\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t<p>Mise en production par</p>
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<p>Marie Nicole Locatelli<br />
\t\t\t\t\t\tAnthony Bainville<br />
\t\t\t\t\t\tCharles Pizel<br />
\t\t\t\t\t\tMathieu Barbaras</p>
\t\t\t\t\t\t<p>&copy; Copyright 2013</p>
\t\t\t\t\t</div>
                    <div class=\"span2\">
                        <ul class=\"nav nav-list\">
                            <li class=\"nav-header\"><b>Attestations</b></li>
                            <li><a href=\"#\">Attestations de scolarité</a></li>
                            <li><a href=\"#\">Attestations provisoires de diplôme</a></li>
                        </ul>
                    </div>
                    <div class=\"span2\">
                        <ul class=\"nav nav-list\">
                            <li class=\"nav-header\"><b>Relevés</b></li>
                            <li><a href=\"#\">Relevés de notes finaux</a></li>
                            <li><a href=\"#\">Relevés de notes provisoires</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Relevés de notes sans logo</a></li>
                        </ul>
                    </div>
                    <div class=\"span2\">
                        <ul class=\"nav nav-list\">
                            <li class=\"nav-header\"><b>Autres</b></li>
                            <li><a href=\"#\">Détails des notes</a></li>
                        </ul>
                    </div>
                    <div class=\"span3\" style=\"width: 60px;\">
                        <a target=\"_blank\" href=\"#\"><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/twitter.png"), "html", null, true);
        echo "\" /></a>
                        <a target=\"_blank\" href=\"#\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/facebook.png"), "html", null, true);
        echo "\" /></a>
                    </div>
                </div>
            </div>
        </footer>
            

\t\t
\t";
        // line 112
        $this->displayBlock('javascripts', $context, $blocks);
        // line 125
        echo "    
    ";
        // line 126
        $this->displayBlock('scripts', $context, $blocks);
        // line 128
        echo "\t
\t</body>
</html>
\t\t\t
\t\t
\t\t\t
\t\t";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Universite de Lorraine - IUT Metz";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-wizard.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/datepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/datepicker.less"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/menu.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t\t<script type=\"text/javascript\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/menu.js"), "html", null, true);
        echo "\"></script>
\t\t";
    }

    // line 28
    public function block_acteur($context, array $blocks = array())
    {
        // line 29
        echo "\t\t\t\t\t";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        // line 58
        echo "\t\t\t\t";
    }

    // line 59
    public function block_docedit_body($context, array $blocks = array())
    {
        // line 60
        echo "\t\t
\t\t\t\t";
    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        // line 113
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-wizard.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-wizard.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\t\$( \"#datepicker\" ).datepicker();
\t\t\t});
\t\t</script>
\t";
    }

    // line 126
    public function block_scripts($context, array $blocks = array())
    {
        // line 127
        echo "    ";
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
        return array (  265 => 127,  262 => 126,  251 => 118,  247 => 117,  243 => 116,  239 => 115,  235 => 114,  232 => 113,  229 => 112,  224 => 60,  221 => 59,  217 => 58,  214 => 57,  210 => 29,  207 => 28,  201 => 13,  197 => 12,  193 => 11,  189 => 10,  185 => 9,  180 => 8,  177 => 7,  171 => 5,  161 => 128,  159 => 126,  156 => 125,  154 => 112,  143 => 104,  139 => 103,  103 => 70,  93 => 62,  90 => 59,  59 => 30,  57 => 28,  47 => 21,  39 => 15,  37 => 7,  26 => 1,  111 => 37,  102 => 33,  92 => 28,  88 => 57,  84 => 26,  81 => 25,  76 => 24,  65 => 15,  62 => 14,  54 => 10,  45 => 8,  41 => 7,  35 => 6,  32 => 5,  29 => 4,);
    }
}
