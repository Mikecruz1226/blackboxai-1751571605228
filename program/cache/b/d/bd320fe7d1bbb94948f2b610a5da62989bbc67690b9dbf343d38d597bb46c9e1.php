<?php

/* cover.html */
class __TwigTemplate_bd320fe7d1bbb94948f2b610a5da62989bbc67690b9dbf343d38d597bb46c9e1 extends Twig_Template
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
        echo "<style>

/*
body{
\tbackground: url(images/bg.jpg);
\tbackground-repeat: no-repeat;
\tbackground-position: center top;
\tbackground-repeat: no-repeat;
}
*/

.line-heading {
\tfloat: left;
\tfont-weight: bold;
\tdisplay: inline;
\twidth: 300px;

}

.line-items{
\tmargin-left: 310px;
}

.page-header {
\ttext-align: center;
\tfont-size: 20px;
\tfont-weight: bold;
}

</style>

<div style=\"margin-top: 180px;\">
\t<h1>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_PLANNAME", array()), "html", null, true);
        echo "</h1>
\t<h1>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_PLANNAM2", array()), "html", null, true);
        echo "</h1>
\t<h3>Plan Year Ended ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AS_OF_DATE_LONG", array()), "html", null, true);
        echo "</h3>

<div style=\"margin-top: 100px;font-size: 15px;\">
<h2>Contents</h2>
<div id=\"summary-info\">
<ul>
\t<li>Summary of Major Plan Provisions</li>
    <li>Plan Year Review
\t<ul>
\t\t<li>Plan Audit Status
\t\t<li>Compliance Results
\t</ul></li>
<li>Top Heavy Report</li>
\t<ul>
\t\t<li>Top Heavy Summary
\t\t<li>Key Employee Infomation
\t\t<li>Employees Defined as (Key) for Top Heavy Testing Purposes 
\t</ul></li>
<li>Plan at a Glance</li>
<li>Regulatory Limits</li>
<li>Indicator Legend</li>
<li>Deposit Summary</li>
<li>Participant Census</li>
<li>Investment Summary</li>
<li>Compliance Tests</li>
<div style=\"margin-top: 55px;\">
    Prepared By: ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "d", array(), "array"), "Prepared By", array(), "array"), "html", null, true);
        echo "<br />
    866-497-5501 X ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "d", array(), "array"), "Phone Number", array(), "array"), "html", null, true);
        echo "<br />
    ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "d", array(), "array"), "Email", array(), "array"), "html", null, true);
        echo "<br />
</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "cover.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 63,  94 => 62,  90 => 61,  61 => 35,  57 => 34,  53 => 33,  19 => 1,);
    }
}
