<?php

/* investment_summary.html */
class __TwigTemplate_a0af888e97fdf83b3b9d77414c6351abe392e834e1c82f499b7831ca9e0ff03d extends Twig_Template
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
        echo "<h2>Investment Summary</h2>

<table class=\"full-width\"  cellspacing=0>
    <thead>
\t<tr>
\t\t<th>Participant Name<br>SS Number<br><u><b>Fund/Source</b></u></th>
\t\t<th>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AS_OF_DATE_BEGIN", array()), "html", null, true);
        echo " <br><u><b>Balance</b></u></th>
\t\t<th><u><b>Contrib.</b></u></th>
\t\t<th><u><b>Forfeit.</b></u></th>
\t\t<th><u><b>Earnings</b></u></th>
\t\t<th><u><b>Transfers</b></u></th>
\t\t<th><u><b>Withdrawls</b></u></th>
\t\t<th>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AS_OF_DATE", array()), "html", null, true);
        echo " <br><u><b>Balance</b></u></th>
\t\t<th>Vst<br><u><b>Pct</b></u></th>
\t\t<th>Vested<br><u><b>Amount</b></u></th>
\t</tr>
    </thead>


";
        // line 20
        $context["counter"] = 1;
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) ? $context["employees"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 22
            if (($this->getAttribute($context["employee"], "__DONT_SHOW", array()) == 0)) {
                // line 23
                echo "\t<tr style = 'page-break-before: always; page-break-after:avoid;'>
\t\t<td class=\"first-column\">
\t\t\t<h3 style=\"margin-bottom:0px; padding-bottom: 0px;\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "NAME", array()), "html", null, true);
                echo "</h3> \t\t\t

\t\t</td>
\t\t<td colspan=\"9\" style=\"text-align: right;\"><!--<h3>";
                // line 28
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ssnmask')->getCallable(), array($this->getAttribute($context["employee"], "SSNUM", array()))), "html", null, true);
                echo "</h3>--></td>
\t</tr>\t

\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">
            <b>Total</b>
\t\t</td>
        <td style=\"text-align: right;\"><b>";
                // line 35
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__BEGVALUE_TOTAL", array()), 2, ".", ","), "html", null, true);
                echo "</b></td>
\t\t<td style=\"text-align: right;\"><b>";
                // line 36
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__CTBVALUE_TOTAL", array()), 2, ".", ","), "html", null, true);
                echo "</b></td>
\t\t<td style=\"text-align: right;\"><b>";
                // line 37
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__FRFVALUE_TOTAL", array()), 2, ".", ","), "html", null, true);
                echo "</b></td>
\t\t<td style=\"text-align: right;\"><b>";
                // line 38
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__EXPINTVALUE_TOTAL", array()), 2, ".", ","), "html", null, true);
                echo "</b></td>
        <td style=\"text-align: right;\"><b>";
                // line 39
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__TFIOVALUE_TOTAL", array()), 2, ".", ","), "html", null, true);
                echo "</b></td>
\t\t<td style=\"text-align: right;\"><b>";
                // line 40
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__WDWVALUE_TOTAL", array()), 2, ".", ","), "html", null, true);
                echo "</b></td>
\t\t<td style=\"text-align: right;\"><b>";
                // line 41
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__ENDVALUE_TOTAL", array()), 2, ".", ","), "html", null, true);
                echo "</b></td>
\t\t<td>&nbsp;</td>
\t\t<td style=\"text-align: right;\"><b>";
                // line 43
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__ADDED_ENDVALUE_TOTAL", array()), 2, ".", ","), "html", null, true);
                echo "</b></td>

\t</tr>

\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">
\t\t\t<b><u>Allocation by Source</u></b>
\t\t</td>
\t\t<td colspan=\"9\">&nbsp;</td>
\t</tr>



\t";
                // line 56
                if ((($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "1", array(), "array") == "Active") && $this->getAttribute($context["employee"], "__1_HAS_VALUE", array()))) {
                    // line 57
                    echo "\t<tr style=\"background-color:#e3f5fc\">
\t\t<td class=\"first-column\">";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "1", array(), "array"), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 59
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_BEGVALUE_1_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 60
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__CTBVALUE_1_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 61
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_FRFVALUE_1_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 62
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_EXPINTVALUE_1_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 63
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_TFIOVALUE_1_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 64
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_WDWVALUE_1_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 65
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_ENDVALUE_1_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
        <td style=\"text-align: center;\">";
                    // line 66
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["employee"], "VESTPCT_1", array())), "html", null, true);
                    echo "%</td>
