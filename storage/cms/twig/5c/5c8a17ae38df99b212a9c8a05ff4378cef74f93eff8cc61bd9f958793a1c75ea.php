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

/* /shared/httpd/psycholog/htdocs/themes/tarana/pages/contact.htm */
class __TwigTemplate_0d1ac71cc9d8090e0cad3dbca3943427fdfd0887bd925fbda9dec30016e4bf7b extends \Twig\Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Контактные данные"]);
        echo "</h1>
        </div>

        <article>

        <div class=\"panel-grid row m-b-0\">
            <div class=\"col-md-4 panel-grid-cell\">
                <div class=\"textwidget\">
                    <h5>Центр Психологии</h5>
                    <p>Тарана Ариф
                        <br>44 Джафар Джаббарлы улица
                        <br>Caspina Plaza, 4-ый этаж</p>
                    <p>(+994) 77 514 42 04
                        <br>(+994) 12 987 65 43
                        <br><a href=\"mailto:help@psycholog.az\">help@psycholog.az</a></p>
                </div>
            </div>

            <div class=\"col-md-8 panel-grid-cell\">      
                <div class=\"textwidget\">
                    <div role=\"form\" lang=\"en-US\" dir=\"ltr\">   
                        ";
        // line 27
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("genericForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 28
        echo "                    </div>
                </div>
            </div>
        </div>

        </article>
    
    </div>
</div>

";
        // line 39
        echo "<div class=\"col-xs-12  col-md-3  col-md-pull-9\">
     <div class=\"sidebar\">
         ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/aboutme"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "     </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 42,  87 => 41,  83 => 39,  71 => 28,  67 => 27,  43 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#THE BLOCK OF MAIN CONTENT#}
<div class=\"col-xs-12  col-md-9 col-md-push-3\" role=\"main\">
    <div class=\"content-container\">
        
        <div class=\"main-title\">
            <h1 class=\"main-title__primary\">{{'Контактные данные'|_}}</h1>
        </div>

        <article>

        <div class=\"panel-grid row m-b-0\">
            <div class=\"col-md-4 panel-grid-cell\">
                <div class=\"textwidget\">
                    <h5>Центр Психологии</h5>
                    <p>Тарана Ариф
                        <br>44 Джафар Джаббарлы улица
                        <br>Caspina Plaza, 4-ый этаж</p>
                    <p>(+994) 77 514 42 04
                        <br>(+994) 12 987 65 43
                        <br><a href=\"mailto:help@psycholog.az\">help@psycholog.az</a></p>
                </div>
            </div>

            <div class=\"col-md-8 panel-grid-cell\">      
                <div class=\"textwidget\">
                    <div role=\"form\" lang=\"en-US\" dir=\"ltr\">   
                        {% component 'genericForm' %}
                    </div>
                </div>
            </div>
        </div>

        </article>
    
    </div>
</div>

{#THE BLOCK OF SIDEBAR#}
<div class=\"col-xs-12  col-md-3  col-md-pull-9\">
     <div class=\"sidebar\">
         {% partial 'sidebar/aboutme' %}
     </div>
</div>", "/shared/httpd/psycholog/htdocs/themes/tarana/pages/contact.htm", "");
    }
}
