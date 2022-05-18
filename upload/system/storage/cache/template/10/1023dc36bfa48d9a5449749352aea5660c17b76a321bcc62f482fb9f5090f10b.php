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

/* extension/module/addlabel.twig */
class __TwigTemplate_53deb6cb11d8ce2663095c414324184c992f5202894463f432064476320f81fb extends \Twig\Template
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
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-labelposition\">";
        // line 29
        echo ($context["entry_labelposition"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_position\" id=\"input-labelposition\" class=\"form-control\">
                ";
        // line 32
        if ((($context["module_label_position"] ?? null) == 3)) {
            // line 33
            echo "
                <option value=\"3\" selected=\"selected\">";
            // line 34
            echo ($context["left_top"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 35
            echo ($context["left_bottom"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 36
            echo ($context["right_top"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 37
            echo ($context["right_bottom"] ?? null);
            echo "</option>
                

                ";
        } elseif ((        // line 40
($context["module_labelposition"] ?? null) == 2)) {
            // line 41
            echo "
                <option value=\"3\">";
            // line 42
            echo ($context["left_top"] ?? null);
            echo "</option>
                <option value=\"2\" selected=\"selected\">";
            // line 43
            echo ($context["left_bottom"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 44
            echo ($context["right_top"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 45
            echo ($context["right_bottom"] ?? null);
            echo "</option>
                

                ";
        } elseif ((        // line 48
($context["module_labelposition"] ?? null) == 1)) {
            // line 49
            echo "
                <option value=\"3\">";
            // line 50
            echo ($context["left_top"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 51
            echo ($context["left_bottom"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 52
            echo ($context["right_top"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 53
            echo ($context["right_bottom"] ?? null);
            echo "</option>
                

                ";
        } else {
            // line 57
            echo "                 <option value=\"3\">";
            echo ($context["left_top"] ?? null);
            echo "</option>
                <option value=\"2\">";
            // line 58
            echo ($context["left_bottom"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 59
            echo ($context["right_top"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 60
            echo ($context["right_bottom"] ?? null);
            echo "</option>
               
                ";
        }
        // line 63
        echo "              </select>
            </div>
          </div>
         
          <div class=\"form-group\"> 
            <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 68
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 70
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
            </div>
          </div>

          <div class=\"form-group\">  
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 75
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 77
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input_height\" class=\"form-control\"/>
            </div>
          </div>
            
\t\t\t<div class=\"panel-body\">
        <form action=\"";
        // line 82
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-productpage\">";
        // line 84
        echo ($context["entry_productpage"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_productpage\" id=\"input-productpage\" class=\"form-control\">
                ";
        // line 87
        if ((($context["module_addlabel_productpage"] ?? null) == 1)) {
            // line 88
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 89
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 91
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 92
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 94
        echo "              </select>
            </div>
          </div>
          
\t\t  <div class=\"panel-body\">
        <form action=\"";
        // line 99
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-searchpage\">";
        // line 101
        echo ($context["entry_searchpage"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_searchpage\" id=\"input-searchpage\" class=\"form-control\">
                ";
        // line 104
        if ((($context["module_addlabel_searchpage"] ?? null) == 1)) {
            // line 105
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 106
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 108
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 109
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 111
        echo "              </select>
            </div>
          </div>
\t\t  
\t\t   <div class=\"panel-body\">
        <form action=\"";
        // line 116
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-categorypage\">";
        // line 118
        echo ($context["entry_categorypage"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_categorypage\" id=\"input-categorypage\" class=\"form-control\">
                ";
        // line 121
        if ((($context["module_addlabel_categorypage"] ?? null) == 1)) {
            // line 122
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 123
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 125
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 126
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 128
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"panel-body\">
        <form action=\"";
        // line 132
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-manufacturerpage\">";
        // line 134
        echo ($context["entry_manufacturerpage"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_manufacturerpage\" id=\"input-manufacturerpage\" class=\"form-control\">
                ";
        // line 137
        if ((($context["module_addlabel_manufacturerpage"] ?? null) == 1)) {
            // line 138
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 139
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 141
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 142
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 144
        echo "              </select>
            </div>
          </div>
\t\t  <div class=\"panel-body\">
        <form action=\"";
        // line 148
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-comparepage\">";
        // line 150
        echo ($context["entry_comparepage"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_addlabel_comparepage\" id=\"input-comparepage\" class=\"form-control\">
                ";
        // line 153
        if ((($context["module_addlabel_comparepage"] ?? null) == 1)) {
            // line 154
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 155
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 157
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 158
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 160
        echo "              </select>
            </div>
          </div>
\t\t  
\t\t  
         

              

                
                
          

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 174
        echo ($context["entry_createwatermark"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-createwatermark\" class=\"btn btn-primary\"><i class=\"fa fa-createwatermark\"></i> ";
        // line 176
        echo ($context["button_createwatermark"] ?? null);
        echo "</button> 
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 181
        echo ($context["entry_removecache"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-removecache\" class=\"btn btn-primary\"><i class=\"fa fa-removecache\"></i> ";
        // line 183
        echo ($context["button_removecache"] ?? null);
        echo "</button> 
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--

\$('#button-createwatermark').on('click', function() {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/watermark/createwatermark&user_token=";
        // line 195
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-createwatermark').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-createwatermark').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.alert-dismissible').remove();
\t\t\t\t\t
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
});

\$('#button-removecache').on('click', function() {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/watermark/removecache&user_token=";
        // line 224
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-removecache').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-removecache').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.alert-dismissible').remove();
\t\t\t\t\t
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
});


</script>
";
        // line 253
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/addlabel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 253,  508 => 224,  476 => 195,  461 => 183,  456 => 181,  448 => 176,  443 => 174,  427 => 160,  422 => 158,  417 => 157,  412 => 155,  407 => 154,  405 => 153,  399 => 150,  394 => 148,  388 => 144,  383 => 142,  378 => 141,  373 => 139,  368 => 138,  366 => 137,  360 => 134,  355 => 132,  349 => 128,  344 => 126,  339 => 125,  334 => 123,  329 => 122,  327 => 121,  321 => 118,  316 => 116,  309 => 111,  304 => 109,  299 => 108,  294 => 106,  289 => 105,  287 => 104,  281 => 101,  276 => 99,  269 => 94,  264 => 92,  259 => 91,  254 => 89,  249 => 88,  247 => 87,  241 => 84,  236 => 82,  226 => 77,  221 => 75,  211 => 70,  206 => 68,  199 => 63,  193 => 60,  189 => 59,  185 => 58,  180 => 57,  173 => 53,  169 => 52,  165 => 51,  161 => 50,  158 => 49,  156 => 48,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  135 => 41,  133 => 40,  127 => 37,  123 => 36,  119 => 35,  115 => 34,  112 => 33,  110 => 32,  104 => 29,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/addlabel.twig", "");
    }
}
