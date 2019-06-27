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

              <!-- user details -->
              <h4>Editorial Profile</h4><br>
              <p style="color:green;"><?php if( $info = $this->session->flashdata('info')) echo($info); ?></p>
              <form class="form-sample" method="post" action="../Admin/update_editorial_profile">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9"> 
                        <input type="text" class="form-control" required="true" name="name" value="<?=$this->session->userdata('editorial_name') ?>"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" required="true" name="email" value="<?=$this->session->userdata('editorial_email') ?>"/>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Position</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="position" required="true" value="<?=$this->session->userdata('editorial_position') ?>"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Address</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="address" value="<?=$this->session->userdata('editorial_address') ?>"/>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Publications</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" name="publications"><?=$this->session->userdata('editorial_publications') ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>                 
                <button type="submit" class="btn btn-primary mr-2">Update</button>
                <a href="../Admin/delete_editorial/<?=$this->session->userdata('editorial_id') ?>" class="btn btn-danger mr-2">Delete editorial</a>
              </form><br><br>          

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  
    
 <!-- footer and end -->   
 <?php  $this->load->view('admin_footer'); ?>