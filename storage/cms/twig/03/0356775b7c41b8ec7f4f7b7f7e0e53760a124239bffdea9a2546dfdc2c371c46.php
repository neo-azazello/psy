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
        echo "    <div class=\"content-container\">
        <article>

                <div class=\"panel-grid row m-b-lg\">
                    <div class=\"col-md-6\">
                        <div class=\"so-panel widget widget_pw_banner widget-banner panel-first-child panel-last-child\"
                            id=\"panel-6-1-0-0\">
                            <a class=\"banner\" href=\"http://frequently-asked-questions\" target=\"_self\">
                                <div class=\"banner__title\">
                                    Privacy Policy</div>
                                <div class=\"banner__content\">
                                    Between Doctors and Patients</div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"so-panel widget widget_pw_banner widget-banner panel-first-child panel-last-child\"
                            id=\"panel-6-1-1-0\">
                            <a class=\"banner\" href=\"http://shop\" target=\"_self\">
                                <div class=\"banner__title\">
                                    Book Recommendations</div>
                                <div class=\"banner__content\">
                                    Couple of Books We Recommend You</div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ========  // END HIGHLIGHT LINK ======== -->


                <div class=\"panel-grid row m-b-lg\">
                    <div class=\"panel-row-style\">
                        <div class=\"col-md-12\">
                            <div class=\"so-panel widget widget-testimonials panel-first-child panel-last-child\">
                                <div class=\"testimonial grey-wrap\">
                                    <h2 class=\"widget-title\">Testimonials</h2>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========  // END TESTIMONIALS ======== -->

                <!-- ============================
                                                                                FAQ SECTION
                                                                                ============================ -->

                <!-- FAQ TITLE -->
                <div class=\"panel-grid row m-b\">
                    <div class=\"col-md-12\">
                        <div class=\"so-panel widget panel-first-child panel-last-child\" id=\"panel-6-4-0-0\">
                            <div class=\"text-center panel-widget-style\">
                                <h3 class=\"widget-title\">Frequently Asked Questions</h3>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- // end FAQ TITLE -->
                <div class=\"panel-grid row m-b-0\">
                    <div class=\"col-md-4\">
                        <div class=\"so-panel widget widget_black_studio_tinymce panel-first-child panel-last-child\"
                            id=\"panel-6-5-0-0\">
                            <div class=\"textwidget\">
                                <p>
                                    <strong>What can I expect in the first session when I see a
                                        therapist?</strong>
                                </p>
                                <p>Aliquam erat volutpat. Morbi volutpat velit ac sem vulputate sollicitudin.
                                    Aliquam tincidunt finibus leo, eget suscipit augue eleifend in.</p>
                                <p>
                                    <a class=\"read-more\" href=\"faq.html\">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"so-panel widget widget_black_studio_tinymce panel-first-child panel-last-child\"
                            id=\"panel-6-5-1-0\">
                            <div class=\"textwidget\">
                                <p>
                                    <strong>What are the signs of being abused by partner?</strong>
                                </p>
                                <p>Morbi volutpat velit ac sem vulputate sollicitudin. Aliquam tincidunt finibus
                                    leo, eget suscipit augue eleifend in.&nbsp;Aliquam erat volutpat.</p>
                                <p>
                                    <a class=\"read-more\" href=\"faq.html\">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"so-panel widget widget_black_studio_tinymce panel-first-child panel-last-child\"
                            id=\"panel-6-5-2-0\">
                            <div class=\"textwidget\">
                                <p>
                                    <strong>What can I expect in the first session when I see a
                                        therapist?</strong>
                                </p>
                                <p>Aliquam erat volutpat. Morbi volutpat velit ac sem vulputate sollicitudin.
                                    Aliquam tincidunt finibus leo, eget suscipit augue eleifend in.</p>
                                <p>
                                    <a class=\"read-more\" href=\"faq.html\">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========  // END FAQ SECTION ======== -->

            </article>
    </div>
</div>

