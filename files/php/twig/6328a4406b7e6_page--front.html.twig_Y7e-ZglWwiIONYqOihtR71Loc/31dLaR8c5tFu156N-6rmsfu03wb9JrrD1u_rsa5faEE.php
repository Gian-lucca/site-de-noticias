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

/* sites/seederi/themes/secretarias/page--front.html.twig */
class __TwigTemplate_b5eabbc18629f6a74ec90c7ba9711a0c6ca5167af7e1c62ea938fd464dd840fc extends \Twig\Template
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
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "sites/seederi/themes/secretarias/page--front.html.twig", 2)->display($context);
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
\t\t
    </div><!-- /slider-fixo -->
    
";
        }
        // line 11
        echo "
";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bannerPrincipal", [], "any", false, false, true, 12)) {
            // line 13
            echo "    <section class=\"banner branco\">
        <div class=\"slider-fixo\" data-aos=\"zoom-in\" data-aos-duration=\"2000\">
            <div class=\"banner-principal\">
                ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bannerPrincipal", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "
            </div>
        </div>
    </section>
";
        }
        // line 21
        echo "
";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderEstrutura", [], "any", false, false, true, 22)) {
            // line 23
            echo "    <section data-aos=\"fade-left\" class=\"programas-acoes branco aos-init aos-animate\">
        <div class=\"section-container estrutura\">    
            <div class=\"titulo-secao\">
                <span>Estrutura</span>
            </div>       
            ";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderEstrutura", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "
        </div>    
    </section><!-- /estrutura -->
";
        }
        // line 32
        echo "
";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "noticiasPrincipal", [], "any", false, false, true, 33)) {
            // line 34
            echo "    <section class=\"banner branco noticias\" class=\"programas-acoes branco aos-init aos-animate\">
\t\t<div class=\"titulo-secao\">
\t\t\t<span>Notícias</span>
\t\t</div> 
        ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "noticiasPrincipal", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
        <div class=\"lista-noticias-line\">
                <button class=\"lista-noticias\">
                <a id=\"A3\" href=\"./noticias\">Veja a lista completa de notícias</a>
                </button>
            </div>
        </div>
    </section>
    
";
        }
        // line 48
        echo "

<section class=\"banner branco noticias\" class=\"programas-acoes branco aos-init aos-animate\">
\t<div class=\"titulo-secao\" class=\"painelContainer-wrap\">
\t\t<span>PAINEL ECONÔMICO</span>
\t</div> 
</section>

<div class=\"painelContainer-wrap\">
\t\t";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pibbrasil", [], "any", false, false, true, 57)) {
            // line 58
            echo "\t\t\t<section class=\"banner branco noticias\" class=\"programas-acoes branco aos-init aos-animate\">
\t\t\t\t<div class=\"titulo-pe\" class=\"painel-titulo\">
\t\t\t\t\t<span>PIB Brasil</span>
\t\t\t\t</div> 
\t\t\t\t";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pibbrasil", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
\t\t\t</section>
\t\t\t
\t\t";
        }
        // line 66
        echo "
\t\t";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "moedas", [], "any", false, false, true, 67)) {
            // line 68
            echo "\t\t\t<section class=\"banner branco noticias\" class=\"programas-acoes branco aos-init aos-animate\">
\t\t\t\t<div class=\"titulo-pe\" class=\"painel-titulo\">
\t\t\t\t\t<span>Moedas</span>
\t\t\t\t\t</div> 
\t\t\t\t\t";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "moedas", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
\t\t\t\t
\t\t\t</section>
\t\t\t
\t\t";
        }
        // line 77
        echo "
\t\t";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "taxas", [], "any", false, false, true, 78)) {
            // line 79
            echo "\t\t\t<section class=\"banner branco noticias\" class=\"programas-acoes branco aos-init aos-animate\">
\t\t\t\t<div class=\"titulo-pe\" class=\"painel-titulo\">
\t\t\t\t\t<span>Taxas</span>
\t\t\t\t\t</div> 
\t\t\t\t\t";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "taxas", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
\t\t\t\t
\t\t\t</section>
\t\t\t
\t\t";
        }
        // line 88
        echo "
