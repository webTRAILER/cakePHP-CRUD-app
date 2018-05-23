<?php echo $this->Html->css('readstyle.css')?>
<?php echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')?>
<div class="header">Students Record</div>
<table>
    <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>Email</th>
  <th>Action</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['Id']; ?></td>
        <td><?php echo $user['User']['Name']; ?></td>
        <td><?php echo $user['User']['Email']; ?></td>
        <td style="width:250px;padding-left:0px;padding-right: 0px;">
        <?php echo $this->Html->link('<span>Edit</span><i class="fa fa-edit" s></i>', array('action' => 'update', $user['User']['Id']),array('escape'=>false)); ?>
       <?php echo $this->Form->postLink('<span>Delete</span><i class="fa fa-trash" s></i>',array('action' => 'delete', $user['User']['Id']),array('escape'=>false,'confirm' => 'Are you sure to delete?'));
       ?>
    
         </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>