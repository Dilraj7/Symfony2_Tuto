<?php

/* MyAppFilmothequeBundle:Acteur:ajouter.html.twig */
class __TwigTemplate_e85431e0bb032f60d913cafd5dc26118a38d9eef2048eeac38008c67af4af820 extends Twig_Template
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
        echo "<h1>Ajouter un acteur</h1>
";
        // line 2
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 3
            echo "<p>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
";
        }
        // line 5
        echo "<form action=\"\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
 ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
 <input type=\"submit\" />
</form>
<p><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("myapp_acteur_lister");
        echo "\">Retour à la liste des acteurs</a></p>
";
    }

    public function getTemplateName()
    {
        return "MyAppFilmothequeBundle:Acteur:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  35 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
