<?php

/* compliance_results.html */
class __TwigTemplate_34c5b09699ee2a00b22420922e65efea8b8885e539d1f9781e7812feba90c2d1 extends Twig_Template
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
        echo "<h2>Compliance Results</h2>

<style>

table.ages td {
\ttext-align: center;
}

</style>

<table class=\"compliance-section\"  cellpadding=0 cellspacing=0>

";
        // line 14
        echo "
<tr class=\"compliance-header\">
\t<td width=\"60%\">410(b) - Non Discrimination: </td>
\t<td>Result: 


        PASS
        ";
        // line 30
        echo "
\t</td>
\t<td></td>
</tr>

<tr>
\t<td><p>

Participant eligibility and the allocation of the contributions have been reviewed and the Plan is not discriminatory    
    
    </p></td>
\t<td><p>
    ";
        // line 49
        echo "\t\tYour Plan PASSES the 410(b) Non-Discrimination test
    ";
        // line 53
        echo "
\t</p></td>
\t<td class=\"compliance-img\">

\t";
        // line 57
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VL410TST_1_PStandardTestResult_", array()) == "F")) {
            // line 58
            echo "\t\t<img src=\"images/apport-icon.png\" width=\"110px\">
\t";
        } else {
            // line 60
            echo "\t\t<img src=\"images/checkbox-icon.png\" width=\"110px\">
\t";
        }
        // line 62
        echo "\t
\t
\t</td>
</tr>

<tr><td colspan=3><hr></td></tr>

";
        // line 70
        echo "    
<tr class=\"compliance-header\">
    <td>401(a)(4) - Average Benefits Test: 
    </td>
\t<td>Result: 
\t\t";
        // line 75
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VL401TST_1_P401a4TestResult_", array()) == "F")) {
            // line 76
            echo "\t\tFAIL
\t\t";
        } elseif (($this->getAttribute(        // line 77
(isset($context["general"]) ? $context["general"] : null), "S_VL401TST_1_P401a4TestResult_", array()) == "P")) {
            // line 78
            echo "\t\tPASS
\t\t";
        } elseif (($this->getAttribute(        // line 79
(isset($context["general"]) ? $context["general"] : null), "S_VL401TST_1_P401a4TestResult_", array()) == "N")) {
            // line 80
            echo "\t\tN/A
\t\t";
        }
        // line 82
        echo "\t
\t</td>
\t<td></td>
</tr>

<tr>
\t<td><p>

        When group allocation method is used the contributions must be tested to ensure that the distinct classifications of eligible participants, as well as the contributions allocated to them, do not discriminate in favor of the Highly Compensated Employees (HCE).
        
    </p></td>
\t<td><p>
\t\t
\t";
        // line 95
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VL401TST_1_P401a4TestResult_", array()) == "F")) {
            // line 96
            echo "\t\tPlease refer to test details to review.
\t";
        } elseif (($this->getAttribute(        // line 97
(isset($context["general"]) ? $context["general"] : null), "S_VL401TST_1_P401a4TestResult_", array()) == "P")) {
            // line 98
            echo "\t\tYour plan is deemed to PASS the 401(a)(4) Average Benefits test
    ";
        } else {
            // line 100
            echo "    N/A 
\t";
        }
        // line 102
        echo "\t\t
\t</p></td>
\t<td class=\"compliance-img\">

\t";
        // line 106
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VL401TST_3_P401a4TestResult_", array()) == "F")) {
            // line 107
            echo "\t\t<img src=\"images/apport-icon.png\" width=\"110px\">
\t";
        } else {
            // line 109
            echo "\t\t<img src=\"images/checkbox-icon.png\" width=\"110px\">
\t";
        }
        // line 111
        echo "\t
\t</td>
</tr>

<tr><td colspan=3><hr></td></tr>



";
        // line 120
        echo "    
<tr class=\"compliance-header\">
\t<td>401(k) - Actual Deferral Percentage (ADP) </td>
\t<td>Result: 
\t\t";
        // line 124
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLADPTST_1_PADPTestResult_", array()) == "F")) {
            // line 125
            echo "\t\tFAIL
