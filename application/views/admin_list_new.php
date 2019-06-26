<!-- header -->
<?php  $this->load->view('admin_header'); ?>


<div class="container-fluid page-body-wrapper">

  <!-- sidebar -->
  <?php  $this->load->view('admin_sidebar'); ?>
  

  <!-- main content -->
  <div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4>Submission</h4><br>              
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Sr no.</th>
                      <th>User name</th>
                      <th>User Email</th>
                      <th>Time</th>
                      <th>Uploaded</th>
                      <th>Payment</th>
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
                    <?php if( count($main_doc_list) ): ?>
                      <?php foreach( $main_doc_list as $row ): ?>
                        <tr>
                          <td><?= getSR(); ?></td>
                          <td><?= $row->name ?></td>
                          <td><?= $row->email ?></td>
                          <td><?= $row->upload_time ?></td>
                          <td><?= $row->doc_uploaded ?></td>
                          <td><?php if($row->paid) echo 'Done'; else echo 'Pending';?></td>
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