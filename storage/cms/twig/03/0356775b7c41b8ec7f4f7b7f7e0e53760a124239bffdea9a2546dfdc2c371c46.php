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

/* /shared/httpd/psycholog/htdocs/themes/tarana/pages/home-page.htm */
class __TwigTemplate_61e7cadb6873d908d4eeaa33796b2b417c5d074b1942cf09bfe702e79b3d44e6 extends \Twig\Template
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
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "    <div class=\"\">
        <article>
            <div class=\"panel-grid row m-b-lg\">
                    <div class=\"panel-row-style\">
                        <div class=\"col-md-12\">
                            <div class=\"so-panel widget widget-testimonials panel-first-child panel-last-child\">
                                <div class=\"testimonial grey-wrap\">
                                    <h2 class=\"widget-title\">";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Отзывы"]);
        echo "</h2>
                                    <div class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
                                        <div class=\"carousel-inner\" role=\"listbox\">
                                            <div class=\"item active\">
                                                <div class=\"row\">
                                                    <div class=\"col-xs-12  col-sm-12\">
                                                        <blockquote>
                                                            <p class=\"testimonial__quote\">
                                                                We've had a lot of financial troubles over the
                                                                years; loss of physical health, job and
                                                                bankruptcy. Laura's coaching gave us hope and a
                                                                new sense of vision so we can create our lives
                                                                together.</p>
                                                            <cite class=\"testimonial__author\">
                                                                Anastacia Rockafeller</cite>
                                                            <div class=\"testimonial__author-description\">
                                                                Mother of two.</div>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                                <div class=\"row\">
                                                    <div class=\"col-xs-12  col-sm-12\">
                                                        <blockquote>
                                                            <p class=\"testimonial__quote\">
                                                                We've had a lot of financial troubles over the
                                                                years; loss of physical health, job and
                                                                bankruptcy. Laura's coaching gave us hope and a
                                                                new sense of vision so we can create our lives
                                                                together.</p>
                                                            <cite class=\"testimonial__author\">
                                                                Anastacia Rockafeller</cite>
                                                            <div class=\"testimonial__author-description\">
                                                                Mother of two.</div>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </article>
    </div>
</div>

";
        // line 62
        echo "<div class=\"col-xs-12  col-md-3  col-md-pull-9\">
 <div class=\"sidebar\">
        ";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/aboutme"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/insta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 66
        echo " </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/pages/home-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 66,  114 => 65,  110 => 64,  106 => 62,  53 => 11,  44 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#THE BLOCK OF MAIN CONTENT#}
<div class=\"col-xs-12  col-md-9 col-md-push-3\" role=\"main\">
    {% partial 'content/slider'%}
    <div class=\"\">
        <article>
            <div class=\"panel-grid row m-b-lg\">
                    <div class=\"panel-row-style\">
                        <div class=\"col-md-12\">
                            <div class=\"so-panel widget widget-testimonials panel-first-child panel-last-child\">
                                <div class=\"testimonial grey-wrap\">
                                    <h2 class=\"widget-title\">{{'Отзывы'|_}}</h2>
                                    <div class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
                                        <div class=\"carousel-inner\" role=\"listbox\">
                                            <div class=\"item active\">
                                                <div class=\"row\">
                                                    <div class=\"col-xs-12  col-sm-12\">
                                                        <blockquote>
                                                            <p class=\"testimonial__quote\">
                                                                We've had a lot of financial troubles over the
                                                                years; loss of physical health, job and
                                                                bankruptcy. Laura's coaching gave us hope and a
                                                                new sense of vision so we can create our lives
                                                                together.</p>
                                                            <cite class=\"testimonial__author\">
                                                                Anastacia Rockafeller</cite>
                                                            <div class=\"testimonial__author-description\">
                                                                Mother of two.</div>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                                <div class=\"row\">
                                                    <div class=\"col-xs-12  col-sm-12\">
                                                        <blockquote>
                                                            <p class=\"testimonial__quote\">
                                                                We've had a lot of financial troubles over the
                                                                years; loss of physical health, job and
                                                                bankruptcy. Laura's coaching gave us hope and a
                                                                new sense of vision so we can create our lives
                                                                together.</p>
                                                            <cite class=\"testimonial__author\">
                                                                Anastacia Rockafeller</cite>
                                                            <div class=\"testimonial__author-description\">
                                                                Mother of two.</div>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
        {% partial 'sidebar/insta' %}
 </div>
</div>", "/shared/httpd/psycholog/htdocs/themes/tarana/pages/home-page.htm", "");
    }
}
