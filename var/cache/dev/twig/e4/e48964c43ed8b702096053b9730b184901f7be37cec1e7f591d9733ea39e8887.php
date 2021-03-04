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

/* calculator/index.html.twig */
class __TwigTemplate_a052c0da9f96a3f71ae9702193c9fc32b7141bd19cdd9581fe1d3ff0a0d3d08f extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calculator/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Calculator</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/calculator.css"), "html", null, true);
        echo "\"/>
    </head>
    <body>
        <div class=\"container\">
            <div style=\"text-align: center;\">
                <h1 class=\"title\">Calculator</h1>
                <table style=\"margin: auto;\">
                    <thead>
                        <tr>
                            <th colspan=\"4\" id=\"result\">
                                <span id=\"calc-output\">0</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"1\" id=\"button-1\">1</button>
                            </td>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"2\" id=\"button-2\">2</button>
                            </td>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"3\" id=\"button-3\">3</button>
                            </td>
                            <td>
                                <button class=\"operator\" type=\"button\" value=\"+\" id=\"button-plus\">+</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"4\" id=\"button-4\">4</button>
                            </td>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"5\" id=\"button-5\">5</button>
                            </td>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"6\" id=\"button-6\">6</button>
                            </td>
                            <td>
                                <button class=\"operator\" type=\"button\" value=\"-\" id=\"button-minus\">-</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"7\" id=\"button-7\">7</button>
                            </td>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"8\" id=\"button-8\">8</button>
                            </td>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"9\" id=\"button-9\">9</button>
                            </td>
                            <td>
                                <button class=\"operator\" type=\"button\" value=\"*\" id=\"button-multi\">x</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <button class=\"operator\" type=\"button\" value=\".\" id=\"button-dot\">.</button>
                            </td>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"0\" id=\"button-0\">0</button>
                            </td>
                            <td>
                                <button class=\"clear\" type=\"button\" value=\"c\" id=\"button-c\">c</button>
                            </td>
                            <td>
                                <button class=\"operator\" type=\"button\" value=\"/\" id=\"button-div\">&div;</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan=\"4\">
                                <button class=\"equal\" type=\"button\" data-href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calculate");
        echo "\" id=\"button-equal\">=</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/calculator.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "calculator/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 92,  128 => 84,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Calculator</title>
        <link rel=\"stylesheet\" href=\"{{ asset('css/calculator.css') }}\"/>
    </head>
    <body>
        <div class=\"container\">
            <div style=\"text-align: center;\">
                <h1 class=\"title\">Calculator</h1>
                <table style=\"margin: auto;\">
                    <thead>
                        <tr>
                            <th colspan=\"4\" id=\"result\">
                                <span id=\"calc-output\">0</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"1\" id=\"button-1\">1</button>
                            </td>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"2\" id=\"button-2\">2</button>
                            </td>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"3\" id=\"button-3\">3</button>
                            </td>
                            <td>
                                <button class=\"operator\" type=\"button\" value=\"+\" id=\"button-plus\">+</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"4\" id=\"button-4\">4</button>
                            </td>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"5\" id=\"button-5\">5</button>
                            </td>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"6\" id=\"button-6\">6</button>
                            </td>
                            <td>
                                <button class=\"operator\" type=\"button\" value=\"-\" id=\"button-minus\">-</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"7\" id=\"button-7\">7</button>
                            </td>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"8\" id=\"button-8\">8</button>
                            </td>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"9\" id=\"button-9\">9</button>
                            </td>
                            <td>
                                <button class=\"operator\" type=\"button\" value=\"*\" id=\"button-multi\">x</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <button class=\"operator\" type=\"button\" value=\".\" id=\"button-dot\">.</button>
                            </td>
                            <td>
                                <button class=\"number\" type=\"button\" value=\"0\" id=\"button-0\">0</button>
                            </td>
                            <td>
                                <button class=\"clear\" type=\"button\" value=\"c\" id=\"button-c\">c</button>
                            </td>
                            <td>
                                <button class=\"operator\" type=\"button\" value=\"/\" id=\"button-div\">&div;</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan=\"4\">
                                <button class=\"equal\" type=\"button\" data-href=\"{{ path('calculate') }}\" id=\"button-equal\">=</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
        <script src=\"{{ asset('js/calculator.js') }}\"></script>
    </body>
</html>
", "calculator/index.html.twig", "/var/www/templates/calculator/index.html.twig");
    }
}
