<?php

/* MyAppFilmothequeBundle:Default:index.html.twig */
class __TwigTemplate_d3f23eb673b93bc477998ad5db590de374b57573cb44ebc974ed5fad2aaa31d3 extends Twig_Template
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
        echo "<html>
    <body>
        <h1>Liste des catégories</h1>
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 5
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "nom"), "html", null, true);
            echo "</p>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 7
            echo "            <p>Aucune catégorie n'a été trouvée.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  37 => 7,  29 => 5,  24 => 4,  19 => 1,);
    }
}
