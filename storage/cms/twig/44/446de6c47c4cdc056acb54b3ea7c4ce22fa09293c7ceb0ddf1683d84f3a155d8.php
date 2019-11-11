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

/* /shared/httpd/psycholog/htdocs/themes/tarana/pages/aboutme.htm */
class __TwigTemplate_cc26156fd0030be64384be74e90c21c17c646075562f4ad74f8317e072073ecd extends \Twig\Template
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
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Коротко обо мне"]);
        echo "</h1>
        <h3 class=\"main-title__secondary\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Далее я расскажу о себе в кратции, и давайте знакомиться 😉"]);
        echo "</h3>
    </div>

        <div class=\"panel-grid row m-b-0\">
            <div class=\"col-md-6 panel-grid-cell\">
                <div class=\"textwidget\">
                    ";
        // line 13
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("aboutme.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 14
        echo "                </div>
            </div>
       
            <div class=\"col-md-6 panel-grid-cell\">
                <div class=\"textwidget\">
                    <p>
                    <img class=\"alignnone size-full\" src=\"";
        // line 20
        echo $this->extensions['System\Twig\Extension']->mediaFilter("tarana/working_with_patient.jpg");
        echo "\" width=\"850\" height=\"480\">
                    </p>
                </div>
            </div>
        </div>
        
        
        ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/certificates"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "
</div>
</div>

";
        // line 33
        echo "<div class=\"col-xs-12  col-md-3  col-md-pull-9\">
 <div class=\"sidebar\">
 ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/insta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/pages/aboutme.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 36,  92 => 35,  88 => 33,  82 => 28,  78 => 27,  68 => 20,  60 => 14,  56 => 13,  47 => 7,  43 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#THE BLOCK OF MAIN CONTENT#}
<div class=\"col-xs-12  col-md-9 col-md-push-3\" role=\"main\">
<div class=\"content-container\">

    <div class=\"main-title\">
        <h1 class=\"main-title__primary\">{{'Коротко обо мне'|_}}</h1>
        <h3 class=\"main-title__secondary\">{{'Далее я расскажу о себе в кратции, и давайте знакомиться 😉'|_}}</h3>
    </div>

        <div class=\"panel-grid row m-b-0\">
            <div class=\"col-md-6 panel-grid-cell\">
                <div class=\"textwidget\">
                    {% content 'aboutme.htm'%}
                </div>
            </div>
       
            <div class=\"col-md-6 panel-grid-cell\">
                <div class=\"textwidget\">
                    <p>
                    <img class=\"alignnone size-full\" src=\"{{ 'tarana/working_with_patient.jpg'|media}}\" width=\"850\" height=\"480\">
                    </p>
                </div>
            </div>
        </div>
        
        
        {% partial 'content/certificates' %}

</div>
</div>

{#THE BLOCK OF SIDEBAR#}
<div class=\"col-xs-12  col-md-3  col-md-pull-9\">
 <div class=\"sidebar\">
 {% partial 'sidebar/insta' %}
  </div>
</div>", "/shared/httpd/psycholog/htdocs/themes/tarana/pages/aboutme.htm", "");
    }
}
