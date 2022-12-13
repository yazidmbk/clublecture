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

/* connexion.html.twig */
class __TwigTemplate_0ca5f78616a5d3bd05ab0375973aba4c73620cc926e3328de9e4b872e8c660d0 extends Template
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
        echo "
<html lang=\"en\">
<head>
    <title>BACK CONNEXION</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

    <link rel=\"stylesheet\" href=\"../css/style.css\">

</head>
<body class=\"img js-fullheight\" style=\"background-image: url(../images/bg.jpg);\">
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-center mb-5\">
                <h2 class=\"heading-section\">BACK CONTROLEUR</h2>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"login-wrap p-0\">
                    <h3 class=\"mb-4 text-center\">CONNECTEZ-VOUS</h3>
                    <form action=\"#\" class=\"signin-form\">
                        <div class=\"form-group\">
                            <input id=\"TB_Login\" type=\"text\" class=\"form-control\" placeholder=\"Username\" required>
                        </div>
                        <div class=\"form-group\">
                            <input id=\"TB_Mdp\" type=\"password\" class=\"form-control\" placeholder=\"Password\" required>
                            <span toggle=\"#TB_Mdp\" class=\"fa fa-fw fa-eye field-icon toggle-password\"></span>
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"form-control btn btn-primary submit px-3\" id=\"BTN_Login\">Sign In</button>
                        </div>
                        <div class=\"form-group d-md-flex\">
                            <div class=\"w-50\">
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</section>

<script src=\"../js/jquery.min.js\"></script>
<script src=\"../js/popper.js\"></script>
<script src=\"../js/bootstrap.min.js\"></script>
<script src=\"../js/main.js\"></script>
<script src=\"../js/login.js\"></script>


</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "connexion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "connexion.html.twig", "D:\\GitHub\\clublecture\\testbook\\public\\template\\Connexion.html.twig");
    }
}
