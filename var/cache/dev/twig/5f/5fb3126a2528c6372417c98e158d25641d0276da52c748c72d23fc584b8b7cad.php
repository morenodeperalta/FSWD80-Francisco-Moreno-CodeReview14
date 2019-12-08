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

/* event/details.html.twig */
class __TwigTemplate_5bb74aa3291cafaca409c6367e37c3f5f7c6f1e25a456f2ea63ae37240697ab4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'jumbotron' => [$this, 'block_jumbotron'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_jumbotron($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jumbotron"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 3
        echo "<!-- jumbotrone start -->
<div class=\"jumbotron jumbotron-fluid\" style=\"background:url('https://images.unsplash.com/photo-1568069460173-304a7c287755?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1200&q=60');
 background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; \">
  <div class=\"container\">
    <h1 class=\"display-4 text-light\">Company Title</h1>
    <h2 class=\"lead text-light\">View Page</h2>
    <a class=\"btn btn-secondary btn-lg\" href=\"/\" role=\"button\">Home</a>
  </div>
</div>
<!-- jumbotrone ends -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
<div class=\"card mb-3\">
  <div class=\"row no-gutters\">
    <div class=\"col-md-4\">
      <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailsevent"] ?? $this->getContext($context, "detailsevent")), "img", []), "html", null, true);
        echo "\" class=\"card-img\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailsevent"] ?? $this->getContext($context, "detailsevent")), "name", []), "html", null, true);
        echo "\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailsevent"] ?? $this->getContext($context, "detailsevent")), "name", []), "html", null, true);
        echo "</h5>
        <p class=\"card-text\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailsevent"] ?? $this->getContext($context, "detailsevent")), "name", []), "html", null, true);
        echo "</p>
        <!-- Button trigger modal -->

        <p class=\"card-text\"><small class=\"text-muted\">";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["detailsevent"] ?? $this->getContext($context, "detailsevent")), "date", []), "F-j-Y, g:i a"), "html", null, true);
        echo "</small></p>
        <a class=\"btn btn-primary d-flex justify-content-center\" data-toggle=\"modal\" data-target=\"#exampleModal\">
 Know more
</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailsevent"] ?? $this->getContext($context, "detailsevent")), "name", []), "html", null, true);
        echo "</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <ul>
          <li>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailsevent"] ?? $this->getContext($context, "detailsevent")), "capacity", []), "html", null, true);
        echo "</li>
          <li>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailsevent"] ?? $this->getContext($context, "detailsevent")), "email", []), "html", null, true);
        echo "</li>
          <li>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailsevent"] ?? $this->getContext($context, "detailsevent")), "phone", []), "html", null, true);
        echo "</li>
          <li>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailsevent"] ?? $this->getContext($context, "detailsevent")), "address", []), "html", null, true);
        echo "</li>
          <li>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailsevent"] ?? $this->getContext($context, "detailsevent")), "website", []), "html", null, true);
        echo "</li>
          <li>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["detailsevent"] ?? $this->getContext($context, "detailsevent")), "type", []), "html", null, true);
        echo "</li>
        </ul>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 56,  161 => 55,  157 => 54,  153 => 53,  149 => 52,  145 => 51,  135 => 44,  118 => 30,  112 => 27,  108 => 26,  99 => 22,  93 => 18,  84 => 17,  61 => 3,  52 => 2,  30 => 1,);
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
{% block jumbotron %}
<!-- jumbotrone start -->
<div class=\"jumbotron jumbotron-fluid\" style=\"background:url('https://images.unsplash.com/photo-1568069460173-304a7c287755?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1200&q=60');
 background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; \">
  <div class=\"container\">
    <h1 class=\"display-4 text-light\">Company Title</h1>
    <h2 class=\"lead text-light\">View Page</h2>
    <a class=\"btn btn-secondary btn-lg\" href=\"/\" role=\"button\">Home</a>
  </div>
</div>
<!-- jumbotrone ends -->
{% endblock %}
{% block body %}

<div class=\"card mb-3\">
  <div class=\"row no-gutters\">
    <div class=\"col-md-4\">
      <img src=\"{{detailsevent.img}}\" class=\"card-img\" alt=\"{{detailsevent.name}}\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">{{detailsevent.name}}</h5>
        <p class=\"card-text\">{{detailsevent.name}}</p>
        <!-- Button trigger modal -->

        <p class=\"card-text\"><small class=\"text-muted\">{{detailsevent.date | date('F-j-Y, g:i a')}}</small></p>
        <a class=\"btn btn-primary d-flex justify-content-center\" data-toggle=\"modal\" data-target=\"#exampleModal\">
 Know more
</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">{{detailsevent.name}}</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <ul>
          <li>{{detailsevent.capacity}}</li>
          <li>{{detailsevent.email}}</li>
          <li>{{detailsevent.phone}}</li>
          <li>{{detailsevent.address}}</li>
          <li>{{detailsevent.website}}</li>
          <li>{{detailsevent.type}}</li>
        </ul>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>



{% endblock %}", "event/details.html.twig", "/Users/filippotrau/Desktop/symfony/codereview14Final/app/Resources/views/event/details.html.twig");
    }
}
