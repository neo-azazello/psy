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

/* /shared/httpd/psycholog/htdocs/themes/tarana/pages/media.htm */
class __TwigTemplate_e28ad0def5db95c4193b38eca667ac101580f3bf3479d18979e0aff392525174 extends \Twig\Template
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
        // line 2
        echo "<div class=\"col-xs-12  col-md-9 col-md-push-3\" role=\"main\">
    <div class=\"content-container woocommerce\">
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("media/video"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </div>
</div>

";
        // line 9
        echo "<div class=\"col-xs-12  col-md-3  col-md-pull-9\">
  <div class=\"sidebar\">
    ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/aboutme"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/pages/media.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  54 => 11,  50 => 9,  45 => 5,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#THE BLOCK OF MAIN CONTENT#}
<div class=\"col-xs-12  col-md-9 col-md-push-3\" role=\"main\">
    <div class=\"content-container woocommerce\">
        {% partial 'media/video' %}
    </div>
</div>

{#THE BLOCK OF SIDEBAR#}
<div class=\"col-xs-12  col-md-3  col-md-pull-9\">
  <div class=\"sidebar\">
    {% partial 'sidebar/aboutme' %}
  </div>
</div>", "/shared/httpd/psycholog/htdocs/themes/tarana/pages/media.htm", "");
    }
}
