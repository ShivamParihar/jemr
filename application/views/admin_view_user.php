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
              <h4>User Profile</h4>
              <p style="color:green;"><?php if( $info = $this->session->flashdata('info')) echo($info); ?></p>
              <form class="form-sample" method="post" action="../Admin/update_user_profile">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9"> 
                        <input type="text" class="form-control" name="name" value="<?=$this->session->userdata('user_name') ?>"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" value="<?=$this->session->userdata('user_email') ?>"/>
                      </div>
                    </div>
                  </div>
                </div>                 
                <button type="submit" class="btn btn-primary mr-2">Update</button>
                <a href="../Admin/delete_user/<?=$this->session->userdata('user_user_id') ?>" class="btn btn-danger mr-2">Delete user</a>
              </form><br><br>

              <!-- user submissions -->
              <h4>Submissions</h4>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Sr no.</th>
                      <th>Time</th>
                      <th>Uploaded</th>
                      <th>Checked</th>
                      <th>Approved</th>
                      <th>Payment</th>
                      <th>Published</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <?php
                    function getSR(){
                        static $sr=0;
                        $sr++;
                        return $sr;
                    }
                  ?> 
                  <tbody>
                    <?php if( count($user_main_doc_list) ): ?>
                      <?php foreach( $user_main_doc_list as $row ): ?>
                        <tr>
                          <td><?= getSR(); ?></td>
                          <td><?= $row->upload_time ?></td>
                          <td><?= $row->doc_uploaded ?></td>
                          <td><?php if($row->doc_uploaded == $row->checked) echo 'Done'; else echo 'Pending';?></td>
                          <td><?= $row->doc_approved ?></td>
                          <td><?php if($row->paid) echo 'Done'; else echo 'Pending';?></td>
                          <td><?php if($row->doc_published) echo 'Done'; else echo 'Pending';?></td>
                          <td>
                            <a class="btn pt-1 pb-1 pl-2 pr-2" style="background-color:#1DB6F0;color:white;" href="../Admin/view_doc_list/<?= $row->main_doc_id?>">
                              <i class="mdi mdi-application menu-icon"></i>
                            </a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>                          
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  
    
 <!-- footer and end -->   
 <?php  $this->load->view('admin_footer'); ?>