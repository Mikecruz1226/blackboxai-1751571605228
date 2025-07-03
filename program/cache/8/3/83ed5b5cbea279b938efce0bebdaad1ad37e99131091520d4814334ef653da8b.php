<?php

/* plan_at_a_glance.html */
class __TwigTemplate_83ed5b5cbea279b938efce0bebdaad1ad37e99131091520d4814334ef653da8b extends Twig_Template
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
        echo "<h2>Plan At-a-Glance</h2>

<p>Knowing the age of your employee population is a helpful tool in identifying their retirement plan needs. An older population of employees might indicate that assets will be leaving the plan over the coming years, while a younger population might be inclined to save more in their earning years. <b>Your average employee's age is ";
        // line 3
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AVERAGE_AGE", array()), 1, ".", ","), "html", null, true);
        echo "</b>.</p>

<p><b>Your Plan's Participation Rate at ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VALDATE", array()), "html", null, true);
        echo " is ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLDEFPRT_PDef_Part_Rate_", array()), "html", null, true);
        echo "%.</b> The participation rate is defined as the total number of employees deferring into the plan divided by the total number of active eligible employees.</p>

<table  width=\"100%\" class=\"full-width participation compliance-section\"  cellpadding=0 cellspacing=0>
\t<tr><th style=\"text-align: left;\">Number of:</th><th>Total</th><th>20's</th><th>30's</th><th>40's</th><th>50's</th><th>60+</th></tr>
\t<tr><td style=\"text-align: left;\">Active Eligible Employees</td><td> ";
        // line 9
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ELIG_TOTAL", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ELIG_TOTAL", array()), "0")) : ("0")), "html", null, true);
        echo " </td>
\t\t\t\t\t      <td>";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ELIG_20s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ELIG_20s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ELIG_30s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ELIG_30s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ELIG_40s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ELIG_40s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ELIG_50s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ELIG_50s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ELIG_60s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ELIG_60s", array()), "0")) : ("0")), "html", null, true);
        echo "</td></tr>

\t<tr><td style=\"text-align: left;\">Active Employees Deferring into Plan</td><td> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_DEFER_TOTAL", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t      <td>";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_DEFER_20s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_DEFER_20s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 18
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_DEFER_30s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_DEFER_30s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_DEFER_40s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_DEFER_40s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_DEFER_50s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_DEFER_50s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 21
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_DEFER_60s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_DEFER_60s", array()), "0")) : ("0")), "html", null, true);
        echo "</td></tr>

\t<tr><td style=\"text-align: left;\">Percent of Employees Deferring</td><td> ";
        // line 23
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_PERCENT_DEFER_TOTAL", array()), 0, ".", ","), "html", null, true);
        echo "% </td>
\t\t\t\t\t      <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_PERCENT_DEFER_20s", array()), 0, ".", ","), "html", null, true);
        echo "%</td>
\t\t\t\t\t      <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_PERCENT_DEFER_30s", array()), 0, ".", ","), "html", null, true);
        echo "%</td>
\t\t\t\t\t      <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_PERCENT_DEFER_40s", array()), 0, ".", ","), "html", null, true);
        echo "%</td>
\t\t\t\t\t      <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_PERCENT_DEFER_50s", array()), 0, ".", ","), "html", null, true);
        echo "%</td>
\t\t\t\t\t      <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_PERCENT_DEFER_60s", array()), 0, ".", ","), "html", null, true);
        echo "%</td></tr>

\t<tr><td style=\"text-align: left;\">Active Employees with a balance</td><td> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ACTIVE_BALANCE_TOTAL", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t      <td>";
        // line 31
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ACTIVE_BALANCE_20s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ACTIVE_BALANCE_20s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 32
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ACTIVE_BALANCE_30s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ACTIVE_BALANCE_30s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 33
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ACTIVE_BALANCE_40s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ACTIVE_BALANCE_40s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 34
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ACTIVE_BALANCE_50s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ACTIVE_BALANCE_50s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 35
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ACTIVE_BALANCE_60s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_ACTIVE_BALANCE_60s", array()), "0")) : ("0")), "html", null, true);
        echo "</td></tr>

\t<tr><td style=\"text-align: left;\">Terminated Employees with a balance</td><td> ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_INACTIVE_BALANCE_TOTAL", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t      <td>";
        // line 38
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_INACTIVE_BALANCE_20s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_INACTIVE_BALANCE_20s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 39
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_INACTIVE_BALANCE_30s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_INACTIVE_BALANCE_30s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 40
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_INACTIVE_BALANCE_40s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_INACTIVE_BALANCE_40s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_INACTIVE_BALANCE_50s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_INACTIVE_BALANCE_50s", array()), "0")) : ("0")), "html", null, true);
        echo "</td>
\t\t\t\t\t      <td>";
        // line 42
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_INACTIVE_BALANCE_60s", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGES_INACTIVE_BALANCE_60s", array()), "0")) : ("0")), "html", null, true);
        echo "</td></tr>

</table>

<h2>Regulatory Limits</h2>

<table width=\"100%\" cellpadding=0 cellspacing=0>
\t<tr>
\t\t<td width=\"100%\" valign=\"top\">
\t\t\t";
        // line 59
        echo "
\t\t\t<h4>Calendar Year Regulatory Limits:</h4>
\t\t\t<table class=\"full-width td-right-align participation\">

