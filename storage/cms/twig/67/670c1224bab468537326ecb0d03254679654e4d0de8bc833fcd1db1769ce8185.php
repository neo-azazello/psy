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

/* /shared/httpd/psycholog/htdocs/themes/tarana/partials/media/video.htm */
class __TwigTemplate_9902062d0a948d7c0d34043af54d8dcc841fcc75ef8d6bf41c3bd0323f70699d extends \Twig\Template
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
        echo "<ul class=\"list-unstyled video-list-thumbs row\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 3
            echo "    \t
    \t<li class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
    \t\t
    \t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "videoid", [], "any", false, false, false, 6), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "videoname", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
    \t\t\t<img src=\"http://i.ytimg.com/vi/";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "videoid", [], "any", false, false, false, 7), "html", null, true);
            echo "/mqdefault.jpg\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "videoname", [], "any", false, false, false, 7), "html", null, true);
            echo "\" class=\"img-responsive\" height=\"130px\" />
    \t\t\t<h2>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "videoname", [], "any", false, false, false, 8), "html", null, true);
            echo "</h2>
    \t\t\t<span class=\"glyphicon-play-circle\"><i class=\"fa fa-youtube-play\"></i></span>
    \t\t\t<span class=\"duration\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "duration", [], "any", false, false, false, 10), "html", null, true);
            echo "</span>
    \t\t</a>
    \t\t
    \t\t <div class=\"modal fade\" id=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "videoid", [], "any", false, false, false, 13), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-body mb-0 p-0\">
                    <div class=\"embed-responsive embed-responsive-16by9 z-depth-1-half\">
                      <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "videoid", [], "any", false, false, false, 18), "html", null, true);
            echo "\"
                        allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class=\"modal-footer justify-content-center\">
                    <button type=\"button\" class=\"btn btn-outline-primary btn-rounded btn-md ml-4\" data-dismiss=\"modal\">";
            // line 23
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Закрыть"]);
            echo "</button>
                  </div>
                </div>
              </div>
            </div>
    \t\t
    \t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/partials/media/video.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  88 => 23,  80 => 18,  72 => 13,  66 => 10,  61 => 8,  55 => 7,  49 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"list-unstyled video-list-thumbs row\">
    {% for video in videos %}
    \t
    \t<li class=\"col-lg-3 col-md-4 col-sm-4 col-xs-6\">
    \t\t
    \t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#{{video.videoid}}\" title=\"{{video.videoname}}\">
    \t\t\t<img src=\"http://i.ytimg.com/vi/{{video.videoid}}/mqdefault.jpg\" alt=\"{{video.videoname}}\" class=\"img-responsive\" height=\"130px\" />
    \t\t\t<h2>{{video.videoname}}</h2>
    \t\t\t<span class=\"glyphicon-play-circle\"><i class=\"fa fa-youtube-play\"></i></span>
    \t\t\t<span class=\"duration\">{{video.duration}}</span>
    \t\t</a>
    \t\t
    \t\t <div class=\"modal fade\" id=\"{{video.videoid}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-body mb-0 p-0\">
                    <div class=\"embed-responsive embed-responsive-16by9 z-depth-1-half\">
                      <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/{{video.videoid}}\"
                        allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class=\"modal-footer justify-content-center\">
                    <button type=\"button\" class=\"btn btn-outline-primary btn-rounded btn-md ml-4\" data-dismiss=\"modal\">{{'Закрыть'|_}}</button>
                  </div>
                </div>
              </div>
            </div>
    \t\t
    \t</li>
\t{% endfor %}
</ul>", "/shared/httpd/psycholog/htdocs/themes/tarana/partials/media/video.htm", "");
    }
}
