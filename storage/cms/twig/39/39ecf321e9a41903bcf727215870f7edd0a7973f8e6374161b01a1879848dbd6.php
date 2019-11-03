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

/* /shared/httpd/psycholog/htdocs/themes/tarana/partials/newsPosts/default.htm */
class __TwigTemplate_6be228bfaef68c3f1d5b8c1cd5ef9b0cdbade3af142cd67a71825ea51ab1df76 extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "
<div class=\"col-xs-12 col-md-4\">
    <div class=\"latest-post\">
        <a class=\"latest-post__thumbnail\" href=\"/services/";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
            <img width=\"270\" height=\"190\" src=\"";
            // line 7
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 7));
            echo "\" class=\"attachment-latest-posts size-latest-posts wp-post-image\">
        </a>
        
        <div class=\"latest-post__categories\">
            <ul class=\"post-categories\">
                <li>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "html", null, true);
            echo "</li>
            </ul>
        </div>
        
        <h4 class=\"latest-post__title\">
            <a href=\"/services/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 17), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 17), "html", null, true);
            echo " </a>
        </h4>
        <p class=\"latest-post__excerpt\"> ";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["post"], "introductory", [], "any", false, false, false, 19);
            echo " </p>
    </div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/partials/newsPosts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  68 => 17,  60 => 12,  52 => 7,  48 => 6,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = __SELF__.posts %}
{% for post in posts %}

<div class=\"col-xs-12 col-md-4\">
    <div class=\"latest-post\">
        <a class=\"latest-post__thumbnail\" href=\"/services/{{ post.slug }}\">
            <img width=\"270\" height=\"190\" src=\"{{ post.image|media }}\" class=\"attachment-latest-posts size-latest-posts wp-post-image\">
        </a>
        
        <div class=\"latest-post__categories\">
            <ul class=\"post-categories\">
                <li>{{ this.page.title }}</li>
            </ul>
        </div>
        
        <h4 class=\"latest-post__title\">
            <a href=\"/services/{{ post.slug }}\">{{ post.title }} </a>
        </h4>
        <p class=\"latest-post__excerpt\"> {{ post.introductory|raw }} </p>
    </div>
</div>

{% endfor %}", "/shared/httpd/psycholog/htdocs/themes/tarana/partials/newsPosts/default.htm", "");
    }
}