\t\t";
        } elseif (($this->getAttribute(        // line 126
(isset($context["general"]) ? $context["general"] : null), "S_VLADPTST_1_PADPTestResult_", array()) == "P")) {
            // line 127
            echo "\t\tPASS
\t\t";
        } elseif (($this->getAttribute(        // line 128
(isset($context["general"]) ? $context["general"] : null), "S_VLADPTST_1_PADPTestResult_", array()) == "N")) {
            // line 129
            echo "\t\tN/A
        ";
        } elseif (($this->getAttribute(        // line 130
(isset($context["general"]) ? $context["general"] : null), "S_VLADPTST_1_PADPTestResult_", array()) == "S")) {
            // line 131
            echo "\t\tSAFE HARBOR
\t\t";
        }
        // line 133
        echo "\t
\t</td>
\t<td></td>
</tr>

<tr>
\t<td><p>
        
    
Participant deferral contributions are tested to ensure that the highly compensated employees have not deferred more than the legal limits allowable in relationship to the non-highly compensated employees.

    </p></td>
\t<td><p>
\t\t
\t";
        // line 147
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLADPTST_1_PADPTestResult_", array()) == "F")) {
            // line 148
            echo "Your Plan FAILED ADP testing, and was corrected by 1) refunding money to the HCE's 2) QNEC or 3) Allocating the excess contributions to Catch-Up
\t";
        } elseif (($this->getAttribute(        // line 149
(isset($context["general"]) ? $context["general"] : null), "S_VLADPTST_1_PADPTestResult_", array()) == "S")) {
            // line 150
            echo "Your Plan's Safe Harbor election satisfies the ADP testing requirements
\t";
        } elseif (($this->getAttribute(        // line 151
(isset($context["general"]) ? $context["general"] : null), "S_VLADPTST_1_PADPTestResult_", array()) == "N")) {
            // line 152
            echo "N/A
    ";
        } else {
            // line 154
            echo "Your Plan PASSED ADP testing

";
            // line 157
            echo "
    ";
        }
        // line 159
        echo "\t\t
\t</p></td>
\t<td class=\"compliance-img\">

\t";
        // line 163
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLADPTST_1_PADPTestResult_", array()) == "F")) {
            // line 164
            echo "\t\t<img src=\"images/apport-icon.png\" width=\"110px\">
\t";
        } else {
            // line 166
            echo "\t\t<img src=\"images/checkbox-icon.png\" width=\"110px\">
\t";
        }
        // line 168
        echo "\t
\t</td>
</tr>

<tr><td colspan=3><hr></td></tr>


";
        // line 176
        echo "    
<tr class=\"compliance-header\">
\t<td>401(m) - Actual Contribution Percentage </td>
\t<td>Result: 
\t\t";
        // line 180
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLACPTST_1_PACPTestResult_", array()) == "F")) {
            // line 181
            echo "\t\tFAIL
\t\t";
        } elseif (($this->getAttribute(        // line 182
(isset($context["general"]) ? $context["general"] : null), "S_VLACPTST_1_PACPTestResult_", array()) == "P")) {
            // line 183
            echo "\t\tPASS
\t    ";
        } elseif (($this->getAttribute(        // line 184
(isset($context["general"]) ? $context["general"] : null), "S_VLACPTST_1_PACPTestResult_", array()) == "S")) {
            // line 185
            echo "\t\tSAFE HARBOR
        ";
        } elseif (($this->getAttribute(        // line 186
(isset($context["general"]) ? $context["general"] : null), "S_VLACPTST_1_PACPTestResult_", array()) == "N")) {
            // line 187
            echo "\t\tN/A
        ";
        } else {
            // line 189
            echo "        N/A
\t\t";
        }
        // line 191
        echo "\t</td>
\t<td></td>
</tr>

<tr>
\t<td><p>

