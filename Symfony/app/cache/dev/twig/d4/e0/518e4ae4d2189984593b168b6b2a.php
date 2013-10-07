<?php

/* ProjetProjetBundle:Projet:connexion.html.twig */
class __TwigTemplate_d4e0518e4ae4d2189984593b168b6b2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_co.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'docedit_body' => array($this, 'block_docedit_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_co.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tConnexion - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_docedit_body($context, array $blocks = array())
    {
        // line 8
        echo "
\t<div class=\"well\">
\t\t<form method=\"post\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
\t\t\t
\t\t\t<input type=\"submit\" class=\"btn btn-primary\" />
\t\t</form>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "ProjetProjetBundle:Projet:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