\t\t";
        // line 89
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "indice", [], "any", false, false, true, 89)) {
            // line 90
            echo "\t\t\t<section class=\"banner branco noticias\" class=\"programas-acoes branco aos-init aos-animate\">
\t\t\t\t<div class=\"titulo-pe\" class=\"painel-titulo\">
\t\t\t\t\t<span>Índice</span>
\t\t\t\t\t</div> 
\t\t\t\t\t";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "indice", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "
\t\t\t\t
\t\t\t</section>
\t\t\t
\t\t";
        }
        // line 99
        echo "
\t\t";
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "balancacomerical", [], "any", false, false, true, 100)) {
            // line 101
            echo "\t\t\t<section class=\"banner branco noticias\" class=\"programas-acoes branco aos-init aos-animate\">
\t\t\t\t<div class=\"titulo-pe\" class=\"painel-titulo\">
\t\t\t\t\t<span>Balança Comercial</span>
\t\t\t\t\t</div> 
\t\t\t\t\t";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "balancacomerical", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
\t\t\t\t
\t\t\t</section>
\t\t\t
\t\t";
        }
        // line 110
        echo "
\t\t";
        // line 111
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salariominimo", [], "any", false, false, true, 111)) {
            // line 112
            echo "\t\t\t<section class=\"banner branco noticias\" class=\"programas-acoes branco aos-init aos-animate\">
\t\t\t\t<div class=\"titulo-pe\" class=\"painel-titulo\">
\t\t\t\t\t<span>Salário Mínimo</span>
\t\t\t\t\t</div> 
\t\t\t\t\t";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salariominimo", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            echo "
\t\t\t\t
\t\t\t</section>
\t\t\t
\t\t";
        }
        // line 121
        echo "\t\t
</div>\t




";
        // line 127
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "videosPrincipal", [], "any", false, false, true, 127)) {
            // line 128
            echo "    <section id=\"video\" data-aos=\"fade-right\" class=\"programas-acoes branco aos-init aos-animate\"  data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"2000\">
        <div class=\"section-container\" id=\"video-section\">
            <div class=\"titulo-secao\"><span>Vídeos</span></div>
                ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "videosPrincipal", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
            <div class=\"lista-noticias-line\">
                <button class=\"lista-noticias\">
                <a id=\"A3\" href=\"./video_principal_youtube\">Veja a lista completa de vídeos</a>
                </button>
            </div>
        </div>
    </section>
";
        }
        // line 140
        echo "
";
        // line 141
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "publicacoes", [], "any", false, false, true, 141)) {
            // line 142
            echo "    <section data-aos=\"fade-left\" class=\"programas-acoes branco aos-init aos-animate\">
        <div class=\"section-container\">
            <div class=\"titulo-secao\">
                <span>Publicações</span>
            </div>
            ";
            // line 147
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "publicacoes", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
            echo "
\t\t\t<div class=\"lista-noticias-line\">
                <button class=\"lista-noticias\">
                <a id=\"A3\" href=\"/publicacoes\">Veja a lista completa de Publicações</a>
                </button>
            </div>
        </div>
    </section>
    <hr class=\"gradiente\">
";
        }
        // line 157
        echo "


";
        // line 160
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "flipCard", [], "any", false, false, true, 160)) {
            // line 161
            echo "    <section class=\"section-container aos-init aos-animate\" data-aos=\"flip-down\" data-aos-easing=\"ease-out-cubic\">
    \t";
            // line 162
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "flipCard", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "
    </section>
    <hr class=\"gradiente\">
";
        }
        // line 166
        echo "
";
        // line 167
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "dadosPrincipal", [], "any", false, false, true, 167)) {
            // line 168
            echo "    <section class=\"programas-acoes branco\" data-aos=\"fade-up-right\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"2000\" class=\"aos-init aos-animate\">
        <div class=\"section-container\">
            <div class=\"titulo-secao\">
                <span>ISP Dados</span>
                <p></p>
            </div>
            <div class=\"dados-principal\">
                ";
            // line 175
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "dadosPrincipal", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
            echo "
            </div>

        </div>
    </section>
<hr class=\"gradiente\">
";
        }
        // line 182
        echo "
