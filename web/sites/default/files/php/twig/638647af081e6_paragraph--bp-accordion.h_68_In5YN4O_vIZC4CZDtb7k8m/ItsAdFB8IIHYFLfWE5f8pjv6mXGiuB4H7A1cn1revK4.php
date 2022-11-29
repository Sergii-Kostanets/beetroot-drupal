<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/bootstrap_paragraphs/templates/paragraph--bp-accordion.html.twig */
class __TwigTemplate_91e49cfc19d75dbfa733d00d2bf9680d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "
";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_paragraphs/bootstrap-paragraphs"), "html", null, true);
        echo "
";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_paragraphs/bp-accordion"), "html", null, true);
        echo "

";
        // line 45
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_width", [], "any", false, false, true, 45))) {
            // line 46
            echo "  ";
            $context["layout_width"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_width", [], "any", false, false, true, 46)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "getString", [], "method", false, false, true, 46);
            // line 47
            echo "  ";
            $context["layout_width_classes"] = [0 => ((("paragraph--width--tiny" ==             // line 48
($context["layout_width"] ?? null))) ? ("paragraph--width--tiny") : ("")), 1 => ((("paragraph--width--narrow" ==             // line 49
($context["layout_width"] ?? null))) ? ("paragraph--width--narrow") : ("")), 2 => ((("paragraph--width--medium" ==             // line 50
($context["layout_width"] ?? null))) ? ("paragraph--width--medium") : ("")), 3 => ((("paragraph--width--wide" ==             // line 51
($context["layout_width"] ?? null))) ? ("paragraph--width--wide") : ("")), 4 => ((("paragraph--width--full" ==             // line 52
($context["layout_width"] ?? null))) ? ("paragraph--width--full") : (""))];
        }
        // line 56
        echo "