Participant match contributions are tested to ensure that the highly compensated employees have not received a match more than the legal limits allowable in relationship to the non-highly compensated employees.
    
    </p></td>
\t<td><p>
\t\t
\t";
        // line 203
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLACPTST_1_PACPTestResult_", array()) == "F")) {
            // line 204
            echo "Your Plan FAILED ACP testing, and was corrected by 1) refunding monies to the HCE's or 2) QNEC
    ";
        } elseif (($this->getAttribute(        // line 205
(isset($context["general"]) ? $context["general"] : null), "S_VLACPTST_1_PACPTestResult_", array()) == "P")) {
            // line 206
            echo "Your Plan Passed ACP testing
    ";
        } elseif (($this->getAttribute(        // line 207
(isset($context["general"]) ? $context["general"] : null), "S_VLACPTST_1_PACPTestResult_", array()) == "S")) {
            // line 208
            echo "Your Plan's Safe Harbor election satisfies the ACP testing requirements
    ";
        } else {
            // line 210
            echo "N/A
    ";
        }
        // line 212
        echo "\t\t

\t</p></td>
\t<td class=\"compliance-img\">

\t";
        // line 217
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLACPTST_1_PACPTestResult_", array()) == "F")) {
            // line 218
            echo "\t\t<img src=\"images/apport-icon.png\" width=\"110px\">
\t";
        } else {
            // line 220
            echo "\t\t<img src=\"images/checkbox-icon.png\" width=\"110px\">
\t";
        }
        // line 222
        echo "\t
\t
\t</td>
</tr>

</table>

<div class=\"page-break\"></div>

<table class=\"compliance-section\"  cellpadding=0 cellspacing=0>

    <tr><td colspan=3><hr></td></tr>

";
        // line 236
        echo "    
<tr class=\"compliance-header\">
\t<td width=\"60%\">416 - Top Heavy
    
    </td>
\t<td>Result: 
\t\t";
        // line 242
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLTHDTST_PTestResult_", array()) == "F")) {
            // line 243
            echo "\t\tFAIL
\t\t";
        } elseif (($this->getAttribute(        // line 244
(isset($context["general"]) ? $context["general"] : null), "S_VLTHDTST_PTestResult_", array()) == "P")) {
            // line 245
            echo "\t\tPASS
\t\t";
        } elseif (($this->getAttribute(        // line 246
(isset($context["general"]) ? $context["general"] : null), "S_VLTHDTST_PTestResult_", array()) == "S")) {
            // line 247
            echo "\t\tSAFE HARBOR
\t\t";
        }
        // line 249
        echo "\t
\t</td>
\t<td></td>
</tr>

<tr>
\t<td><p>
    
A plan is considered top heavy if more than 60% of Plan assets are held by key employees at the beginning of the year.
    
    </p></td>
\t<td><p>
\t\t
\t";
        // line 262
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLTHDTST_PTestResult_", array()) == "P")) {
            // line 263
            echo "    Your Top Heavy test percentage is: ";
            echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLTHDPCK_PPctKeys_", array()), 2), "html", null, true);
            echo "%\t
\t";
        } elseif (($this->getAttribute(        // line 264
(isset($context["general"]) ? $context["general"] : null), "S_VLTHDTST_PTestResult_", array()) == "F")) {
            // line 265
            echo "        Your Top Heavy test percentage is: ";
            echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLTHDPCK_PPctKeys_", array()), 2), "html", null, true);
            echo "%\t
\t";
        } else {
            // line 267
            echo "\t\tN/A
\t";
        }
        // line 269
        echo "\t\t
\t</p></td>
\t<td class=\"compliance-img\">
        
\t";
        // line 273
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLTHDTST_PTestResult_", array()) == "F")) {
            // line 274
            echo "\t\t<img src=\"images/apport-icon.png\" width=\"110px\">
\t";
        } else {
            // line 276
            echo "\t\t<img src=\"images/checkbox-icon.png\" width=\"110px\">
\t";
        }
        // line 278
        echo "   
\t
\t</td>
</tr>

