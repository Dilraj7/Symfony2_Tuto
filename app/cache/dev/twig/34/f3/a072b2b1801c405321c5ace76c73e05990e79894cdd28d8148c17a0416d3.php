<?php

/* MyAppFilmothequeBundle:Acteur:editer.html.twig */
class __TwigTemplate_34f3a072b2b1801c405321c5ace76c73e05990e79894cdd28d8148c17a0416d3 extends Twig_Template
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
        return "MyAppFilmothequeBundle:Acteur:editer.html.twig";
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
