<?php

/* summary.html */
class __TwigTemplate_ef7146921298b3a6ea2367ed35b2d5365d37bcda2251cd709a4b99c1942da8b3 extends Twig_Template
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
.line-heading {
\tfloat: left;
\tfont-weight: bold;
\tdisplay: inline;
\twidth: 260px;

}

.line-items{
\tmargin-left: 280px;
}

</style>
<h1>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_PLANNAM2", array()), "html", null, true);
        echo "</h1>

<h2>Summary of Major Plan Provisions</h2>

<div>


<div class=\"line-heading\">
Plan Effective Date 
</div>

<ul class=\"line-items\">
\t<li>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__S_PLEFDATE_LONG", array()), "html", null, true);
        echo "</li>
</ul>

<div class=\"line-heading\">
Plan Year 
</div>

<ul class=\"line-items\">
\t<li>From ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AS_OF_DATE_BEGIN_LONG", array()), "html", null, true);
        echo " to ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "__AS_OF_DATE_END_LONG", array()), "html", null, true);
        echo "</li>
</ul>

<div class=\"line-heading\">
    Primary Eligibility 
</div>

<ul class=\"line-items\">
<li>Applicable to the following source(s):
\t<ul><li>
\t\t
";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "aslistString", array()), "html", null, true);
        echo "
";
        // line 50
        echo "
\t</li></ul></li>

<li>All employees not excluded by class are eligible to enter on the entry date coincident with or next following completion of the following requirements:
\t<ul>
\t\t";
        // line 55
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_ELMINSVY_PPrimary_", array()) != 0)) {
            // line 56
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_ELMINSVY_PPrimary_", array()), "html", null, true);
            echo " year of service</li>
\t\t";
        }
        // line 58
        echo "
\t\t";
        // line 59
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_ELMINSVM_PPrimary_", array()) != 0)) {
            // line 60
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_ELMINSVM_PPrimary_", array()), "html", null, true);
            echo " months of service</li>
\t\t";
        }
        // line 62
        echo "
\t\t<li>Minimum age ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_ELMINAGY_PPrimary_", array()), "html", null, true);
        echo "</li>
\t\t<li>Minimum hours ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_ELHOURS_PPrimary_", array()), "html", null, true);
        echo "</li>
        <li>Excluded Groups: 
        
        ";
        // line 67
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_ELEXCGRP", array()) == 3)) {
            echo "\t\t
        
        ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_ELEXCWD1", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_ELEXCWD2", array()), "html", null, true);
            echo "
        
        ";
        } elseif (($this->getAttribute(        // line 71
(isset($context["general"]) ? $context["general"] : null), "S_ELEXCGRP", array()) == 2)) {
            echo "\t\t
        
        Employees covered by a collective bargaining unit under which pension benefits were a subject of good faith bargaining are excluded by class   

        ";
        } elseif (($this->getAttribute(        // line 75
(isset($context["general"]) ? $context["general"] : null), "S_ELEXCGRP", array()) == 1)) {
            echo "\t\t
        
        None

        ";
        }
        // line 80
        echo "
        </li>
\t\t<li>Entry date(s): 
\t\t
        ";
        // line 84
        if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_ELENTCTL_PPrimary_", array()) == 1)) {
            echo "\t\t
