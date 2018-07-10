<div class="row">
    <div class="col-md-4">
        <div>
        <img src="<?php echo base_url();?>assets/images/profile.jpg">
        <br>
        <div class="detail">Username: <br><?php echo $user->username;?></div><br>
        <div class="detail">Name: <br><?php echo $user->first_name." ".$user->last_name?></div><br>
        <div class="detail">Email: <br><?php echo $user->email;?></div><br>
        <form method="post" action="<?php echo base_url();?>profile/add_post">
            <button class="btn btn-danger">ADD POST</button>
        </form>
        </div>
    </div>
    <div class="col-md-8">
        <?php if($this->session->flashdata('post_pass')) : ?>
         <div class="alert alert-success">
             <?php echo $this->session->flashdata('post_pass');?>
         </div>
        <?php endif ; ?>
        <?php if($this->session->flashdata('post_fail')) : ?>
         <div class="alert alert-danger">
             <?php echo $this->session->flashdata('post_fail');?>
         </div>
        <?php endif ; ?>
        <?php if($check==1) :?>
        <?php foreach(get_articlebyuser($user->id) as $article) :?>
        <div class='card boxs'>
          <div class="card-body">
           <div class='card-title'>
             <a href="<?php echo base_url();?>home/details/<?php echo $article->id;?>"><h3> <?php echo $article->article_title; ?></h3></a>
           </div>
        </div> 
        </div> 
        <br>
        <?php endforeach;?>
        <?php else : ?>
        <form method="post" action="<?php echo base_url();?>profile/submit_post">
             <div class="form-group">
              <label for="title">Title:</label>
              <input class="form-control" type="text" name="title">
             </div>
             <div class="form-group">
              <label for="subject">Subject:</label>
               <select name="subject">
                 <?php foreach(getsubjects() as $subject) : ?>
                  <option value="<?php echo $subject->id;?>"><?php echo $subject->subject_name;?></option>
                  <?php endforeach;?> 
                </select>  
             </div>
             <div class="form-group">
              <label for="text">Text:</label>
              <textarea class="form-control" rows="5" name="text"></textarea>
             </div> 
            <button class="btn btn-primary">Submit</button>
        </form>
        <?php endif;?>
    </div>
</div>