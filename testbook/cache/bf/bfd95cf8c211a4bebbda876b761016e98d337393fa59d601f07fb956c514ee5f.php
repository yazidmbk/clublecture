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

/* livre.html.twig */
class __TwigTemplate_88c66c248b7a42b3bd97c203d4df6ed086b5dd01529b8cba274469afbbed962f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">
<link href=\"../css/TabLivre.css\" rel=\"stylesheet\"/>
<link href=\"../js/TabLivre.js\" />


";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4\" crossorigin=\"anonymous\"></script>



";
        // line 12
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Tab Livre";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "<header>
    <nav class=\"navbar navbar-expand-lg bg-light\">
        <div class=\"container-fluid\">
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"Home\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"Connexion\">Login</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"tablecteurs\">Tableau Lecteurs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>
    <div class=\"container\">
        <div class=\"row\">

            <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">

                <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Description</th>
                    <th>Photo</th>

                </tr>
                </thead>
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entitie"]) {
            // line 49
            echo "                    <tbody>
                    <tr>
                        <th>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entitie"], "Id", [], "any", false, false, false, 51), "html", null, true);
            echo "</th>
                        <th>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entitie"], "Titre", [], "any", false, false, false, 52), "html", null, true);
            echo "</th>
                        <th>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entitie"], "Auteur", [], "any", false, false, false, 53), "html", null, true);
            echo "</th>
                        <th>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entitie"], "Description", [], "any", false, false, false, 54), "html", null, true);
            echo "</th>
                        <th>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entitie"], "Photo", [], "any", false, false, false, 55), "html", null, true);
            echo "</th>

                    </tr>
                    </tbody>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entitie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Description</th>
                    <th>Photo</th>


                </tr>
            </table>

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "livre.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 61,  140 => 55,  136 => 54,  132 => 53,  128 => 52,  124 => 51,  120 => 49,  116 => 48,  79 => 13,  75 => 12,  69 => 7,  62 => 1,  58 => 12,  52 => 8,  50 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "livre.html.twig", "D:\\GitHub\\clublecture\\testbook\\public\\template\\Livre.html.twig");
    }
}