<tr><td colspan=3><hr></td></tr>
    
    ";
        // line 286
        echo "<tr class=\"compliance-header\">
\t<td>414(s) - Excluded Compensation Test 
    
    </td>
\t<td>Result: 

\t\t";
        // line 292
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VL414TST_1_PPTestResult_", array()) == "F")) {
            // line 293
            echo "\t\tFAIL
        ";
            // line 295
            echo "\t\t";
        } elseif (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VL414TST_1_PPTestResult_", array()) == "N")) {
            // line 296
            echo "\t\tN/A
        ";
        } else {
            // line 298
            echo "        PASS
        ";
        }
        // line 300
        echo "\t

\t</td>
\t<td></td>
</tr>

<tr>
\t<td><p>

This test must be performed if a plan excludes certain forms of compensation (such as bonuses, commissions, or overtime). The test requires that the average ratio of plan compensations to total compensation for the HCE group be not more than a deminimus amount higher than the average of the ratio of plan compensation to total compensation for the NHCE group. The IRS has used 3% as a safeguard, but each plan is viewed on a facts and circumstances basis.
     
    </p></td>
\t<td><p>

\t\t
\t";
        // line 315
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VL414TST_1_PPTestResult_", array()) == "P")) {
            // line 316
            echo "\t\tYour Plan PASSES the Compensation Test
\t";
        } else {
            // line 318
            echo "        N/A
\t";
        }
        // line 320
        echo "\t\t
\t</p></td>
\t<td class=\"compliance-img\">

\t";
        // line 324
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VL414TST_1_PPTestResult_", array()) == "F")) {
            // line 325
            echo "\t\t<img src=\"images/apport-icon.png\" width=\"110px\">
\t";
        } else {
            // line 327
            echo "\t\t<img src=\"images/checkbox-icon.png\" width=\"110px\">
\t";
        }
        // line 329
        echo "\t
\t
\t</td>
</tr>

<tr><td colspan=3><hr></td></tr>





";
        // line 341
        echo "    
<tr class=\"compliance-header\">
\t<td>414(v) -- \"Catch-up\" contribution:
    
    
    </td>
\t<td>Result: 

        PASS
        ";
        // line 359
        echo "\t</td>
\t<td></td>
</tr>

<tr>
\t<td><p>
        
        If provided as a participant/Plan option in the Adoption Agreement and Summary Plan Description (SPD), a participant who is age 50 or older during the 2017 Plan Year may defer on a pre-tax, or Roth basis an additional amount for the Plan Year (up to \$6,000.00, as indexed) in the event the participant exceeds a Deferral (&sect;402(g)), Testing (i.e. &sect;401(k)/ADP) or Plan Limit.
        
    </p></td>
\t<td><p>
\t\t
        Your plan PASSES 414(v)

    ";
        // line 381
        echo "\t

\t</p></td>
\t<td class=\"compliance-img\">

\t\t<img src=\"images/checkbox-icon.png\" width=\"110px\">

    ";
        // line 395
        echo "\t
\t</td>
</tr>

<tr><td colspan=3><hr></td></tr>


";
        // line 403
        echo "    
<tr class=\"compliance-header\">
\t<td>402(g) -- Deferral Limitation test
    
    
    </td>
\t<td>Result: 
\t\t";
        // line 410
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VL402TST_P402gTestResult_", array()) == "F")) {
            // line 411
            echo "\t\tFAIL
\t\t";
        } elseif (($this->getAttribute(        // line 412
(isset($context["general"]) ? $context["general"] : null), "S_VL402TST_P402gTestResult_", array()) == "P")) {
            // line 413
            echo "\t\tPASS
\t\t";
        } elseif (($this->getAttribute(        // line 414
(isset($context["general"]) ? $context["general"] : null), "S_VL402TST_P402gTestResult_", array()) == "N")) {
            // line 415
            echo "\t\tN/A
\t\t";
        }
        // line 417
        echo "\t
\t</td>
\t<td></td>
</tr>

