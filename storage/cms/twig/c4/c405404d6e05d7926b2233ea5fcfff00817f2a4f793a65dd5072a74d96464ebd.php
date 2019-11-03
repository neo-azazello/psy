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

/* /shared/httpd/psycholog/htdocs/themes/tarana/partials/genericForm/default.htm */
class __TwigTemplate_db84da35e69a25f6a0d948075f310f50e1f248cf5c522de1f3fed72c54107e58 extends \Twig\Template
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
        echo "<form data-request=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

    <div id=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>


    <div class=\"row\">
        
        <div class=\"col-xs-12  col-sm-6\">
            <div class=\"c-form-group\">
                <input type=\"text\" name=\"name\" id=\"name\" size=\"40\" class=\"form-text\" required=\"required\" placeholder=\"";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ваше имя"]);
        echo "\">
            </div>
            
            <div class=\"c-form-group\">
                <input type=\"email\" name=\"email\" id=\"email\" size=\"40\" class=\"form-text form-email\" required=\"required\" placeholder=\"";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ваша почта"]);
        echo "\">
            </div>
            
            <div class=\"c-form-group\">
                <input type=\"text\" name=\"subject\" id=\"subject\" size=\"40\" class=\"form-text\" placeholder=\"";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Заглавье"]);
        echo "\">
            </div>
        </div>
        
        <div class=\"col-xs-12  col-sm-6\">
            
            <div class=\"c-form-group\">
                <textarea name=\"comments\" id=\"comments\" cols=\"40\" rows=\"10\" class=\"form-textarea\" placeholder=\"";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ваше сообщение"]);
        echo "\"></textarea>
            </div>
            
                <div class=\"form-group\">
                    ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@recaptcha"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "                </div>
            
            <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"form-submit btn btn-primary\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Отправить"]);
        echo "</button>

        </div>

    </div>
 </form>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/partials/genericForm/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 34,  93 => 32,  89 => 31,  82 => 27,  72 => 20,  65 => 16,  58 => 12,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"{{ __SELF__ }}::onFormSubmit\">

    {{ form_token() }}

    <div id=\"{{ __SELF__ }}_forms_flash\"></div>


    <div class=\"row\">
        
        <div class=\"col-xs-12  col-sm-6\">
            <div class=\"c-form-group\">
                <input type=\"text\" name=\"name\" id=\"name\" size=\"40\" class=\"form-text\" required=\"required\" placeholder=\"{{'Ваше имя'|_}}\">
            </div>
            
            <div class=\"c-form-group\">
                <input type=\"email\" name=\"email\" id=\"email\" size=\"40\" class=\"form-text form-email\" required=\"required\" placeholder=\"{{'Ваша почта'|_}}\">
            </div>
            
            <div class=\"c-form-group\">
                <input type=\"text\" name=\"subject\" id=\"subject\" size=\"40\" class=\"form-text\" placeholder=\"{{'Заглавье'|_}}\">
            </div>
        </div>
        
        <div class=\"col-xs-12  col-sm-6\">
            
            <div class=\"c-form-group\">
                <textarea name=\"comments\" id=\"comments\" cols=\"40\" rows=\"10\" class=\"form-textarea\" placeholder=\"{{'Ваше сообщение'|_}}\"></textarea>
            </div>
            
                <div class=\"form-group\">
                    {% partial '@recaptcha' %}
                </div>
            
            <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"form-submit btn btn-primary\">{{'Отправить'|_}}</button>

        </div>

    </div>
 </form>", "/shared/httpd/psycholog/htdocs/themes/tarana/partials/genericForm/default.htm", "");
    }
}