";
        // line 144
        echo "<div class=\"col-xs-12  col-md-3  col-md-pull-9\">
 <div class=\"sidebar\">
        ";
        // line 146
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar/aboutme"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 147
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
        return array (  193 => 147,  189 => 146,  185 => 144,  44 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#THE BLOCK OF MAIN CONTENT#}
<div class=\"col-xs-12  col-md-9 col-md-push-3\" role=\"main\">
    {% partial 'content/slider'%}
    <div class=\"content-container\">
        <article>

                <div class=\"panel-grid row m-b-lg\">
                    <div class=\"col-md-6\">
                        <div class=\"so-panel widget widget_pw_banner widget-banner panel-first-child panel-last-child\"
                            id=\"panel-6-1-0-0\">
                            <a class=\"banner\" href=\"http://frequently-asked-questions\" target=\"_self\">
                                <div class=\"banner__title\">
                                    Privacy Policy</div>
                                <div class=\"banner__content\">
                                    Between Doctors and Patients</div>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"so-panel widget widget_pw_banner widget-banner panel-first-child panel-last-child\"
                            id=\"panel-6-1-1-0\">
                            <a class=\"banner\" href=\"http://shop\" target=\"_self\">
                                <div class=\"banner__title\">
                                    Book Recommendations</div>
                                <div class=\"banner__content\">
                                    Couple of Books We Recommend You</div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ========  // END HIGHLIGHT LINK ======== -->


                <div class=\"panel-grid row m-b-lg\">
                    <div class=\"panel-row-style\">
                        <div class=\"col-md-12\">
                            <div class=\"so-panel widget widget-testimonials panel-first-child panel-last-child\">
                                <div class=\"testimonial grey-wrap\">
                                    <h2 class=\"widget-title\">Testimonials</h2>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========  // END TESTIMONIALS ======== -->

                <!-- ============================
                                                                                FAQ SECTION
                                                                                ============================ -->

                <!-- FAQ TITLE -->
                <div class=\"panel-grid row m-b\">
                    <div class=\"col-md-12\">
                        <div class=\"so-panel widget panel-first-child panel-last-child\" id=\"panel-6-4-0-0\">
                            <div class=\"text-center panel-widget-style\">
                                <h3 class=\"widget-title\">Frequently Asked Questions</h3>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- // end FAQ TITLE -->
                <div class=\"panel-grid row m-b-0\">
                    <div class=\"col-md-4\">
                        <div class=\"so-panel widget widget_black_studio_tinymce panel-first-child panel-last-child\"
                            id=\"panel-6-5-0-0\">
                            <div class=\"textwidget\">
                                <p>
                                    <strong>What can I expect in the first session when I see a
                                        therapist?</strong>
                                </p>
                                <p>Aliquam erat volutpat. Morbi volutpat velit ac sem vulputate sollicitudin.
                                    Aliquam tincidunt finibus leo, eget suscipit augue eleifend in.</p>
                                <p>
                                    <a class=\"read-more\" href=\"faq.html\">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"so-panel widget widget_black_studio_tinymce panel-first-child panel-last-child\"
                            id=\"panel-6-5-1-0\">
                            <div class=\"textwidget\">
                                <p>
                                    <strong>What are the signs of being abused by partner?</strong>
                                </p>
                                <p>Morbi volutpat velit ac sem vulputate sollicitudin. Aliquam tincidunt finibus
                                    leo, eget suscipit augue eleifend in.&nbsp;Aliquam erat volutpat.</p>
                                <p>
                                    <a class=\"read-more\" href=\"faq.html\">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"so-panel widget widget_black_studio_tinymce panel-first-child panel-last-child\"
                            id=\"panel-6-5-2-0\">
                            <div class=\"textwidget\">
                                <p>
                                    <strong>What can I expect in the first session when I see a
                                        therapist?</strong>
                                </p>
                                <p>Aliquam erat volutpat. Morbi volutpat velit ac sem vulputate sollicitudin.
                                    Aliquam tincidunt finibus leo, eget suscipit augue eleifend in.</p>
                                <p>
                                    <a class=\"read-more\" href=\"faq.html\">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========  // END FAQ SECTION ======== -->

            </article>
    </div>
</div>

{#THE BLOCK OF SIDEBAR#}
<div class=\"col-xs-12  col-md-3  col-md-pull-9\">
 <div class=\"sidebar\">
        {% partial 'sidebar/aboutme' %}
 </div>
</div>", "/shared/httpd/psycholog/htdocs/themes/tarana/pages/home-page.htm", "");
    }
}