<!--
<section class=\"acesso-informacao\">
\t<div class=\"section-wrap aos-init aos-animate\" data-aos=\"zoom-in\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"2000\">

\t\t<h3>Transparência</h3>

\t\t<div class=\"box-acesso-informacao\">  style=\"display: flex; flex-wrap: wrap;\" 
\t\t \t<button class=\"close-secretario\"></button>
\t\t\t<div class=\"box-desc-acesso\">
\t\t\t\t<span class=\"funcao\">Secretário</span><br>
\t\t\t\t<span class=\"secretario\">Paulo Renato Marques</span>
\t\t\t\tEngenheiro pela UFRJ, com Pós Graduação em Engenharia Econômica, Ciências Contábeis e Mercado de Capitais. MBA em Marketing pela COPPEAD, Mestrado em Ciência Política e Doutorando em Psicanálise e Sociedade. 25 anos de experiência no setor privado em empresas como CSN e Light com forte passagem pelos mercados externos. Diretor Financeiro da Apolo Algodão. Atuação em diversas empresas em recuperação. 16 anos em setor público, tendo sido administrador judicial da Glória Parmalat e CCPL, sub-secretario e secretario na área de desenvolvimento econômico.
\t\t\t</div> /box-desc-acesso 
\t\t\t<div class=\"box-img-acesso-informacao\">
\t\t\t\t<img src=\"./imagens/paulo-renato-marques.jpg\" alt=\"\">
\t\t\t</div> /box-img-acesso-informacao 
\t\t</div>- /box-acesso-informacao 

\t\t<div class=\"box-acesso\">

\t\t\t<div class=\"box-resumo-acesso\">
\t\t\t\t<span class=\"funcao\">SECRETÁRIO</span><br>
\t\t\t\t";
        // line 205
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "transparenciaPresidente", [], "any", false, false, true, 205), 205, $this->source), "html", null, true);
        echo "
\t\t\t\t<div class=\"box-endereco\">
\t\t\t\t\t";
        // line 207
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "transparenciaSede", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
        echo "
\t\t\t\t</div> /box-endereco 
\t\t\t\t<div class=\"socia-media-ft\">
\t\t\t\t\t<h4 style=\"margin-bottom: 10px; font-size: .8em;\"></h4>
                \t";
        // line 211
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "redesSociaisPortal", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
        echo "
\t\t\t\t</div> /redes 
\t\t\t</div> /box-resumo-acesso 
\t\t\t<div class=\"cubos-informacao\">
\t\t\t\t";
        // line 215
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "transparenciaCard", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
        echo "
\t\t\t</div>

\t\t</div>/box-acesso 

\t</div> /section-wrap 
</section>
-->

";
        // line 224
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderSemTempo", [], "any", false, false, true, 224)) {
            // line 225
            echo "    <div class=\"slider-fixo\" data-aos=\"zoom-in\" data-aos-duration=\"2000\">
        ";
            // line 226
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderSemTempo", [], "any", false, false, true, 226), 226, $this->source), "html", null, true);
            echo "       
    </div><!-- /slider-fixo -->
    
";
        }
        // line 230
        echo "
";
        // line 231
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderUteis", [], "any", false, false, true, 231)) {
            // line 232
            echo "    <section data-aos=\"fade-left\" class=\"programas-acoes branco aos-init aos-animate\">
        <div class=\"section-container\">
            <div class=\"titulo-secao\">
                <span>Links Úteis</span>
            </div>
            ";
            // line 237
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderUteis", [], "any", false, false, true, 237), 237, $this->source), "html", null, true);
            echo "
