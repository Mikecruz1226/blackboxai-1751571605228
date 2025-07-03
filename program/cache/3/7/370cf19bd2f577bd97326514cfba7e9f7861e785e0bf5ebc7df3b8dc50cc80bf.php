<?php

/* plan_year_review.html */
class __TwigTemplate_370cf19bd2f577bd97326514cfba7e9f7861e785e0bf5ebc7df3b8dc50cc80bf extends Twig_Template
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
        echo "<h1>Plan Year Review</h1>

<h2>Plan Audit Status</h2>

<img style=\"width:110px; float: left; padding-right: 15px;\" src=\"images/checkbox-icon.png\">

";
        // line 7
        echo " 
";
        // line 8
        echo " 
";
        // line 9
        $context["employeecount"] = $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "d", array()), "Plan Audit Participants", array(), "array");
        echo " 

";
        // line 11
        if (((isset($context["employeecount"]) ? $context["employeecount"] : null) > 100)) {
            // line 12
            echo "
";
            // line 13
            $context["auditstatus"] = "need";
            // line 14
            echo "
";
        } else {
            // line 16
            echo "
";
            // line 17
            $context["auditstatus"] = "not need";
            // line 18
            echo "
";
        }
        // line 20
        echo "

<p style=\"padding-top: 20px; padding-bottom:24px;\">Based upon the plan having ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["employeecount"]) ? $context["employeecount"] : null), "html", null, true);
        echo " eligible participants as of ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AS_OF_DATE_BEGIN", array()), "html", null, true);
        echo ", the plan will ";
        echo twig_escape_filter($this->env, (isset($context["auditstatus"]) ? $context["auditstatus"] : null), "html", null, true);
        echo " to have an audit by an independent qualified public accountant. The Department of Labor requires that plans with 100 or more eligible participants as of the first day of the plan year have an auditor's opinion attached to their Form 5500.(exceptions may apply if your participant count is between 80-120)</p>


";
    }

    public function getTemplateName()
    {
        return "plan_year_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  58 => 20,  54 => 18,  52 => 17,  49 => 16,  45 => 14,  43 => 13,  40 => 12,  38 => 11,  33 => 9,  30 => 8,  27 => 7,  19 => 1,);
    }
}
