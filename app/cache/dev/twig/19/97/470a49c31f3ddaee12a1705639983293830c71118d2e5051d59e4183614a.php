<?php

/* MyAppFilmothequeBundle:Acteur:lister.html.twig */
class __TwigTemplate_1997470a49c31f3ddaee12a1705639983293830c71118d2e5051d59e4183614a extends Twig_Template
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
        echo "<h1>Liste des acteurs</h1>
<table>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acteurs"]) ? $context["acteurs"] : $this->getContext($context, "acteurs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 4
            echo "        <tr>
            <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "nom"), "html", null, true);
            echo "</td>
            <td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "prenom"), "html", null, true);
            echo "</td>
            <td>";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "dateNaissance"), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "sexe"), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_acteur_modifier", array("id" => $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"))), "html", null, true);
            echo "\">Modifier</a></td>
            <td><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_acteur_supprimer", array("id" => $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"))), "html", null, true);
            echo "\">Supprimer</a></td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "        <tr><td>Aucun acteur n'a été trouvé.</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</table>
<p><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("myapp_acteur_ajouter");
        echo "\">Ajouter un acteur</a><p>
";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Acteur:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  66 => 15,  59 => 13,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  28 => 4,  23 => 3,  19 => 1,);
    }
}
