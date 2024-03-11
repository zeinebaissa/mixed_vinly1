<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vinyl/homepage.html.twig */
class __TwigTemplate_b7d60c4bc3cb3dd27d2e007ef76ef1c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vinyl/homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vinyl/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vinyl/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Create a new Record | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
    <h1 class=\"d-inline me-3\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h1> <i class=\"fas fa-edit\"></i>
    <div class=\"row mt-5\">
        <div class=\"col-12 col-md-4\">

            <svg width=\"100%\" height=\"100%\" viewBox=\"0 0 496 496\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                <defs>
                    <linearGradient x1=\"50%\" y1=\"0%\" x2=\"50%\" y2=\"100%\" id=\"linearGradient-1\">
                        <stop stop-color=\"#C380F3\" offset=\"0%\"></stop>
                        <stop stop-color=\"#4A90E2\" offset=\"100%\"></stop>
                    </linearGradient>
                </defs>
                <g id=\"Mixed-Vinyl\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                    <g id=\"Group\">
                        <g id=\"record-vinyl\" fill=\"#000000\" fill-rule=\"nonzero\">
                            <path d=\"M248,144 C190.562386,144 144,190.562386 144,248 C144,305.437614 190.562386,352 248,352 C305.437614,352 352,305.437614 352,248 C352,190.562386 305.437614,144 248,144 L248,144 Z M248,272 C234.745166,272 224,261.254834 224,248 C224,234.745166 234.745166,224 248,224 C261.254834,224 272,234.745166 272,248 C272,261.254834 261.254834,272 248,272 Z M248,0 C111,0 0,111 0,248 C0,385 111,496 248,496 C385,496 496,385 496,248 C496,111 385,0 248,0 Z M248,376 C177.307552,376 120,318.692448 120,248 C120,177.307552 177.307552,120 248,120 C318.692448,120 376,177.307552 376,248 C376,281.947711 362.514324,314.505012 338.509668,338.509668 C314.505012,362.514324 281.947711,376 248,376 Z\" id=\"Shape\"></path>
                        </g>
                        <g id=\"record-vinyl\" transform=\"translate(144.000000, 144.000000)\" fill=\"url(#linearGradient-1)\" fill-rule=\"nonzero\">
                            <path d=\"M104,0 C46.562386,0 0,46.562386 0,104 C0,161.437614 46.562386,208 104,208 C161.437614,208 208,161.437614 208,104 C208,46.562386 161.437614,0 104,0 L104,0 Z M104,128 C90.745166,128 80,117.254834 80,104 C80,90.745166 90.745166,80 104,80 C117.254834,80 128,90.745166 128,104 C128,117.254834 117.254834,128 104,128 Z\" id=\"Shape\"></path>
                        </g>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"235\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"215\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"195\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"175\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"155\"></circle>
                    </g>
                </g>
            </svg>
        </div>
        <div class=\"col-12 col-md-8 ps-5\">
            <h2 class=\"mb-4\">10 songs (30 minutes of 60 still available)</h2>
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tracks"]) || array_key_exists("tracks", $context) ? $context["tracks"] : (function () { throw new RuntimeError('Variable "tracks" does not exist.', 38, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 39
            echo "            
            <div class=\"song-list\" ";
            // line 40
            echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusController("song-controls", ["infoUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_songs_get_one", ["id" => twig_get_attribute($this->env, $this->source,             // line 41
$context["loop"], "index", [], "any", false, false, false, 41)])]);
            // line 42
            echo ">
                <div class=\"d-flex mb-3\">
                    <a href=\"#\" ";
            // line 44
            echo $this->extensions['Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension']->renderStimulusAction("song-controls", "play");
            echo ">
                        <i class=\"fas fa-play me-3\"></i>
                    </a>
                    <span class=\"song-details\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "song", [], "any", false, false, false, 47), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "artist", [], "any", false, false, false, 47)), "html", null, true);
            echo "</span>
                    <a href=\"#\">
                        <i class=\"fas fa-bars mx-3\"></i>
                    </a>
                    <a href=\"#\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                </div>
            </div>
           
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i> Add a song</button>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "vinyl/homepage.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  186 => 58,  159 => 47,  153 => 44,  149 => 42,  147 => 41,  146 => 40,  143 => 39,  126 => 38,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create a new Record | {{ parent() }}{% endblock %}

