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

/* /shared/httpd/psycholog/htdocs/themes/tarana/partials/content/slider.htm */
class __TwigTemplate_92847101bf57c4e0b1a52351ec5a28105d90849297435e1cdd804f1d1bc88456 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"jumbotron  jumbotron--with-captions\">
    <div class=\"carousel  slide  fade\" id=\"headerCarousel\" data-ride=\"carousel\" data-interval=\"5000\">
        <div class=\"carousel-inner\">
            
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 6
            echo "                <div class=\"item active\">
                <img src=\"";
            // line 7
            echo $this->extensions['System\Twig\Extension']->mediaFilter("slider/");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "slideimage", [], "any", false, false, false, 7), "html", null, true);
            echo "\"
                    srcset=\"";
            // line 8
            echo $this->extensions['System\Twig\Extension']->mediaFilter("slider/");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "slideimage", [], "any", false, false, false, 8), "html", null, true);
            echo " 425w, ";
            echo $this->extensions['System\Twig\Extension']->mediaFilter("slider/");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "slideimage", [], "any", false, false, false, 8), "html", null, true);
            echo " 850w\"
                    sizes=\"(min-width: 768px) 720px, (min-width: 992px) 700px, (min-width: 1200px) 850px, calc(100vw-20px)\">
                <div class=\"jumbotron-content\">
                    <h1 class=\"jumbotron-content__title\">
                     <a href=\"/";
            // line 12
            echo twig_escape_filter($this->env, ($context["SelectedLanguage"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "slideurl", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
                        ";
            // line 13
            if ((($context["SelectedLanguage"] ?? null) == "az")) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "slidename_az", [], "any", false, false, false, 13), "html", null, true);
                echo " ";
            }
            // line 14
            echo "                        ";
            if ((($context["SelectedLanguage"] ?? null) == "ru")) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "slidename_ru", [], "any", false, false, false, 14), "html", null, true);
            }
            // line 15
            echo "                     </a>
                    </h1>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            
        </div>
        <a class=\"left  jumbotron__control\" href=\"#headerCarousel\" role=\"button\" data-slide=\"prev\">
            <i class=\"fa  fa-chevron-left\"></i>
        </a>
        <a class=\"right  jumbotron__control\" href=\"#headerCarousel\" role=\"button\" data-slide=\"next\">
            <i class=\"fa  fa-chevron-right\"></i>
        </a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/partials/content/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 20,  86 => 15,  80 => 14,  74 => 13,  69 => 12,  56 => 8,  50 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron  jumbotron--with-captions\">
    <div class=\"carousel  slide  fade\" id=\"headerCarousel\" data-ride=\"carousel\" data-interval=\"5000\">
        <div class=\"carousel-inner\">
            
            {% for slide in slides %}
                <div class=\"item active\">
                <img src=\"{{'slider/'|media}}/{{slide.slideimage}}\"
                    srcset=\"{{'slider/'|media}}/{{slide.slideimage}} 425w, {{'slider/'|media}}/{{slide.slideimage}} 850w\"
                    sizes=\"(min-width: 768px) 720px, (min-width: 992px) 700px, (min-width: 1200px) 850px, calc(100vw-20px)\">
                <div class=\"jumbotron-content\">
                    <h1 class=\"jumbotron-content__title\">
                     <a href=\"/{{SelectedLanguage}}{{slide.slideurl}}\">
                        {% if SelectedLanguage == 'az' %} {{slide.slidename_az}} {% endif %}
                        {% if SelectedLanguage == 'ru' %} {{slide.slidename_ru}}{% endif %}
                     </a>
                    </h1>
                </div>
            </div>
            {% endfor %}
            
        </div>
        <a class=\"left  jumbotron__control\" href=\"#headerCarousel\" role=\"button\" data-slide=\"prev\">
            <i class=\"fa  fa-chevron-left\"></i>
        </a>
        <a class=\"right  jumbotron__control\" href=\"#headerCarousel\" role=\"button\" data-slide=\"next\">
            <i class=\"fa  fa-chevron-right\"></i>
        </a>
    </div>
</div>", "/shared/httpd/psycholog/htdocs/themes/tarana/partials/content/slider.htm", "");
    }
}
