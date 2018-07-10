<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
<?php if($this->session->flashdata('registration_failed')) : ?>
 <div class="alert alert-danger">
     <?php echo $this->session->flashdata('registration_failed');?>
 </div>
<?php endif ; ?>  
   <form method="post" action="<?php echo base_url();?>users/register/">
    <div class="form-group ">
        <label>First Name</label>
        <input type="text" class="form-control" name="first_name" placeholder="Enter first name">
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name="last_name" placeholder="Enter last name">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="Enter email address">
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter Password">
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="password2" placeholder="confirm password">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Register</button>
</form>