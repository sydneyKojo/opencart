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

/* catalog/view/template/account/order_info.twig */
class __TwigTemplate_0770d9eaee683eda5b13828cb9ba1507 extends Template
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
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-order\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"row row-cols-md-2\">
        <div class=\"col\">
          <table class=\"table table-bordered table-hover\">
            ";
        // line 14
        if (($context["invoice_no"] ?? null)) {
            // line 15
            echo "              <tr>
                <td><strong>";
            // line 16
            echo ($context["text_invoice_no"] ?? null);
            echo "</strong></td>
                <td>";
            // line 17
            echo ($context["invoice_no"] ?? null);
            echo "</td>
              </tr>
            ";
        }
        // line 20
        echo "            <tr>
              <td><strong>";
        // line 21
        echo ($context["text_order_id"] ?? null);
        echo "</strong></td>
              <td>#";
        // line 22
        echo ($context["order_id"] ?? null);
        echo "</td>
            </tr>
            <tr>
              <td><strong>";
        // line 25
        echo ($context["text_order_status"] ?? null);
        echo "</strong></td>
              <td>";
        // line 26
        echo ($context["order_status"] ?? null);
        echo "</td>
            </tr>
          </table>
        </div>
        <div class=\"col\">
          <table class=\"table table-bordered table-hover\">
            ";
        // line 32
        if (($context["shipping_method"] ?? null)) {
            // line 33
            echo "              <tr>
                <td><strong>";
            // line 34
            echo ($context["text_shipping_method"] ?? null);
            echo "</strong></td>
                <td>";
            // line 35
            echo ($context["shipping_method"] ?? null);
            echo "</td>
              </tr>
            ";
        }
        // line 38
        echo "            <tr>
              <td><strong>";
        // line 39
        echo ($context["text_payment_method"] ?? null);
        echo "</strong></td>
              <td>";
        // line 40
        echo ($context["payment_method"] ?? null);
        echo "</td>
            </tr>
            <tr>
              <td><strong>";
        // line 43
        echo ($context["text_date_added"] ?? null);
        echo "</strong></td>
              <td>";
        // line 44
        echo ($context["date_added"] ?? null);
        echo "</td>
            </tr>
          </table>
        </div>
      </div>
      ";
        // line 49
        if ((($context["payment_address"] ?? null) || ($context["shipping_address"] ?? null))) {
            // line 50
            echo "        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              ";
            // line 53
            if (($context["payment_address"] ?? null)) {
                // line 54
                echo "                <td class=\"text-start align-top\"><strong>";
                echo ($context["text_payment_address"] ?? null);
                echo "</strong></td>
              ";
            }
            // line 56
            echo "              ";
            if (($context["shipping_address"] ?? null)) {
                // line 57
                echo "                <td class=\"text-start align-top\"><strong>";
                echo ($context["text_shipping_address"] ?? null);
                echo "</strong></td>
              ";
            }
            // line 59
            echo "            </tr>
          </thead>
          <tbody>
            <tr>
              ";
            // line 63
            if (($context["payment_address"] ?? null)) {
                // line 64
                echo "                <td class=\"text-start align-top\">";
                echo ($context["payment_address"] ?? null);
                echo "</td>
              ";
            }
            // line 66
            echo "              ";
            if (($context["shipping_address"] ?? null)) {
                // line 67
                echo "                <td class=\"text-start align-top\">";
                echo ($context["shipping_address"] ?? null);
                echo "</td>
              ";
            }
            // line 68
            echo "</tr>
          </tbody>
        </table>
      ";
        }
        // line 72
        echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-start\"><strong>";
        // line 76
        echo ($context["column_name"] ?? null);
        echo "</strong></td>
              <td class=\"text-start\"><strong>";
        // line 77
        echo ($context["column_model"] ?? null);
        echo "</strong></td>
              <td class=\"text-end\"><strong>";
        // line 78
        echo ($context["column_quantity"] ?? null);
        echo "</strong></td>
              <td class=\"text-end\"><strong>";
        // line 79
        echo ($context["column_price"] ?? null);
        echo "</strong></td>
              <td class=\"text-end\"><strong>";
        // line 80
        echo ($context["column_total"] ?? null);
        echo "</strong></td>
              ";
        // line 81
        if (($context["products"] ?? null)) {
            // line 82
            echo "                <td class=\"text-end\"><strong>";
            echo ($context["column_action"] ?? null);
            echo "</strong></td>
              ";
        }
        // line 84
        echo "            </tr>
          </thead>
          <tbody>
            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 88
            echo "              <tr>
                <td class=\"text-start\"><a href=\"";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 89);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 89);
            echo "</a>
                  ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 91
                echo "                    <br/>
                    <small> - ";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 92);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 92);
                echo "</small>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 94)) {
                // line 95
                echo "                    <br/>
                    <small> - ";
                // line 96
                echo ($context["text_points"] ?? null);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 96);
                echo "</small>
                  ";
            }
            // line 98
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 98)) {
                // line 99
                echo "                    <br/>
                    <small> - ";
                // line 100
                echo ($context["text_subscription"] ?? null);
                echo ": <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 100);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription_description", [], "any", false, false, false, 100);
                echo "</a></small>
                  ";
            }
            // line 102
            echo "                </td>
                <td class=\"text-start\">";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 103);
            echo "</td>
                <td class=\"text-end\">";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 104);
            echo "</td>
                <td class=\"text-end\">";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 105);
            echo "</td>
                <td class=\"text-end\">";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 106);
            echo "</td>
                <td class=\"text-end text-nowrap\">";
            // line 107
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 107)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 107);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-cart-shopping\"></i></a>";
            }
            // line 108
            echo "                  <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 108);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-reply\"></i></a></td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "
            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 113
            echo "              <tr>
                <td class=\"text-start\">";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 114);
            echo "</td>
                <td class=\"text-start\"></td>
                <td class=\"text-end\">1</td>
                <td class=\"text-end\">";
            // line 117
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 117);
            echo "</td>
                <td class=\"text-end\">";
            // line 118
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 118);
            echo "</td>
                ";
            // line 119
            if (($context["products"] ?? null)) {
                // line 120
                echo "                  <td></td>
                ";
            }
            // line 122
            echo "              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "          </tbody>
          <tfoot>
            ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 127
            echo "              <tr>
                <td colspan=\"3\"></td>
                <td class=\"text-end\"><b>";
            // line 129
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 129);
            echo "</b></td>
                <td class=\"text-end\">";
            // line 130
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 130);
            echo "</td>
                ";
            // line 131
            if (($context["products"] ?? null)) {
                // line 132
                echo "                  <td></td>
                ";
            }
            // line 134
            echo "              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "          </tfoot>
        </table>
      </div>
      ";
        // line 139
        if (($context["comment"] ?? null)) {
            // line 140
            echo "        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-start\"><strong>";
            // line 143
            echo ($context["text_comment"] ?? null);
            echo "</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-start\">";
            // line 148
            echo ($context["comment"] ?? null);
            echo "</td>
            </tr>
          </tbody>
        </table>
      ";
        }
        // line 153
        echo "      <h2>";
        echo ($context["text_history"] ?? null);
        echo "</h2>
      <div id=\"history\">";
        // line 154
        echo ($context["history"] ?? null);
        echo "</div>
      <div class=\"text-end mt-3\"><a href=\"";
        // line 155
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      ";
        // line 156
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 157
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});
//--></script>
";
        // line 166
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 166,  463 => 157,  459 => 156,  453 => 155,  449 => 154,  444 => 153,  436 => 148,  428 => 143,  423 => 140,  421 => 139,  416 => 136,  409 => 134,  405 => 132,  403 => 131,  399 => 130,  395 => 129,  391 => 127,  387 => 126,  383 => 124,  376 => 122,  372 => 120,  370 => 119,  366 => 118,  362 => 117,  356 => 114,  353 => 113,  349 => 112,  346 => 111,  334 => 108,  326 => 107,  322 => 106,  318 => 105,  314 => 104,  310 => 103,  307 => 102,  298 => 100,  295 => 99,  292 => 98,  285 => 96,  282 => 95,  279 => 94,  269 => 92,  266 => 91,  262 => 90,  256 => 89,  253 => 88,  249 => 87,  244 => 84,  238 => 82,  236 => 81,  232 => 80,  228 => 79,  224 => 78,  220 => 77,  216 => 76,  210 => 72,  204 => 68,  198 => 67,  195 => 66,  189 => 64,  187 => 63,  181 => 59,  175 => 57,  172 => 56,  166 => 54,  164 => 53,  159 => 50,  157 => 49,  149 => 44,  145 => 43,  139 => 40,  135 => 39,  132 => 38,  126 => 35,  122 => 34,  119 => 33,  117 => 32,  108 => 26,  104 => 25,  98 => 22,  94 => 21,  91 => 20,  85 => 17,  81 => 16,  78 => 15,  76 => 14,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/order_info.twig", "D:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\account\\order_info.twig");
    }
}