January 1st
\t\t";
        } elseif (($this->getAttribute(        // line 86
(isset($context["general"]) ? $context["general"] : null), "S_ELENTCTL_PPrimary_", array()) == 2)) {
            echo "\t\t
December 31st
\t\t";
        } elseif (($this->getAttribute(        // line 88
(isset($context["general"]) ? $context["general"] : null), "S_ELENTCTL_PPrimary_", array()) == 3)) {
            echo "\t\t
January 1st and July 1st
\t\t";
        } elseif (($this->getAttribute(        // line 90
(isset($context["general"]) ? $context["general"] : null), "S_ELENTCTL_PPrimary_", array()) == 4)) {
            echo "\t\t
December 31st and June 30th
\t\t";
        } elseif (($this->getAttribute(        // line 92
(isset($context["general"]) ? $context["general"] : null), "S_ELENTCTL_PPrimary_", array()) == 5)) {
            echo "\t\t
January 1st, February 1st, March 1st, April 1st, May 1st, June 1st, July 1st, August 1st, September 1st, October 1st, November 1st, December 1st
        ";
        } elseif (($this->getAttribute(        // line 94
(isset($context["general"]) ? $context["general"] : null), "S_ELENTCTL_PPrimary_", array()) == 6)) {
            echo "\t
January 1st
        ";
        } elseif (($this->getAttribute(        // line 96
(isset($context["general"]) ? $context["general"] : null), "S_ELENTCTL_PPrimary_", array()) == 7)) {
            echo "\t\t
December 31st\t
        ";
        } elseif (($this->getAttribute(        // line 98
(isset($context["general"]) ? $context["general"] : null), "S_ELENTCTL_PPrimary_", array()) == 8)) {
            echo "\t\t
January 1st\t
        ";
        } elseif (($this->getAttribute(        // line 100
(isset($context["general"]) ? $context["general"] : null), "S_ELENTCTL_PPrimary_", array()) == 9)) {
            echo "\t\t
January 1st and July 1st\t
        ";
        } elseif (($this->getAttribute(        // line 102
(isset($context["general"]) ? $context["general"] : null), "S_ELENTCTL_PPrimary_", array()) == "A")) {
            echo "\t\t
December 31st
        ";
        } elseif (($this->getAttribute(        // line 104
(isset($context["general"]) ? $context["general"] : null), "S_ELENTCTL_PPrimary_", array()) == "B")) {
            // line 105
            echo "Date Eligible
        ";
        } elseif (($this->getAttribute(        // line 106
(isset($context["general"]) ? $context["general"] : null), "S_ELENTCTL_PPrimary_", array()) == "C")) {
            // line 107
            echo "January 31st, February 28th, March 31st, April 30th, May 31st, June 30th, July 31st, August 31st, September 30th, October 31st, November 30th, December 31st.\t
        ";
        } elseif (($this->getAttribute(        // line 108
(isset($context["general"]) ? $context["general"] : null), "S_ELENTCTL_PPrimary_", array()) == "D")) {
            // line 109
            echo "January 1st, April 1st, July 1st, October 1st
\t\t";
        }
        // line 111
        echo "\t
\t
\t</li></ul></li>
</ul>

<div class=\"line-heading\">
Normal Retirement Age 
</div>

<ul class=\"line-items\">
<li>All participants are eligible to retire with their full retirement benefit on the later of the following:
<!-- <ul><li>Attainment of age ";
        // line 122
        echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_NRMINAGE", array()), 0, "floor"), "html", null, true);
        echo "</li> -->
<ul><li>Attainment of age ";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_NRMINAGE", array()), "html", null, true);
        echo "</li>

    ";
        // line 125
        if ((($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_NRMINSYR", array()) == 0) && ($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_NRMINPYR", array()) == 0))) {
            // line 126
            echo "
    ";
        } elseif (($this->getAttribute(        // line 127
(isset($context["general"]) ? $context["general"] : null), "S_NRMINSYR", array()) != 0)) {
            // line 128
            echo "
    <li>and Completion of ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_NRMINSYR", array()), "html", null, true);
            echo " years of service</li>

    ";
        } elseif (($this->getAttribute(        // line 131
(isset($context["general"]) ? $context["general"] : null), "S_NRMINPYR", array()) != 0)) {
            // line 132
            echo "
    <li>and Completion of ";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_NRMINPYR", array()), "html", null, true);
            echo " years of participation</li>
    
    ";
        }
        // line 136
        echo "</ul></li>

</ul>

<div class=\"line-heading\">
Normal Retirement Benefit 
</div>

<ul class=\"line-items\">
<li>Upon normal retirement each participant will be entitled to the full value of his account.</li>
</ul>

<div class=\"line-heading\">
Death Benefit
</div>

<ul class=\"line-items\">
<li>The value of the participant's account.</li>
</ul>

<div class=\"line-heading\">
Termination Benefit 
</div>

<ul class=\"line-items\">

<li>A participant's account balance maintained from employee-derived contributions, and/or Safe Harbor contributions is 100% vested and nonforfeitable at all times.</li>



";
        // line 166
        if ((($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "_SNAME_2", array()) == "SOURCE #2") && ($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "_SNAME_3", array()) == "SOURCE #3"))) {
            echo " ";
        } else {
            // line 167
            echo "
    <li>A participant shall be entitled to a portion of his account balance derived from Employer Contributions in accordance with the following vesting schedule:

        ";
            // line 170
            if (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "VESTING", array()), $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VSSCHD_PPrimaryVestSch_", array()), array(), "array") == "")) {
                // line 171
                echo "        <ul><li><span style=\"background-color: red; color: white;\">A definition for \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VSSCHD_PPrimaryVestSch_", array()), "html", null, true);
                echo "\" doesn't exist, please add it to your config.ini file</span></li></ul>
        ";
            } else {
                // line 173
                echo "        <ul><li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "VESTING", array()), $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VSSCHD_PPrimaryVestSch_", array()), array(), "array"), "html", null, true);
                echo "</li></ul>
        ";
            }
            // line 175
            echo "        ";
            // line 285
            echo "
    </li>
