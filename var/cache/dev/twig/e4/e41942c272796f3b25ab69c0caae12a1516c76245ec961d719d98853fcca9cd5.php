<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_38d7f8c37aa88ae42bfdceb2b93760476f2b7c3699b1a731f1256de329f21a93 extends Twig_Template
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
        $__internal_e13dec158826ba63a3f70b23eb2af9bcaad751834403c6b9b10199665f486b04 = $this->env->getExtension("native_profiler");
        $__internal_e13dec158826ba63a3f70b23eb2af9bcaad751834403c6b9b10199665f486b04->enter($__internal_e13dec158826ba63a3f70b23eb2af9bcaad751834403c6b9b10199665f486b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e13dec158826ba63a3f70b23eb2af9bcaad751834403c6b9b10199665f486b04->leave($__internal_e13dec158826ba63a3f70b23eb2af9bcaad751834403c6b9b10199665f486b04_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */