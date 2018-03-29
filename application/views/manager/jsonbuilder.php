<!DOCTYPE html>
<html>
<head>
    <title>Example formBuilder</title>
</head>
<body>
  <div id="fb-editor"></div>
  <?php echo form_open('Manager/jsbuilder'); ?>
  <div id="build-wrap2"></div>
   <?php echo form_submit('submit'); ?>
  <pre><code id="markup"></code></pre>
hi

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="<?php echo site_url('formBuilder/dist/form-render.min.js'); ?>"></script>

<script>
    /*jQuery(function($) {
  var escapeEl = document.createElement('textarea'),
    code = document.getElementById('markup'),
    escapeHTML = function(html) {
      escapeEl.textContent = html;
      return escapeEl.innerHTML;
    },
    formData = '[{"type":"textarea","label":"Text Area","className":"form-control","name":"textarea-1492616908223","subtype":"textarea"},{"type":"select","label":"Select","className":"form-control","name":"select-1492616913781","values":[{"label":"Option 1","value":"option-1","selected":true},{"label":"Option 2","value":"option-2"},{"label":"Option 3","value":"option-3"}]},{"type":"checkbox-group","label":"Checkbox Group","name":"checkbox-group-1492616915392","values":[{"label":"Option 1","value":"option-1","selected":true}]}]',
    addLineBreaks = function(html) {
      return html.replace(new RegExp('&gt; &lt;', 'g'), '&gt;\n&lt;').replace(new RegExp('&gt;&lt;', 'g'), '&gt;\n&lt;');
    };

  // Grab markup and escape it
  var $markup = $('<div/>');
  $markup.formRender({formData});

  // set < code > innerHTML with escaped markup
  code.innerHTML = addLineBreaks(escapeHTML($markup[0].innerHTML));

  hljs.highlightBlock(code);
}); */
</script>
<?php $formdata='add_supplier.js';?>
<script>
jQuery(function($) {
     //formData = '[{"type": "button","label": "Button","subtype": "button","className": "btn-default btn","name": "button-1522312799038","style": "default"},{"type": "date","label": "Date Field","className": "form-control","name": "date-1522312802470"},{"type": "number","label": "Number","className": "form-control","name": "number-1522312805866"}]';
  formData='<?php $this->load->view('manager/demo.js'); ?>';
        $('#build-wrap2').formRender({formData});
});
</script>
</body>
</html>