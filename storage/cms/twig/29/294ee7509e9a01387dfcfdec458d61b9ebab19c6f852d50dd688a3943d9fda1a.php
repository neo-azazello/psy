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

/* /shared/httpd/psycholog/htdocs/themes/tarana/partials/content/certificates.htm */
class __TwigTemplate_54f42fcf88be6dfe75198c62cd9d5acf015aab0ea2658de87b313fe304673ad0 extends \Twig\Template
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
        echo "<div class=\"panel-grid row m-b-0 certificates\">
    
    <div class=\"header\">
      <h2>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Мои сертификаты"]);
        echo "</h2>
    </div>
    
    <div class=\"row lightbox\"> 
      
      <div class=\"column\">
        <a href=\"";
        // line 10
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/art_therapy.jpg");
        echo "\">
            <img src=\"";
        // line 11
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/art_therapy_crop.jpg");
        echo "\" style=\"width:100%\">
        </a>
        
        <a href=\"";
        // line 14
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/accredited_certificate.jpg");
        echo "\">
            <img src=\"";
        // line 15
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/accredited_certificate_crop.jpg");
        echo "\" style=\"width:100%\">
        </a>
        
        <a href=\"";
        // line 18
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/svidetelstvo.jpg");
        echo "\">
            <img src=\"";
        // line 19
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/svidetelstvo_crop.jpg");
        echo "\" style=\"width:100%\">
        </a>

      </div>
      
      <div class=\"column\">
        
        <a href=\"";
        // line 26
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/liga_chlen.jpg");
        echo "\">
            <img src=\"";
        // line 27
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/liga_chlen_crop.jpg");
        echo "\" style=\"width:100%\">
        </a>
        
        <a href=\"";
        // line 30
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/training_coaching.jpg");
        echo "\">
            <img src=\"";
        // line 31
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/training_coaching_crop.jpg");
        echo "\" style=\"width:100%\">
        </a>
        
        <a href=\"";
        // line 34
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/liga_certificate.jpg");
        echo "\">
            <img src=\"";
        // line 35
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/liga_certificate_crop.jpg");
        echo "\" style=\"width:100%\">
        </a>
        
      </div>  
      
      <div class=\"column\">
        <a href=\"";
        // line 41
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/psychology_influence.jpg");
        echo "\">
            <img src=\"";
        // line 42
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/psychology_influence_crop.jpg");
        echo "\" style=\"width:100%\">
        </a>
        
        <a href=\"";
        // line 45
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/family_therapy.jpg");
        echo "\">
            <img src=\"";
        // line 46
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/family_therapy_crop.jpg");
        echo "\" style=\"width:100%\">
        </a>
        
        <a href=\"";
        // line 49
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/consultant.jpg");
        echo "\">
            <img src=\"";
        // line 50
        echo $this->extensions['System\Twig\Extension']->mediaFilter("certificates/consultant_crop.jpg");
        echo "\" style=\"width:100%\">
        </a>
      </div>
      
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/shared/httpd/psycholog/htdocs/themes/tarana/partials/content/certificates.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 50,  138 => 49,  132 => 46,  128 => 45,  122 => 42,  118 => 41,  109 => 35,  105 => 34,  99 => 31,  95 => 30,  89 => 27,  85 => 26,  75 => 19,  71 => 18,  65 => 15,  61 => 14,  55 => 11,  51 => 10,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel-grid row m-b-0 certificates\">
    
    <div class=\"header\">
      <h2>{{'Мои сертификаты'|_}}</h2>
    </div>
    
    <div class=\"row lightbox\"> 
      
      <div class=\"column\">
        <a href=\"{{ 'certificates/art_therapy.jpg'|media}}\">
            <img src=\"{{ 'certificates/art_therapy_crop.jpg'|media}}\" style=\"width:100%\">
        </a>
        
        <a href=\"{{ 'certificates/accredited_certificate.jpg'|media}}\">
            <img src=\"{{ 'certificates/accredited_certificate_crop.jpg'|media }}\" style=\"width:100%\">
        </a>
        
        <a href=\"{{ 'certificates/svidetelstvo.jpg'|media}}\">
            <img src=\"{{ 'certificates/svidetelstvo_crop.jpg'|media }}\" style=\"width:100%\">
        </a>

      </div>
      
      <div class=\"column\">
        
        <a href=\"{{ 'certificates/liga_chlen.jpg'|media }}\">
            <img src=\"{{ 'certificates/liga_chlen_crop.jpg'|media }}\" style=\"width:100%\">
        </a>
        
        <a href=\"{{ 'certificates/training_coaching.jpg'|media }}\">
            <img src=\"{{ 'certificates/training_coaching_crop.jpg'|media }}\" style=\"width:100%\">
        </a>
        
        <a href=\"{{ 'certificates/liga_certificate.jpg'|media }}\">
            <img src=\"{{ 'certificates/liga_certificate_crop.jpg'|media }}\" style=\"width:100%\">
        </a>
        
      </div>  
      
      <div class=\"column\">
        <a href=\"{{ 'certificates/psychology_influence.jpg'|media }}\">
            <img src=\"{{ 'certificates/psychology_influence_crop.jpg'|media }}\" style=\"width:100%\">
        </a>
        
        <a href=\"{{ 'certificates/family_therapy.jpg'|media }}\">
            <img src=\"{{ 'certificates/family_therapy_crop.jpg'|media }}\" style=\"width:100%\">
        </a>
        
        <a href=\"{{ 'certificates/consultant.jpg'|media }}\">
            <img src=\"{{'certificates/consultant_crop.jpg'|media}}\" style=\"width:100%\">
        </a>
      </div>
      
    </div>
</div>", "/shared/httpd/psycholog/htdocs/themes/tarana/partials/content/certificates.htm", "");
    }
}
