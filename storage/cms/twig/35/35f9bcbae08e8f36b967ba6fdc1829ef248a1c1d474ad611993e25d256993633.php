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

/* /shared/httpd/psycholog/htdocs/themes/tarana/pages/programs.htm */
class __TwigTemplate_a4ceabcbc525f9c71d39c912a9adeeba76652058242997f38c3d4a0ab700546c extends \Twig\Template
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
    <div class=\"content-container\">
        <div class=\"main-title\">
            <h1 class=\"main-title__primary\">";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Контактные данные"]);
        echo "</h1>
        </div>
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
        return "/shared/httpd/psycholog/htdocs/themes/tarana/pages/programs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  54 => 13,  50 => 11,  42 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#THE BLOCK OF MAIN CONTENT#}
<div class=\"col-xs-12  col-md-9 col-md-push-3\" role=\"main\">
    <div class=\"content-container\">
        <div class=\"main-title\">
            <h1 class=\"main-title__primary\">{{'Контактные данные'|_}}</h1>
        </div>
    </div>
</div>

{#THE BLOCK OF SIDEBAR#}
<div class=\"col-xs-12  col-md-3  col-md-pull-9\">
     <div class=\"sidebar\">
            {% partial 'sidebar/aboutme' %}
     </div>
</div>", "/shared/httpd/psycholog/htdocs/themes/tarana/pages/programs.htm", "");
    }
}
