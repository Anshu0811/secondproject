<div class=row>
   <?php foreach($subjects as $subject) : ?>
    <div class="col-md-3">
       <a href="<?php echo base_url();?>subjects/subject_articles/<?php echo $subject->id;?>">
        <div class="box">
             <?php echo $subject->subject_name;?>
        </div>
        </a>
    </div>
<?php endforeach ;?>
</div>