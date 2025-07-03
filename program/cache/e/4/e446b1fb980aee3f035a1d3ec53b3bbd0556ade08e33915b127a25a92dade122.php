<?php

/* participant_census.html */
class __TwigTemplate_e446b1fb980aee3f035a1d3ec53b3bbd0556ade08e33915b127a25a92dade122 extends Twig_Template
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
        echo "<h2>Participant Census</h2>
<table id=\"employee-savings-plan\" class=\"full-width\"  cellspacing=0>
    <thead>
    <tr>
\t\t<th><u><b>Participant Name</b></u></th>
\t\t<th>Social<br>Security<br><u><b>Number</b></u></th>
\t\t<th><u><b>AA</b></u></th>
\t\t<th><u><b>RA</b></u></th>
\t\t<th>Date of<br><u><b>Birth</b></u></th>
\t\t<th>Date of<br><u><b>Employment</b></u></th>
\t\t<th>Date of<br><u><b>Participation</b></u></th>\t\t
\t\t<th>Date of<br><u><b>Termination</b></u></th>
\t\t<th>Total<br><u><b>Compensation</b></u></th>
\t\t<th>Plan<br><u><b>Hours</b></u></th>
\t\t<th>Participation<br><u><b>Status</b></u></th>
\t</tr>
</thead>
<tbody>
    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) ? $context["employees"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 20
            echo "    ";
            if (($this->getAttribute($context["employee"], "DISCARD", array()) != "1")) {
                // line 21
                echo "
\t<tr>
\t\t<td class=\"first-column\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "NAME", array()), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 24
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ssnmask')->getCallable(), array($this->getAttribute($context["employee"], "SSNUM", array()))), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "_AGENEAREST", array()), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__RETIREMENT_AGE", array()), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "BIRTH", array()), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "HIRE", array()), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "ENTRY", array()), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "TERMIN", array()), "html", null, true);
                echo "</td>
\t\t<td style=\"text-align: right; padding-right: 15px;\">";
                // line 31
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "COMP", array()), 2, ".", ","), "html", null, true);
                echo "</td>
\t\t<td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "HOURS", array()), "html", null, true);
                echo "</td>
        <td> 
\t\t\t";
                // line 34
                if (($this->getAttribute($context["employee"], "PARTSTAT", array()) == "A")) {
                    echo "Active";
                }
                echo "\t
\t\t\t";
                // line 35
                if (($this->getAttribute($context["employee"], "PARTSTAT", array()) == "Y")) {
                    echo "Minimum Age";
                }
                echo "\t
\t\t\t";
                // line 36
                if (($this->getAttribute($context["employee"], "PARTSTAT", array()) == "S")) {
                    echo "Min. Service";
                }
                echo "\t
\t\t\t";
                // line 37
                if (($this->getAttribute($context["employee"], "PARTSTAT", array()) == "T")) {
                    echo "Terminated";
                }
                echo "\t
\t\t\t";
                // line 38
                if (($this->getAttribute($context["employee"], "PARTSTAT", array()) == "W")) {
                    echo "Term. Before Entry";
                }
                echo "\t
\t\t\t";
                // line 39
                if (($this->getAttribute($context["employee"], "PARTSTAT", array()) == "B")) {
                    echo "New Entrant";
                }
                echo "\t
\t\t\t";
                // line 40
                if (($this->getAttribute($context["employee"], "PARTSTAT", array()) == "M")) {
                    echo "Term. 1000";
                }
                echo "\t
\t\t\t";
                // line 41
                if (($this->getAttribute($context["employee"], "PARTSTAT", array()) == "N")) {
                    echo "Term. 500";
                }
                echo "\t
\t\t\t";
                // line 42
                if (($this->getAttribute($context["employee"], "PARTSTAT", array()) == "H")) {
                    echo "Term. 500 - 1000";
                }
                echo "\t
\t\t\t";
                // line 43
                if (($this->getAttribute($context["employee"], "PARTSTAT", array()) == "F")) {
                    echo "Term. Forfeited";
                }
                echo "\t
\t\t\t";
                // line 44
                if (($this->getAttribute($context["employee"], "PARTSTAT", array()) == "R")) {
                    echo "Retired";
                }
                echo "\t
\t\t\t";
                // line 45
                if (($this->getAttribute($context["employee"], "PARTSTAT", array()) == "P")) {
                    echo "Term. Paid";
                }
                echo "\t
\t\t</td>
\t

\t</tr>
   ";
            }
            // line 51
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
</table>


<table cellspacing=0 style=\"padding-top: 20px; padding-bottom: 20px;\">
\t<tr>
\t\t<td>Total Employees:</td>
\t\t<td>&nbsp;</td>
\t\t<td style=\"text-align: right;\">";
        // line 60
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_EMPLOYEES", array()) + $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__INACTIVE_EMPLOYEES", array())) + $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__INELIGIBLE_EMPLOYEES", array())), "html", null, true);
        echo "</td>
\t\t<td style=\"width: 100px;\"></td>
\t\t<td>Total Compensation:</td>
\t\t<td>&nbsp;</td>
\t\t<td style=\"text-align: right;\">\$";
        // line 64
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__TOTALCOMP", array()), 2, ".", ","), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td colspan=\"6\">&nbsp;</td>
\t</tr>
\t<tr>
\t\t<td>Active Employees:</td>
\t\t<td>&nbsp;</td>
\t\t<td style=\"text-align: right;\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_EMPLOYEES", array()), "html", null, true);
        echo "</td>
\t\t<td style=\"width: 100px;\"></td>
\t\t<td>Active Total Compensation:</td>
\t\t<td>&nbsp;</td>
\t\t<td style=\"text-align: right;\">\$";
        // line 76
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVECOMP", array()), 2, ".", ","), "html", null, true);
        echo "</td>
\t</tr>
\t\t<tr>
\t\t<td>Inactive Employees:</td>
\t\t<td>&nbsp;</td>
\t\t<td style=\"text-align: right;\">";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__INACTIVE_EMPLOYEES", array()), "html", null, true);
        echo "</td>
\t\t<td style=\"width: 100px;\"></td>
\t\t<td>Inactive Total Compensation:</td>
\t\t<td>&nbsp;</td>
\t\t<td style=\"text-align: right;\">\$";
        // line 85
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__INACTIVE_COMP", array()), 2, ".", ","), "html", null, true);
        echo "</td>
\t</tr>
\t\t<tr>
\t\t<td>Ineligible Employees:</td>
\t\t<td>&nbsp;</td>
\t\t<td style=\"text-align: right;\">";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__INELIGIBLE_EMPLOYEES", array()), "html", null, true);
        echo "</td>
\t\t<td style=\"width: 100px;\"></td>
\t\t<td>Ineligible Total Compensation:</td>
\t\t<td>&nbsp;</td>
\t\t<td style=\"text-align: right;\">\$";
        // line 94
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__INELIGIBLE_COMP", array()), 2, ".", ","), "html", null, true);
        echo "</td>
\t</tr>
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "participant_census.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 94,  232 => 90,  224 => 85,  217 => 81,  209 => 76,  202 => 72,  191 => 64,  184 => 60,  174 => 52,  168 => 51,  157 => 45,  151 => 44,  145 => 43,  139 => 42,  133 => 41,  127 => 40,  121 => 39,  115 => 38,  109 => 37,  103 => 36,  97 => 35,  91 => 34,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  70 => 28,  66 => 27,  62 => 26,  58 => 25,  54 => 24,  50 => 23,  46 => 21,  43 => 20,  39 => 19,  19 => 1,);
    }
}
