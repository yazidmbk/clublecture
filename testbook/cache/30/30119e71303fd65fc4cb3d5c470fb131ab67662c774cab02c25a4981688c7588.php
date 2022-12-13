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

/* base.html.twig */
class __TwigTemplate_0b47e998ae8d6ddb52ed294d2aa0ae8b0e579c8b7aab602abdc4e98107e390fa extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>

<html>

<head>

    <meta charset=\"UTF-8\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">
    <link href=\"../css/back.css\" rel=\"stylesheet\"/>

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4\" crossorigin=\"anonymous\"></script>

</head>

<body>

";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "
</body>

</html>";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 22,  95 => 20,  89 => 13,  82 => 9,  75 => 23,  73 => 22,  70 => 21,  68 => 20,  60 => 14,  58 => 13,  51 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "D:\\GitHub\\clublecture\\testbook\\public\\template\\Base.html.twig");
    }
}
