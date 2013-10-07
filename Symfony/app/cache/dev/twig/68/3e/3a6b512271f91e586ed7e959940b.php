<?php

/* ProjetProjetBundle:Projet:attestation_scolarite.html.twig */
class __TwigTemplate_683e3a6b512271f91e586ed7e959940b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'acteur' => array($this, 'block_acteur'),
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
    public function block_acteur($context, array $blocks = array())
    {
        // line 4
        echo "\t<ul class=\"nav nav-list\">
\t\t<li class=\"nav-header\">Bonjour, ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "acteur"), "civAct"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "acteur"), "nomAct"), "html", null, true);
        echo "</li>\t\t
\t\t<li>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "filiere"), "filLibelle"), "html", null, true);
        echo "</li>
\t\t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_projet_connexion"), "html", null, true);
        echo " class=\"btn btn-primary\">Se déconnecter</a></li>
\t</ul>
";
    }

    // line 11
    public function block_docedit_body($context, array $blocks = array())
    {
        // line 12
        echo "
<h1>Liste des acteurs</h1>

<table class=\"table table-striped table-bordered\">
\t<thead>
\t\t<tr>
\t\t\t<th>Civ</th>  
\t\t\t<th>Nom</th>  
\t\t\t<th>Prénom</th>
\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "unites"));
        foreach ($context['_seq'] as $context["_key"] => $context["unite"]) {
            // line 22
            echo "\t\t\t\t";
            if (($this->getAttribute($this->getContext($context, "unite"), "getFiliere", array(), "method") == $this->getContext($context, "filiere"))) {
                // line 23
                echo "\t\t\t\t<th>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unite"), "uniteCode"), "html", null, true);
                echo "</th>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t<th>Moyenne Générale</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "etudiants"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["etud"]) {
            // line 31
            echo "\t\t<tr>
\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etud"), "getCivAct", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etud"), "getnomAct", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "etud"), "getprnAct", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t
\t\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "\t\t<tr>
\t\t\t<td style=\"text-align:center\" colspan=3>Aucun acteur n'a été trouvé.</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t</tbody>
</table>
 
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
        return array (  125 => 42,  116 => 38,  107 => 34,  103 => 33,  99 => 32,  96 => 31,  91 => 30,  85 => 26,  79 => 25,  73 => 23,  70 => 22,  66 => 21,  55 => 12,  52 => 11,  45 => 7,  41 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
