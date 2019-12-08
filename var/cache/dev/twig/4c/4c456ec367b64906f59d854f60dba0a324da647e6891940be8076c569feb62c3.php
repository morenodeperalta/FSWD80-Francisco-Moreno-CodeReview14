<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* event/filter.html.twig */
class __TwigTemplate_87ae5c432e65b212b6c9cfa164f8277f67245923aaa523bc0e5f024cdb4c9d81 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/filter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/filter.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/filter.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    
<div class=\"row row-cols-1 row-cols-md-2\">
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filterevent"] ?? $this->getContext($context, "filterevent")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 7
            echo "\t<div class=\"col mb-4\" style=\"max-width:40rem;\">
    <div class=\"card\">
      <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "img", []), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\" height=\"400px\" width=\"150px\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", []), "html", null, true);
            echo "</h5>
        <p class=\"card-text\">";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "date", []), "F-j-Y, g:i a"), "html", null, true);
            echo "</p>
        <td> 
            <div class=\"d-flex justify-content-center\">
              
        
            <a href=\"/event/details/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", []), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>                 
            <!-- <a href=\"/event/edit/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", []), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
            <a href=\"/event/delete/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", []), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>         -->
               </div>
         </td>
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 26,  98 => 19,  94 => 18,  90 => 17,  82 => 12,  78 => 11,  73 => 9,  69 => 7,  65 => 6,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    
<div class=\"row row-cols-1 row-cols-md-2\">
{% for event in filterevent %}
\t<div class=\"col mb-4\" style=\"max-width:40rem;\">
    <div class=\"card\">
      <img src=\"{{event.img}}\" class=\"card-img-top\" alt=\"...\" height=\"400px\" width=\"150px\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">{{event.name}}</h5>
        <p class=\"card-text\">{{event.date | date('F-j-Y, g:i a')}}</p>
        <td> 
            <div class=\"d-flex justify-content-center\">
              
        
            <a href=\"/event/details/{{event.id}}\" class=\"btn btn-success\">View</a>                 
            <!-- <a href=\"/event/edit/{{event.id}}\" class=\"btn btn-default\">Edit</a>
            <a href=\"/event/delete/{{event.id}}\" class=\"btn btn-danger\">Delete</a>         -->
               </div>
         </td>
      </div>
    </div>
  </div>
{% endfor %}
  </div>


{% endblock %}
", "event/filter.html.twig", "/Users/filippotrau/Desktop/symfony/codereview14Final/app/Resources/views/event/filter.html.twig");
    }
}
