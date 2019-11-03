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
            <div class=\"item active\">
                <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image-24-425x200.jpg");
        echo "\"
                    srcset=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image-24-425x200.jpg");
        echo " 425w, ";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image-24-850x400.jpg");
        echo " 850w\"
                    sizes=\"(min-width: 768px) 720px, (min-width: 992px) 700px, (min-width: 1200px) 850px, calc(100vw-20px)\"
                    alt=\"&quot;Be smart, help yourself now.&quot;\">
                <div class=\"jumbotron-content\">
                    <h1 class=\"jumbotron-content__title\">\"Be smart, help yourself now.\"</h1>
                    <div class=\"jumbotron-content__description\">
                        <p>
                            <i>–</i>&nbsp;Mahatma Gandhi</p>
                    </div>
                </div>
            </div>


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
        return array (  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron  jumbotron--with-captions\">
    <div class=\"carousel  slide  fade\" id=\"headerCarousel\" data-ride=\"carousel\" data-interval=\"5000\">
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"{{'assets/images/image-24-425x200.jpg'|theme}}\"
                    srcset=\"{{'assets/images/image-24-425x200.jpg'|theme}} 425w, {{'assets/images/image-24-850x400.jpg'|theme}} 850w\"
                    sizes=\"(min-width: 768px) 720px, (min-width: 992px) 700px, (min-width: 1200px) 850px, calc(100vw-20px)\"
                    alt=\"&quot;Be smart, help yourself now.&quot;\">
                <div class=\"jumbotron-content\">
                    <h1 class=\"jumbotron-content__title\">\"Be smart, help yourself now.\"</h1>
                    <div class=\"jumbotron-content__description\">
                        <p>
                            <i>–</i>&nbsp;Mahatma Gandhi</p>
                    </div>
                </div>
            </div>


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
