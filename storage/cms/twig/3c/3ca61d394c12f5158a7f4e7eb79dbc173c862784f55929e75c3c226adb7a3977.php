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

/* /shared/httpd/psycholog/htdocs/themes/tarana/partials/common/header.htm */
class __TwigTemplate_c86febed3b8266d355d1bca65512bcd0720b736a51cbb114382d33e63b31a9dc extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta name=\"author\" content=\"Surjith S M\">
    <meta name=\"description\" content=\"MentalPress is a Responsive Medical and Health HTML5 Template \">
    <meta name=\"keywords\" content=\"health, medical, psychotherapy, website, template\">

    <link rel=\"shortcut icon\" href=\"assets/images/favicon.png\" type=\"image/x-icon\">

    <title>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 15), "meta_title", [], "any", false, false, false, 15), "html", null, true);
        echo " — Psixoloq</title>


    <link href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/themes/purple.css");
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/js/modernizr.js");
        echo "\"></script>

</head>

<body>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/partials/common/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  67 => 20,  63 => 19,  59 => 18,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta name=\"author\" content=\"Surjith S M\">
    <meta name=\"description\" content=\"MentalPress is a Responsive Medical and Health HTML5 Template \">
    <meta name=\"keywords\" content=\"health, medical, psychotherapy, website, template\">

    <link rel=\"shortcut icon\" href=\"assets/images/favicon.png\" type=\"image/x-icon\">

    <title>{{ this.page.meta_title }} — Psixoloq</title>


    <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/magnific-popup.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/themes/purple.css'|theme }}\" rel=\"stylesheet\">
    <script src=\"{{ '/assets/js/modernizr.js'|theme }}\"></script>

</head>

<body>", "/shared/httpd/psycholog/htdocs/themes/tarana/partials/common/header.htm", "");
    }
}
