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

/* sites/isp/themes/rjgov/partials/header.html.twig */
class __TwigTemplate_d40fec04c9201d81616b38928e835aafdc37f968973c9962b2679f22dde6b993 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container-pagina\">
    <div class=\"menu-superior\">
        <div class=\"menusupi\">      
            <div class=\"esquerda-menu-superior\">
                <ul>
                    <li style=\"font-weight:600; letter-spacing:0.8\" title=\"Portal do Governo do Rio de Janeiro\"><a href=\"http://www.rj.gov.br/default.aspx\">rj.gov</a></li>
                </ul>
                <div class=\"social-midia-sup\" style=\"padding-left: 20px;\">
                    <ul>
                        <li title=\"Instagram\"><a class=\"icons instagram-sup\" href=\"https://instagram.com/govrj\" target=\"_blank\">Instagram</a></li>
                        <li title=\"Facebook\"><a class=\"icons facebook-sup\" href=\"https://facebook.com/governodorio\" target=\"_blank\">Facebook</a></li>
                        <li title=\"Twitter\"><a class=\"icons twitter-sup\" href=\"https://twitter.com/GovRJ\" target=\"_blank\">Twitter</a></li>
                        <li title=\"Youtube\"><a class=\"icons youtube-sup\" href=\"https://youtube.com/user/GovRJ\" target=\"_blank\">Youtube</a></li>
                        <li title=\"Flickr\"><a href=\"https://www.flickr.com/photos/governodorio/\" target=\"_blank\"><i class=\"fab fa-flickr fa-lg\"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"infosup\">
                ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuTopo", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
            </div>
            <div id=\"atl-player\">
                <div style=\"height: 35px; \">                    
                </div>
            </div>
        </div>
    </div><!-- #MENUSUPI -->    
    <script>
        function openNav() {
           // document.getElementById(\"myNav\").style.display = \"block\";
        }

        function closeNav() {
            //document.getElementById(\"myNav\").style.display = \"none\";
        }
    </script>
    <header class=\"cabecalho\"><!-- ### HEADER ### -->
        <div class=\"section-container\" id=\"cabecalho\">
            <div id=\"hambtn\"><a onclick=\"openNav()\">&#9776;</a></div>    
            <div class=\"logoproderj-redes-wrap\" >
                <div class=\"logo-proderj logo\">
                    ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logoPortal", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"redes-webmail-wrap\">    
                    <div class=\"social-midia-sup social-midia-proderj\">
                        <div style=\"float:left;\">";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "busca", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "</div>
                        <div style=\"float:right\">";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "redesSociaisPortal", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "<div>                        
                    </div>                   
                </div>
            </div>
        </div><!-- /cabecalho-->        
    </header><!--  ### FIM HEADER ###  -->
    <section id=\"menu\">
        <div id=\"myNav\" class=\"menu-overlay\">
            <div class=\"menu-overlay-container section-container\">
                <div class=\"menu-overlay-content\">
                    <div class=\"menu-row\">
                        <div class=\"\" id=\"close\">
                            <a href=\"javascript:void(0)\" class=\"closebtn\" onClick=\"closeNav()\">&times;</a>
                        </div>
                        ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuPrincipal", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div><!--/div--> 
    </section><!-- #MENU -->
</div>";
    }

    public function getTemplateName()
    {
        return "sites/isp/themes/rjgov/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 60,  95 => 46,  91 => 45,  84 => 41,  59 => 19,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/isp/themes/rjgov/partials/header.html.twig", "/var/www/html/drupal/sites/isp/themes/rjgov/partials/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
