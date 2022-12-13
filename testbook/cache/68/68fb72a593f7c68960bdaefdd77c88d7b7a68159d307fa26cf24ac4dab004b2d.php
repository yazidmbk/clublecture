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

/* lecteur.html.twig */
class __TwigTemplate_4c3cb3aad46dfbfe4415e33483c2aea474012e0ffe3702125dbd5419e4283413 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<link href=\"../css/TabLecteur.css\" rel=\"stylesheet\"/>
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">


";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4\" crossorigin=\"anonymous\"></script>

";
        // line 9
        $this->displayBlock('body', $context, $blocks);
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "

    <header>
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
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"tablivre\">Tableau Livre</a>
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
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Pseudo</th>
                    <th>Login</th>
                    <th>Password</th>
                    <th>Droit</th>

                </tr>
                </thead>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entitie"]) {
            // line 53
            echo "                    <tbody>
                    <tr>

                        <th>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entitie"], "Id", [], "any", false, false, false, 56), "html", null, true);
            echo "</th>
                        <th>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entitie"], "Nom", [], "any", false, false, false, 57), "html", null, true);
            echo "</th>
                        <th>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entitie"], "Prenom", [], "any", false, false, false, 58), "html", null, true);
            echo "</th>
                        <th>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entitie"], "Pseudo", [], "any", false, false, false, 59), "html", null, true);
            echo "</th>
                        <th>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entitie"], "Login", [], "any", false, false, false, 60), "html", null, true);
            echo "</th>
                        <th>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entitie"], "Password", [], "any", false, false, false, 61), "html", null, true);
            echo "</th>
                        <th>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entitie"], "Droit", [], "any", false, false, false, 62), "html", null, true);
            echo "</th>
                    </tr>
                    </tbody>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entitie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Pseudo</th>
                    <th>Login</th>
                    <th>Password</th>
                    <th>Droit</th>

                </tr>
            </table>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "lecteur.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  154 => 67,  143 => 62,  139 => 61,  135 => 60,  131 => 59,  127 => 58,  123 => 57,  119 => 56,  114 => 53,  110 => 52,  66 => 10,  62 => 9,  56 => 6,  52 => 9,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "lecteur.html.twig", "D:\\GitHub\\clublecture\\testbook\\public\\template\\Lecteur.html.twig");
    }
}
