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

/* /shared/httpd/psycholog/htdocs/themes/tarana/partials/newsPost/default.htm */
class __TwigTemplate_ebbbfebca6e31a18c04503472c0b6aeb707b31094d091d01efe17fb5a12e4d41 extends \Twig\Template
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post", [], "any", false, false, false, 1);
        // line 2
        echo "
    <div class=\"main-title\">
        <h1 class=\"main-title__primary\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
    </div>
        
        <div>
        
            <div class=\"panel-grid row m-b-0\">
                
                <div class=\"col-md-6 panel-grid-cell\">
                    <div class=\"textwidget\">
                        ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 13);
        echo "
                    </div>
                </div>
                
                <div class=\"col-md-6 panel-grid-cell\">
                    <div class=\"textwidget\">
                        <p>
                            <img class=\"alignnone size-full\" src=\"";
        // line 20
        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image", [], "any", false, false, false, 20));
        echo "\" width=\"850\" height=\"480\">
                        </p>
                        <p>
                           <img class=\"alignnone size-full \" src=\"assets/images/image-6.jpg\" width=\"850\" height=\"480\">
                        </p>
        
                    </div>
                </div>
            </div>
        
        </div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/partials/newsPost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  55 => 13,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = __SELF__.post %}

    <div class=\"main-title\">
        <h1 class=\"main-title__primary\">{{post.title}}</h1>
    </div>
        
        <div>
        
            <div class=\"panel-grid row m-b-0\">
                
                <div class=\"col-md-6 panel-grid-cell\">
                    <div class=\"textwidget\">
                        {{ post.content|raw }}
                    </div>
                </div>
                
                <div class=\"col-md-6 panel-grid-cell\">
                    <div class=\"textwidget\">
                        <p>
                            <img class=\"alignnone size-full\" src=\"{{ post.image|media }}\" width=\"850\" height=\"480\">
                        </p>
                        <p>
                           <img class=\"alignnone size-full \" src=\"assets/images/image-6.jpg\" width=\"850\" height=\"480\">
                        </p>
        
                    </div>
                </div>
            </div>
        
        </div>", "/shared/httpd/psycholog/htdocs/themes/tarana/partials/newsPost/default.htm", "");
    }
}
