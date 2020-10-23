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

/* macros/macros.html.twig */
class __TwigTemplate_6e69314f367b66f6a8db20c9df39452c70cb83447c8f588eccb68e4feb04fd23 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
    }

    // line 2
    public function getnav_loop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "  ";
            $context["macros"] = $this;
            // line 4
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 5
                echo "    ";
                $context["current_class"] = (($this->getAttribute($context["p"], "active", [])) ? ("nav-link--current") : (""));
                // line 6
                echo "    ";
                // line 7
                echo "    ";
                if (($this->getAttribute($context["p"], "order", []) == 1)) {
                    // line 8
                    echo "      <h1>";
                    if ( !$this->getAttribute($context["p"], "active", [])) {
                        echo "<a href=\"/\">";
                    }
                    echo $this->getAttribute($context["p"], "menu", []);
                    if ( !$this->getAttribute($context["p"], "active", [])) {
                        echo "</a>";
                    }
                    echo "</h1>
    ";
                }
                // line 10
                echo "    ";
                // line 11
                echo "    ";
                if (($this->getAttribute($context["p"], "order", []) > 1)) {
                    // line 12
                    echo "      <a class=\"nav-link ";
                    if ($this->getAttribute($context["p"], "active", [])) {
                        echo "nav-link--current";
                    }
                    echo "\" ";
                    if ( !$this->getAttribute($context["p"], "active", [])) {
                        echo "href=\"";
                        echo $this->getAttribute($context["p"], "url", []);
                        echo "\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "</a>
    ";
                }
                // line 14
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 14,  77 => 12,  74 => 11,  72 => 10,  60 => 8,  57 => 7,  55 => 6,  52 => 5,  47 => 4,  44 => 3,  32 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# navigation #}
{% macro nav_loop(page) %}
  {% import _self as macros %}
  {% for p in page.children.visible %}
    {% set current_class = p.active ? 'nav-link--current' : '' %}
    {# home #}
    {% if p.order == 1 %}
      <h1>{% if not p.active %}<a href=\"/\">{% endif %}{{ p.menu }}{% if not p.active %}</a>{% endif %}</h1>
    {% endif %}
    {# pages #}
    {% if p.order > 1 %}
      <a class=\"nav-link {% if p.active %}nav-link--current{% endif %}\" {% if not p.active %}href=\"{{ p.url }}\"{% endif %}>{{ p.menu }}</a>
    {% endif %}
  {% endfor %}
{% endmacro %}", "macros/macros.html.twig", "/Users/vo/Sites/lhenriksen/user/themes/main/templates/macros/macros.html.twig");
    }
}
