<?php

/* ProjetProjetBundle:Projet:projet.html.twig */
class __TwigTemplate_ad2c0f5e2ee4c826073a72db6f44ea2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'docedit_body' => array($this, 'block_docedit_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_docedit_body($context, array $blocks = array())
    {
        // line 4
        echo "    \t<h3>Interface de Gestion des Documents</h3>
    ";
    }

    public function getTemplateName()
    {
        return "ProjetProjetBundle:Projet:projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
