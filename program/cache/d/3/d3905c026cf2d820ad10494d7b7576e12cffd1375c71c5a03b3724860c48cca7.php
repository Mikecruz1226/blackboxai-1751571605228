<?php

/* template.html */
class __TwigTemplate_d3905c026cf2d820ad10494d7b7576e12cffd1375c71c5a03b3724860c48cca7 extends Twig_Template
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
    <title>ASC Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .report-section {
            margin-bottom: 30px;
        }
        .report-header {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>";
        // line 36
        $this->loadTemplate("components/header.html", "template.html", 36)->display($context);
        // line 37
        echo "    
    <div class=\"report-header\">
        <h1>Actuarial Systems Corporation Report</h1>
        <p>Generated:";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : null), "S_VALDATE", array()), "html", null, true);
        echo "</p>
        <p>Preparer:";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["general"]) ? $context["general"] : null), "d", array()), "Preparer", array()), "html", null, true);
        echo "</p>
    </div>";
        // line 44
        if ((isset($context["employees"]) ? $context["employees"] : null)) {
            // line 45
            echo "    <div class=\"report-section\">
        <h2>Employee Data</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Entry Date</th>
                    <th>Balance</th>
                </tr>
            </thead>
            <tbody>";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) ? $context["employees"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 58
                if ( !$this->getAttribute($context["employee"], "DISCARD", array())) {
                    // line 59
                    echo "                <tr>
                    <td>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "NAME", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "PARTSTAT", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "ENTRY", array()), "html", null, true);
                    echo "</td>
                    <td>\$";
                    // line 63
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["employee"], "__ENDVALUE_TOTAL", array()), 2), "html", null, true);
                    echo "</td>
                </tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            </tbody>
        </table>
    </div>";
        }
        // line 72
        if ((isset($context["summarydata"]) ? $context["summarydata"] : null)) {
            // line 73
            echo "    <div class=\"report-section\">
        <h2>Summary Data</h2>
        <table>
            <thead>
                <tr>
                    <th>Key</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>";
            // line 83
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["summarydata"]) ? $context["summarydata"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 84
                echo "                <tr>
                    <td>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "key", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "year2", array()), "html", null, true);
                echo "</td>
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "            </tbody>
        </table>
    </div>";
        }
        // line 94
        $this->loadTemplate("components/footer.html", "template.html", 94)->display($context);
        // line 95
        echo "</body>
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
        return array (  159 => 95,  157 => 94,  152 => 89,  144 => 86,  140 => 85,  137 => 84,  133 => 83,  122 => 73,  120 => 72,  115 => 67,  106 => 63,  102 => 62,  98 => 61,  94 => 60,  91 => 59,  89 => 58,  85 => 57,  72 => 45,  70 => 44,  66 => 41,  62 => 40,  57 => 37,  55 => 36,  19 => 1,);
    }
}
