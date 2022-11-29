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

/* modules/contrib/bootstrap_paragraphs/templates/paragraph--bp-tabs.html.twig */
class __TwigTemplate_f0a3c82ca7fbaa94454eaf0b7dea714b extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_paragraphs/bp-tabs"), "html", null, true);
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
($context["paragraph"] ?? null), "id", [], "any", false, false, true, 131), "value", [], "any", false, false, true, 131), 131, $this->source))];
        // line 134
        echo "
";
        // line 136
        $context["width_field"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_width", [], "any", false, false, true, 136), 136, $this->source));
        // line 137
        if (($context["width_field"] ?? null)) {
            // line 138
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 138, $this->source), $this->sandbox->ensureToStringAllowed(($context["layout_width_classes"] ?? null), 138, $this->source));
        }
        // line 140
        echo "
";
        // line 142
        $context["background_field"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_background", [], "any", false, false, true, 142), 142, $this->source));
        // line 143
        if (($context["background_field"] ?? null)) {
            // line 144
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 144, $this->source), $this->sandbox->ensureToStringAllowed(($context["layout_background_classes"] ?? null), 144, $this->source));
        }
        // line 146
        echo "
";
        // line 148
        $context["paragraph_id"] = ("tab-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "any", false, false, true, 148), "value", [], "any", false, false, true, 148), 148, $this->source));
        // line 149
        echo "
";
        // line 151
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 151), "setAttribute", [0 => "id", 1 => ($context["paragraph_id"] ?? null)], "method", false, false, true, 151), 151, $this->source), "html", null, true);
        echo " role=\"tablist\" aria-multiselectable=\"true\">
  <div class=\"paragraph__column\">
    ";
        // line 153
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_header", [], "any", false, false, true, 153))) {
            // line 154
            echo "      <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_header", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "</h2>
    ";
        }
        // line 156
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
      ";
        // line 158
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_tab_section", [], "any", false, false, true, 158));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 159
                echo "        <li role=\"presentation\" class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 159)) {
                    echo "active";
                }
                echo "\"><a href=\"#";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 159, $this->source), "html", null, true);
                echo "-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\" aria-controls=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = $context["item"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#paragraph"] ?? null) : null), "bp_tab_section_title", [], "any", false, false, true, 159), "value", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
                echo "\" role=\"tab\" data-toggle=\"tab\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = $context["item"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#paragraph"] ?? null) : null), "bp_tab_section_title", [], "any", false, false, true, 159), "value", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
                echo "</a></li>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "    </ul>
    <div class=\"tab-content\">
      ";
        // line 164
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bp_tab_section", [], "any", false, false, true, 164));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 165
                echo "        <div role=\"tabpanel\" class=\"tab-pane";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 165)) {
                    echo " active";
                }
                echo "\" id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_id"] ?? null), 165, $this->source), "html", null, true);
                echo "-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\">
          ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = $context["item"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#paragraph"] ?? null) : null), "bp_tab_section_body", [], "any", false, false, true, 166));
                foreach ($context['_seq'] as $context["body_key"] => $context["body_item"]) {
                    // line 167
                    echo "            ";
                    // line 168
                    echo "            ";
                    $context["section_body"] = $context["item"];
                    // line 169
                    echo "            ";
                    $context["lang"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["section_body"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#paragraph"] ?? null) : null), "langcode", [], "any", false, false, true, 169)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), "value", [], "any", false, false, true, 169);
                    // line 170
                    echo "            ";
                    // line 171
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["section_body"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#paragraph"] ?? null) : null), "bp_tab_section_body", [], "any", false, false, true, 171)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["body_key"]] ?? null) : null), "entity", [], "any", false, false, true, 171), "hasTranslation", [0 => ($context["lang"] ?? null)], "method", false, false, true, 171)) {
                        // line 172
                        echo "              ";
                        // line 173
                        echo "              ";
                        $context["section_translation"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["section_body"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#paragraph"] ?? null) : null), "bp_tab_section_body", [], "any", false, false, true, 173)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["body_key"]] ?? null) : null), "entity", [], "any", false, false, true, 173), "getTranslation", [0 => ($context["lang"] ?? null)], "method", false, false, true, 173);
                        // line 174
                        echo "            ";
                    } else {
                        // line 175
                        echo "              ";
                        // line 176
                        echo "              ";
                        $context["section_translation"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["section_body"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#paragraph"] ?? null) : null), "bp_tab_section_body", [], "any", false, false, true, 176)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["body_key"]] ?? null) : null), "entity", [], "any", false, false, true, 176);
                        // line 177
                        echo "            ";
                    }
                    // line 178
                    echo "            ";
                    $context["section_body"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["section_body"] ?? null), 178, $this->source), ["#paragraph" => ($context["section_translation"] ?? null)]);
                    // line 179
                    echo "            ";
                    // line 180
                    echo "            ";
                    $context["section_body"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["section_body"] ?? null), 180, $this->source), ["#cache" => []]);
                    // line 181
                    echo "            ";
                    // line 182
                    echo "            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["section_body"] ?? null), 182, $this->source), "html", null, true);
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['body_key'], $context['body_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "        </div>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/bootstrap_paragraphs/templates/paragraph--bp-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 186,  304 => 184,  295 => 182,  293 => 181,  290 => 180,  288 => 179,  285 => 178,  282 => 177,  279 => 176,  277 => 175,  274 => 174,  271 => 173,  269 => 172,  266 => 171,  264 => 170,  261 => 169,  258 => 168,  256 => 167,  252 => 166,  241 => 165,  229 => 164,  225 => 161,  202 => 159,  190 => 158,  187 => 156,  181 => 154,  179 => 153,  173 => 151,  170 => 149,  168 => 148,  165 => 146,  161 => 144,  159 => 143,  157 => 142,  154 => 140,  150 => 138,  148 => 137,  146 => 136,  143 => 134,  141 => 131,  140 => 130,  139 => 129,  138 => 127,  135 => 123,  132 => 119,  131 => 118,  130 => 117,  129 => 116,  128 => 115,  127 => 114,  126 => 113,  125 => 112,  124 => 111,  123 => 110,  122 => 109,  121 => 108,  120 => 107,  119 => 106,  118 => 105,  117 => 104,  116 => 103,  115 => 102,  114 => 101,  113 => 100,  112 => 99,  111 => 98,  110 => 97,  109 => 96,  108 => 95,  107 => 94,  106 => 93,  105 => 92,  104 => 91,  103 => 90,  102 => 89,  101 => 88,  100 => 87,  99 => 86,  98 => 85,  97 => 84,  96 => 83,  95 => 82,  94 => 81,  93 => 80,  92 => 79,  91 => 78,  90 => 77,  89 => 76,  88 => 75,  87 => 74,  86 => 73,  85 => 72,  84 => 71,  83 => 70,  82 => 69,  81 => 68,  80 => 67,  79 => 66,  78 => 65,  77 => 64,  76 => 63,  75 => 62,  73 => 61,  70 => 60,  68 => 59,  65 => 56,  62 => 52,  61 => 51,  60 => 50,  59 => 49,  58 => 48,  56 => 47,  53 => 46,  51 => 45,  46 => 41,  42 => 40,  39 => 39,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Paragraphs template for displaying Bootstrap Tabs.
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
{{ attach_library('bootstrap_paragraphs/bp-tabs') }}

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
{% set paragraph_id = 'tab-' ~ paragraph.id.value %}

{# Prints Tabs template. #}
<div{{ attributes.addClass(classes).setAttribute('id', paragraph_id) }} role=\"tablist\" aria-multiselectable=\"true\">
  <div class=\"paragraph__column\">
    {% if content.bp_header|render %}
      <h2>{{ content.bp_header }}</h2>
    {% endif %}
    <ul class=\"nav nav-tabs\" role=\"tablist\">
      {# Loops through the tab sections to print the tab section titles. #}
      {% for key, item in content.bp_tab_section if key|first != '#' %}
        <li role=\"presentation\" class=\"{% if loop.first %}active{% endif %}\"><a href=\"#{{ paragraph_id }}-{{ key + 1 }}\" aria-controls=\"{{ item['#paragraph'].bp_tab_section_title.value }}\" role=\"tab\" data-toggle=\"tab\">{{ item['#paragraph'].bp_tab_section_title.value }}</a></li>
      {% endfor %}
    </ul>
    <div class=\"tab-content\">
      {# Loops through the tab sections again to print the tab section bodies. #}
      {% for key, item in content.bp_tab_section if key|first != '#' %}
        <div role=\"tabpanel\" class=\"tab-pane{% if loop.first %} active{% endif %}\" id=\"{{ paragraph_id }}-{{ key + 1 }}\">
          {% for body_key, body_item in item['#paragraph'].bp_tab_section_body %}
            {# Use the same render array as item and set the '#paragraph'. #}
            {% set section_body = item %}
            {% set lang = section_body['#paragraph'].langcode[0].value %}
            {# Check if a translation exists #}
            {% if section_body['#paragraph'].bp_tab_section_body[body_key].entity.hasTranslation(lang) %}
              {# Load the entity for the current translation #}
              {% set section_translation= section_body['#paragraph'].bp_tab_section_body[body_key].entity.getTranslation(lang) %}
            {% else %}
              {# Load the source entity #}
              {% set section_translation= section_body['#paragraph'].bp_tab_section_body[body_key].entity %}
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
", "modules/contrib/bootstrap_paragraphs/templates/paragraph--bp-tabs.html.twig", "/var/www/web/modules/contrib/bootstrap_paragraphs/templates/paragraph--bp-tabs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 45, "set" => 46, "for" => 158);
        static $filters = array("escape" => 40, "render" => 45, "clean_class" => 129, "merge" => 138, "first" => 158);
        static $functions = array("attach_library" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'render', 'clean_class', 'merge', 'first'],
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
