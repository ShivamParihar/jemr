<!-- header -->
<?php  $this->load->view('user_header'); ?>


<div class="container-fluid page-body-wrapper">

  <!-- sidebar -->
  <?php  $this->load->view('user_sidebar'); ?>
  

  <!-- main content -->
  <div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4>Your Submission</h4><br>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Sr no.</th>
                            <th>Time</th>
                            <th>Uploaded</th>
                            <th>Approved</th>
                            <th>Paid</th>
                            <th>Published</th>
                            <th>View</th>
                            <th>Pay</th>
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
                                <td><?= $row->upload_time ?></td>
                                <td><?= $row->doc_uploaded ?></td>
                                <td><?= $row->doc_approved ?></td>
                                <td><?= $row->paid ?></td>
                                <td><?= $row->doc_published ?></td>
                                <td>
                                  <a class="btn pt-1 pb-1 pl-2 pr-2" style="background-color:blue;color:white;" href="../User/view_doc_list/<?= $row->main_doc_id?>">
                                    <i class="mdi mdi-application menu-icon"></i>
                                  </a>
                                </td>
                                <td>
                                  <a class="btn pt-1 pb-1 pl-2 pr-2 mydelete" style="background-color:green;color:white;" href="">
                                    <i class="mdi mdi-coin menu-icon"></i>
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
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    
 <!-- footer and end -->   
 <?php  $this->load->view('user_footer'); ?>