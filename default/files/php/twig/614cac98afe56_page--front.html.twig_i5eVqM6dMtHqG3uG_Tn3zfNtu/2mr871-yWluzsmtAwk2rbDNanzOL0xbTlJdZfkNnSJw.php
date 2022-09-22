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

/* sites/isp/themes/rjgov/page--front.html.twig */
class __TwigTemplate_fa982868ac3d388a2a98a77a7935d12e19cbb0eae0d68b0fc225e7dc1b5c5d8d extends \Twig\Template
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
        echo "
";
        // line 2
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "sites/isp/themes/rjgov/page--front.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderPrincipal", [], "any", false, false, true, 4)) {
            // line 5
            echo "    <div class=\"slider-fixo\" data-aos=\"zoom-in\" data-aos-duration=\"2000\">
        ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderPrincipal", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "       
    </div><!-- /slider-fixo -->
    <hr class=\"gradiente\">
";
        }
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "flipCard", [], "any", false, false, true, 10)) {
            // line 11
            echo "    <section class=\"section-container aos-init aos-animate\" data-aos=\"flip-down\" data-aos-easing=\"ease-out-cubic\">
    \t";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "flipCard", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "
    </section>
    <hr class=\"gradiente\">
";
        }
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bannerPrincipal", [], "any", false, false, true, 16)) {
            // line 17
            echo "    <section class=\"banner branco\">
        <div class=\"section-container aos-init aos-animate\" data-aos=\"flip-down\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"2000\">
            <div class=\"banner-principal\">
                ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bannerPrincipal", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
            </div>
        </div>
    </section>
    <hr class=\"gradiente\">
";
        }
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "dadosPrincipal", [], "any", false, false, true, 26)) {
            // line 27
            echo "    <section class=\"programas-acoes branco\" data-aos=\"fade-up-right\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"2000\" class=\"aos-init aos-animate\">
        <div class=\"section-container\">
            <div class=\"titulo-secao\">
                <span>ISP Dados</span>
                <p></p>
            </div>
            <div class=\"dados-principal\">
                ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "dadosPrincipal", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
            </div>

        </div>
    </section>
<hr class=\"gradiente\">
";
        }
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "noticiasPrincipal", [], "any", false, false, true, 41)) {
            // line 42
            echo "    <section class=\"banner branco\" class=\"programas-acoes branco aos-init aos-animate\">
        ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "noticiasPrincipal", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
    </section>
    <hr class=\"gradiente\">
";
        }
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "videosPrincipal", [], "any", false, false, true, 47)) {
            // line 48
            echo "    <section id=\"video\" data-aos=\"fade-right\" class=\"programas-acoes branco aos-init aos-animate\"  data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"2000\">
        <div class=\"section-container\" id=\"video-section\">
            <div class=\"titulo-secao\"><span>Vídeos</span></div>
                ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "videosPrincipal", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "
            <div class=\"lista-noticias-line\">
                <button class=\"lista-noticias\">
                <a id=\"A3\" href=\"javascript:__doPostBack('A3','')\">Veja a lista completa de vídeos</a>
                </button>
            </div>
        </div>
    </section>
    <hr class=\"gradiente\">
";
        }
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderUteis", [], "any", false, false, true, 61)) {
            // line 62
            echo "    <section data-aos=\"fade-left\" class=\"programas-acoes branco aos-init aos-animate\">
        <div class=\"section-container\">    
            <div class=\"titulo-secao\">
                <span>Links Úteis</span>
            </div>       
            ";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderUteis", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "
        </div>    
    </section><!-- /linkUteis -->
    <hr class=\"gradiente\">
";
        }
        // line 72
        echo "
<section class=\"telefones-uteis\">
\t<div class=\"section-container\" id=\"telefones-uteis\">

\t\t<div class=\"titulo-secao\">
\t\t\t<span>Telefones Úteis</span>
\t\t\t<p></p>
\t\t</div>

\t\t<div class=\"telefones-uteis-wrap\">
\t\t\t
\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-1\">Polícia Militar</button>
\t\t\t\t\t\t

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-1\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<p>Polícia Militar</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:190\">190</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t
\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-3\">Bombeiros</button>
\t\t\t\t\t\t

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-3\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<p>Bombeiros</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:193\">193</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t
\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-4\">Disque Rio Contra a Corrupção</button>
\t\t\t\t\t\t<span id=\"RptTelefoneUtil_ctl02_lblTelefone\"><br></span>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-4\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<p>Disque Rio Contra a Corrupção</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:2276-6556\">2276-6556</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t
\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-5\">SAMU</button>
\t\t\t\t\t\t

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-5\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<p>SAMU</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:192\">192</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t
\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-6\">Disque Transplante</button>
\t\t\t\t\t\t

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-6\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<p>Disque Transplante</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:155\">155</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t
\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-7\">HemoRio</button>
\t\t\t\t\t\t<span id=\"RptTelefoneUtil_ctl05_lblTelefone\"><br></span>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-7\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<p>HemoRio</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:2332-8611\">2332-8611</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t
\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-8\">Defesa Civil</button>
\t\t\t\t\t\t

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-8\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<p>Defesa Civil</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:199\">199</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t
\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-9\">Disque Ambiente</button>
\t\t\t\t\t\t

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-9\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<p>Disque Ambiente</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:2334-7910\">2334-7910</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t
\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-11\">Detran </button>
\t\t\t\t\t\t<span id=\"RptTelefoneUtil_ctl08_lblTelefone\"><br></span>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-11\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<p>Detran </p>
\t\t\t\t\t\t\t<h3><a href=\"tel:3460-4040\">3460-4040</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t
\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-12\">Polícia Civil</button>
\t\t\t\t\t\t

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-12\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<p>Polícia Civil</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:197\">197</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t
\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-13\">Procon</button>
\t\t\t\t\t\t

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-13\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<p>Procon</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:151\">151</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t
\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-16\">Disque Cidadania e Direitos Humanos</button>
\t\t\t\t\t\t<span id=\"RptTelefoneUtil_ctl11_lblTelefone\"><br></span>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-16\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<p>Disque Cidadania e Direitos Humanos</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:0800 023 4567\">0800 023 4567</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t
\t\t</div>

\t</div>
</section>

    <!-- VOLTAR AO TOPO -->

    <a id=\"back2Top\" title=\"Voltar ao topo\" href=\"#\">&#10148;</a>

";
        // line 308
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/footer.html.twig"), "sites/isp/themes/rjgov/page--front.html.twig", 308)->display($context);
    }

    public function getTemplateName()
    {
        return "sites/isp/themes/rjgov/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 308,  157 => 72,  149 => 67,  142 => 62,  140 => 61,  127 => 51,  122 => 48,  120 => 47,  113 => 43,  110 => 42,  108 => 41,  98 => 34,  89 => 27,  87 => 26,  78 => 20,  73 => 17,  71 => 16,  64 => 12,  61 => 11,  59 => 10,  52 => 6,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/isp/themes/rjgov/page--front.html.twig", "/var/www/html/drupal/sites/isp/themes/rjgov/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 2, "if" => 4);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
