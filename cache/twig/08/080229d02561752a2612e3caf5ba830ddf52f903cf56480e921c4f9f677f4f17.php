<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_121d4ba9e6b15fa3b28bc85abbd68765ffc65b80eb7461f58eb6bc2d6970259f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'styles' => [$this, 'block_styles'],
            'scripts' => [$this, 'block_scripts'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo $this->getAttribute(($context["theme"] ?? null), "default_lang", []);
        echo "\">
<head>
  ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "</head>
<body>
  ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "
  ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "  <meta charset=\"utf-8\" />
  <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo " / ";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
        }
        echo "</title>

  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
  <link rel=\"canonical\" href=\"";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

  ";
        // line 15
        $this->displayBlock('styles', $context, $blocks);
        // line 19
        echo "
  ";
        // line 20
        $this->displayBlock('scripts', $context, $blocks);
        // line 28
        echo "
  ";
        // line 29
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
  ";
        // line 30
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

  ";
    }

    // line 15
    public function block_styles($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/main.css"], "method");
        // line 17
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;1,400;1,600&family=Barlow+Semi+Condensed:ital,wght@0,400;0,600;1,400;1,600&display=swap"], "method");
        // line 18
        echo "  ";
    }

    // line 20
    public function block_scripts($context, array $blocks = [])
    {
        // line 21
        echo "    ";
        // line 22
        echo "
    ";
        // line 23
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 24
            echo "      ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/html5shiv.min.js"], "method");
            // line 25
            echo "      ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/respond.min.js"], "method");
            // line 26
            echo "    ";
        }
        // line 27
        echo "  ";
    }

    // line 35
    public function block_header($context, array $blocks = [])
    {
        // line 36
        echo "    ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 36)->display($context);
        // line 37
        echo "  ";
    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 39,  156 => 37,  153 => 36,  150 => 35,  146 => 27,  143 => 26,  140 => 25,  137 => 24,  135 => 23,  132 => 22,  130 => 21,  127 => 20,  123 => 18,  120 => 17,  117 => 16,  114 => 15,  107 => 30,  103 => 29,  100 => 28,  98 => 20,  95 => 19,  93 => 15,  88 => 13,  84 => 12,  81 => 11,  79 => 10,  68 => 6,  65 => 5,  62 => 4,  56 => 40,  54 => 39,  51 => 38,  49 => 35,  45 => 33,  43 => 4,  38 => 2,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ theme.default_lang }}\">
<head>
  {% block head %}
  <meta charset=\"utf-8\" />
  <title>{{ site.title|e('html') }}{% if page.title %} / {{ page.title }}{% endif %}</title>

  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  {% include 'partials/metadata.html.twig' %}

  <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
  <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

  {% block styles %}
    {% do assets.addCss('theme://css/main.css') %}
    {% do assets.addCss('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;1,400;1,600&family=Barlow+Semi+Condensed:ital,wght@0,400;0,600;1,400;1,600&display=swap') %}
  {% endblock styles %}

  {% block scripts %}
    {# {% do assets.addJs('theme://js/singlepagenav.min.js') %} #}

    {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
      {% do assets.add('theme://js/html5shiv.min.js') %}
      {% do assets.add('theme://js/respond.min.js') %}
    {% endif %}
  {% endblock scripts %}

  {{ assets.css() }}
  {{ assets.js() }}

  {% endblock head %}
</head>
<body>
  {% block header %}
    {% include 'partials/header.html.twig' %}
  {% endblock %}

  {% block content %}{% endblock %}
</body>
</html>
", "partials/base.html.twig", "/Users/vo/Sites/lhenriksen/user/themes/main/templates/partials/base.html.twig");
    }
}
