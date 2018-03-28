<?php 
echo form_open('Manager/new_order');
echo form_label('Order Number', 'order_number') . form_input('order_number');
echo form_submit('order_Submit','order submit');
?>