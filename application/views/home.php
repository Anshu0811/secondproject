<?php if($this->session->flashdata('pass_login')) : ?>
 <div class="alert alert-success">
     <?php echo $this->session->flashdata('pass_login');?>
 </div>
<?php endif ; ?>
<?php if($this->session->flashdata('registered')) : ?>
 <div class="alert alert-success">
     <?php echo $this->session->flashdata('registered');?>
 </div>
<?php endif ; ?>
<?php if($this->session->flashdata('fail_login')) : ?>
 <div class="alert alert-danger">
     <?php echo $this->session->flashdata('fail_login');?>
 </div>
<?php endif ; ?>
<?php foreach($articles as $article) :?>
<div class='card boxs'>
  <div class="card-body">
   <div class='card-title'>
     <a href="<?php echo base_url();?>home/details/<?php echo $article->id;?>"><h3> <?php echo $article->article_title; ?></h3></a>
   </div>
</div> 
</div> 
<br>
<?php endforeach;?>