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

/* sale/order_list.twig */
class __TwigTemplate_c9b223c6a0e943b176cb4b23f9e4a00c9cb530a7fdb321f3e1ac7246a7773471 extends \Twig\Template
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
        <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 6
        echo ($context["shipping"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
        <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 7
        echo ($context["invoice"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"row\">
      <div id=\"filter\" class=\"col-sm-12\">
        <div class=\"panel panel-default panel-filter\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 31
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"row\">
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-order-id\">";
        // line 37
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 38
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-order-status\">";
        // line 41
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                  <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                    <option value=\"\"></option>
                    ";
        // line 44
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 45
            echo "                    <option value=\"0\" selected=\"selected\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 47
            echo "                    <option value=\"0\">";
            echo ($context["text_missing"] ?? null);
            echo "</option>
                    ";
        }
        // line 49
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 50
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 50) == ($context["filter_order_status_id"] ?? null))) {
                // line 51
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 51);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 51);
                echo "</option>
                    ";
            } else {
                // line 53
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 53);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 53);
                echo "</option>
                    ";
            }
            // line 55
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "            
                  </select>
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-customer\">";
        // line 61
        echo ($context["entry_customer"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 62
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-contact\">";
        // line 65
        echo ($context["entry_contact"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_contact\" value=\"";
        // line 66
        echo ($context["filter_contact"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_contact"] ?? null);
        echo "\" id=\"input-contact\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-date-added\">";
        // line 71
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 73
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span>
                  </div>
                </div>
                <div class=\"form-group\">
                  <div class=\"row\">
                    <label class=\"col-xs-12 control-label text-center\">";
        // line 81
        echo ($context["entry_total"] ?? null);
        echo "</label>
                    <div class=\"col-xs-6\">
                      <input type=\"text\" name=\"filter_total_min\" value=\"";
        // line 83
        echo ($context["filter_total_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_from"] ?? null);
        echo "\" class=\"form-control text-left\" />
                    </div>
                    <div class=\"col-xs-6\">
                      <input type=\"text\" name=\"filter_total_max\" value=\"";
        // line 86
        echo ($context["filter_total_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_to"] ?? null);
        echo "\" class=\"form-control text-right\" />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-date-modified\">";
        // line 93
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 95
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label hidden-xs\">&nbsp;</label>
                  <div class=\"button text-right\">
                    <a href=\"index.php?route=sale/order&user_token=";
        // line 104
        echo ($context["user_token"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</a>
                    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
        // line 105
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
        // line 116
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 120
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 121
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
            <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-right\">";
        // line 129
        if ((($context["sort"] ?? null) == "o.order_id")) {
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
        // line 130
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
        // line 131
        if ((($context["sort"] ?? null) == "order_status")) {
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
                      <td class=\"text-right\">";
        // line 132
        if ((($context["sort"] ?? null) == "o.total")) {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 133
        if ((($context["sort"] ?? null) == "o.payment_method")) {
            echo " <a href=\"";
            echo ($context["sort_payment_method"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_payment_method"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_payment_method"] ?? null);
            echo "\">";
            echo ($context["column_payment_method"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 134
        if ((($context["sort"] ?? null) == "o.shipping_method")) {
            echo " <a href=\"";
            echo ($context["sort_shipping_method"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_shipping_method"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_shipping_method"] ?? null);
            echo "\">";
            echo ($context["column_shipping_method"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 135
        if ((($context["sort"] ?? null) == "o.date_added")) {
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
                      <td class=\"text-left\">";
        // line 136
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 137
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                    <tbody>                  
                    ";
        // line 141
        if (($context["orders"] ?? null)) {
            // line 142
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 143
                echo "                    <tr>
                      <td class=\"text-center\"> ";
                // line 144
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 144), ($context["selected"] ?? null))) {
                    // line 145
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 145);
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 147
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 147);
                    echo "\" />
                        ";
                }
                // line 149
                echo "                        <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 149);
                echo "\" /></td>
                      <td class=\"text-right\">";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 150);
                echo "</td>
                      <td class=\"text-left\">
                        <div>";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 152);
                echo "</div>
                        ";
                // line 153
                if (twig_get_attribute($this->env, $this->source, $context["order"], "email", [], "any", false, false, false, 153)) {
                    echo "<div class=\"contact\"><i class=\"fa fa-at\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "email", [], "any", false, false, false, 153);
                    echo "</div>";
                }
                // line 154
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 154)) {
                    echo "<div class=\"contact\"><i class=\"fa fa-phone\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 154);
                    echo "</div>";
                }
                // line 155
                echo "                      </td>
                      <td class=\"text-left\">";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 156);
                echo "</td>
                      <td class=\"text-right\">";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 157);
                echo "</td>
                      <td class=\"text-left\">";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 158);
                echo "</td>
                      <td class=\"text-left\">";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 159);
                echo "</td>
                      <td class=\"text-left\">";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 160);
                echo "</td>
                      <td class=\"text-left\">";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 161);
                echo "</td>
                      <td class=\"text-right\">
                        <div style=\"min-width: 120px;\">
                          <a href=\"";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 164);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a>
                          <div class=\"btn-group\"> 
                            <a href=\"";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 166);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary dropdown-toggle\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                              <li><a href=\"";
                // line 169
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 169);
                echo "\" class=\"order-delete\"><i class=\"fa fa-trash-o\"></i> ";
                echo ($context["button_delete"] ?? null);
                echo "</a></li>
                            </ul>
                          </div>
                        </div>
                      </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "                    ";
        } else {
            // line 177
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"10\">";
            // line 178
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 181
        echo "                    </tbody>                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 186
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 187
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
    location = 'index.php?route=sale/order&user_token=";
        // line 202
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
</script> 
<script>
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 209
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
<script>
\$('input[name^=\\'selected\\']').on('change', function() {
\t\$('#button-shipping, #button-invoice').prop('disabled', true);

\tvar selected = \$('input[name^=\\'selected\\']:checked');

\tif (selected.length) {
\t\t\$('#button-invoice').prop('disabled', false);
\t}

\tfor (i = 0; i < selected.length; i++) {
\t\tif (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
\t\t\t\$('#button-shipping').prop('disabled', false);

\t\t\tbreak;
\t\t}
\t}
});

\$('#button-shipping, #button-invoice').prop('disabled', true);

\$('input[name^=\\'selected\\']:first').trigger('change');

// IE and Edge fix!
\$('#button-shipping, #button-invoice').on('click', function(e) {
\t\$('#form-order').attr('action', this.getAttribute('formAction'));
});

\$('#form-order a.order-delete').on('click', function(e) {
\te.preventDefault();
\t
\tvar element = this;
\t
\tif (confirm('";
        // line 259
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\t\$.ajax({
\t\t\turl: '";
        // line 261
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/delete&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=' + \$(element).attr('href'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();
\t
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t
\t\t\t\tif (json['success']) {
\t\t\t\t\tlocation = '";
        // line 277
        echo ($context["delete"] ?? null);
        echo "';
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
</script> 
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<script type=\"text/javascript\">
\$('.date').datetimepicker({
\tlanguage: '";
        // line 291
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
</script>
</div>
";
        // line 296
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "sale/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  742 => 296,  734 => 291,  717 => 277,  694 => 261,  689 => 259,  636 => 209,  626 => 202,  608 => 187,  604 => 186,  597 => 181,  591 => 178,  588 => 177,  585 => 176,  570 => 169,  562 => 166,  555 => 164,  549 => 161,  545 => 160,  541 => 159,  537 => 158,  533 => 157,  529 => 156,  526 => 155,  519 => 154,  513 => 153,  509 => 152,  504 => 150,  499 => 149,  493 => 147,  487 => 145,  485 => 144,  482 => 143,  477 => 142,  475 => 141,  468 => 137,  450 => 136,  432 => 135,  414 => 134,  396 => 133,  378 => 132,  360 => 131,  342 => 130,  324 => 129,  313 => 121,  309 => 120,  302 => 116,  288 => 105,  282 => 104,  268 => 95,  263 => 93,  251 => 86,  243 => 83,  238 => 81,  225 => 73,  220 => 71,  210 => 66,  206 => 65,  198 => 62,  194 => 61,  181 => 55,  173 => 53,  165 => 51,  162 => 50,  157 => 49,  151 => 47,  145 => 45,  143 => 44,  137 => 41,  129 => 38,  125 => 37,  116 => 31,  110 => 27,  102 => 23,  99 => 22,  91 => 18,  89 => 17,  84 => 14,  73 => 12,  69 => 11,  64 => 9,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_list.twig", "");
    }
}
