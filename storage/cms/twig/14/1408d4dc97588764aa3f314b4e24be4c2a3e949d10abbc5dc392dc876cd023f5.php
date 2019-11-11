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

/* /shared/httpd/psycholog/htdocs/themes/tarana/partials/common/footer.htm */
class __TwigTemplate_0fd260ccd530e4cb2517773f05aea692eb3b4b1368af08af11b933a8b971cba0 extends \Twig\Template
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
        echo "</div>
<div class=\"footer-gradient\"></div>
    
    <footer class=\"footer\">
        
        <div class=\"footer-top\">
            <div class=\"container  footer-top__divider\">
                <div class=\"row\">
                    <div class=\"col-xs-12  col-md-4\">
                        <div class=\"widget  widget_text\">
                            <div class=\"textwidget\">
                                <p>Консультации проводятся в Каспиан Плаза, в Центре Психологии, а также онлайн. <strong>Конфедициальность гарантирована!</strong> Методы c которыми я работаю: aрт-терапия, гештальт-терапия, когнитивная терапия, бихевиорально-поведенческая терапия, НЛП, психоанализ и тд.</p>
                            </div>
                        </div>
                    </div>                
                    <div class=\"col-xs-12  col-md-4\">
                        <div class=\"widget  widget_text\">
                            <h6 class=\"footer-top__headings\">";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Контактный номер"]);
        echo "</h6>
                            <div class=\"textwidget\">
                                <a class=\"btn  btn-danger  btn-rounded\" href=\"tel:0775144204\" target=\"_self\">
                                    <i class=\"fa fa-phone\"></i> 077 514 42 04
                                </a>
                                
                                <a class=\"btn  btn-success  btn-rounded\" href=\"https://wa.me/+994775144204/?text=Здравствуйте\"  target=\"_self\">
                                    <i class=\"fa fa-whatsapp\"></i> Написать мне в WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12  col-md-4\">
                        <div class=\"widget  widget_text\">
                            <h6 class=\"footer-top__headings\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Социальные сети"]);
        echo "</h6>
                            <div class=\"textwidget\">
                <div class=\"widget  header-widgets__widget  widget-social-icons\">
                    
                    <a class=\"social-icons__link\" href=\"https://www.facebook.com/tarana.alieva.142\" target=\"_blank\">
                        <i class=\"fa  fa-facebook\"></i>
                    </a>
                    
                    <a class=\"social-icons__link\" href=\"https://www.instagram.com/tarana_arif/\" target=\"_blank\">
                        <i class=\"fa  fa-instagram\"></i>
                    </a>
                   
                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class=\"footer-bottom\">
            <div class=\"container\">
                
                <div class=\"footer-bottom__left\">
                    <img src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"Tarana Arif\" class=\"footer_logo\">
                </div>
                
                <!-- <div class=\"footer-bottom__right\">
                    <div class=\"footer-bottom__payment-methods\">
                        <span>PAYMENT METHODS:</span>
                        &nbsp; &nbsp; &nbsp;
                        <i class=\"fa  fa-3x  fa-cc-visa\"></i>
                        &nbsp;
                        <i class=\"fa  fa-3x  fa-cc-mastercard\"></i>
                        &nbsp;
                        <i class=\"fa  fa-3x  fa-cc-amex\"></i>
                        &nbsp;
                        <i class=\"fa  fa-3x  fa-cc-paypal\"></i>
                    </div>
                </div> -->
            </div>
        </div>
    </footer>

    <script type=\"text/javascript\" src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/picturefill.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/magnific-popup.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    
    ";
        // line 83
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 84
        echo "    ";
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 85
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/partials/common/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 85,  149 => 84,  145 => 83,  140 => 81,  136 => 80,  132 => 79,  128 => 78,  124 => 77,  101 => 57,  73 => 32,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("</div>
<div class=\"footer-gradient\"></div>
    
    <footer class=\"footer\">
        
        <div class=\"footer-top\">
            <div class=\"container  footer-top__divider\">
                <div class=\"row\">
                    <div class=\"col-xs-12  col-md-4\">
                        <div class=\"widget  widget_text\">
                            <div class=\"textwidget\">
                                <p>Консультации проводятся в Каспиан Плаза, в Центре Психологии, а также онлайн. <strong>Конфедициальность гарантирована!</strong> Методы c которыми я работаю: aрт-терапия, гештальт-терапия, когнитивная терапия, бихевиорально-поведенческая терапия, НЛП, психоанализ и тд.</p>
                            </div>
                        </div>
                    </div>                
                    <div class=\"col-xs-12  col-md-4\">
                        <div class=\"widget  widget_text\">
                            <h6 class=\"footer-top__headings\">{{'Контактный номер'|_}}</h6>
                            <div class=\"textwidget\">
                                <a class=\"btn  btn-danger  btn-rounded\" href=\"tel:0775144204\" target=\"_self\">
                                    <i class=\"fa fa-phone\"></i> 077 514 42 04
                                </a>
                                
                                <a class=\"btn  btn-success  btn-rounded\" href=\"https://wa.me/+994775144204/?text=Здравствуйте\"  target=\"_self\">
                                    <i class=\"fa fa-whatsapp\"></i> Написать мне в WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12  col-md-4\">
                        <div class=\"widget  widget_text\">
                            <h6 class=\"footer-top__headings\">{{'Социальные сети'|_}}</h6>
                            <div class=\"textwidget\">
                <div class=\"widget  header-widgets__widget  widget-social-icons\">
                    
                    <a class=\"social-icons__link\" href=\"https://www.facebook.com/tarana.alieva.142\" target=\"_blank\">
                        <i class=\"fa  fa-facebook\"></i>
                    </a>
                    
                    <a class=\"social-icons__link\" href=\"https://www.instagram.com/tarana_arif/\" target=\"_blank\">
                        <i class=\"fa  fa-instagram\"></i>
                    </a>
                   
                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class=\"footer-bottom\">
            <div class=\"container\">
                
                <div class=\"footer-bottom__left\">
                    <img src=\"{{ 'assets/images/logo.png'|theme}}\" alt=\"Tarana Arif\" class=\"footer_logo\">
                </div>
                
                <!-- <div class=\"footer-bottom__right\">
                    <div class=\"footer-bottom__payment-methods\">
                        <span>PAYMENT METHODS:</span>
                        &nbsp; &nbsp; &nbsp;
                        <i class=\"fa  fa-3x  fa-cc-visa\"></i>
                        &nbsp;
                        <i class=\"fa  fa-3x  fa-cc-mastercard\"></i>
                        &nbsp;
                        <i class=\"fa  fa-3x  fa-cc-amex\"></i>
                        &nbsp;
                        <i class=\"fa  fa-3x  fa-cc-paypal\"></i>
                    </div>
                </div> -->
            </div>
        </div>
    </footer>

    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/picturefill.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/magnific-popup.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/main.js'|theme }}\"></script>
    
    {% framework %}
    {% framework extras %}

</body>
</html>", "/shared/httpd/psycholog/htdocs/themes/tarana/partials/common/footer.htm", "");
    }
}