";
        // line 59
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_background", [], "any", false, false, true, 59))) {
            // line 60
            echo "  ";
            $context["layout_background"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_background", [], "any", false, false, true, 60)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null), "getString", [], "method", false, false, true, 60);
            // line 61
            echo "  ";
            $context["layout_background_classes"] = [0 => ((("paragraph--color paragraph--color--rgba-black-slight" ==             // line 62
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-black-slight") : ("")), 1 => ((("paragraph--color paragraph--color--rgba-black-light" ==             // line 63
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-black-light") : ("")), 2 => ((("paragraph--color paragraph--color--rgba-black-strong" ==             // line 64
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-black-strong") : ("")), 3 => ((("paragraph--color paragraph--color--rgba-blue-slight" ==             // line 65
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-blue-slight") : ("")), 4 => ((("paragraph--color paragraph--color--rgba-blue-light" ==             // line 66
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-blue-light") : ("")), 5 => ((("paragraph--color paragraph--color--rgba-blue-strong" ==             // line 67
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-blue-strong") : ("")), 6 => ((("paragraph--color paragraph--color--rgba-bluegrey-slight" ==             // line 68
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-bluegrey-slight") : ("")), 7 => ((("paragraph--color paragraph--color--rgba-bluegrey-light" ==             // line 69
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-bluegrey-light") : ("")), 8 => ((("paragraph--color paragraph--color--rgba-bluegrey-strong" ==             // line 70
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-bluegrey-strong") : ("")), 9 => ((("paragraph--color paragraph--color--rgba-brown-slight" ==             // line 71
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-brown-slight") : ("")), 10 => ((("paragraph--color paragraph--color--rgba-brown-light" ==             // line 72
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-brown-light") : ("")), 11 => ((("paragraph--color paragraph--color--rgba-brown-strong" ==             // line 73
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-brown-strong") : ("")), 12 => ((("paragraph--color paragraph--color--rgba-cyan-slight" ==             // line 74
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-cyan-slight") : ("")), 13 => ((("paragraph--color paragraph--color--rgba-cyan-light" ==             // line 75
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-cyan-light") : ("")), 14 => ((("paragraph--color paragraph--color--rgba-cyan-strong" ==             // line 76
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-cyan-strong") : ("")), 15 => ((("paragraph--color paragraph--color--rgba-green-slight" ==             // line 77
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-green-slight") : ("")), 16 => ((("paragraph--color paragraph--color--rgba-green-light" ==             // line 78
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-green-light") : ("")), 17 => ((("paragraph--color paragraph--color--rgba-green-strong" ==             // line 79
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-green-strong") : ("")), 18 => ((("paragraph--color paragraph--color--rgba-grey-slight" ==             // line 80
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-grey-slight") : ("")), 19 => ((("paragraph--color paragraph--color--rgba-grey-light" ==             // line 81
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-grey-light") : ("")), 20 => ((("paragraph--color paragraph--color--rgba-grey-strong" ==             // line 82
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-grey-strong") : ("")), 21 => ((("paragraph--color paragraph--color--rgba-indigo-slight" ==             // line 83
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-indigo-slight") : ("")), 22 => ((("paragraph--color paragraph--color--rgba-indigo-light" ==             // line 84
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-indigo-light") : ("")), 23 => ((("paragraph--color paragraph--color--rgba-indigo-strong" ==             // line 85
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-indigo-strong") : ("")), 24 => ((("paragraph--color paragraph--color--rgba-lime-slight" ==             // line 86
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-lime-slight") : ("")), 25 => ((("paragraph--color paragraph--color--rgba-lime-light" ==             // line 87
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-lime-light") : ("")), 26 => ((("paragraph--color paragraph--color--rgba-lime-strong" ==             // line 88
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-lime-strong") : ("")), 27 => ((("paragraph--color paragraph--color--rgba-orange-slight" ==             // line 89
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-orange-slight") : ("")), 28 => ((("paragraph--color paragraph--color--rgba-orange-light" ==             // line 90
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-orange-light") : ("")), 29 => ((("paragraph--color paragraph--color--rgba-orange-strong" ==             // line 91
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-orange-strong") : ("")), 30 => ((("paragraph--color paragraph--color--rgba-pink-slight" ==             // line 92
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-pink-slight") : ("")), 31 => ((("paragraph--color paragraph--color--rgba-pink-light" ==             // line 93
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-pink-light") : ("")), 32 => ((("paragraph--color paragraph--color--rgba-pink-strong" ==             // line 94
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-pink-strong") : ("")), 33 => ((("paragraph--color paragraph--color--rgba-purple-slight" ==             // line 95
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-purple-slight") : ("")), 34 => ((("paragraph--color paragraph--color--rgba-purple-light" ==             // line 96
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-purple-light") : ("")), 35 => ((("paragraph--color paragraph--color--rgba-purple-strong" ==             // line 97
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-purple-strong") : ("")), 36 => ((("paragraph--color paragraph--color--rgba-red-slight" ==             // line 98
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-red-slight") : ("")), 37 => ((("paragraph--color paragraph--color--rgba-red-light" ==             // line 99
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-red-light") : ("")), 38 => ((("paragraph--color paragraph--color--rgba-red-strong" ==             // line 100
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-red-strong") : ("")), 39 => ((("paragraph--color paragraph--color--rgba-stylish-slight" ==             // line 101
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-stylish-slight") : ("")), 40 => ((("paragraph--color paragraph--color--rgba-stylish-light" ==             // line 102
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-stylish-light") : ("")), 41 => ((("paragraph--color paragraph--color--rgba-stylish-strong" ==             // line 103
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-stylish-strong") : ("")), 42 => ((("paragraph--color paragraph--color--rgba-teal-slight" ==             // line 104
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-teal-slight") : ("")), 43 => ((("paragraph--color paragraph--color--rgba-teal-light" ==             // line 105
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-teal-light") : ("")), 44 => ((("paragraph--color paragraph--color--rgba-teal-strong" ==             // line 106
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-teal-strong") : ("")), 45 => ((("paragraph--color paragraph--color--rgba-white-slight" ==             // line 107
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-white-slight") : ("")), 46 => ((("paragraph--color paragraph--color--rgba-white-light" ==             // line 108
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-white-light") : ("")), 47 => ((("paragraph--color paragraph--color--rgba-white-strong" ==             // line 109
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-white-strong") : ("")), 48 => ((("paragraph--color paragraph--color--rgba-yellow-slight" ==             // line 110
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-yellow-slight") : ("")), 49 => ((("paragraph--color paragraph--color--rgba-yellow-light" ==             // line 111
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-yellow-light") : ("")), 50 => ((("paragraph--color paragraph--color--rgba-yellow-strong" ==             // line 112
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-yellow-strong") : ("")), 51 => ((("paragraph--color--transparent" ==             // line 113
($context["layout_background"] ?? null))) ? ("paragraph--color--transparent") : ("")), 52 => ((("paragraph--color paragraph--color--primary" ==             // line 114
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--primary") : ("")), 53 => ((("paragraph--color paragraph--color--secondary" ==             // line 115
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--secondary") : ("")), 54 => ((("paragraph--color paragraph--color--success" ==             // line 116
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--success") : ("")), 55 => ((("paragraph--color paragraph--color--info" ==             // line 117
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--info") : ("")), 56 => ((("paragraph--color paragraph--color--warning" ==             // line 118
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--warning") : ("")), 57 => ((("paragraph--color paragraph--color--danger" ==             // line 119
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--danger") : (""))];
        }
        // line 123
        echo "
";
        // line 127
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 129
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 129), 129, $this->source))), 2 => ((        // line 130
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 130, $this->source)))) : ("")), 3 => ("paragraph--id--" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 131
($context["paragraph"] ?? null), "id", [], "any", false, false, true, 131), "value", [], "any", false, false, true, 131), 131, $this->source)), 4 => ((        // line 132
($context["accordion_active"] ?? null)) ? ("paragraph--accordion_active--") : (""))];
        // line 135
        echo "
