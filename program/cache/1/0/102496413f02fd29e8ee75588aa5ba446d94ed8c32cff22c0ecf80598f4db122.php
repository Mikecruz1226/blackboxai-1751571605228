<?php

/* deposit_summary.html */
class __TwigTemplate_102496413f02fd29e8ee75588aa5ba446d94ed8c32cff22c0ecf80598f4db122 extends Twig_Template
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
        echo "<h2>Deposit Summary</h2>

<table id=\"employee-savings-plan\" class=\"full-width\"  cellspacing=0>
    <thead>
    <tr>
\t\t<th><u><b>Participant Name</b></u></th>
\t\t<th><u><b>Compensation</b></u></th>
        ";
        // line 9
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__NAMED_SEGMENTS", array()));
        foreach ($context['_seq'] as $context["key"] => $context["segment"]) {
            // line 10
            echo "        <th><u><b>";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</b></u></th>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t<th colspan=4 style=\"background-color: red; color: white;\"></th>

\t</tr>
</thead>
<tbody>
 
        ";
        // line 18
        $context["TOTALDEPOSIT_1"] = 0;
        echo " 
        ";
        // line 19
        $context["TOTALDEPOSIT_2"] = 0;
        echo " 
        ";
        // line 20
        $context["TOTALDEPOSIT_3"] = 0;
        echo " 
        ";
        // line 21
        $context["TOTALDEPOSIT_4"] = 0;
        echo " 
        ";
        // line 22
        $context["TOTALDEPOSIT_5"] = 0;
        echo " 
        ";
        // line 23
        $context["TOTALDEPOSIT_6"] = 0;
        echo " 
        ";
        // line 24
        $context["TOTALDEPOSIT_7"] = 0;
        echo " 
        ";
        // line 25
        $context["TOTALDEPOSIT_8"] = 0;
        echo " 
        ";
        // line 26
        $context["TOTALDEPOSIT_9"] = 0;
        echo " 
        ";
        // line 27
        $context["TOTALDEPOSIT_10"] = 0;
        echo " 
       
        ";
        // line 29
        $context["TOTALDEPOSIT_COMP"] = 0;
        echo " 


    ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) ? $context["employees"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 33
            echo "\t
    ";
            // line 34
            if (($this->getAttribute($context["employee"], "DISCARD", array()) != "1")) {
                // line 35
                echo "
    ";
                // line 36
                $context["TOTALDEPOSIT_COMP"] = ($this->getAttribute($context["employee"], "CLCOMP", array()) + (isset($context["TOTALDEPOSIT_COMP"]) ? $context["TOTALDEPOSIT_COMP"] : null));
                // line 37
                echo "
\t<tr>
       
        <td class=\"first-column\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "NAME", array()), "html", null, true);
                echo "</td>
\t\t<td style=\"padding-right: 10px;\">\$";
                // line 41
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "CLCOMP", array()), 2, ".", ","), "html", null, true);
                echo "</td>
        ";
                // line 43
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__NAMED_SEGMENTS", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                    // line 44
                    echo "

        ";
                    // line 46
                    if (($context["segment"] == 1)) {
                        // line 47
                        echo "            ";
                        $context["data"] = $this->getAttribute($context["employee"], "CURRCNTB_1", array());
                        // line 48
                        echo "            ";
                        $context["TOTALDEPOSIT_1"] = ((isset($context["data"]) ? $context["data"] : null) + (isset($context["TOTALDEPOSIT_1"]) ? $context["TOTALDEPOSIT_1"] : null));
                        // line 49
                        echo "        ";
                    } elseif (($context["segment"] == 2)) {
                        // line 50
                        echo "            ";
                        $context["data"] = (($this->getAttribute($context["employee"], "CURRCNTB_2", array()) + $this->getAttribute($context["employee"], "CURRCNTB_3", array())) + $this->getAttribute($context["employee"], "CURRCNTB_4", array()));
                        // line 51
                        echo "            ";
                        $context["TOTALDEPOSIT_2"] = ((isset($context["data"]) ? $context["data"] : null) + (isset($context["TOTALDEPOSIT_2"]) ? $context["TOTALDEPOSIT_2"] : null));
                        // line 52
                        echo "        ";
                    } elseif (($context["segment"] == 3)) {
                        // line 53
                        echo "            ";
                        $context["data"] = $this->getAttribute($context["employee"], "CURRCNTB_5", array());
                        // line 54
                        echo "            ";
                        $context["TOTALDEPOSIT_3"] = ((isset($context["data"]) ? $context["data"] : null) + (isset($context["TOTALDEPOSIT_3"]) ? $context["TOTALDEPOSIT_3"] : null));
                        // line 55
                        echo "        ";
                    } elseif (($context["segment"] == 4)) {
                        // line 56
                        echo "            ";
                        $context["data"] = $this->getAttribute($context["employee"], "CURRCNTB_6", array());
                        // line 57
                        echo "            ";
                        $context["TOTALDEPOSIT_4"] = ((isset($context["data"]) ? $context["data"] : null) + (isset($context["TOTALDEPOSIT_4"]) ? $context["TOTALDEPOSIT_4"] : null));
                        // line 58
                        echo "        ";
                    } elseif (($context["segment"] == 5)) {
                        // line 59
                        echo "            ";
                        $context["data"] = $this->getAttribute($context["employee"], "CURRCNTB_7", array());
                        // line 60
                        echo "            ";
                        $context["TOTALDEPOSIT_5"] = ((isset($context["data"]) ? $context["data"] : null) + (isset($context["TOTALDEPOSIT_5"]) ? $context["TOTALDEPOSIT_5"] : null));
                        // line 61
                        echo "        ";
                    } elseif (($context["segment"] == 6)) {
                        // line 62
                        echo "            ";
                        $context["data"] = $this->getAttribute($context["employee"], "CURRCNTB_8", array());
                        // line 63
                        echo "            ";
                        $context["TOTALDEPOSIT_6"] = ((isset($context["data"]) ? $context["data"] : null) + (isset($context["TOTALDEPOSIT_6"]) ? $context["TOTALDEPOSIT_6"] : null));
                        // line 64
                        echo "        ";
                    } elseif (($context["segment"] == 7)) {
                        // line 65
                        echo "            ";
                        $context["data"] = $this->getAttribute($context["employee"], "CURRCNTB_9", array());
                        // line 66
                        echo "            ";
                        $context["TOTALDEPOSIT_7"] = ((isset($context["data"]) ? $context["data"] : null) + (isset($context["TOTALDEPOSIT_7"]) ? $context["TOTALDEPOSIT_7"] : null));
                        // line 67
                        echo "        ";
                    } elseif (($context["segment"] == 8)) {
                        // line 68
                        echo "            ";
                        $context["data"] = $this->getAttribute($context["employee"], "CURRCNTB_10", array());
                        // line 69
                        echo "            ";
                        $context["TOTALDEPOSIT_8"] = ((isset($context["data"]) ? $context["data"] : null) + (isset($context["TOTALDEPOSIT_8"]) ? $context["TOTALDEPOSIT_8"] : null));
                        // line 70
                        echo "        ";
                    } elseif (($context["segment"] == 9)) {
                        // line 71
                        echo "            ";
                        $context["data"] = $this->getAttribute($context["employee"], "CURRCNTB_11", array());
                        // line 72
                        echo "            ";
                        $context["TOTALDEPOSIT_9"] = ((isset($context["data"]) ? $context["data"] : null) + (isset($context["TOTALDEPOSIT_9"]) ? $context["TOTALDEPOSIT_9"] : null));
                        // line 73
                        echo "        ";
                    } elseif (($context["segment"] == 10)) {
                        // line 74
                        echo "            ";
                        $context["data"] = $this->getAttribute($context["employee"], "CURRCNTB_12", array());
                        // line 75
                        echo "            ";
                        $context["TOTALDEPOSIT_10"] = ((isset($context["data"]) ? $context["data"] : null) + (isset($context["TOTALDEPOSIT_10"]) ? $context["TOTALDEPOSIT_10"] : null));
                        // line 76
                        echo "        ";
                    }
                    // line 77
                    echo "
        ";
                    // line 78
                    $context["piece"] = (("_CTBVALUE_" . $context["segment"]) . "_0_");
                    // line 79
                    echo "        ";
                    // line 80
                    echo "
        ";
                    // line 82
                    echo "        <td style=\"padding-right: 10px;\">\$";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["data"]) ? $context["data"] : null), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "

