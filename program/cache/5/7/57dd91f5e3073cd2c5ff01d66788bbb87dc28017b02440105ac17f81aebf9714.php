<?php

/* template.html */
class __TwigTemplate_57dd91f5e3073cd2c5ff01d66788bbb87dc28017b02440105ac17f81aebf9714 extends Twig_Template
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
<html>
<head>

<link rel=\"stylesheet\" href=\"./css/style.css\">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

<title>Report prepared for ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_PLANNAME", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VALDATE", array()), "html", null, true);
        echo "</title>

</head>

<style>
tr {page-break-inside: avoid;}
</style>
<body>


";
        // line 18
        $this->loadTemplate("cover.html", "template.html", 18)->display($context);
        // line 19
        echo "<div class=\"page-break\"></div>

";
        // line 21
        $this->loadTemplate("summary.html", "template.html", 21)->display($context);
        // line 22
        echo "<div class=\"page-break\"></div>

";
        // line 24
        $this->loadTemplate("plan_year_review.html", "template.html", 24)->display($context);
        // line 25
        echo "
";
        // line 26
        $this->loadTemplate("compliance_results.html", "template.html", 26)->display($context);
        // line 27
        echo "<div class=\"page-break\"></div>

";
        // line 29
        $this->loadTemplate("top_heavy_report.html", "template.html", 29)->display($context);
        // line 30
        echo "<div class=\"page-break\"></div>

";
        // line 32
        $this->loadTemplate("plan_at_a_glance.html", "template.html", 32)->display($context);
        // line 33
        echo "<div class=\"page-break\"></div>

";
        // line 35
        $this->loadTemplate("deposit_summary.html", "template.html", 35)->display($context);
        // line 36
        echo "<div class=\"page-break\"></div>

";
        // line 38
        $this->loadTemplate("participant_census.html", "template.html", 38)->display($context);
        // line 39
        echo "<div class=\"page-break\"></div>

";
        // line 41
        $this->loadTemplate("investment_summary.html", "template.html", 41)->display($context);
        // line 42
        echo "
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "template.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 42,  90 => 41,  86 => 39,  84 => 38,  80 => 36,  78 => 35,  74 => 33,  72 => 32,  68 => 30,  66 => 29,  62 => 27,  60 => 26,  57 => 25,  55 => 24,  51 => 22,  49 => 21,  45 => 19,  43 => 18,  28 => 8,  19 => 1,);
    }
}