\t\t<td style=\"text-align: right;\">";
                    // line 67
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__ENDVALUE_1_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t</tr>
\t";
                }
                // line 70
                echo "
\t";
                // line 71
                if ((($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "2", array(), "array") == "Active") && $this->getAttribute($context["employee"], "__2_HAS_VALUE", array()))) {
                    // line 72
                    echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "2", array(), "array"), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 74
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_BEGVALUE_2_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 75
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__CTBVALUE_2_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 76
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_FRFVALUE_2_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 77
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_EXPINTVALUE_2_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 78
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_TFIOVALUE_2_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 79
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_WDWVALUE_2_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 80
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_ENDVALUE_2_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
        <td style=\"text-align: center;\">";
                    // line 81
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["employee"], "VESTPCT_2", array())), "html", null, true);
                    echo "%</td>
\t\t<td style=\"text-align: right;\">";
                    // line 82
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__ENDVALUE_2_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t</tr>
\t";
                }
                // line 85
                echo "

\t";
                // line 87
                if ((($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "3", array(), "array") == "Active") && $this->getAttribute($context["employee"], "__3_HAS_VALUE", array()))) {
                    // line 88
                    echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "3", array(), "array"), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 90
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_BEGVALUE_3_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 91
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__CTBVALUE_3_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 92
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_FRFVALUE_3_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 93
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_EXPINTVALUE_3_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 94
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_TFIOVALUE_3_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 95
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_WDWVALUE_3_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 96
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_ENDVALUE_3_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
        <td style=\"text-align: center;\">";
                    // line 97
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["employee"], "VESTPCT_3", array())), "html", null, true);
                    echo "%</td>
\t\t<td style=\"text-align: right;\">";
                    // line 98
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__ENDVALUE_3_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t</tr>
\t";
                }
                // line 101
                echo "
\t";
                // line 102
                if ((($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "4", array(), "array") == "Active") && $this->getAttribute($context["employee"], "__4_HAS_VALUE", array()))) {
                    // line 103
                    echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "4", array(), "array"), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 105
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_BEGVALUE_4_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 106
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__CTBVALUE_4_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 107
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_FRFVALUE_4_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 108
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_EXPINTVALUE_4_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
        <td style=\"text-align: right;\">";
                    // line 109
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_TFIOVALUE_4_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 110
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_WDWVALUE_4_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 111
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_ENDVALUE_4_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
        <td style=\"text-align: center;\">";
                    // line 112
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["employee"], "VESTPCT_4", array())), "html", null, true);
                    echo "%</td>
\t\t<td style=\"text-align: right;\">";
                    // line 113
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__ENDVALUE_4_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t</tr>
\t";
                }
                // line 116
                echo "

\t";
                // line 118
                if ((($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "5", array(), "array") == "Active") && $this->getAttribute($context["employee"], "__5_HAS_VALUE", array()))) {
                    // line 119
                    echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "5", array(), "array"), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 121
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_BEGVALUE_5_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 122
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__CTBVALUE_5_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 123
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_FRFVALUE_5_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 124
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_EXPINTVALUE_5_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 125
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_TFIOVALUE_5_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 126
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_WDWVALUE_5_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 127
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_ENDVALUE_5_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
        <td style=\"text-align: center;\">";
                    // line 128
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["employee"], "VESTPCT_5", array())), "html", null, true);
                    echo "%</td>
\t\t<td style=\"text-align: right;\">";
                    // line 129
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__ENDVALUE_5_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t</tr>
\t";
                }
                // line 132
                echo "

\t";
                // line 134
                if ((($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "6", array(), "array") == "Active") && $this->getAttribute($context["employee"], "__6_HAS_VALUE", array()))) {
                    // line 135
                    echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
                    // line 136
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "6", array(), "array"), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 137
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_BEGVALUE_6_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 138
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__CTBVALUE_6_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 139
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_FRFVALUE_6_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 140
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_EXPINTVALUE_6_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 141
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_TFIOVALUE_6_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 142
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_WDWVALUE_6_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 143
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_ENDVALUE_6_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
        <td style=\"text-align: center;\">";
                    // line 144
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["employee"], "VESTPCT_6", array())), "html", null, true);
                    echo "%</td>
\t\t<td style=\"text-align: right;\">";
                    // line 145
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__ENDVALUE_6_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t</tr>
\t";
                }
                // line 148
                echo "