";
        }
        // line 288
        echo "
</ul>


<div class=\"line-heading\">
Company Contribution
</div>

<ul class=\"line-items\">
<li>

";
        // line 300
        echo "
";
        // line 301
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "aslistString", array()), "html", null, true);
        echo "
";
        // line 306
        echo "</li>
</ul>

<div class=\"line-heading\">
Contributions 
</div>

<ul class=\"line-items\">

    ";
        // line 315
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "d", array()), "Other Company Contributions", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["contrib"]) {
            // line 316
            echo "
    <li>";
            // line 317
            echo twig_escape_filter($this->env, $context["contrib"], "html", null, true);
            echo ":<ul>
        <li>

\t\t";
            // line 320
            if (($context["contrib"] == "Safe Harbor Match Basic")) {
                // line 321
                echo "            This year the company will contribute an amount equal to 100% of employee contributions up to 3%, plus 50% of employee contributions between 3% and 5%
        ";
            }
            // line 323
            echo "\t\t
        ";
            // line 324
            if (($context["contrib"] == "Safe Harbor Match Enhanced")) {
                // line 325
                echo "
            ";
                // line 326
                if (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "d", array()), "Safe harbor March Enhanced", array(), "array") == "up to 4%")) {
                    // line 327
                    echo "                This year the company will contribute an amount equal to 100% of employee contributions up to 4%
            ";
                }
                // line 329
                echo "
            ";
                // line 330
                if (($this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "d", array()), "Safe harbor March Enhanced", array(), "array") == "up to 6%")) {
                    // line 331
                    echo "                This year the company will contribute an amount equal to 100% of employee contributions up to 6%
            ";
                }
                // line 333
                echo "

        ";
            }
            // line 336
            echo "\t\t
        ";
            // line 337
            if (($context["contrib"] == "Safe Harbor Non-Elective")) {
                // line 338
                echo "            This year the company will contribute an amount equal to 3% of all participants' compensation
        ";
            }
            // line 340
            echo "\t\t
        ";
            // line 341
            if (($context["contrib"] == "Employer Contribution New Comparability")) {
                // line 342
                echo "            This year the contribution will be allocated in accordance with the contribution defined for each group
            
            ";
                // line 345
                echo "<ul>

        ";
                // line 347
                if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "_Type8Option", array()) == "F-Formula")) {
                    // line 348
                    echo "            ";
                    if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8AMT1", array()) != "")) {
                        // line 349
                        echo "                <li>Group 1: \$";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8AMT1", array()), "html", null, true);
                        echo "</li>
            ";
                    } else {
                        // line 351
                        echo "                <li>Group 1: ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT1", array()), "html", null, true);
                        echo "% of pay</li>
            ";
                    }
                    // line 353
                    echo "        ";
                } else {
                    // line 354
                    echo "            <li>Group 1: the maximum contribution allowable under Code Section 415 </li>  
        ";
                }
                // line 356
                echo "
    ";
                // line 362
                echo "
    ";
                // line 363
                if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT2", array()) != "0.00")) {
                    // line 364
                    echo "        <li>Group 2: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT2", array()), "html", null, true);
                    echo "% of pay</li>
    ";
                }
                // line 366
                echo "
    ";
                // line 367
                if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT3", array()) != "0.00")) {
                    // line 368
                    echo "        <li>Group 3: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT3", array()), "html", null, true);
                    echo "% of pay</li>
    ";
                }
                // line 370
                echo "
    ";
                // line 371
                if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT4", array()) != "0.00")) {
                    // line 372
                    echo "        <li>Group 4: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT4", array()), "html", null, true);
                    echo "% of pay</li>
    ";
                }
                // line 374
                echo "
    ";
                // line 375
                if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT5", array()) != "0.00")) {
                    // line 376
                    echo "        <li>Group 5: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT5", array()), "html", null, true);
                    echo "% of pay</li>
    ";
                }
                // line 378
                echo "
    ";
                // line 379
                if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT6", array()) != "0.00")) {
                    // line 380
                    echo "        <li>Group 6: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT6", array()), "html", null, true);
                    echo "% of pay</li>
    ";
                }
                // line 382
                echo "
    ";
                // line 383
                if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT7", array()) != "0.00")) {
                    // line 384
                    echo "        <li>Group 7: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT7", array()), "html", null, true);
                    echo "% of pay</li>
    ";
                }
                // line 386
                echo "
    ";
                // line 387
                if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT8", array()) != "0.00")) {
                    // line 388
                    echo "        <li>Group 8: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT8", array()), "html", null, true);
                    echo "% of pay</li>
    ";
                }
                // line 390
                echo "
    ";
                // line 391
                if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT9", array()) != "0.00")) {
                    // line 392
                    echo "        <li>Group 9: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCT9", array()), "html", null, true);
                    echo "% of pay</li>
    ";
                }
                // line 394
                echo "
    ";
                // line 395
                if (($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCTA", array()) != "0.00")) {
                    // line 396
                    echo "        <li>Group 10: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_S2F8PCTA", array()), "html", null, true);
                    echo "% of pay</li>
    ";
                }
                // line 398
                echo "
