<!-- header -->
<?php  $this->load->view('admin_header'); ?>


<div class="container-fluid page-body-wrapper">

  <!-- sidebar -->
  <?php  $this->load->view('admin_sidebar'); ?>
  

 <div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4>Profile</h4>
              <p style="color:green;"><?php if( $info = $this->session->flashdata('info')) echo($info); ?></p>
              <form class="form-sample" method="post" action="../Admin/update_profile">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" value="<?=$this->session->userdata('name') ?>"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" value="<?=$this->session->userdata('email') ?>"/>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input id="mypassword" type="password"  name="password" class="form-control" value="<?=$this->session->userdata('password') ?>"/>
                        <input type="checkbox" onclick="passwordToggle()">Show Password
                      </div>
                    </div>
                  </div>                  
                </div>
                <button type="submit" class="btn btn-primary mr-2">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  
    
 <!-- footer and end -->   
 <?php  $this->load->view('admin_footer'); ?>