<tr>
\t<td><p>
        
Participant deferrals are tested to ensure they do not exceed the maximum Deferral Limit for the calendar year. 

";
        // line 428
        echo "
    </p></td>
\t<td><p>
\t\t
\t";
        // line 432
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VL402TST_P402gTestResult_", array()) == "P")) {
            // line 433
            echo "
Your plan PASSES 402(g)

\t";
        } elseif (($this->getAttribute(        // line 436
(isset($context["general"]) ? $context["general"] : null), "S_VL402TST_P402gTestResult_", array()) == "F")) {
            // line 437
            echo "
Your plan FAILED 402(g) and refunds have occurred    

    ";
        } else {
            // line 441
            echo "\t\tN/A
\t";
        }
        // line 443
        echo "\t\t
\t</p></td>
\t<td class=\"compliance-img\">

\t";
        // line 447
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VL402TST_P402gTestResult_", array()) == "F")) {
            // line 448
            echo "\t\t<img src=\"images/apport-icon.png\" width=\"110px\">
\t";
        } else {
            // line 450
            echo "\t\t<img src=\"images/checkbox-icon.png\" width=\"110px\">
\t";
        }
        // line 452
        echo "\t
\t
\t</td>
</tr>

<tr><td colspan=3><hr></td></tr>




";
        // line 463
        echo "    
<tr class=\"compliance-header\">
\t<td>Plan Limits:
    
    
    </td>
\t<td>Result: 
\t\t";
        // line 470
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLPLMTST_1_PPlanLimPreTaxTestResult_", array()) == "F")) {
            // line 471
            echo "\t\tFAIL
\t\t";
        } elseif (($this->getAttribute(        // line 472
(isset($context["general"]) ? $context["general"] : null), "S_VLPLMTST_1_PPlanLimPreTaxTestResult_", array()) == "P")) {
            // line 473
            echo "\t\tPASS
        ";
        } else {
            // line 475
            echo "\t\tN/A
\t\t";
        }
        // line 477
        echo "\t
\t</td>
\t<td></td>
</tr>

<tr>
\t<td><p>
        
Tests the individual participant pre-tax deferrals and/or post tax contributions made to the Plan to the Limit set forth in the Summary Plan Description and Adoption Agreement.

    </p></td>
\t<td><p>
\t\t
\t";
        // line 490
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLPLMTST_1_PPlanLimPreTaxTestResult_", array()) == "P")) {
            echo "\t
        Your plan PASSES Plan Limits
\t";
        } else {
            // line 493
            echo "\t\tN/A
\t";
        }
        // line 495
        echo "\t\t
\t</p></td>
\t<td class=\"compliance-img\">

\t";
        // line 499
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VLPLMTST_1_PPlanLimPreTaxTestResult_", array()) == "F")) {
            // line 500
            echo "\t\t<img src=\"images/apport-icon.png\" width=\"110px\">
\t";
        } else {
            // line 502
            echo "\t\t<img src=\"images/checkbox-icon.png\" width=\"110px\">
\t";
        }
        // line 504
        echo "
\t</td>
</tr>

<tr><td colspan=3><hr></td></tr>


";
        // line 512
        echo "    
<tr class=\"compliance-header\">
\t<td>415(c) -- Annual Additions:
    
    
    </td>
\t<td>Result: 
\t\t";
        // line 519
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VL415TST_P415cTestResult_", array()) == "F")) {
            // line 520
            echo "\t\tFAIL
\t\t";
        } elseif (($this->getAttribute(        // line 521
(isset($context["general"]) ? $context["general"] : null), "S_VL415TST_P415cTestResult_", array()) == "P")) {
            // line 522
            echo "\t\tPASS
\t\t";
        } elseif (($this->getAttribute(        // line 523
(isset($context["general"]) ? $context["general"] : null), "S_VL415TST_P415cTestResult_", array()) == "N")) {
            // line 524
            echo "\t\tN/A
\t\t";
        }
        // line 526
        echo "\t
\t</td>
\t<td></td>
</tr>

