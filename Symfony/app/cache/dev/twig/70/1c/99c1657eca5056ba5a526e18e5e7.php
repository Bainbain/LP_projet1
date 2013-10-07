<?php

/* ::layout_co.html.twig */
class __TwigTemplate_701c99c1657eca5056ba5a526e18e5e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
                </div>
            </div>
\t\t
\t\t\t\t\t
\t\t\t<br /><br />
\t\t\t
\t\t\t<div class=\"row centerblanc\">
\t\t\t\t
\t\t\t\t
\t\t\t\t";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "\t\t\t\t";
        $this->displayBlock('docedit_body', $context, $blocks);
        // line 42
        echo "\t\t\t\t
\t\t\t</div>
\t\t</div>         

\t\t
\t";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "    
    ";
        // line 61
        $this->displayBlock('scripts', $context, $blocks);
        // line 63
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

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "\t\t\t\t";
    }

    // line 39
    public function block_docedit_body($context, array $blocks = array())
    {
        // line 40
        echo "\t\t
\t\t\t\t";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-wizard.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-wizard.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\t\$( \"#datepicker\" ).datepicker();
\t\t\t});
\t\t</script>
\t";
    }

    // line 61
    public function block_scripts($context, array $blocks = array())
    {
        // line 62
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::layout_co.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 62,  178 => 61,  167 => 53,  163 => 52,  159 => 51,  155 => 50,  151 => 49,  148 => 48,  145 => 47,  140 => 40,  137 => 39,  133 => 38,  130 => 37,  124 => 13,  120 => 12,  116 => 11,  112 => 10,  108 => 9,  103 => 8,  100 => 7,  94 => 5,  84 => 63,  82 => 61,  79 => 60,  77 => 47,  70 => 42,  67 => 39,  65 => 37,  46 => 21,  38 => 15,  36 => 7,  31 => 5,  25 => 1,);
    }
}
