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

/* sites/seederi/themes/secretarias/partials/footer.html.twig */
class __TwigTemplate_20c0b036765557db023160836e82df5fd2a9a2527d5b605a45f88682f90cdd64 extends \Twig\Template
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
        echo "<!-- FOOTER -->
  <footer class=\"footer\">
           <div class=\"portal499\">

            <div class=\"portal307\">
                <div class=\"portal504\">
                    <a href=\"/\">
                        <img class=\"logo-pacto-footer\" width=\"100%\" height=\"auto\" alt=\"Logo do DesenvolveRJ\" src=\"/sites/seederi/themes/secretarias/partials/logo-desenvolve-rj-br.png\">
                    </a>
                    <a href=\"http://www.desenveconomico.rj.gov.br/\">
                        <img alt=\"rj\" src=\"/sites/seederi/themes/secretarias/partials/logo-sedeeri-2.png\" class=\"portal503\" style=\"width: 100%; height: auto;\">
                    </a>
 
                    <div class=\"portal506\">

                      <a href=\"https://www.proderj.rj.gov.br/\" target=\"_blank\">
                        <div class=\"logo-proderj-fixo\" width=\"115px\" height=\"auto\" alt=\"proderj\">&nbsp;</div>
                      </a>

                    </div>

                </div>
            </div>
        </div>
    
    
        <div class=\"portal507\">
            <div>
                <p class=\"portal83 portal508 portal85\">Todo o conteúdo deste site está publicado sob a licença
                    <span class=\"portal509\"> Digital Change For Gov.</span>
                </p>
            </div>
        </div>

        <!-- VOLTAR AO TOPO -->

        <script type=\"text/javascript\">
            /*Scroll to top when arrow up clicked BEGIN*/
            \$(window).scroll(function() {
                var height = \$(window).scrollTop();
                if (height > 100) {
                    \$('#back2Top').fadeIn();
                } else {
                    \$('#back2Top').fadeOut();
                }
            });
            \$(document).ready(function() {
                \$(\"#back2Top\").click(function(event) {
                    event.preventDefault();
                    \$(\"html, body\").animate({ scrollTop: 0 }, \"slow\");
                    return false;
                });
        
            });
            /*Scroll to top when arrow up clicked END*/
        </script>
</footer>
<!-- #FOOTER -->";
    }

    public function getTemplateName()
    {
        return "sites/seederi/themes/secretarias/partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/seederi/themes/secretarias/partials/footer.html.twig", "/var/www/html/drupal/sites/seederi/themes/secretarias/partials/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
