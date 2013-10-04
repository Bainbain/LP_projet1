<?php

/* ProjetProjetBundle:Projet:attestation_scolarite.html.twig */
class __TwigTemplate_683e3a6b512271f91e586ed7e959940b extends Twig_Template
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

    // line 4
    public function block_docedit_body($context, array $blocks = array())
    {
        // line 5
        echo "
<h1>Liste des acteurs</h1>

<table border>

\t<tr>
\t\t<TH>Civ</TH>  <TH>Nom</TH>  <TH>prenom</TH>
\t</tr>

\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acteurs"]) ? $context["acteurs"] : $this->getContext($context, "acteurs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 15
            echo "\t<tr>
\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "getCivAct", array(), "method"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "getNomAct", array(), "method"), "html", null, true);
            echo "</td>
\t\t
\t</tr>
\t
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "
\t<tr><td>Aucun acteur n'a été trouvé.</td></tr>
\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</table>
 
";
    }

    public function getTemplateName()
    {
        return "ProjetProjetBundle:Projet:attestation_scolarite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  64 => 22,  54 => 17,  50 => 16,  47 => 15,  42 => 14,  31 => 5,  28 => 4,);
    }
}
