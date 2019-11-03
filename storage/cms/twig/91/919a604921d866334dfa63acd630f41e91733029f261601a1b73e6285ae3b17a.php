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

/* /shared/httpd/psycholog/htdocs/themes/tarana/pages/services.htm */
class __TwigTemplate_dff74c546cfe5568f75426ba6ede8417e78ef187ace0c3a00e21741b9b909f69 extends \Twig\Template
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
    <div class=\"latest-posts\">
        <div class=\"row\">       
            ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("newsPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "        </div>
    </div>   
</div>

";
        // line 11
        echo "<div class=\"col-xs-12  col-md-3  col-md-pull-9\">
     <div class=\"sidebar\">
            ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/aboutme"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "     </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/pages/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  56 => 13,  52 => 11,  46 => 6,  42 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#THE BLOCK OF MAIN CONTENT#}
<div class=\"col-xs-12  col-md-9 col-md-push-3\" role=\"main\">
    <div class=\"latest-posts\">
        <div class=\"row\">       
            {% component 'newsPosts' %}
        </div>
    </div>   
</div>

{#THE BLOCK OF SIDEBAR#}
<div class=\"col-xs-12  col-md-3  col-md-pull-9\">
     <div class=\"sidebar\">
            {% partial 'sidebar/aboutme' %}
     </div>
</div>", "/shared/httpd/psycholog/htdocs/themes/tarana/pages/services.htm", "");
    }
}
