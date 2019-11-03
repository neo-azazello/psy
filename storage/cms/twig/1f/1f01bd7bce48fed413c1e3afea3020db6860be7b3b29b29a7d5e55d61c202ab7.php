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

/* /shared/httpd/psycholog/htdocs/themes/tarana/partials/common/mainmenu.htm */
class __TwigTemplate_0ba877fb7b71571e4a4775dc7e00eaa4cc5c11e452982802fac8b792df1000d1 extends \Twig\Template
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
        $context["current"] = "current-menu-item current_page_item";
        // line 2
        echo "
<div class=\"container\">
    <header class=\"header\">
        
        <div class=\"logo\">
            <a href=\"/\">
               <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"MentalPress\"
                    srcset=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo ", ";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo " 2x\" class=\"img-responsive\"
                    width=\"260\" height=\"90\">
            </a>
        </div>

        <a href=\"#\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar\">
            <span class=\"navbar-toggle__text\">MENU</span>
            <span class=\"navbar-toggle__icon-bar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </span>
        </a>

        <div class=\"header-widgets\">
            <div class=\"widget_nav_menu\">
                <div id=\"navbar\" class=\"navbar-top-collapse collapse\">
                    <ul id=\"menu-main-menu\" class=\"menu\">
                        
                        <li class=\"menu-item ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28) == "home-page")) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["current"] ?? null), "html", null, true);
            echo " ";
        }
        echo "\">
                            <a href=\"/";
        // line 29
        echo twig_escape_filter($this->env, ($context["SelectedLanguage"] ?? null), "html", null, true);
        echo "/\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Главная страница"]);
        echo "</a>
                        </li>
                        
                        <li class=\"menu-item ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32) == "aboutme")) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["current"] ?? null), "html", null, true);
            echo " ";
        }
        echo "\">
                            <a href=\"/";
        // line 33
        echo twig_escape_filter($this->env, ($context["SelectedLanguage"] ?? null), "html", null, true);
        echo "/aboutme\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Обо мне"]);
        echo "</a>
                        </li>
                        
                        <li class=\"menu-item ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36) == "programs")) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["current"] ?? null), "html", null, true);
            echo " ";
        }
        echo "\">
                            <a href=\"/";
        // line 37
        echo twig_escape_filter($this->env, ($context["SelectedLanguage"] ?? null), "html", null, true);
        echo "/programs\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Программы"]);
        echo "</a>
                        </li>
                       
                        <li class=\"menu-item ";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40) == "services")) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["current"] ?? null), "html", null, true);
            echo " ";
        }
        echo " menu-item-has-children\">
                            <a href=\"/";
        // line 41
        echo twig_escape_filter($this->env, ($context["SelectedLanguage"] ?? null), "html", null, true);
        echo "/services\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Услуги"]);
        echo "</a>
                            <ul class=\"sub-menu\">
                                <li class=\"menu-item\">
                                    <a href=\"#\">XXXX</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class=\"menu-item ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49) == "media")) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["current"] ?? null), "html", null, true);
            echo " ";
        }
        echo "\">
                            <a href=\"/";
        // line 50
        echo twig_escape_filter($this->env, ($context["SelectedLanguage"] ?? null), "html", null, true);
        echo "/media\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Медия"]);
        echo "</a>
                        </li>
                        
                        <li class=\"menu-item ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53) == "contact")) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["current"] ?? null), "html", null, true);
            echo " ";
        }
        echo "\">
                            <a href=\"/";
        // line 54
        echo twig_escape_filter($this->env, ($context["SelectedLanguage"] ?? null), "html", null, true);
        echo "/contact\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Связаться"]);
        echo "</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/partials/common/mainmenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 54,  160 => 53,  152 => 50,  144 => 49,  131 => 41,  123 => 40,  115 => 37,  107 => 36,  99 => 33,  91 => 32,  83 => 29,  75 => 28,  51 => 9,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set current = 'current-menu-item current_page_item' %}

<div class=\"container\">
    <header class=\"header\">
        
        <div class=\"logo\">
            <a href=\"/\">
               <img src=\"{{ 'assets/images/logo.png'|theme}}\" alt=\"MentalPress\"
                    srcset=\"{{ 'assets/images/logo.png'|theme}}, {{ 'assets/images/logo.png'|theme}} 2x\" class=\"img-responsive\"
                    width=\"260\" height=\"90\">
            </a>
        </div>

        <a href=\"#\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar\">
            <span class=\"navbar-toggle__text\">MENU</span>
            <span class=\"navbar-toggle__icon-bar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </span>
        </a>

        <div class=\"header-widgets\">
            <div class=\"widget_nav_menu\">
                <div id=\"navbar\" class=\"navbar-top-collapse collapse\">
                    <ul id=\"menu-main-menu\" class=\"menu\">
                        
                        <li class=\"menu-item {% if this.page.id == 'home-page' %} {{current}} {% endif %}\">
                            <a href=\"/{{SelectedLanguage}}/\">{{ 'Главная страница'|_}}</a>
                        </li>
                        
                        <li class=\"menu-item {% if this.page.id == 'aboutme' %} {{current}} {% endif %}\">
                            <a href=\"/{{SelectedLanguage}}/aboutme\">{{ 'Обо мне'|_}}</a>
                        </li>
                        
                        <li class=\"menu-item {% if this.page.id == 'programs' %} {{current}} {% endif %}\">
                            <a href=\"/{{SelectedLanguage}}/programs\">{{ 'Программы'|_}}</a>
                        </li>
                       
                        <li class=\"menu-item {% if this.page.id == 'services' %} {{current}} {% endif %} menu-item-has-children\">
                            <a href=\"/{{SelectedLanguage}}/services\">{{'Услуги'|_}}</a>
                            <ul class=\"sub-menu\">
                                <li class=\"menu-item\">
                                    <a href=\"#\">XXXX</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class=\"menu-item {% if this.page.id == 'media' %} {{current}} {% endif %}\">
                            <a href=\"/{{SelectedLanguage}}/media\">{{ 'Медия'|_}}</a>
                        </li>
                        
                        <li class=\"menu-item {% if this.page.id == 'contact' %} {{current}} {% endif %}\">
                            <a href=\"/{{SelectedLanguage}}/contact\">{{'Связаться'|_}}</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>", "/shared/httpd/psycholog/htdocs/themes/tarana/partials/common/mainmenu.htm", "");
    }
}