<tr>
\t<td><p>
    
Total contributions to a given individual participant, including employee deferrals and employer contributions, cannot exceed the maximum limit set forth for the plan year. For plan years ended in 2017, the limit was \$54,000.00. This excludes any \"catch-up\" contributions made by the participant.
    
    </p></td>
\t<td><p>
\t\t
\t";
        // line 539
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VL415TST_P415cTestResult_", array()) == "P")) {
            // line 540
            echo "        Your plan PASSES 415(c) 
\t";
        } else {
            // line 542
            echo "\t\tN/A
\t";
        }
        // line 544
        echo "\t\t
\t</p></td>
\t<td class=\"compliance-img\">

\t";
        // line 548
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VL415TST_P415cTestResult_", array()) == "F")) {
            // line 549
            echo "\t\t<img src=\"images/apport-icon.png\" width=\"110px\">
\t";
        } else {
            // line 551
            echo "\t\t<img src=\"images/checkbox-icon.png\" width=\"110px\">
\t";
        }
        // line 553
        echo "\t
\t
\t</td>
</tr>

</table>
";
    }

    public function getTemplateName()
    {
        return "compliance_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 553,  786 => 551,  782 => 549,  780 => 548,  774 => 544,  770 => 542,  766 => 540,  764 => 539,  749 => 526,  745 => 524,  743 => 523,  740 => 522,  738 => 521,  735 => 520,  733 => 519,  724 => 512,  715 => 504,  711 => 502,  707 => 500,  705 => 499,  699 => 495,  695 => 493,  689 => 490,  674 => 477,  670 => 475,  666 => 473,  664 => 472,  661 => 471,  659 => 470,  650 => 463,  638 => 452,  634 => 450,  630 => 448,  628 => 447,  622 => 443,  618 => 441,  612 => 437,  610 => 436,  605 => 433,  603 => 432,  597 => 428,  585 => 417,  581 => 415,  579 => 414,  576 => 413,  574 => 412,  571 => 411,  569 => 410,  560 => 403,  551 => 395,  542 => 381,  526 => 359,  515 => 341,  502 => 329,  498 => 327,  494 => 325,  492 => 324,  486 => 320,  482 => 318,  478 => 316,  476 => 315,  459 => 300,  455 => 298,  451 => 296,  448 => 295,  445 => 293,  443 => 292,  435 => 286,  426 => 278,  422 => 276,  418 => 274,  416 => 273,  410 => 269,  406 => 267,  400 => 265,  398 => 264,  393 => 263,  391 => 262,  376 => 249,  372 => 247,  370 => 246,  367 => 245,  365 => 244,  362 => 243,  360 => 242,  352 => 236,  337 => 222,  333 => 220,  329 => 218,  327 => 217,  320 => 212,  316 => 210,  312 => 208,  310 => 207,  307 => 206,  305 => 205,  302 => 204,  300 => 203,  286 => 191,  282 => 189,  278 => 187,  276 => 186,  273 => 185,  271 => 184,  268 => 183,  266 => 182,  263 => 181,  261 => 180,  255 => 176,  246 => 168,  242 => 166,  238 => 164,  236 => 163,  230 => 159,  226 => 157,  222 => 154,  218 => 152,  216 => 151,  213 => 150,  211 => 149,  208 => 148,  206 => 147,  190 => 133,  186 => 131,  184 => 130,  181 => 129,  179 => 128,  176 => 127,  174 => 126,  171 => 125,  169 => 124,  163 => 120,  153 => 111,  149 => 109,  145 => 107,  143 => 106,  137 => 102,  133 => 100,  129 => 98,  127 => 97,  124 => 96,  122 => 95,  107 => 82,  103 => 80,  101 => 79,  98 => 78,  96 => 77,  93 => 76,  91 => 75,  84 => 70,  75 => 62,  71 => 60,  67 => 58,  65 => 57,  59 => 53,  56 => 49,  42 => 30,  33 => 14,  19 => 1,);
    }
}
