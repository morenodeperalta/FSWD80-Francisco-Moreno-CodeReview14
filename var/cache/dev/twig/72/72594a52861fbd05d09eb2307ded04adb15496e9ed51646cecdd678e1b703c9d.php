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

/* event/landing.html.twig */
class __TwigTemplate_1e3c7b4c7b51a33c53604dcfceb5c59be7d43d486541decb582ed92585c7ab3a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/landing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/landing.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/landing.html.twig", 1);
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
        echo "<div class=\"jumbotron jumbotron-fluid\" style=\"background:url('https://images.unsplash.com/photo-1465060810938-30bbe7c40e76?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=60');
 background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; \">
  <div class=\"container\">
    <h1 class=\"display-4 text-light\">Company Title</h1>
    <h2 class=\"lead text-light\">Landing Page</h2>
    <a class=\"btn btn-info btn-lg\" href=\"/\" role=\"button\">Enter</a>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<div class=\"container\">
\t

<div class=\"row row-cols-1 row-cols-md-3\">
<div class=\"card\" style=\"width: 20rem;\">
  <img src=\"https://images.unsplash.com/photo-1499415479124-43c32433a620?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60\" class=\"card-img-top\" alt=\"...\" height=\"300px\" width=\"200px\">
  <div class=\"card-body\">
  \t<div class=\"d-flex justify-content-center\">
    <h5 class=\"card-title\">Concerts</h5>
    </div>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class=\"d-flex justify-content-center\">
    \t
    <a href=\"/event/music\" class=\" btn btn-outline-info\">Discover</a>
</div>
  </div>
</div>
<div class=\"card\" style=\"width: 18rem;\">
  <img src=\"https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60\" class=\"card-img-top\" alt=\"...\" height=\"300px\" width=\"200px\">
  <div class=\"card-body\">
  \t<div class=\"d-flex justify-content-center\">
    <h5 class=\"card-title\">Movies</h5>
    </div>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class=\"d-flex justify-content-center\">
    \t
    <a href=\"/event/movie\" class=\" btn btn-outline-info\">Discover</a>
</div>
  </div>
</div>
<div class=\"card\" style=\"width: 18rem;\">
  <img src=\"https://images.unsplash.com/photo-1461896836934-ffe607ba8211?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60\" class=\"card-img-top\" alt=\"...\"height=\"300px\" width=\"200px\">
  <div class=\"card-body\">
  \t<div class=\"d-flex justify-content-center\">
    <h5 class=\"card-title\">Sports</h5>
    </div>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class=\"d-flex justify-content-center\">
    \t
    <a href=\"/event/sport\" class=\" btn btn-outline-info\">Discover</a>
</div>
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
        return "event/landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 17,  82 => 16,  61 => 3,  52 => 2,  30 => 1,);
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
<div class=\"jumbotron jumbotron-fluid\" style=\"background:url('https://images.unsplash.com/photo-1465060810938-30bbe7c40e76?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=60');
 background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; \">
  <div class=\"container\">
    <h1 class=\"display-4 text-light\">Company Title</h1>
    <h2 class=\"lead text-light\">Landing Page</h2>
    <a class=\"btn btn-info btn-lg\" href=\"/\" role=\"button\">Enter</a>
  </div>
</div>
{% endblock %}

{% block body %}
<div class=\"container\">
\t

<div class=\"row row-cols-1 row-cols-md-3\">
<div class=\"card\" style=\"width: 20rem;\">
  <img src=\"https://images.unsplash.com/photo-1499415479124-43c32433a620?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60\" class=\"card-img-top\" alt=\"...\" height=\"300px\" width=\"200px\">
  <div class=\"card-body\">
  \t<div class=\"d-flex justify-content-center\">
    <h5 class=\"card-title\">Concerts</h5>
    </div>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class=\"d-flex justify-content-center\">
    \t
    <a href=\"/event/music\" class=\" btn btn-outline-info\">Discover</a>
</div>
  </div>
</div>
<div class=\"card\" style=\"width: 18rem;\">
  <img src=\"https://images.unsplash.com/photo-1485846234645-a62644f84728?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60\" class=\"card-img-top\" alt=\"...\" height=\"300px\" width=\"200px\">
  <div class=\"card-body\">
  \t<div class=\"d-flex justify-content-center\">
    <h5 class=\"card-title\">Movies</h5>
    </div>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class=\"d-flex justify-content-center\">
    \t
    <a href=\"/event/movie\" class=\" btn btn-outline-info\">Discover</a>
</div>
  </div>
</div>
<div class=\"card\" style=\"width: 18rem;\">
  <img src=\"https://images.unsplash.com/photo-1461896836934-ffe607ba8211?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60\" class=\"card-img-top\" alt=\"...\"height=\"300px\" width=\"200px\">
  <div class=\"card-body\">
  \t<div class=\"d-flex justify-content-center\">
    <h5 class=\"card-title\">Sports</h5>
    </div>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class=\"d-flex justify-content-center\">
    \t
    <a href=\"/event/sport\" class=\" btn btn-outline-info\">Discover</a>
</div>
  </div>
</div>
</div>
</div>
{% endblock %}", "event/landing.html.twig", "/Users/filippotrau/Desktop/symfony/codereview14Final/app/Resources/views/event/landing.html.twig");
    }
}
