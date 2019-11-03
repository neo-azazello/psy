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

/* /shared/httpd/psycholog/htdocs/themes/tarana/partials/sidebar/aboutme.htm */
class __TwigTemplate_a44de48f73733e04ef95256ffa5f667631ce33f144099b96fa16a68a1c9e42b7 extends \Twig\Template
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
        echo "<div class=\"widget  widget-about-us\">
    <div id=\"carousel-people-pw_about_us-2\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
        <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"item active\">
                <img class=\"about-us__image\" src=\"";
        // line 5
        echo $this->extensions['System\Twig\Extension']->mediaFilter("tarana/at_wotk.jpg");
        echo "\" alt=\"\">
                <h5 class=\"about-us__name\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Тарана Ариф"]);
        echo "</h5>
                <p class=\"about-us__description\">
                ";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Я - психолог и могу помочь вам в решений ваших проблем. Проблемы вокруг нас и как воздух окружает нас. Проблемы в личной жизни, в отношениях, в семье, с ребенком... Не имеет значения где она, его нужно вовремя выявить и решить раз и навсегда!"]);
        echo " </p>
                <a href=\"/";
        // line 9
        echo twig_escape_filter($this->env, ($context["SelectedLanguage"] ?? null), "html", null, true);
        echo "/aboutme\" class=\"read-more  about-us__link\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Читать далее"]);
        echo "</a>
            </div>
        </div>
    </div>
</div";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/partials/sidebar/aboutme.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  52 => 8,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget  widget-about-us\">
    <div id=\"carousel-people-pw_about_us-2\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
        <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"item active\">
                <img class=\"about-us__image\" src=\"{{ 'tarana/at_wotk.jpg'|media }}\" alt=\"\">
                <h5 class=\"about-us__name\">{{'Тарана Ариф'|_}}</h5>
                <p class=\"about-us__description\">
                {{ 'Я - психолог и могу помочь вам в решений ваших проблем. Проблемы вокруг нас и как воздух окружает нас. Проблемы в личной жизни, в отношениях, в семье, с ребенком... Не имеет значения где она, его нужно вовремя выявить и решить раз и навсегда!'|_}} </p>
                <a href=\"/{{SelectedLanguage}}/aboutme\" class=\"read-more  about-us__link\">{{' Читать далее'|_}}</a>
            </div>
        </div>
    </div>
</div", "/shared/httpd/psycholog/htdocs/themes/tarana/partials/sidebar/aboutme.htm", "");
    }
}
