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
                            <h6 class=\"footer-top__headings\">";
        // line 11
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
                    <div class=\"col-xs-12  col-md-4\">
                        <div class=\"widget  widget_text\">
                            <h6 class=\"footer-top__headings\">Contact</h6>
                            <div class=\"textwidget\">
                                <a class=\"btn  btn-danger  btn-rounded\" href=\"tel:18881234567\" target=\"_self\">
                                    <i class=\"fa fa-phone\"></i> 1-888-123-4567
                                </a>
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
        // line 45
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
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/picturefill.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/magnific-popup.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    
    ";
        // line 71
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 72
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
        // line 73
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
        return array (  146 => 73,  134 => 72,  130 => 71,  125 => 69,  121 => 68,  117 => 67,  113 => 66,  109 => 65,  86 => 45,  49 => 11,  37 => 1,);
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
                    <div class=\"col-xs-12  col-md-4\">
                        <div class=\"widget  widget_text\">
                            <h6 class=\"footer-top__headings\">Contact</h6>
                            <div class=\"textwidget\">
                                <a class=\"btn  btn-danger  btn-rounded\" href=\"tel:18881234567\" target=\"_self\">
                                    <i class=\"fa fa-phone\"></i> 1-888-123-4567
                                </a>
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