\t";
                // line 150
                if ((($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "7", array(), "array") == "Active") && $this->getAttribute($context["employee"], "__7_HAS_VALUE", array()))) {
                    // line 151
                    echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
                    // line 152
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "7", array(), "array"), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 153
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_BEGVALUE_7_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 154
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__CTBVALUE_7_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 155
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_FRFVALUE_7_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 156
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_EXPINTVALUE_7_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 157
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_TFIOVALUE_7_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 158
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_WDWVALUE_7_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 159
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_ENDVALUE_7_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
        <td style=\"text-align: center;\">";
                    // line 160
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["employee"], "VESTPCT_7", array())), "html", null, true);
                    echo "%</td>
\t\t<td style=\"text-align: right;\">";
                    // line 161
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__ENDVALUE_7_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t</tr>
\t";
                }
                // line 164
                echo "
\t";
                // line 165
                if ((($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "8", array(), "array") == "Active") && $this->getAttribute($context["employee"], "__8_HAS_VALUE", array()))) {
                    // line 166
                    echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
                    // line 167
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "8", array(), "array"), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 168
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_BEGVALUE_8_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 169
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__CTBVALUE_8_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 170
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_FRFVALUE_8_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 171
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_EXPINTVALUE_8_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 172
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_TFIOVALUE_8_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 173
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_WDWVALUE_8_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 174
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_ENDVALUE_8_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
        <td style=\"text-align: center;\">";
                    // line 175
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["employee"], "VESTPCT_8", array())), "html", null, true);
                    echo "%</td>
\t\t<td style=\"text-align: right;\">";
                    // line 176
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__ENDVALUE_8_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t</tr>
\t";
                }
                // line 179
                echo "

\t";
                // line 181
                if ((($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "9", array(), "array") == "Active") && $this->getAttribute($context["employee"], "__9_HAS_VALUE", array()))) {
                    // line 182
                    echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
                    // line 183
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "9", array(), "array"), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 184
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_BEGVALUE_9_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 185
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__CTBVALUE_9_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 186
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_FRFVALUE_9_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 187
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_EXPINTVALUE_9_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 188
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_TFIOVALUE_9_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 189
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_WDWVALUE_9_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 190
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_ENDVALUE_9_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
        <td style=\"text-align: center;\">";
                    // line 191
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["employee"], "VESTPCT_9", array())), "html", null, true);
                    echo "%</td>
\t\t<td style=\"text-align: right;\">";
                    // line 192
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__ENDVALUE_9_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t</tr>
\t";
                }
                // line 195
                echo "


\t";
                // line 198
                if ((($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "10", array(), "array") == "Active") && $this->getAttribute($context["employee"], "__10_HAS_VALUE", array()))) {
                    // line 199
                    echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
                    // line 200
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "10", array(), "array"), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 201
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_BEGVALUE_10_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 202
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__CTBVALUE_10_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 203
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_FRFVALUE_10_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 204
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_EXPINTVALUE_10_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 205
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_TFIOVALUE_10_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 206
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_WDWVALUE_10_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t\t<td style=\"text-align: right;\">";
                    // line 207
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "_ENDVALUE_10_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
        <td style=\"text-align: center;\">";
                    // line 208
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["employee"], "VESTPCT_10", array())), "html", null, true);
                    echo "%</td>
\t\t<td style=\"text-align: right;\">";
                    // line 209
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__ENDVALUE_10_0_", array()), 2, ".", ","), "html", null, true);
                    echo "</td>
\t</tr>
\t";
                }
                // line 212
                echo "












    ";
            }
            // line 226
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "\t
</table>

<br>

<table class=\"full-width\"  cellspacing=0>

    <thead>
\t<tr>
\t\t<th><u><b>Fund/Source</b></u></th>
\t\t<th>";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AS_OF_DATE_BEGIN", array()), "html", null, true);
        echo " <br><u><b>Balance</b></u></th>
\t\t<th><u><b>Contrib.</b></u></th>
\t\t<th><u><b>Forfeit.</b></u></th>
\t\t<th><u><b>Earnings</b></u></th>
\t\t<th><u><b>Transfers</b></u></th>
\t\t<th><u><b>Withdrawls</b></u></th>
\t\t<th>";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AS_OF_DATE", array()), "html", null, true);
        echo " <br><u><b>Balance</b></u></th>
\t\t<th>Vst<br><u><b>Pct</b></u></th>
\t\t<th>Vested<br><u><b>Amount</b></u></th>
\t</tr>
    </thead>


