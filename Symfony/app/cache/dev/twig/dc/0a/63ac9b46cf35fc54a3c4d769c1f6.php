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
            'body' => array($this, 'block_body'),
            'docedit_dody' => array($this, 'block_docedit_dody'),
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
                \tIci se trouvera le bloc de connexion
                </div>
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
\t\t\t\t<div id=\"menu\" class=\"span3\">
                \t<div class=\"well\">
                        <ul class=\"nav nav-list\">
                            <li class=\"nav-header\">ATTESTATIONS</li>
                            <li><a href=\"#\">Attestation de Scolarité</a></li>
                            <li><a href=\"#\">Attestation Provisoire de Diplôme</a></li>
                            
                            <li class=\"nav-header\">RELEVÉS</li>
                            <li><a href=\"#\">Notes Finales</a></li>
                            <li><a href=\"#\">Notes Provisoires</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Notes sans Logo</a></li>
                            
                            <li class=\"nav-header\">AUTRES</li>
                            <li><a href=\"#\">Détails des Notes</a></li>
                        </ul>
                    </div>
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<footer>
            <div class=\"container\">
                <div class=\"row\", style=\"background: none repeat scroll #FFEF44\">
                    <div class=\"span1\">
                        <center><img src=\"";
        // line 82
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
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/twitter.png"), "html", null, true);
        echo "\" /></a>
                        <a target=\"_blank\" href=\"#\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/facebook.png"), "html", null, true);
        echo "\" /></a>
                    </div>
                </div>
            </div>
        </footer>
            
    ";
        // line 122
        $this->displayBlock('docedit_dody', $context, $blocks);
        // line 124
        echo "\t\t
\t";
        // line 125
        $this->displayBlock('javascripts', $context, $blocks);
        // line 138
        echo "    
    ";
        // line 139
        $this->displayBlock('scripts', $context, $blocks);
        // line 141
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

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "\t\t\t\t\t";
    }

    // line 122
    public function block_docedit_dody($context, array $blocks = array())
    {
        // line 123
        echo "\t";
    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        // line 126
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-wizard.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-wizard.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\t\$( \"#datepicker\" ).datepicker();
\t\t\t});
\t\t</script>
\t";
    }

    // line 139
    public function block_scripts($context, array $blocks = array())
    {
        // line 140
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
        return array (  269 => 140,  266 => 139,  255 => 131,  251 => 130,  247 => 129,  243 => 128,  239 => 127,  236 => 126,  233 => 125,  229 => 123,  226 => 122,  222 => 73,  219 => 72,  213 => 13,  209 => 12,  205 => 11,  201 => 10,  197 => 9,  192 => 8,  189 => 7,  183 => 5,  173 => 141,  171 => 139,  168 => 138,  166 => 125,  163 => 124,  161 => 122,  152 => 116,  148 => 115,  112 => 82,  102 => 74,  100 => 72,  46 => 21,  38 => 15,  36 => 7,  25 => 1,  31 => 5,  28 => 3,);
    }
}
