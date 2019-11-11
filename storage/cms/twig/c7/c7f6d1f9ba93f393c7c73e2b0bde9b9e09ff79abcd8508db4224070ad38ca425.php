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

/* /shared/httpd/psycholog/htdocs/themes/tarana/partials/sidebar/insta.htm */
class __TwigTemplate_720e9f2dd243b610f11bd304c54331e7bcea6bf4322c62958d5b279df4b296c2 extends \Twig\Template
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
        echo "<span>
    <div class=\"carousel slide widget\" style=\"padding: inherit;\">
        <div class=\"carousel-inner lightbox\">
            <a href=\"";
        // line 4
        echo $this->extensions['System\Twig\Extension']->mediaFilter("insta_scan.jpeg");
        echo "\">
                <img class=\"about-us__image\" src=\"";
        // line 5
        echo $this->extensions['System\Twig\Extension']->mediaFilter("insta_scan.jpeg");
        echo "\" style=\"max-width:100%\">
            </a>
        </div>
    </div>
</span>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/partials/sidebar/insta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span>
    <div class=\"carousel slide widget\" style=\"padding: inherit;\">
        <div class=\"carousel-inner lightbox\">
            <a href=\"{{ 'insta_scan.jpeg'|media }}\">
                <img class=\"about-us__image\" src=\"{{ 'insta_scan.jpeg'|media }}\" style=\"max-width:100%\">
            </a>
        </div>
    </div>
</span>", "/shared/httpd/psycholog/htdocs/themes/tarana/partials/sidebar/insta.htm", "");
    }
}