\t<tr>
\t\t<td class=\"first-column\">
\t\t\t<h3 style=\"margin-bottom:0px; padding-bottom: 0px;\">Total</h3> \t\t\t

\t\t</td>
\t\t<td colspan=\"9\" style=\"text-align: right;\">&nbsp;</td>
\t</tr>\t

\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">
            <b>Total</b>
\t\t</td>
        <td style=\"text-align: right;\"><b>";
        // line 262
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__BEGVALUE_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
        echo "</b></td>
\t\t<td style=\"text-align: right;\"><b>";
        // line 263
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__CTBVALUE_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
        echo "</b></td>
\t\t<td style=\"text-align: right;\"><b>";
        // line 264
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__FRFVALUE_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
        echo "</b></td>
\t\t<td style=\"text-align: right;\"><b>";
        // line 265
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__EXPINTVALUE_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
        echo "</b></td>
        <td style=\"text-align: right;\"><b>";
        // line 266
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__TFIOVALUE_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
        echo "</b></td>
\t\t<td style=\"text-align: right;\"><b>";
        // line 267
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__WDWVALUE_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
        echo "</b></td>
\t\t<td style=\"text-align: right;\"><b>";
        // line 268
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ENDVALUE_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
        echo "</b></td>
\t\t<td>&nbsp;</td>
\t\t<td style=\"text-align: right;\"><b>";
        // line 270
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ADDED_ENDVALUE_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
        echo "</b></td>

\t</tr>

\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">
\t\t\t<b><u>Allocation by Source</u></b>
\t\t</td>
\t\t<td colspan=\"9\">&nbsp;</td>
\t</tr>

\t";
        // line 281
        if (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "1", array(), "array") == "Active")) {
            // line 282
            echo "\t<tr style=\"background-color:#e3f5fc\">
\t\t<td class=\"first-column\">";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "1", array(), "array"), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 284
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__BEGVALUE_1_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 285
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__CTBVALUE_1_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 286
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__FRFVALUE_1_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 287
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__EXPINTVALUE_1_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 288
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__TFIOVALUE_1_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 289
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__WDWVALUE_1_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 290
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ENDVALUE_1_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td style=\"text-align: center;\">-</td>
\t\t<td style=\"text-align: right;\">";
            // line 292
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ADDED_ENDVALUE_1_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        // line 295
        echo "
\t";
        // line 296
        if (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "2", array(), "array") == "Active")) {
            // line 297
            echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
            // line 298
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "2", array(), "array"), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 299
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__BEGVALUE_2_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 300
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__CTBVALUE_2_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 301
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__FRFVALUE_2_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 302
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__EXPINTVALUE_2_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 303
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__TFIOVALUE_2_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 304
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__WDWVALUE_2_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 305
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ENDVALUE_2_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td style=\"text-align: center;\">-</td>
\t\t<td style=\"text-align: right;\">";
            // line 307
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ADDED_ENDVALUE_2_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        // line 310
        echo "

\t";
        // line 312
        if (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "3", array(), "array") == "Active")) {
            // line 313
            echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
            // line 314
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "3", array(), "array"), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 315
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__BEGVALUE_3_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 316
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__CTBVALUE_3_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 317
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__FRFVALUE_3_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 318
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__EXPINTVALUE_3_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 319
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__TFIOVALUE_3_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td style=\"text-align: right;\">";
            // line 320
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__WDWVALUE_3_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 321
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ENDVALUE_3_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td style=\"text-align: center;\">-</td>
\t\t<td style=\"text-align: right;\">";
            // line 323
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ADDED_ENDVALUE_3_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        // line 326
        echo "
\t";
        // line 327
        if (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "4", array(), "array") == "Active")) {
            // line 328
            echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
            // line 329
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "4", array(), "array"), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 330
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__BEGVALUE_4_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 331
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__CTBVALUE_4_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 332
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__FRFVALUE_4_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 333
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__EXPINTVALUE_4_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 334
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__TFIOVALUE_4_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 335
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__WDWVALUE_4_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 336
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ENDVALUE_4_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td style=\"text-align: center;\">-</td>
\t\t<td style=\"text-align: right;\">";
            // line 338
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ADDED_ENDVALUE_4_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        // line 341
        echo "

