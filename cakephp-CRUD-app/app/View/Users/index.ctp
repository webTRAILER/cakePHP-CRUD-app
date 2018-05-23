<!-- ?>-->
<?php echo $this->Html->css('indexstyle.css')?>
<?php echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')?>
<?php echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')?>


<div class="header">Students Database</div>

<div class="opcards">

    <?php echo $this->Html->link(
    '<div class="card" style="margin-left: 13%;">
    <i class="fa fa-plus" style="font-size: 120px;color:green"></i>
    <div class="ccontainer">
    <h4><b>CREATE</b></h4> 
    <p>Add a new student record to database</p> 
    </div>
    </div>',
    array('controller' => 'users', 'action' => 'add'),
    array('escape'=>false)
    );?>
    
    <?php echo $this->Html->link('<div class="card">
    <i class="fa fa-address-book" style="font-size: 120px;color:blue;margin-left: 5px"></i>
    <div class="ccontainer">
    <h4><b>READ</b></h4> 
    <p>Read existing record from database</p> 
    </div>
    </div>',
    array('controller' => 'users', 'action' => 'readall'),
    array('escape'=>false)
    );?>
    
    
    <?php echo $this->Html->link('
    <div class="card" >
    <i class="fa fa-edit" style="font-size: 120px;color:yellow;margin-left: 15px"></i>
    <div class="ccontainer">
    <h4><b>UPDATE</b></h4> 
    <p>Edit existing record in database</p> 
    </div>
    </div>',
    array('controller' => 'users', 'action' => 'readall'),
    array('escape'=>false)
    );?>

    <?php echo $this->Html->link('
    <div class="card">
    <i class="fa fa-trash" style="font-size: 120px;color:red"></i>
    <div class="ccontainer">
    <h4><b>DELETE</b></h4> 
    <p>Remove record from database</p> 
    </div>
    </div>',
    array('controller' => 'users', 'action' => 'readall'),
    array('escape'=>false)
    );?>

</div>
<!--
if ( $addresult==null)
{
    $message='Student Record Saved';
    echo '<div class="flash-message-success"><span>'.$message.'</span></div>';       
}
else
{
    echo "what the shit";
}
?>
<script type="text/javascript">
    var x=document.getElementsByClassName('flash-message-success')[0];
    var i=-500;
    var l=setInterval(function(){
          
          i+=2;
          x.style.left=i+"px";
          if (i==1400)
            {clearInterval(l);
                x.style.left="-500px";}
    },1);

</script>-->