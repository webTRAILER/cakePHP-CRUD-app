<?php echo $this->Html->css('editstyle.css')?>
<div class="header">Edit User</div>
<?php
    echo $this->Form->create('User');
    echo $this->Form->input('RollNo');
    echo $this->Form->input('Name');
    echo $this->Form->input('Email');
    
    echo $this->Form->end('Update User');

?>