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

/* sale/recurring_list.twig */
class __TwigTemplate_1cfcf776717a2fba5bd0e21676fa8d135cb0d200bdf40b166aa1eaff957c3e4f extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
      </div>
      <h1>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 15
        if (($context["error_warning"] ?? null)) {
            // line 16
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 20
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    <div class=\"row\">
      <div id=\"filter\" class=\"col-sm-12\">
        <div class=\"panel panel-default panel-filter\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 29
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"row\">
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-order-recurring-id\">";
        // line 35
        echo ($context["entry_order_recurring_id"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_order_recurring_id\" value=\"";
        // line 36
        echo ($context["filter_order_recurring_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_recurring_id"] ?? null);
        echo "\" id=\"input-order-recurring-id\" class=\"form-control\" />
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-order-id\">";
        // line 39
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 40
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-customer\">";
        // line 45
        echo ($context["entry_customer"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 46
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-reference\">";
        // line 49
        echo ($context["entry_reference"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_reference\" value=\"";
        // line 50
        echo ($context["filter_reference"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_reference"] ?? null);
        echo "\" id=\"input-reference\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-status\">";
        // line 55
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">                
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurring_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring_status"]) {
            // line 58
            echo "                      ";
            if ((($context["filter_status"] ?? null) == twig_get_attribute($this->env, $this->source, $context["recurring_status"], "value", [], "any", false, false, false, 58))) {
                // line 59
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring_status"], "value", [], "any", false, false, false, 59);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring_status"], "text", [], "any", false, false, false, 59);
                echo "</option>
                      ";
            } else {
                // line 61
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring_status"], "value", [], "any", false, false, false, 61);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring_status"], "text", [], "any", false, false, false, 61);
                echo "</option>
                      ";
            }
            // line 63
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                  </select>
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-date-date_added\">";
        // line 69
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 71
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-date_added\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label hidden-xs\">&nbsp;</label>
                  <div class=\"button text-right\">
                    <a href=\"index.php?route=sale/recurring&user_token=";
        // line 80
        echo ($context["user_token"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</a>
                    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
        // line 81
        echo ($context["button_filter"] ?? null);
        echo "</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 92
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 96
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 97
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-right\">";
        // line 104
        if ((($context["sort"] ?? null) == "or.order_recurring_id")) {
            echo " <a href=\"";
            echo ($context["sort_order_recurring"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_recurring_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order_recurring"] ?? null);
            echo "\">";
            echo ($context["column_order_recurring_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 105
        if ((($context["sort"] ?? null) == "or.order_id")) {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 106
        if ((($context["sort"] ?? null) == "or.reference")) {
            echo " <a href=\"";
            echo ($context["sort_reference"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_reference"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_reference"] ?? null);
            echo "\">";
            echo ($context["column_reference"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 107
        if ((($context["sort"] ?? null) == "customer")) {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 108
        if ((($context["sort"] ?? null) == "or.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 109
        if ((($context["sort"] ?? null) == "or.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 110
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 115
        if (($context["recurrings"] ?? null)) {
            // line 116
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 117
                echo "                  <tr>
                    <td class=\"text-right\">";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "order_recurring_id", [], "any", false, false, false, 118);
                echo "</td>
                    <td class=\"text-right\">";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "order_id", [], "any", false, false, false, 119);
                echo "</td>
                    <td class=\"text-left\">";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "reference", [], "any", false, false, false, 120);
                echo "</td>
                    <td class=\"text-left\">";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "customer", [], "any", false, false, false, 121);
                echo "</td>
                    <td class=\"text-left\">";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "status", [], "any", false, false, false, 122);
                echo "</td>
                    <td class=\"text-left\">";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "date_added", [], "any", false, false, false, 123);
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "view", [], "any", false, false, false, 124);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_order_recurring"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "order", [], "any", false, false, false, 124);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_order"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-shopping-cart\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                  ";
        } else {
            // line 128
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"7\">";
            // line 129
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 132
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 138
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 139
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
\$('#button-filter').on('click', function() {
    let url = '';
    \$('#filter input[type=\"text\"][name^=\"filter\"], #filter input[type=\"hidden\"][name^=\"filter\"], select[name^=\"filter\"]').each(function() {
        if (\$(this).val() !== '') {
            url += '&' + \$(this).attr('name') +  '=' + encodeURIComponent(\$(this).val());
        }
    });
    location = 'index.php?route=sale/recurring&user_token=";
        // line 154
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
</script> 
<script>
\$('#form input').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\tfilter();
\t}
});

\$('.date').datetimepicker({ 
\tlanguage: '";
        // line 165
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false 
});
</script> 
<script>
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 173
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
</script>
</div>
";
        // line 191
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "sale/recurring_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 191,  493 => 173,  482 => 165,  468 => 154,  450 => 139,  446 => 138,  438 => 132,  432 => 129,  429 => 128,  426 => 127,  411 => 124,  407 => 123,  403 => 122,  399 => 121,  395 => 120,  391 => 119,  387 => 118,  384 => 117,  379 => 116,  377 => 115,  369 => 110,  351 => 109,  333 => 108,  315 => 107,  297 => 106,  279 => 105,  261 => 104,  251 => 97,  247 => 96,  240 => 92,  226 => 81,  220 => 80,  206 => 71,  201 => 69,  188 => 63,  180 => 61,  172 => 59,  169 => 58,  165 => 57,  160 => 55,  150 => 50,  146 => 49,  138 => 46,  134 => 45,  124 => 40,  120 => 39,  112 => 36,  108 => 35,  99 => 29,  93 => 25,  85 => 21,  82 => 20,  74 => 16,  72 => 15,  67 => 12,  56 => 10,  52 => 9,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/recurring_list.twig", "");
    }
}
