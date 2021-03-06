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

/* C:\Users\Olgerd\Desktop\lara-cms/themes/hanzlfp/layouts/default.htm */
class __TwigTemplate_6ac29c8150ff5c6d77a89310b3ec82ae46c644d1098d9b18431d3950f62c56fd extends \Twig\Template
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
        $tags = array("placeholder" => 4, "page" => 7);
        $filters = array("escape" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['placeholder', 'page'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $context['__placeholder_head_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('head', $context['__placeholder_head_default_contents']);
        unset($context['__placeholder_head_default_contents']);        // line 5
        echo "</head>
<body>
    ";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 8
        echo "
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["scriptSource"] ?? null), 9, $this->source), "html", null, true);
        echo "\" defer></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\Olgerd\\Desktop\\lara-cms/themes/hanzlfp/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  75 => 8,  73 => 7,  69 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% placeholder head %}
</head>
<body>
    {% page %}

    <script src=\"{{ scriptSource }}\" defer></script>
</body>
</html>", "C:\\Users\\Olgerd\\Desktop\\lara-cms/themes/hanzlfp/layouts/default.htm", "");
    }
}