\t\t<td style=\"border-left: 1px solid red; padding: 3px; text-align: center;\">";
                // line 86
                if (($this->getAttribute($context["employee"], "_KEYELIG", array()) == 1)) {
                    echo " <img src=\"images/unlock-icon.png\" width=\"25\">";
                }
                echo "</td>
\t\t<td style=\"padding: 3px; text-align: center;\">";
                // line 87
                if (($this->getAttribute($context["employee"], "_HCEELIG", array()) == 1)) {
                    echo "<img src=\"images/dollar-coin-icon.png\" width=\"25\">";
                }
                echo "</td>
\t\t<td style=\"padding: 3px; text-align: center;\">";
                // line 88
                if (($this->getAttribute($context["employee"], "_AGE70HALF", array()) == 1)) {
                    echo "<img src=\"images/diamond-icon.png\" width=\"25\">";
                }
                echo "</td>
        ";
                // line 90
                echo "
        <td style=\"border-right: 1px solid red; padding: 3px; text-align: center;\">";
                // line 91
                if ((($this->getAttribute($context["employee"], "_AGE50HALF", array()) == 1) || ($this->getAttribute($context["employee"], "_AGENEAREST", array()) > 49))) {
                    echo "<img src=\"images/timer-icon.png\" width=\"25\">";
                }
                echo "</td>