\t\t\t<div class=\"lista-links\">
                <button class=\"lista-noticias\">
                <a id=\"A3\" href=\"./publicacoes\">Veja a lista completa de Links Uteis</a>
                </button>
            </div>
        </div>
    </section><!-- /linkUteis -->
    <hr class=\"gradiente\">
";
        }
        // line 247
        echo "

";
        // line 249
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderSecundario", [], "any", false, false, true, 249)) {
            // line 250
            echo "    <div class=\"slider-fixo\" data-aos=\"zoom-in\" data-aos-duration=\"2000\">
        ";
            // line 251
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderSecundario", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
            echo "
\t\t<div class=\"lista-noticias-line\">
              
            </div>
        </div>
    </div><!-- /slider-fixo -->
    
";
        }
        // line 259
        echo "
";
        // line 260
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderServicos", [], "any", false, false, true, 260)) {
            // line 261
            echo "    <section data-aos=\"fade-left\" class=\"programas-acoes branco aos-init aos-animate\">
        <div class=\"section-container\">    
            <div class=\"titulo-secao\">
                <span>Serviços</span>
            </div>       
            ";
            // line 266
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderServicos", [], "any", false, false, true, 266), 266, $this->source), "html", null, true);
            echo "
        </div>    
    </section><!-- /serviços -->
";
        }
        // line 270
        echo "
<!--<section class=\"telefones-uteis\">
\t<div class=\"section-container\" id=\"telefones-uteis\">

\t\t<div class=\"titulo-secao\">
\t\t\t<span>Nossos Endereços</span>
\t\t\t<p></p>
\t\t</div>

\t\t<div class=\"telefones-uteis-wrap\">

\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-1\">SEDE (Niterói)</button>


\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-1\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<div class=\"logo-pesagro-card\"></div>
\t\t\t\t\t\t\t<p>SEDE (Niterói)</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:190\">Alameda São Boaventura, 770 - Fonseca, Niterói, RJ - CEP 24.120-191</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-3\">CEP SANIDADE ANIMAL (Niterói)</button>


\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-3\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<div class=\"logo-pesagro-card\"></div>
\t\t\t\t\t\t\t<p>CEP SANIDADE ANIMAL (Niterói)</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:193\">Alameda São Boaventura, 770 - Fonseca, Niterói, RJ - CEP 24.120-191</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-4\">CEP QUALIDADE DE ALIMENTOS (Niterói)</button>
\t\t\t\t\t\t<span id=\"RptTelefoneUtil_ctl02_lblTelefone\"><br></span>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-4\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<div class=\"logo-pesagro-card\"></div>
\t\t\t\t\t\t\t<p>CEP QUALIDADE DE ALIMENTOS (Niterói)</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:2276-6556\">Alameda São Boaventura, 770 - Fonseca, Niterói, RJ - CEP 24.120-191</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-5\">CEP AGROENERGIA E APROVEITAMENTO DE RESÍDUOS (Campos dos Goytacazes)</button>


\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-5\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<div class=\"logo-pesagro-card\"></div>
\t\t\t\t\t\t\t<p>CEP AGROENERGIA E APROVEITAMENTO DE RESÍDUOS (Campos dos Goytacazes)</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:192\">Av. Francisco Lamego, 134 - Guarus, Campos - RJ - CEP: 28.080-000</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-6\">CEP AGRICULTURA ORGÂNICA (Seropédica)</button>


\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-6\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<div class=\"logo-pesagro-card\"></div>
\t\t\t\t\t\t\t<p>CEP AGRICULTURA ORGÂNICA (Seropédica)</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:155\">BR 465, Km 47 - Bairro Ecologia, Seropédica, RJ - CEP: 23.890-000</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-7\">CEP DESENVOLVIMENTO RURAL SUSTENTÁVEL (Macaé)</button>
\t\t\t\t\t\t<span id=\"RptTelefoneUtil_ctl05_lblTelefone\"><br></span>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-7\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<div class=\"logo-pesagro-card\"></div>
\t\t\t\t\t\t\t<p>CEP DESENVOLVIMENTO RURAL SUSTENTÁVEL (Macaé)</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:2332-8611\">Estrada Adérson Ferreira Filho, s/nº, Cidade Nova - Macaé, RJ - CEP: 27.949-100</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-8\">CEP DESENVOLVIMENTO DA PECUÁRIA LEITEIRA (Itaocara)</button>