\t\t\t\t";
        // line 63
        $context["summarycounter"] = 1;
        // line 64
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__LIMITS", array()));
        foreach ($context['_seq'] as $context["kkk"] => $context["summary"]) {
            // line 65
            echo "\t\t\t\t\t";
            if (((isset($context["summarycounter"]) ? $context["summarycounter"] : null) == 1)) {
                // line 66
                echo "    \t\t\t\t\t<tr>

\t\t\t\t        ";
                // line 68
                $context["rcounter"] = 1;
                // line 69
                echo "                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["summary"]);
                foreach ($context['_seq'] as $context["k"] => $context["row"]) {
                    // line 70
                    echo "                                ";
                    if (((isset($context["rcounter"]) ? $context["rcounter"] : null) == 1)) {
                        // line 71
                        echo "\t\t\t\t\t\t\t        <th>&nbsp;</th>
                                    ";
                        // line 72
                        $context["rcounter"] = 2;
                        // line 73
                        echo "                                ";
                    } else {
                        // line 74
                        echo "\t\t\t\t\t\t\t        <th>";
                        echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                        echo "</th>
                                ";
                    }
                    // line 76
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                        </tr>
\t\t\t\t\t\t";
                // line 78
                $context["summarycounter"] = 2;
                // line 79
                echo "\t\t\t\t\t";
            }
            // line 80
            echo "\t\t\t\t\t\t<tr>
                            ";
            // line 81
            $context["rscounter"] = 1;
            // line 82
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["summary"]);
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 83
                echo "\t\t\t\t\t\t\t<td 
                                ";
                // line 84
                if (((isset($context["rscounter"]) ? $context["rscounter"] : null) == 1)) {
                    // line 85
                    echo "                                style=\"text-align: left;\"
                                ";
                    // line 86
                    $context["rscounter"] = 2;
                    // line 87
                    echo "                                ";
                }
                // line 88
                echo "                                >";
                echo twig_escape_filter($this->env, $context["row"], "html", null, true);
                echo "</td>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                        </tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['kkk'], $context['summary'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
\t\t\t</table>


            ";
        // line 131
        echo "\t\t</td>
\t</tr>
</table>


<h2>Indicator Legend</h2>

Please review the enclosed deposit summary. Employees who fall into any of these categories are indicated with the symbol below.
<br><br>
<table width=\"100%\">

\t<tr>
\t\t<td align=\"center\">
\t\t\t<img src=\"images/unlock-icon.png\" height=\"55\"><br>
\t\t\t<b>Key Employee</b><br>

\t\t\tEmployees who were identified as greater than 5% owner, (1% owner making \$150,000) or an Officer making at least \$";
        // line 147
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "OFFICER_COMPENSATION", array()), 2, ".", ","), "html", null, true);
        echo " in ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "YEAR", array()), "html", null, true);
        echo " .

<br>

<div class=\"elig\">Keys: ";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__KEYELIG", array()), "html", null, true);
        echo "</div>
\t\t</td>
\t\t<td align=\"center\">
\t\t\t<img src=\"images/dollar-coin-icon.png\" height=\"55\"><br>
\t\t\t
\t\t\t<b>Highly Compensated</b><br>

\t\t\tGreater than 5% owners and certain members of their family, and employees who earned over \$";
        // line 158
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "HCE_COMPENSATION", array()), 2, ".", ","), "html", null, true);
        echo " through 12/31/2017. These employees may be considered \"HCE\" for the next plan year.
<br>
<div class=\"elig\">HCEs:  ";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__HCEELIG", array()), "html", null, true);
        echo "</div>
\t\t</td>
\t\t<td align=\"center\">
\t\t\t<img src=\"images/diamond-icon.png\" height=\"55\"><br>
\t\t
\t\t\t<b>70 &frac12;</b><br>
Employees who have reached age 70½ and may need to take a required minimum distribution before year-end.
<br>
<div class=\"elig\">70 &frac12;:  ";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGE70HALF", array()), "html", null, true);
        echo "</div>
\t\t</td>
\t\t<td align=\"center\">
\t\t\t<img src=\"images/timer-icon.png\" height=\"55\"><br>
\t\t
\t\t\t<b>Catch-up eligible</b><br>
\t\t\tEmployees who reach age 50 may be to eligible to defer \$";
        // line 174
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "CATCH_UP", array()), 2, ".", ","), "html", null, true);
        echo " over the deferral limit in Catch-up. (List includes approaching age 50)
<br>
<div class=\"elig\">Catch-Up Eligible:  ";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AGE50HALF", array()), "html", null, true);
        echo "</div>
\t\t</td>
\t</tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "plan_at_a_glance.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 176,  334 => 174,  325 => 168,  314 => 160,  309 => 158,  299 => 151,  290 => 147,  272 => 131,  266 => 92,  259 => 90,  250 => 88,  247 => 87,  245 => 86,  242 => 85,  240 => 84,  237 => 83,  232 => 82,  230 => 81,  227 => 80,  224 => 79,  222 => 78,  219 => 77,  213 => 76,  207 => 74,  204 => 73,  202 => 72,  199 => 71,  196 => 70,  191 => 69,  189 => 68,  185 => 66,  182 => 65,  177 => 64,  175 => 63,  169 => 59,  157 => 42,  153 => 41,  149 => 40,  145 => 39,  141 => 38,  137 => 37,  132 => 35,  128 => 34,  124 => 33,  120 => 32,  116 => 31,  112 => 30,  107 => 28,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  28 => 5,  23 => 3,  19 => 1,);
    }
}