\t";
        // line 343
        if (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "5", array(), "array") == "Active")) {
            // line 344
            echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
            // line 345
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "5", array(), "array"), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 346
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__BEGVALUE_5_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 347
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__CTBVALUE_5_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 348
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__FRFVALUE_5_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 349
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__EXPINTVALUE_5_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 350
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__TFIOVALUE_5_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 351
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__WDWVALUE_5_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 352
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ENDVALUE_5_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td style=\"text-align: center;\">-</td>
\t\t<td style=\"text-align: right;\">";
            // line 354
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ADDED_ENDVALUE_5_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        // line 357
        echo "

\t";
        // line 359
        if (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "6", array(), "array") == "Active")) {
            // line 360
            echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
            // line 361
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "6", array(), "array"), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 362
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__BEGVALUE_6_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 363
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__CTBVALUE_6_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 364
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__FRFVALUE_6_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 365
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__EXPINTVALUE_6_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 366
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__TFIOVALUE_6_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 367
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__WDWVALUE_6_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 368
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ENDVALUE_6_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td style=\"text-align: center;\">-</td>
\t\t<td style=\"text-align: right;\">";
            // line 370
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ADDED_ENDVALUE_6_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        // line 373
        echo "

\t";
        // line 375
        if (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "7", array(), "array") == "Active")) {
            // line 376
            echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
            // line 377
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "7", array(), "array"), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 378
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__BEGVALUE_7_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 379
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__CTBVALUE_7_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 380
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__FRFVALUE_7_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 381
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__EXPINTVALUE_7_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 382
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__TFIOVALUE_7_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 383
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__WDWVALUE_7_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 384
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ENDVALUE_7_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td style=\"text-align: center;\">-</td>
\t\t<td style=\"text-align: right;\">";
            // line 386
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ADDED_ENDVALUE_7_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        // line 389
        echo "
\t";
        // line 390
        if (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "8", array(), "array") == "Active")) {
            // line 391
            echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
            // line 392
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "8", array(), "array"), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 393
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__BEGVALUE_8_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 394
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__CTBVALUE_8_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 395
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__FRFVALUE_8_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 396
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__EXPINTVALUE_8_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 397
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__TFIOVALUE_8_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 398
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__WDWVALUE_8_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 399
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ENDVALUE_8_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td style=\"text-align: center;\">-</td>
\t\t<td style=\"text-align: right;\">";
            // line 401
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ADDED_ENDVALUE_8_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        // line 404
        echo "
\t";
        // line 405
        if (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "9", array(), "array") == "Active")) {
            // line 406
            echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
            // line 407
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "9", array(), "array"), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 408
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__BEGVALUE_9_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 409
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__CTBVALUE_9_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 410
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__FRFVALUE_9_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 411
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__EXPINTVALUE_9_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 412
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__TFIOVALUE_9_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 413
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__WDWVALUE_9_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 414
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ENDVALUE_9_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td style=\"text-align: center;\">-</td>
\t\t<td style=\"text-align: right;\">";
            // line 416
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ADDED_ENDVALUE_9_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        // line 419
        echo "
