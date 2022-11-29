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

/* themes/custom/beetroot_example_theme/templates/beetroot_example/beetroot-example-news.html.twig */
class __TwigTemplate_3ceab66e4ab522dbad21c75c9186c1a7 extends \Twig\Template
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
        // line 1
        echo "<div>
  <p>beetroot-example-news.html.twig</p>
  <h2 ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 3, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 3, $this->source), "html", null, true);
        echo "</h2>
  <p>
    ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 5, $this->source), "html", null, true);
        echo "
  </p>
q ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 8
            echo "    <p>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["link"], 8, $this->source), "html", null, true);
            echo "</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  <hr>
</div>

";
        // line 14
        echo "
";
        // line 20
        echo "
";
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/beetroot_example_theme/templates/beetroot_example/beetroot-example-news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  76 => 20,  73 => 14,  68 => 10,  59 => 8,  55 => 7,  50 => 5,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
  <p>beetroot-example-news.html.twig</p>
  <h2 {{ attributes }}>{{ title }}</h2>
  <p>
    {{ content }}
  </p>
q {% for link in links %}
    <p>{{ link }}</p>
  {% endfor %}
  <hr>
</div>

{#<div {{ attributes }}>#}

{#  {{ title_prefix }}#}
{#  <h2{{ title_attributes }}>#}
{#    {{ title }}#}
{#  </h2>#}
{#  {{ title_suffix }}#}

{#  <p>beetroot-example-news.html.twig</p>#}

{#  <div {{ content-attributes }}>#}
{#    {{ content }}#}
{#  </div>#}
{#  <p>Related content</p>#}
{#  {% for link in links %}#}
{#    <p>{{ link }}</p>#}
{#  {% endfor %}#}
{#  <hr>#}
{#</div>#}
", "themes/custom/beetroot_example_theme/templates/beetroot_example/beetroot-example-news.html.twig", "/var/www/web/themes/custom/beetroot_example_theme/templates/beetroot_example/beetroot-example-news.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 7);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                []
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
