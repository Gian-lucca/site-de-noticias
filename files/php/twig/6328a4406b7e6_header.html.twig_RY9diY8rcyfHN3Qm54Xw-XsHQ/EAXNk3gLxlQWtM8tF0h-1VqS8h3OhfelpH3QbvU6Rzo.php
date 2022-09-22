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

/* sites/seederi/themes/secretarias/partials/header.html.twig */
class __TwigTemplate_b5c2b35b5601329e24effd0d42776f0aa6f4395c1442c6afcfb3f4140e6e18f7 extends \Twig\Template
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
        echo "<!--<div class=\"container-pagina\">
\t<div class=\"menu-superior\">
\t\t<div class=\"menusupi\">

\t\t\t<div class=\"infosup\">
\t\t\t\t";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuTopo", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
\t\t\t</div>


\t\t</div>

\t</div>
</div>-->
<!-- #MENUSUPI -->
<script>
\tfunction openNav() { // document.getElementById(\"myNav\").style.display = \"block\";
}

function closeNav() { // document.getElementById(\"myNav\").style.display = \"none\";
}
</script>

<div class=\"portal5535\" id=\"back-to-top-anchor\" style=\"top: 0px;\">
\t\t
\t\t<div class=\"portal66\">

\t\t\t\t<a href=\"/\">
\t\t\t\t\t<img class=\"logo-pacto\" width=\"100%\" height=\"auto\" alt=\"Logo do DesenvolveRJ\" src=\"/sites/seederi/themes/secretarias/partials/logo-desenvolve-rj-br.png\">
\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t<div class=\"rs-wrap\">
\t\t\t\t\t<a href=\"http://www.desenveconomico.rj.gov.br/\">
\t\t\t\t\t\t<img class=\"portal5565\" width=\"100%\" height=\"auto\" alt=\"RJ\" src=\"/sites/seederi/themes/secretarias/partials/logo-sedeeri-2.png\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t<div class=\"portal5576\">

\t\t\t\t\t<div class=\"portal5549\">
\t\t\t\t\t\t<a href=\"https://painel.saude.rj.gov.br/monitoramento/covid19.html\" target=\"_blank\" class=\"portal5557\" rel=\"noreferrer\">CORONAVÍRUS</a>
\t\t\t\t\t\t\t<span class=\"portal5559\">|</span>
\t\t\t\t\t\t<a href=\"http://www.transparencia.rj.gov.br/transparencia/\" target=\"_blank\" class=\"portal5557\" rel=\"noreferrer\">PORTAL DA TRANSPARÊNCIA</a>
\t\t\t\t\t\t\t<span class=\"portal5559\">|</span>
\t\t\t\t\t\t<a class=\"portal5557\" bhref=\"/acessibilidade\">ACESSIBILIDADE</a><span class=\"portal5559\">|</span>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"portal5557\">CONTRASTE</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"portal5554\" style=\"flex-wrap: nowrap;\">

\t\t\t\t\t\t<div class=\"portal5566\">

\t\t\t\t\t\t\t<div id=\"atl-player\" class=\"radiotopo\">
\t\t\t\t\t\t\t\t<div class=\"overplayer\">
\t\t\t\t\t\t\t\t\t<span id=\"play-icon-radio\" style=\"color: white; font-size: 14px;\">
\t\t\t\t\t\t\t\t\t\t<img class=\"iconplay\" src=\"/sites/agricultura/themes/secretarias/imagens/img-play.png\" alt=\"play\">
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span id=\"pause-icon-radio\" style=\"color: white; font-size: 14px; display: none\">
\t\t\t\t\t\t\t\t\t\t<img class=\"iconpause\" src=\"/sites/agricultura/themes/secretarias/imagens/img-pause.png\" alt=\"pause\">
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<audio id=\"player_html5\" style=\" color: #fff; width: 359px; height: 100%;\">
\t\t\t\t\t\t\t\t\t\t<source src=\"http://radio.radioroquettepinto.com.br:8300/live\">
\t\t\t\t\t\t\t\t\t\tSeu navegador não suporta HTML5
\t\t\t\t\t\t\t\t\t</audio>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text\" style=\"flex: 1;\">
\t\t\t\t\t\t\t\t\t<h3>ouça ao vivo<span> - A Rádio do Rio - 94 FM</span></h3>
\t\t\t\t\t\t\t\t\t<h2>Rádio Roquette Pinto</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div></div>