\t";
        // line 420
        if (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ACTIVE_SEGMENTS", array()), "10", array(), "array") == "Active")) {
            // line 421
            echo "\t<tr style=\"background-color: #e3f5fc;\">
\t\t<td class=\"first-column\">";
            // line 422
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__SEGMENTS", array()), "10", array(), "array"), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 423
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__BEGVALUE_10_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 424
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__CTBVALUE_10_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 425
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__FRFVALUE_10_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 426
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__EXPINTVALUE_10_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 427
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__TFIOVALUE_10_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 428
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__WDWVALUE_10_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align: right;\">";
            // line 429
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ENDVALUE_10_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td style=\"text-align: center;\">-</td>
\t\t<td style=\"text-align: right;\">";
            // line 431
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__ADDED_ENDVALUE_10_0_GRAND_TOTAL", array()), 2, ".", ","), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        // line 434
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "investment_summary.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1203 => 434,  1197 => 431,  1192 => 429,  1188 => 428,  1184 => 427,  1180 => 426,  1176 => 425,  1172 => 424,  1168 => 423,  1164 => 422,  1161 => 421,  1159 => 420,  1156 => 419,  1150 => 416,  1145 => 414,  1141 => 413,  1137 => 412,  1133 => 411,  1129 => 410,  1125 => 409,  1121 => 408,  1117 => 407,  1114 => 406,  1112 => 405,  1109 => 404,  1103 => 401,  1098 => 399,  1094 => 398,  1090 => 397,  1086 => 396,  1082 => 395,  1078 => 394,  1074 => 393,  1070 => 392,  1067 => 391,  1065 => 390,  1062 => 389,  1056 => 386,  1051 => 384,  1047 => 383,  1043 => 382,  1039 => 381,  1035 => 380,  1031 => 379,  1027 => 378,  1023 => 377,  1020 => 376,  1018 => 375,  1014 => 373,  1008 => 370,  1003 => 368,  999 => 367,  995 => 366,  991 => 365,  987 => 364,  983 => 363,  979 => 362,  975 => 361,  972 => 360,  970 => 359,  966 => 357,  960 => 354,  955 => 352,  951 => 351,  947 => 350,  943 => 349,  939 => 348,  935 => 347,  931 => 346,  927 => 345,  924 => 344,  922 => 343,  918 => 341,  912 => 338,  907 => 336,  903 => 335,  899 => 334,  895 => 333,  891 => 332,  887 => 331,  883 => 330,  879 => 329,  876 => 328,  874 => 327,  871 => 326,  865 => 323,  860 => 321,  856 => 320,  852 => 319,  848 => 318,  844 => 317,  840 => 316,  836 => 315,  832 => 314,  829 => 313,  827 => 312,  823 => 310,  817 => 307,  812 => 305,  808 => 304,  804 => 303,  800 => 302,  796 => 301,  792 => 300,  788 => 299,  784 => 298,  781 => 297,  779 => 296,  776 => 295,  770 => 292,  765 => 290,  761 => 289,  757 => 288,  753 => 287,  749 => 286,  745 => 285,  741 => 284,  737 => 283,  734 => 282,  732 => 281,  718 => 270,  713 => 268,  709 => 267,  705 => 266,  701 => 265,  697 => 264,  693 => 263,  689 => 262,  667 => 243,  658 => 237,  646 => 227,  639 => 226,  623 => 212,  617 => 209,  613 => 208,  609 => 207,  605 => 206,  601 => 205,  597 => 204,  593 => 203,  589 => 202,  585 => 201,  581 => 200,  578 => 199,  576 => 198,  571 => 195,  565 => 192,  561 => 191,  557 => 190,  553 => 189,  549 => 188,  545 => 187,  541 => 186,  537 => 185,  533 => 184,  529 => 183,  526 => 182,  524 => 181,  520 => 179,  514 => 176,  510 => 175,  506 => 174,  502 => 173,  498 => 172,  494 => 171,  490 => 170,  486 => 169,  482 => 168,  478 => 167,  475 => 166,  473 => 165,  470 => 164,  464 => 161,  460 => 160,  456 => 159,  452 => 158,  448 => 157,  444 => 156,  440 => 155,  436 => 154,  432 => 153,  428 => 152,  425 => 151,  423 => 150,  419 => 148,  413 => 145,  409 => 144,  405 => 143,  401 => 142,  397 => 141,  393 => 140,  389 => 139,  385 => 138,  381 => 137,  377 => 136,  374 => 135,  372 => 134,  368 => 132,  362 => 129,  358 => 128,  354 => 127,  350 => 126,  346 => 125,  342 => 124,  338 => 123,  334 => 122,  330 => 121,  326 => 120,  323 => 119,  321 => 118,  317 => 116,  311 => 113,  307 => 112,  303 => 111,  299 => 110,  295 => 109,  291 => 108,  287 => 107,  283 => 106,  279 => 105,  275 => 104,  272 => 103,  270 => 102,  267 => 101,  261 => 98,  257 => 97,  253 => 96,  249 => 95,  245 => 94,  241 => 93,  237 => 92,  233 => 91,  229 => 90,  225 => 89,  222 => 88,  220 => 87,  216 => 85,  210 => 82,  206 => 81,  202 => 80,  198 => 79,  194 => 78,  190 => 77,  186 => 76,  182 => 75,  178 => 74,  174 => 73,  171 => 72,  169 => 71,  166 => 70,  160 => 67,  156 => 66,  152 => 65,  148 => 64,  144 => 63,  140 => 62,  136 => 61,  132 => 60,  128 => 59,  124 => 58,  121 => 57,  119 => 56,  103 => 43,  98 => 41,  94 => 40,  90 => 39,  86 => 38,  82 => 37,  78 => 36,  74 => 35,  64 => 28,  58 => 25,  54 => 23,  52 => 22,  48 => 21,  46 => 20,  36 => 13,  27 => 7,  19 => 1,);
    }
}
