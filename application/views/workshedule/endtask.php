<?php
var_dump($work_id);
$fh=array('work_id'=>$work_id);
echo form_open('Wordshedule/endtask');
echo form_hidden($fh);
echo form_textarea('issue');
echo form_submit('submit','Post Issue Comments');
echo form_close();

?>