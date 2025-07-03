<?php

/* top_heavy_report.html */
class __TwigTemplate_ce82a0622f250a08dd97c81a0dd3c71c218614254fe5c2ed3606e4f3827872f1 extends Twig_Template
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
        echo "<h1>Top Heavy Report</h1>

<h2>Top Heavy Summary</h2>

For the Plan Year ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AS_OF_DATE_BEGIN", array()), "html", null, true);
        echo " to ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AS_OF_DATE", array()), "html", null, true);
        echo "
<br><br>
";
        // line 7
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__IS_TOP_HEAVY", array()) == false)) {
            // line 8
            echo "
Great news! Because the top heavy ratio of ";
            // line 9
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLTHDPCK_PPctKeys_", array()), 2, ".", ","), "html", null, true);
            echo "% is less than or equal to 60%, this plan is not top heavy for the next plan year.

";
        } else {
            // line 12
            echo "
Because the top heavy ratio of ";
            // line 13
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLTHDPCK_PPctKeys_", array()), 2, ".", ","), "html", null, true);
            echo "% is greater than 60%, this plan is top heavy for the next plan year.

";
        }
        // line 16
        echo "
<br><br>
A plan is top-heavy if the account balances for Key Employees exceed 60% of the total account balances of all participants on the last day of the preceding plan year. Plans that are determined to be top-heavy must provide minimum contributions to all non-key employees who were employed on the last day of the plan year. The contribution must be either equal to the deferral rate of the highest Key Employee's contribution or 3% of compensation, whichever is less. If the Key(s) did not defer, no minimum contribution is required, regardless if the plan is considered Top Heavy. Safe harbor plans meeting certain conditions are granted non-top-heavy status regardless of the Key Employees' total account balance relative to the total plan account balance.


<br />
<br />

Testing result detail can be found on the Top Heavy Illustration Report located in the a Compliance Results section of this Valuation Report.


<h2>Key Employee Information</h2>

<br />
Key Employee: is defined as an employee, who is at any time during the plan year containing the Determination Date:
<ul>
    <li>Is a \"Greater than 5% owner\" of the company at any time during the current or prior year, and their children, parents or Spouses (not included are siblings, grandparents and in-laws), or</li>
    <li>Is a \"1% Owner\" of the company whose annual compensation exceeds \$150,000.00, their children, parents or spouse (not included are siblings, grandparents and in-laws), or</li>
    <li>Is an Officer of the company whose annual compensation exceeds \$170,000.00</li>
</ul>
<br />

";
        // line 77
        echo "
<h2>Employees Defined as \"Key\" for Top Heavy Testing Purposes</h2>
<table class=\"full-width participation\" cellpadding=0 cellspacing=0>
\t<tr>
\t\t<th><u><b>SSN</b></u></th>
\t\t<th><u><b>Employee Name</b></u></th>
\t\t<th>Date of<br><u><b>Birth</b></u></th>
\t\t<th>Date of<br><u><b>Employment</b></u></th>
\t\t<th>Date of<br><u><b>Termination</b></u></th>
\t\t<th>Total<br><u><b>Compensation</b></u></th>
\t\t<th>Plan<br><u><b>Contribution</b></u></th>
\t\t<th>Plan<br><u><b>Hours</b></u></th>
\t</tr>

";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) ? $context["employees"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 92
            if (($this->getAttribute($context["employee"], "_KEYELIG", array()) == 1)) {
                // line 93
                echo "
\t<tr style=\"border-bottom: 1px solid black;\">
\t\t<td>";
                // line 95
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ssnmask')->getCallable(), array($this->getAttribute($context["employee"], "SSNUM", array()))), "html", null, true);
                echo "</td>
\t\t<td class=\"first-column\">";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "NAME", array()), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "BIRTH", array()), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "HIRE", array()), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "TERMIN", array()), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 100
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "COMP", array()), 2, ".", ","), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 101
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__CTBVALUE_TOTAL", array()), 2, ".", ","), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "HOURS", array()), "html", null, true);
                echo "</td>
\t</tr>

";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "top_heavy_report.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 107,  130 => 102,  126 => 101,  122 => 100,  118 => 99,  114 => 98,  110 => 97,  106 => 96,  102 => 95,  98 => 93,  96 => 92,  92 => 91,  76 => 77,  52 => 16,  46 => 13,  43 => 12,  37 => 9,  34 => 8,  32 => 7,  25 => 5,  19 => 1,);
    }
}