";
        // line 137
        $context["width_field"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_width", [], "any", false, false, true, 137), 137, $this->source));
        // line 138
        if (($context["width_field"] ?? null)) {
            // line 139
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 139, $this->source), $this->sandbox->ensureToStringAllowed(($context["layout_width_classes"] ?? null), 139, $this->source));
        }
        // line 141
        echo "
";
        // line 143
        $context["background_field"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_background", [], "any", false, false, true, 143), 143, $this->source));
        // line 144
        if (($context["background_field"] ?? null)) {
            // line 145
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 145, $this->source), $this->sandbox->ensureToStringAllowed(($context["layout_background_classes"] ?? null), 145, $this->source));
        }
        // line 147
        echo "
";
        // line 149
        $context["paragraph_id"] = ("accordion-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "any", false, false, true, 149), "value", [], "any", false, false, true, 149), 149, $this->source));
        // line 150
        echo "
";
        // line 152
        echo "<div class=\"paragraph--bp-accordion-container\">
  ";
        // line 153
        if (twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_accordion_expand", [], "any", false, false, true, 153)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null), "getString", [], "method", false, false, true, 153)) {
            // line 154
            echo "    <button type=\"button\" class=\"btn btn-primary bp-accordion-button\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Click to expand all accordions in this section."));
            echo "\">
      ";
            // line 155
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Expand All"));
            echo "
    </button>
  ";
        }
        // line 158
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 158), 158, $this->source), "html", null, true);
        echo ">
    <div class=\"paragraph__column\" id=\"";
        // line 159
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 159, $this->source), "html", null, true);
        echo "\" role=\"tablist\" aria-multiselectable=\"true\">
      ";
        // line 160
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_header", [], "any", false, false, true, 160))) {
            // line 161
            echo "        <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_header", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "</h2>
      ";
        }
        // line 163
        echo "      <div class=\"card panel panel-default\">
        ";
        // line 164
        if (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_show_indicators", [], "any", false, false, true, 164)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#items"] ?? null) : null), "getString", [], "method", false, false, true, 164)) {
            // line 165
            echo "          ";
            $context["indicator_class"] = "display";
            // line 166
            echo "        ";
        } else {
            // line 167
            echo "          ";
            $context["indicator_class"] = "normal";
            // line 168
            echo "        ";
        }
        // line 169
        echo "        ";
        // line 170
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_accordion_section", [], "any", false, false, true, 170));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 171
                echo "          ";
                // line 172
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = $context["item"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#paragraph"] ?? null) : null), "bp_show_button", [], "any", false, false, true, 172), "value", [], "any", false, false, true, 172)) {
                    // line 173
                    echo "            ";
                    $context["show_accordion"] = " in";
                    // line 174
                    echo "            ";
                    $context["aria"] = "true";
                    // line 175
                    echo "          ";
                } else {
                    // line 176
                    echo "            ";
                    $context["show_accordion"] = "";
                    // line 177
                    echo "            ";
                    $context["aria"] = "false";
                    // line 178
                    echo "          ";
                }
                // line 179
                echo "          <div class=\"card-header panel-heading\" role=\"tab\" id=\"heading-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 179, $this->source), "html", null, true);
                echo "-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\">
            <div class=\"panel-title\">
              <a class=\"";
                // line 181
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["indicator_class"] ?? null), 181, $this->source), "html", null, true);
                echo "\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 181, $this->source), "html", null, true);
                echo "\" href=\"#collapse-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 181, $this->source), "html", null, true);
                echo "-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\" aria-expanded=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["aria"] ?? null), 181, $this->source), "html", null, true);
                echo "\" aria-controls=\"collapse-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 181, $this->source), "html", null, true);
                echo "-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\">
                ";
                // line 183
                echo "                ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = $context["item"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#paragraph"] ?? null) : null), "bp_accordion_section_title", [], "any", false, false, true, 183), "value", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
                echo "
              </a>
            </div>
          </div>
          <div id=\"collapse-";
                // line 187
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 187, $this->source), "html", null, true);
                echo "-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\" class=\"card-block panel-collapse collapse";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["show_accordion"] ?? null), 187, $this->source), "html", null, true);
                echo "\" role=\"tabpanel\" aria-labelledby=\"heading-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 187, $this->source), "html", null, true);
                echo "-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\">
            ";
                // line 189
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = $context["item"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#paragraph"] ?? null) : null), "bp_accordion_section_body", [], "any", false, false, true, 189));
                foreach ($context['_seq'] as $context["body_key"] => $context["body_item"]) {
                    // line 190
                    echo "              ";
                    // line 191
                    echo "              ";
                    $context["section_body"] = $context["item"];
                    // line 192
                    echo "              ";
                    $context["lang"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["section_body"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#paragraph"] ?? null) : null), "langcode", [], "any", false, false, true, 192)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), "value", [], "any", false, false, true, 192);
                    // line 193
                    echo "              ";
                    // line 194
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["section_body"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#paragraph"] ?? null) : null), "bp_accordion_section_body", [], "any", false, false, true, 194)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["body_key"]] ?? null) : null), "entity", [], "any", false, false, true, 194), "hasTranslation", [0 => ($context["lang"] ?? null)], "method", false, false, true, 194)) {
                        // line 195
                        echo "                ";
                        // line 196
                        echo "              \t";
                        $context["section_translation"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["section_body"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#paragraph"] ?? null) : null), "bp_accordion_section_body", [], "any", false, false, true, 196)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["body_key"]] ?? null) : null), "entity", [], "any", false, false, true, 196), "getTranslation", [0 => ($context["lang"] ?? null)], "method", false, false, true, 196);
                        // line 197
                        echo "              ";
                    } else {
                        // line 198
                        echo "                ";
                        // line 199
                        echo "              \t";
                        $context["section_translation"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = ($context["section_body"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#paragraph"] ?? null) : null), "bp_accordion_section_body", [], "any", false, false, true, 199)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["body_key"]] ?? null) : null), "entity", [], "any", false, false, true, 199);
                        // line 200
                        echo "              ";
                    }
                    // line 201
                    echo "              ";
                    $context["section_body"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["section_body"] ?? null), 201, $this->source), ["#paragraph" => ($context["section_translation"] ?? null)]);
                    // line 202
                    echo "              ";
                    // line 203
                    echo "              ";
                    $context["section_body"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["section_body"] ?? null), 203, $this->source), ["#cache" => []]);
                    // line 204
                    echo "              ";
                    // line 205
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["section_body"] ?? null), 205, $this->source), "html", null, true);
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['body_key'], $context['body_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 207
                echo "          </div>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/bootstrap_paragraphs/templates/paragraph--bp-accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 209,  352 => 207,  343 => 205,  341 => 204,  338 => 203,  336 => 202,  333 => 201,  330 => 200,  327 => 199,  325 => 198,  322 => 197,  319 => 196,  317 => 195,  314 => 194,  312 => 193,  309 => 192,  306 => 191,  304 => 190,  299 => 189,  287 => 187,  279 => 183,  263 => 181,  255 => 179,  252 => 178,  249 => 177,  246 => 176,  243 => 175,  240 => 174,  237 => 173,  234 => 172,  232 => 171,  226 => 170,  224 => 169,  221 => 168,  218 => 167,  215 => 166,  212 => 165,  210 => 164,  207 => 163,  201 => 161,  199 => 160,  195 => 159,  190 => 158,  184 => 155,  179 => 154,  177 => 153,  174 => 152,  171 => 150,  169 => 149,  166 => 147,  162 => 145,  160 => 144,  158 => 143,  155 => 141,  151 => 139,  149 => 138,  147 => 137,  144 => 135,  142 => 132,  141 => 131,  140 => 130,  139 => 129,  138 => 127,  135 => 123,  132 => 119,  131 => 118,  130 => 117,  129 => 116,  128 => 115,  127 => 114,  126 => 113,  125 => 112,  124 => 111,  123 => 110,  122 => 109,  121 => 108,  120 => 107,  119 => 106,  118 => 105,  117 => 104,  116 => 103,  115 => 102,  114 => 101,  113 => 100,  112 => 99,  111 => 98,  110 => 97,  109 => 96,  108 => 95,  107 => 94,  106 => 93,  105 => 92,  104 => 91,  103 => 90,  102 => 89,  101 => 88,  100 => 87,  99 => 86,  98 => 85,  97 => 84,  96 => 83,  95 => 82,  94 => 81,  93 => 80,  92 => 79,  91 => 78,  90 => 77,  89 => 76,  88 => 75,  87 => 74,  86 => 73,  85 => 72,  84 => 71,  83 => 70,  82 => 69,  81 => 68,  80 => 67,  79 => 66,  78 => 65,  77 => 64,  76 => 63,  75 => 62,  73 => 61,  70 => 60,  68 => 59,  65 => 56,  62 => 52,  61 => 51,  60 => 50,  59 => 49,  58 => 48,  56 => 47,  53 => 46,  51 => 45,  46 => 41,  42 => 40,  39 => 39,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Paragraphs template for displaying an Accordion (Collapse).
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   - id: The paragraph ID.
 *   - bundle: The type of the paragraph, for example, \"image\" or \"text\".
 *   - authorid: The user ID of the paragraph author.
 *   - createdtime: Formatted creation date. Preprocess functions can
 *     reformat it by calling format_date() with the desired parameters on
 *     \$variables['paragraph']->getCreatedTime().
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}

{{ attach_library('bootstrap_paragraphs/bootstrap-paragraphs') }}
{{ attach_library('bootstrap_paragraphs/bp-accordion') }}

{# Renders Width field. #}
{# Sets class name from values in database. #}
{% if content.bp_width|render %}
  {% set layout_width = content.bp_width['#items'].getString() %}
  {% set layout_width_classes = [
    'paragraph--width--tiny' == layout_width ? 'paragraph--width--tiny',
    'paragraph--width--narrow' == layout_width ? 'paragraph--width--narrow',
    'paragraph--width--medium' == layout_width ? 'paragraph--width--medium',
    'paragraph--width--wide' == layout_width ? 'paragraph--width--wide',
    'paragraph--width--full' == layout_width ? 'paragraph--width--full',
  ]
  %}
{% endif %}

{# Renders Background field. #}
{# Sets class name from values in database. #}
{% if content.bp_background|render %}
  {% set layout_background = content.bp_background['#items'].getString() %}
  {% set layout_background_classes = [
    'paragraph--color paragraph--color--rgba-black-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-black-slight',
    'paragraph--color paragraph--color--rgba-black-light' == layout_background ? 'paragraph--color paragraph--color--rgba-black-light',
    'paragraph--color paragraph--color--rgba-black-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-black-strong',
    'paragraph--color paragraph--color--rgba-blue-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-blue-slight',
    'paragraph--color paragraph--color--rgba-blue-light' == layout_background ? 'paragraph--color paragraph--color--rgba-blue-light',
    'paragraph--color paragraph--color--rgba-blue-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-blue-strong',
    'paragraph--color paragraph--color--rgba-bluegrey-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-bluegrey-slight',
    'paragraph--color paragraph--color--rgba-bluegrey-light' == layout_background ? 'paragraph--color paragraph--color--rgba-bluegrey-light',
    'paragraph--color paragraph--color--rgba-bluegrey-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-bluegrey-strong',
    'paragraph--color paragraph--color--rgba-brown-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-brown-slight',
    'paragraph--color paragraph--color--rgba-brown-light' == layout_background ? 'paragraph--color paragraph--color--rgba-brown-light',
    'paragraph--color paragraph--color--rgba-brown-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-brown-strong',
    'paragraph--color paragraph--color--rgba-cyan-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-cyan-slight',
    'paragraph--color paragraph--color--rgba-cyan-light' == layout_background ? 'paragraph--color paragraph--color--rgba-cyan-light',
    'paragraph--color paragraph--color--rgba-cyan-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-cyan-strong',
    'paragraph--color paragraph--color--rgba-green-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-green-slight',
    'paragraph--color paragraph--color--rgba-green-light' == layout_background ? 'paragraph--color paragraph--color--rgba-green-light',
    'paragraph--color paragraph--color--rgba-green-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-green-strong',
    'paragraph--color paragraph--color--rgba-grey-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-grey-slight',
    'paragraph--color paragraph--color--rgba-grey-light' == layout_background ? 'paragraph--color paragraph--color--rgba-grey-light',
    'paragraph--color paragraph--color--rgba-grey-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-grey-strong',
    'paragraph--color paragraph--color--rgba-indigo-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-indigo-slight',
    'paragraph--color paragraph--color--rgba-indigo-light' == layout_background ? 'paragraph--color paragraph--color--rgba-indigo-light',
    'paragraph--color paragraph--color--rgba-indigo-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-indigo-strong',
    'paragraph--color paragraph--color--rgba-lime-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-lime-slight',
    'paragraph--color paragraph--color--rgba-lime-light' == layout_background ? 'paragraph--color paragraph--color--rgba-lime-light',
    'paragraph--color paragraph--color--rgba-lime-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-lime-strong',
    'paragraph--color paragraph--color--rgba-orange-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-orange-slight',
    'paragraph--color paragraph--color--rgba-orange-light' == layout_background ? 'paragraph--color paragraph--color--rgba-orange-light',
    'paragraph--color paragraph--color--rgba-orange-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-orange-strong',
    'paragraph--color paragraph--color--rgba-pink-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-pink-slight',
    'paragraph--color paragraph--color--rgba-pink-light' == layout_background ? 'paragraph--color paragraph--color--rgba-pink-light',
    'paragraph--color paragraph--color--rgba-pink-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-pink-strong',
    'paragraph--color paragraph--color--rgba-purple-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-purple-slight',
    'paragraph--color paragraph--color--rgba-purple-light' == layout_background ? 'paragraph--color paragraph--color--rgba-purple-light',
    'paragraph--color paragraph--color--rgba-purple-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-purple-strong',
    'paragraph--color paragraph--color--rgba-red-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-red-slight',
    'paragraph--color paragraph--color--rgba-red-light' == layout_background ? 'paragraph--color paragraph--color--rgba-red-light',
    'paragraph--color paragraph--color--rgba-red-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-red-strong',
    'paragraph--color paragraph--color--rgba-stylish-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-stylish-slight',
    'paragraph--color paragraph--color--rgba-stylish-light' == layout_background ? 'paragraph--color paragraph--color--rgba-stylish-light',
    'paragraph--color paragraph--color--rgba-stylish-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-stylish-strong',
    'paragraph--color paragraph--color--rgba-teal-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-teal-slight',
    'paragraph--color paragraph--color--rgba-teal-light' == layout_background ? 'paragraph--color paragraph--color--rgba-teal-light',
    'paragraph--color paragraph--color--rgba-teal-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-teal-strong',
    'paragraph--color paragraph--color--rgba-white-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-white-slight',
    'paragraph--color paragraph--color--rgba-white-light' == layout_background ? 'paragraph--color paragraph--color--rgba-white-light',
    'paragraph--color paragraph--color--rgba-white-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-white-strong',
    'paragraph--color paragraph--color--rgba-yellow-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-yellow-slight',
    'paragraph--color paragraph--color--rgba-yellow-light' == layout_background ? 'paragraph--color paragraph--color--rgba-yellow-light',
    'paragraph--color paragraph--color--rgba-yellow-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-yellow-strong',
    'paragraph--color--transparent' == layout_background ? 'paragraph--color--transparent',
    'paragraph--color paragraph--color--primary' == layout_background ? 'paragraph--color paragraph--color--primary',
    'paragraph--color paragraph--color--secondary' == layout_background ? 'paragraph--color paragraph--color--secondary',
    'paragraph--color paragraph--color--success' == layout_background ? 'paragraph--color paragraph--color--success',
    'paragraph--color paragraph--color--info' == layout_background ? 'paragraph--color paragraph--color--info',
    'paragraph--color paragraph--color--warning' == layout_background ? 'paragraph--color paragraph--color--warning',
    'paragraph--color paragraph--color--danger' == layout_background ? 'paragraph--color paragraph--color--danger',
  ]
  %}
{% endif %}

{# The template default set classes. #}
{# Sets Paragraph ID as class. #}
{%
set classes = [
'paragraph',
'paragraph--type--' ~ paragraph.bundle|clean_class,
view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
'paragraph--id--' ~ paragraph.id.value,
accordion_active ? 'paragraph--accordion_active--',
]
%}

{# Merges Width field with classes. #}
{% set width_field = content.bp_width|render %}
{% if width_field %}
  {% set classes = classes|merge(layout_width_classes) %}
{% endif %}

{# Merges Background field with classes. #}
{% set background_field = content.bp_background|render %}
{% if background_field %}
  {% set classes = classes|merge(layout_background_classes) %}
{% endif %}

{# Sets Unique ID for Accordion from Paragraph ID. #}
{% set paragraph_id = 'accordion-' ~ paragraph.id.value %}

{# Prints Accordion template. #}
<div class=\"paragraph--bp-accordion-container\">
  {% if content.bp_accordion_expand['#items'].getString() %}
    <button type=\"button\" class=\"btn btn-primary bp-accordion-button\" title=\"{{ 'Click to expand all accordions in this section.'|trans }}\">
      {{ 'Expand All'|trans }}
    </button>
  {% endif %}
  <div{{ attributes.addClass(classes) }}>
    <div class=\"paragraph__column\" id=\"{{ paragraph_id }}\" role=\"tablist\" aria-multiselectable=\"true\">
      {% if content.bp_header|render %}
        <h2>{{ content.bp_header }}</h2>
      {% endif %}
      <div class=\"card panel panel-default\">
        {% if content.bp_show_indicators['#items'].getString() %}
          {% set indicator_class = 'display' %}
        {% else %}
          {% set indicator_class = 'normal' %}
        {%  endif %}
        {# Loop through all of the accordion sections. #}
        {% for key, item in content.bp_accordion_section if key|first != '#' %}
          {# Set variables if accordion should be shown. #}
          {% if item['#paragraph'].bp_show_button.value %}
            {% set show_accordion = ' in' %}
            {% set aria = 'true' %}
          {% else %}
            {% set show_accordion = '' %}
            {% set aria = 'false' %}
          {% endif %}
          <div class=\"card-header panel-heading\" role=\"tab\" id=\"heading-{{ paragraph_id }}-{{ key + 1 }}\">
            <div class=\"panel-title\">
              <a class=\"{{ (indicator_class) }}\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#{{ paragraph_id }}\" href=\"#collapse-{{ paragraph_id }}-{{ key + 1 }}\" aria-expanded=\"{{ aria }}\" aria-controls=\"collapse-{{ paragraph_id }}-{{ key + 1 }}\">
                {# Print the accordion section title. #}
                {{ item['#paragraph'].bp_accordion_section_title.value }}
              </a>
            </div>
          </div>
          <div id=\"collapse-{{ paragraph_id }}-{{ key + 1 }}\" class=\"card-block panel-collapse collapse{{ show_accordion }}\" role=\"tabpanel\" aria-labelledby=\"heading-{{ paragraph_id }}-{{ key + 1 }}\">
            {# Loop through all of the accordion section bodies. #}
            {% for body_key, body_item in item['#paragraph'].bp_accordion_section_body %}
              {# Use the same render array as item and set the '#paragraph'. #}
              {% set section_body = item %}
              {% set lang = section_body['#paragraph'].langcode[0].value %}
              {# Check if a translation exists #}
              {% if section_body['#paragraph'].bp_accordion_section_body[body_key].entity.hasTranslation(lang) %}
                {# Load the entity for the current translation #}
              \t{% set section_translation= section_body['#paragraph'].bp_accordion_section_body[body_key].entity.getTranslation(lang) %}
              {% else %}
                {# Load the source entity #}
              \t{% set section_translation= section_body['#paragraph'].bp_accordion_section_body[body_key].entity %}
              {% endif %}
              {% set section_body = section_body|merge({'#paragraph': section_translation}) %}
              {# Remove the cache keys so it doesn't repeat the first value. #}
              {% set section_body = section_body|merge({'#cache': {}}) %}
              {# Print the compiled section body. #}
              {{ section_body }}
            {% endfor %}
          </div>
        {% endfor %}
      </div>
    </div>
  </div>
</div>
", "modules/contrib/bootstrap_paragraphs/templates/paragraph--bp-accordion.html.twig", "/var/www/web/modules/contrib/bootstrap_paragraphs/templates/paragraph--bp-accordion.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 45, "set" => 46, "for" => 170);
        static $filters = array("escape" => 40, "render" => 45, "clean_class" => 129, "merge" => 139, "trans" => 154, "first" => 170);
        static $functions = array("attach_library" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'render', 'clean_class', 'merge', 'trans', 'first'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