{% block body %}

<div class=\"container\">
    <h1 class=\"d-inline me-3\">{{title}}</h1> <i class=\"fas fa-edit\"></i>
    <div class=\"row mt-5\">
        <div class=\"col-12 col-md-4\">

            <svg width=\"100%\" height=\"100%\" viewBox=\"0 0 496 496\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                <defs>
                    <linearGradient x1=\"50%\" y1=\"0%\" x2=\"50%\" y2=\"100%\" id=\"linearGradient-1\">
                        <stop stop-color=\"#C380F3\" offset=\"0%\"></stop>
                        <stop stop-color=\"#4A90E2\" offset=\"100%\"></stop>
                    </linearGradient>
                </defs>
                <g id=\"Mixed-Vinyl\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                    <g id=\"Group\">
                        <g id=\"record-vinyl\" fill=\"#000000\" fill-rule=\"nonzero\">
                            <path d=\"M248,144 C190.562386,144 144,190.562386 144,248 C144,305.437614 190.562386,352 248,352 C305.437614,352 352,305.437614 352,248 C352,190.562386 305.437614,144 248,144 L248,144 Z M248,272 C234.745166,272 224,261.254834 224,248 C224,234.745166 234.745166,224 248,224 C261.254834,224 272,234.745166 272,248 C272,261.254834 261.254834,272 248,272 Z M248,0 C111,0 0,111 0,248 C0,385 111,496 248,496 C385,496 496,385 496,248 C496,111 385,0 248,0 Z M248,376 C177.307552,376 120,318.692448 120,248 C120,177.307552 177.307552,120 248,120 C318.692448,120 376,177.307552 376,248 C376,281.947711 362.514324,314.505012 338.509668,338.509668 C314.505012,362.514324 281.947711,376 248,376 Z\" id=\"Shape\"></path>
                        </g>
                        <g id=\"record-vinyl\" transform=\"translate(144.000000, 144.000000)\" fill=\"url(#linearGradient-1)\" fill-rule=\"nonzero\">
                            <path d=\"M104,0 C46.562386,0 0,46.562386 0,104 C0,161.437614 46.562386,208 104,208 C161.437614,208 208,161.437614 208,104 C208,46.562386 161.437614,0 104,0 L104,0 Z M104,128 C90.745166,128 80,117.254834 80,104 C80,90.745166 90.745166,80 104,80 C117.254834,80 128,90.745166 128,104 C128,117.254834 117.254834,128 104,128 Z\" id=\"Shape\"></path>
                        </g>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"235\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"215\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"195\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"175\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"155\"></circle>
                    </g>
                </g>
            </svg>
        </div>
        <div class=\"col-12 col-md-8 ps-5\">
            <h2 class=\"mb-4\">10 songs (30 minutes of 60 still available)</h2>
            {%for track in tracks %}
            
            <div class=\"song-list\" {{stimulus_controller('song-controls' , {
            infoUrl : path('api_songs_get_one' , { id : loop.index })
            })}}>
                <div class=\"d-flex mb-3\">
                    <a href=\"#\" {{ stimulus_action('song-controls' , 'play' ) }}>
                        <i class=\"fas fa-play me-3\"></i>
                    </a>
                    <span class=\"song-details\">{{ track.song }}-{{ track.artist|upper }}</span>
                    <a href=\"#\">
                        <i class=\"fas fa-bars mx-3\"></i>
                    </a>
                    <a href=\"#\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                </div>
            </div>
           
          {% endfor%}
            <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i> Add a song</button>
        </div>
    </div>
</div>
{% endblock %}
", "vinyl/homepage.html.twig", "C:\\Users\\zeine\\Downloads\\mixed_vinyl (1)\\mixed_vinyl\\templates\\vinyl\\homepage.html.twig");
    }
}
