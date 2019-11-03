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

/* /shared/httpd/psycholog/htdocs/themes/tarana/partials/common/topbar.htm */
class __TwigTemplate_2d9b93f7ced7053f381cdded64c94f1be2634ea3938a59b824ab940b35cb0698 extends \Twig\Template
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
        $context["CurrentLanguage"] = ($context["SelectedLanguage"] ?? null);
        // line 2
        echo "<div class=\"top\">
    <div class=\"top__background\"></div>
    <div class=\"container\">
        <div class=\"top__tagline\">Mob: 077 514 42 04</div>
        <nav class=\"top__menu\">
            <ul id=\"menu-top-menu\" class=\"top-navigation\">
                <li class=\"menu-item menu-item-has-children\">
                    <a href=\"#\"> 
                        <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flags/");
        echo "/";
        echo twig_escape_filter($this->env, ($context["CurrentLanguage"] ?? null), "html", null, true);
        echo ".png\" class=\"flag\"> ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Сменить язык"]);
        echo "
                    </a>
                    <ul class=\"sub-menu\">
                        <li class=\"menu-item\">
                            <a href=\"/az";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14) == "home-page")) {
            echo "/";
        } else {
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), "html", null, true);
        }
        echo "\">
                                <img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flags/az.png");
        echo "\" class=\"flag\"> Azərbaycan
                            </a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"/ru";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19) == "home-page")) {
            echo "/";
        } else {
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "html", null, true);
        }
        echo "\">
                                <img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flags/ru.png");
        echo "\" class=\"flag\"> Русский
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/partials/common/topbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  76 => 19,  69 => 15,  60 => 14,  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set CurrentLanguage = SelectedLanguage %}
<div class=\"top\">
    <div class=\"top__background\"></div>
    <div class=\"container\">
        <div class=\"top__tagline\">Mob: 077 514 42 04</div>
        <nav class=\"top__menu\">
            <ul id=\"menu-top-menu\" class=\"top-navigation\">
                <li class=\"menu-item menu-item-has-children\">
                    <a href=\"#\"> 
                        <img src=\"{{ 'assets/images/flags/'|theme}}/{{CurrentLanguage}}.png\" class=\"flag\"> {{'Сменить язык'|_}}
                    </a>
                    <ul class=\"sub-menu\">
                        <li class=\"menu-item\">
                            <a href=\"/az{% if this.page.id == 'home-page'%}/{% else %}/{{ this.page.id }}{% endif %}\">
                                <img src=\"{{ 'assets/images/flags/az.png'|theme}}\" class=\"flag\"> Azərbaycan
                            </a>
                        </li>
                        <li class=\"menu-item\">
                            <a href=\"/ru{% if this.page.id == 'home-page'%}/{% else %}/{{ this.page.id }}{% endif %}\">
                                <img src=\"{{ 'assets/images/flags/ru.png'|theme}}\" class=\"flag\"> Русский
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>", "/shared/httpd/psycholog/htdocs/themes/tarana/partials/common/topbar.htm", "");
    }
}