\t\t\t\t\t\t<span class=\"portal5560\">|</span>

\t\t\t\t\t\t<a class=\"portal77 portal68\" tabindex=\"0\" aria-disabled=\"false\" href=\"https://www.facebook.com/sedeerirj/\" target=\"_blank\">

\t\t\t\t\t\t\t<span class=\"portal76\">
\t\t\t\t\t\t\t\t<img width=\"20px\" height=\"20px\" src=\"/sites/seederi/themes/secretarias/partials/face.svg\" alt=\"facebook\">
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<span class=\"portal382\"></span>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a class=\"portal77 portal68\" tabindex=\"0\" aria-disabled=\"false\" href=\"https://twitter.com/sedeerirj\" target=\"_blank\">

\t\t\t\t\t\t\t\t<span class=\"portal76\">
\t\t\t\t\t\t\t\t\t<img width=\"20px\" height=\"20px\" src=\"./sites/seederi/themes/secretarias/partials/twt.svg\" alt=\"twitter\">
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<span class=\"portal382\"></span>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a class=\"portal77 portal68\" tabindex=\"0\" aria-disabled=\"false\" href=\"https://www.linkedin.com/company/sedeeri/\" target=\"_blank\">

\t\t\t\t\t\t\t<span class=\"portal76\">
\t\t\t\t\t\t\t\t<img width=\"20px\" height=\"20px\" src=\"/sites/seederi/themes/secretarias/partials/linkd.svg\" alt=\"linkedin\">
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<span class=\"portal382\"></span>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a class=\"portal77 portal68\" tabindex=\"0\" aria-disabled=\"false\" href=\"https://www.instagram.com/sedeeri\" target=\"_blank\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"portal76\">
\t\t\t\t\t\t\t\t<img width=\"20px\" height=\"20px\" src=\"/sites/seederi/themes/secretarias/partials/inst.svg\" alt=\"instagram\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"portal382\"></span>
\t\t\t\t\t\t</a> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
</div>

<!--  ### FIM HEADER ###  -->

<!--  ### INICIO MENU ###  -->