</ul>

";
                // line 402
                echo "


        ";
            }
            // line 406
            echo "\t\t
        ";
            // line 407
            if (($context["contrib"] == "Employer Contribution Integrated")) {
                // line 408
                echo "            This year the contribution will be allocated based on 4-tiered integration
        ";
            }
            // line 410
            echo "\t\t
        ";
            // line 411
            if (($context["contrib"] == "Employer Contribution Pro Rata")) {
                // line 412
                echo "            This year the contribution will be allocated evenly in proportion to compensation
        ";
            }
            // line 414
            echo "
        ";
            // line 415
            if (($context["contrib"] == "Employer Discretionary Match")) {
                // line 416
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "d", array()), "Match Formula", array(), "array"), "html", null, true);
                echo "
        ";
            }
            // line 418
            echo "
        ";
            // line 419
            if (($context["contrib"] == "Employee Deferral")) {
                // line 420
                echo "\t        Each year each participant will have the right to elect to defer a portion of his compensation which will then be contributed on his behalf to the plan.
        ";
            }
            // line 422
            echo "



        </li>
    </ul>
    
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrib'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "

";
        // line 452
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "summary.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  622 => 452,  618 => 431,  604 => 422,  600 => 420,  598 => 419,  595 => 418,  589 => 416,  587 => 415,  584 => 414,  580 => 412,  578 => 411,  575 => 410,  571 => 408,  569 => 407,  566 => 406,  560 => 402,  555 => 398,  549 => 396,  547 => 395,  544 => 394,  538 => 392,  536 => 391,  533 => 390,  527 => 388,  525 => 387,  522 => 386,  516 => 384,  514 => 383,  511 => 382,  505 => 380,  503 => 379,  500 => 378,  494 => 376,  492 => 375,  489 => 374,  483 => 372,  481 => 371,  478 => 370,  472 => 368,  470 => 367,  467 => 366,  461 => 364,  459 => 363,  456 => 362,  453 => 356,  449 => 354,  446 => 353,  440 => 351,  434 => 349,  431 => 348,  429 => 347,  425 => 345,  421 => 342,  419 => 341,  416 => 340,  412 => 338,  410 => 337,  407 => 336,  402 => 333,  398 => 331,  396 => 330,  393 => 329,  389 => 327,  387 => 326,  384 => 325,  382 => 324,  379 => 323,  375 => 321,  373 => 320,  367 => 317,  364 => 316,  360 => 315,  349 => 306,  345 => 301,  342 => 300,  329 => 288,  324 => 285,  322 => 175,  316 => 173,  310 => 171,  308 => 170,  303 => 167,  299 => 166,  267 => 136,  261 => 133,  258 => 132,  256 => 131,  251 => 129,  248 => 128,  246 => 127,  243 => 126,  241 => 125,  236 => 123,  232 => 122,  219 => 111,  215 => 109,  213 => 108,  210 => 107,  208 => 106,  205 => 105,  203 => 104,  198 => 102,  193 => 100,  188 => 98,  183 => 96,  178 => 94,  173 => 92,  168 => 90,  163 => 88,  158 => 86,  153 => 84,  147 => 80,  139 => 75,  132 => 71,  125 => 69,  120 => 67,  114 => 64,  110 => 63,  107 => 62,  101 => 60,  99 => 59,  96 => 58,  90 => 56,  88 => 55,  81 => 50,  77 => 46,  61 => 35,  50 => 27,  35 => 15,  19 => 1,);
    }
}
