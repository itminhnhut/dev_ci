<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form</title>
     <!--link the bootstrap css file-->
     <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>assets/js/admin.js"></script>
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/admin/admin.css">
     <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>

     <div class="container">
          <div class="row">
               <div class="col-lg-4 col-sm-4 well">
                    <?php
                    $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
                    echo form_open("login/index", $attributes);?>

                    <input type="hidden" name="token" value="<?php echo $token ?>" />

                    <fieldset>
                         <legend>Login</legend>
                         <div class="form-group">
                              <div class="row colbox">
                                   <div class="col-lg-12 col-sm-12">
                                        <span class="icon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                                        <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
                                   </div>
                              </div>
                         </div>

                         <div class="form-group">
                              <div class="row colbox">
                                   <div class="col-lg-12 col-sm-12">
                                        <span class="icon"><i class="fa fa-lock"></i></span>
                                        <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                                        <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
                                   </div>
                              </div>
                         </div>

                         <div class="form-group">
                              <div class="col-lg-12 col-sm-12 text-center fr_login">
                                   <input id="btn_login" name="btn_login" type="submit" class="btn btn-default left" value="Login" />
                                   <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default right" value="Cancel" />
                                   <div style="clear: both;"></div>
                              </div>
                         </div>
                    </fieldset>
                    <?php echo form_close(); ?>
                    <?php echo $this->session->flashdata('msg'); ?>
               </div>
          </div>
     </div>

     <!--load jQuery library-->
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <!--load bootstrap.js-->
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>