<div class=\"portal182 portal5561\">
    <div class=\"portal183 portal5577\">
            <div id=\"hambtn\"><a onclick=\"openNav()\">&#9776;</a></div>  
        <div class=\"portal184\" flex-direction=\"row\">
            <button class=\"portal77 portal153 portal155 portal5556\" tabindex=\"0\" type=\"button\">
                <span class=\"portal154\">
                    <div style=\"margin-left: 15px; margin-top: 4px;\">
                        <svg stroke=\"currentColor\" fill=\"currentColor\" stroke-width=\"0\" viewBox=\"0 0 496 512\" class=\"portal5558\" height=\"1em\" width=\"1em\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z\">
                            </path>
                        </svg>
                    </div>
                    <p class=\"portal83 portal5537 portal85\">ENTRAR</p>
                </span>
                <span class=\"portal382\"></span>
            </button>
        </div>
    </div>
    <div class=\"portal185 portal5562\">
        <div class=\"dropdown\">
            <a href=\"/institucional\" class=\"portal5616\">
                <img class=\"portal5614\" width=\"auto\" height=\"28px\" src=\"/sites/seederi/themes/secretarias/partials/icon-empresa.svg\" alt=\"O Portal\">
                Institucional
            </a>
            <!-- <div class=\"portal5637 dropdown-content\">
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Desenvolvimento Produtivo, Científico e Tecnológico</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Infraestrutura e Logística</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Dados, Boletins e Informações</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Educação e Cultura</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Saúde e Proteção Social</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Segurança Pública</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Redes e Sistemas</a></div>
            </div> -->
        </div>
        <div class=\"dropdown\">
            <a href=\"/porquerj\" class=\"portal5616\">
                <img class=\"portal5614\" width=\"auto\" height=\"32px\" src=\"/sites/seederi/themes/secretarias/partials/icon-porque.png\" alt=\"Estado do RJ\">
                Por que o RJ?
            </a>
            <!-- <div class=\"portal5637 dropdown-content\">
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Porque o RJ</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Indicadores</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Incentivos</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Distritos Industriais</a></div>
            </div> -->
        </div>
        <div class=\"dropdown\">
            <a href=\"/rjmapas\" class=\"portal5616\">
                <img class=\"portal5614\" width=\"auto\" height=\"32px\" src=\"/sites/seederi/themes/secretarias/partials/icon-mapa-rio-br.png\" alt=\"RJ em Mapas\">
                RJ em Mapas
            </a>
            <!-- <div class=\"portal5637 dropdown-content\">
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Desenvolvimento Produtivo, Científico e Tecnológico</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\">Infraestrutura e Logística</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Dados, Boletins e Informações</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Educação e Cultura</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Saúde e Proteção Social</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Segurança Pública</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Redes e Sistemas</a></div>
            </div> -->
        </div>
        <div class=\"dropdown\">
            <a href=\"/dados\" class=\"portal5616\">
                <img class=\"portal5614\" width=\"auto\" height=\"32px\" src=\"/sites/seederi/themes/secretarias/partials/icon-dados-municipios.png\" alt=\"Dados dos Municípios\">
                Dados dos Municípios
            </a>
            <!-- <div class=\"portal5637 dropdown-content\">
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Desenvolvimento Produtivo, Científico e Tecnológico</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\">Infraestrutura e Logística</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Dados, Boletins e Informações</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Educação e Cultura</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Saúde e Proteção Social</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Segurança Pública</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Redes e Sistemas</a></div>
            </div> -->
        </div>
        <div class=\"dropdown\">
            <a href=\"/pesquisas\" class=\"portal5616\">
                <img class=\"portal5614\" width=\"auto\" height=\"30px\" src=\"/sites/seederi/themes/secretarias/partials/icon-research.png\" alt=\"Agenda para o Desenvolvimento\">
                Estudos e Pesquisas
            </a>
            <!-- <div class=\"portal5637 dropdown-content\">
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Vantagens e oportunidades</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Desafios e Gargalos</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Agenda para o Desenvolvimento</a></div>
                <div class=\"portal5639\"><img width=\"21px\" height=\"21px\" src=\"./imagens/search.svg\" alt=\"seach-icon\"><a href=\"#\" class=\"portal5642\">Sugestões</a></div>
            </div> -->
        </div>

        <!-- <div class=\"portal235\" flex-direction=\"row\">
            <button class=\"portal77 portal153 portal155 portal5556\" tabindex=\"0\" type=\"button\">
                <span class=\"portal154\">
                    <div style=\"margin-left: 15px; margin-top: 4px;\"><svg stroke=\"currentColor\" fill=\"currentColor\" stroke-width=\"0\" viewBox=\"0 0 496 512\" class=\"portal5558\" height=\"1em\" width=\"1em\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z\">
                            </path>
                        </svg>
                    </div>
                    <p class=\"portal83 portal5537 portal85\">ENTRAR</p>
                </span>
                <span class=\"portal382\"></span>
            </button>
        </div> -->

    </div>
</div>

<!--  ### FIM MENU ###  -->";
    }

    public function getTemplateName()
    {
        return "sites/seederi/themes/secretarias/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/seederi/themes/secretarias/partials/header.html.twig", "/var/www/html/drupal/sites/seederi/themes/secretarias/partials/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
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