\t</tr>
    ";
            }
            // line 95
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
   <tr>
\t\t<td class=\"first-column\">TOTAL</td>
\t\t<td style=\"padding-right: 10px;\">\$";
        // line 99
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["TOTALDEPOSIT_COMP"]) ? $context["TOTALDEPOSIT_COMP"] : null), 2, ".", ","), "html", null, true);
        echo "</td>
        ";
        // line 101
        echo "

\t\t";
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__NAMED_SEGMENTS", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 104
            echo "
        ";
            // line 105
            if (($context["segment"] == 1)) {
                // line 106
                echo "        <td style=\"padding-right: 10px;\"> \$";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["TOTALDEPOSIT_1"]) ? $context["TOTALDEPOSIT_1"] : null), 2, ".", ","), "html", null, true);
                echo "</td>
        ";
            } elseif ((            // line 107
$context["segment"] == 2)) {
                // line 108
                echo "        <td style=\"padding-right: 10px;\"> \$";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["TOTALDEPOSIT_2"]) ? $context["TOTALDEPOSIT_2"] : null), 2, ".", ","), "html", null, true);
                echo "</td>
        ";
            } elseif ((            // line 109
$context["segment"] == 3)) {
                // line 110
                echo "        <td style=\"padding-right: 10px;\"> \$";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["TOTALDEPOSIT_3"]) ? $context["TOTALDEPOSIT_3"] : null), 2, ".", ","), "html", null, true);
                echo "</td>
        ";
            } elseif ((            // line 111
$context["segment"] == 4)) {
                // line 112
                echo "        <td style=\"padding-right: 10px;\"> \$";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["TOTALDEPOSIT_4"]) ? $context["TOTALDEPOSIT_4"] : null), 2, ".", ","), "html", null, true);
                echo "</td>
        ";
            } elseif ((            // line 113
$context["segment"] == 5)) {
                // line 114
                echo "        <td style=\"padding-right: 10px;\"> \$";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["TOTALDEPOSIT_5"]) ? $context["TOTALDEPOSIT_5"] : null), 2, ".", ","), "html", null, true);
                echo "</td>
        ";
            } elseif ((            // line 115
$context["segment"] == 6)) {
                // line 116
                echo "        <td style=\"padding-right: 10px;\"> \$";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["TOTALDEPOSIT_6"]) ? $context["TOTALDEPOSIT_6"] : null), 2, ".", ","), "html", null, true);
                echo "</td>
        ";
            } elseif ((            // line 117
$context["segment"] == 7)) {
                // line 118
                echo "        <td style=\"padding-right: 10px;\"> \$";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["TOTALDEPOSIT_7"]) ? $context["TOTALDEPOSIT_7"] : null), 2, ".", ","), "html", null, true);
                echo "</td>
        ";
            } elseif ((            // line 119
$context["segment"] == 8)) {
                // line 120
                echo "        <td style=\"padding-right: 10px;\"> \$";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["TOTALDEPOSIT_8"]) ? $context["TOTALDEPOSIT_8"] : null), 2, ".", ","), "html", null, true);
                echo "</td>
        ";
            } elseif ((            // line 121
$context["segment"] == 9)) {
                // line 122
                echo "        <td style=\"padding-right: 10px;\"> \$";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["TOTALDEPOSIT_9"]) ? $context["TOTALDEPOSIT_9"] : null), 2, ".", ","), "html", null, true);
                echo "</td>
        ";
            } elseif ((            // line 123
$context["segment"] == 10)) {
                // line 124
                echo "        <td style=\"padding-right: 10px;\"> \$";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["TOTALDEPOSIT_10"]) ? $context["TOTALDEPOSIT_10"] : null), 2, ".", ","), "html", null, true);
                echo "</td>
        ";
            }
            // line 126
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "

