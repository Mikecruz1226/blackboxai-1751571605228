<?php

/* components/header.html */
class __TwigTemplate_74b0c7f02623d4afb0e358fb1d40d557cf7c5747558a65eb768cb9f957f47dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html><head>
<link rel=\"stylesheet\" href=\"../../../compiled/css/style.css\">
</head>

<body style=\"height: 3px; overflow: hidden; margin: 0; margin-bottom: 5px;\">
<h2 style=\"float: left; margin: 0px;\">Actuarial Systems Corporation Report</h2>
<img style=\"float:right;height: 30px;\" src=\"../../../compiled/images/pension-logo.png\">

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "components/header.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
