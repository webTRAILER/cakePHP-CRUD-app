<?php echo $this->Html->css('addstyle.css')?>


<div class="header">Add Student</div>
<?php
echo $this->Form->create('User');
echo $this->Form->input('roll no');
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->end('Save Student');
?>