\t\t<td style=\"border-left: 1px solid red; padding: 3px; text-align: center;\">";
        // line 130
        if (($this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "_KEYELIG", array()) == 1)) {
            echo " <img src=\"images/unlock-icon.png\" width=\"25\">";
        }
        echo "</td>
\t\t<td style=\"padding: 3px; text-align: center;\">";
        // line 131
        if (($this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "_HCEELIG", array()) == 1)) {
            echo "<img src=\"images/dollar-coin-icon.png\" width=\"25\">";
        }
        echo "</td>
\t\t<td style=\"padding: 3px; text-align: center;\">";
        // line 132
        if (($this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "_AGE70HALF", array()) == 1)) {
            echo "<img src=\"images/diamond-icon.png\" width=\"25\">";
        }
        echo "</td>
        ";
        // line 134
        echo "        <td style=\"border-right: 1px solid red; padding: 3px; text-align: center;\">";
        if ((($this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "_AGE50HALF", array()) == 1) || ($this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "_AGENEAREST", array()) > 49))) {
            echo "<img src=\"images/timer-icon.png\" width=\"25\">";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "_AGENEAREST", array()), "html", null, true);
        echo "</td>



   </tr>

   </tbody>
</table>

<table id=\"key-legend\" cellspacing=0>
\t<tr>
\t\t\t<td><b>Legend: </b></td> 
\t\t\t<td><img src=\"images/unlock-icon.png\"></td><td>Key</td>
\t\t\t<td><img src=\"images/dollar-coin-icon.png\"></td><td>HCE</td>
\t\t\t<td><img src=\"images/timer-icon.png\"></td><td>Catch-up Eligible</td>
\t\t\t<td><img src=\"images/diamond-icon.png\"></td><td>70 &frac12;</td>
\t</tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "deposit_summary.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 134,  398 => 132,  392 => 131,  386 => 130,  382 => 128,  375 => 126,  369 => 124,  367 => 123,  362 => 122,  360 => 121,  355 => 120,  353 => 119,  348 => 118,  346 => 117,  341 => 116,  339 => 115,  334 => 114,  332 => 113,  327 => 112,  325 => 111,  320 => 110,  318 => 109,  313 => 108,  311 => 107,  306 => 106,  304 => 105,  301 => 104,  297 => 103,  293 => 101,  289 => 99,  284 => 96,  278 => 95,  269 => 91,  266 => 90,  260 => 88,  254 => 87,  248 => 86,  244 => 84,  235 => 82,  232 => 80,  230 => 79,  228 => 78,  225 => 77,  222 => 76,  219 => 75,  216 => 74,  213 => 73,  210 => 72,  207 => 71,  204 => 70,  201 => 69,  198 => 68,  195 => 67,  192 => 66,  189 => 65,  186 => 64,  183 => 63,  180 => 62,  177 => 61,  174 => 60,  171 => 59,  168 => 58,  165 => 57,  162 => 56,  159 => 55,  156 => 54,  153 => 53,  150 => 52,  147 => 51,  144 => 50,  141 => 49,  138 => 48,  135 => 47,  133 => 46,  129 => 44,  124 => 43,  120 => 41,  116 => 40,  111 => 37,  109 => 36,  106 => 35,  104 => 34,  101 => 33,  97 => 32,  91 => 29,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  42 => 12,  33 => 10,  28 => 9,  19 => 1,);
    }
}