\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-8\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<div class=\"logo-pesagro-card\"></div>
\t\t\t\t\t\t\t<p>CEP DESENVOLVIMENTO DA PECUÁRIA LEITEIRA (Itaocara)</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:199\">Antigo Campo de Sementes, s/nº - Itaocara - RJ - CEP: 28.570-000</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-9\">CEP HORTICULTURA (Nova Friburgo)</button>


\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-9\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<div class=\"logo-pesagro-card\"></div>
\t\t\t\t\t\t\t<p>CEP HORTICULTURA (Nova Friburgo)</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:2334-7910\">R. Euclides Solos de Pontes, nº 30 - Centro, Nova Friburgo, RJ - CEP: 28.625-020</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"telefones-uteis-linha\">

\t\t\t\t\t\t<button class=\"md-trigger\" data-modal=\"modal-9-11\">SERVIÇO DE INFORMAÇÃO DE MERCADO AGRÍCOLA (Rio de Janeiro)</button>
\t\t\t\t\t\t<span id=\"RptTelefoneUtil_ctl08_lblTelefone\"><br></span>

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"md-modal-telefones md-effect-telefones\" id=\"modal-9-11\">
\t\t\t\t\t\t<div class=\"md-content-telefones\">
\t\t\t\t\t\t\t<div class=\"fecha-modal md-close\">×</div>
\t\t\t\t\t\t\t<div class=\"logo-pesagro-card\"></div>
\t\t\t\t\t\t\t<p>SERVIÇO DE INFORMAÇÃO DE MERCADO AGRÍCOLA (Rio de Janeiro)</p>
\t\t\t\t\t\t\t<h3><a href=\"tel:3460-4040\">Av. Brasil, 1001, Ed. Administrativo da CEASA, Rio de Janeiro, RJ - CEP 20.940-070</a></h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>







\t\t</div>

\t</div>
</section>-->

    <!-- VOLTAR AO TOPO -->

    <a id=\"back2Top\" title=\"Voltar ao topo\" href=\"#\">&#10148;</a>

";
        // line 465
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/footer.html.twig"), "sites/seederi/themes/secretarias/page--front.html.twig", 465)->display($context);
    }

    public function getTemplateName()
    {
        return "sites/seederi/themes/secretarias/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  664 => 465,  467 => 270,  460 => 266,  453 => 261,  451 => 260,  448 => 259,  437 => 251,  434 => 250,  432 => 249,  428 => 247,  415 => 237,  408 => 232,  406 => 231,  403 => 230,  396 => 226,  393 => 225,  391 => 224,  379 => 215,  372 => 211,  365 => 207,  360 => 205,  335 => 182,  325 => 175,  316 => 168,  314 => 167,  311 => 166,  304 => 162,  301 => 161,  299 => 160,  294 => 157,  281 => 147,  274 => 142,  272 => 141,  269 => 140,  257 => 131,  252 => 128,  250 => 127,  242 => 121,  234 => 116,  228 => 112,  226 => 111,  223 => 110,  215 => 105,  209 => 101,  207 => 100,  204 => 99,  196 => 94,  190 => 90,  188 => 89,  185 => 88,  177 => 83,  171 => 79,  169 => 78,  166 => 77,  158 => 72,  152 => 68,  150 => 67,  147 => 66,  140 => 62,  134 => 58,  132 => 57,  121 => 48,  108 => 38,  102 => 34,  100 => 33,  97 => 32,  90 => 28,  83 => 23,  81 => 22,  78 => 21,  70 => 16,  65 => 13,  63 => 12,  60 => 11,  52 => 6,  49 => 5,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/seederi/themes/secretarias/page--front.html.twig", "/var/www/html/drupal/sites/seederi/themes/secretarias/page--front.html.twig");
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
