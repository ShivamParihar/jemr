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
              <h4>Articles</h4><br>              
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Sr no.</th>
                        <th>Title</th>
                        <th>Subject</th>
                        <th>Article</th>
                        <th>View</th>
                        <th>Approve</th>
                        <th>Publish</th>
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
                      <?php if( count($doc_list) ): ?>
                        <?php foreach( $doc_list as $row ): ?>
                          <tr>
                            <td><?= getSR(); ?></td>
                            <td><?= $row->title ?></td>
                            <td><?= $row->article_subject ?></td>
                            <td><?= $row->doc_link ?></td>
                            <td>
                              <a class="btn pt-1 pb-1 pl-2 pr-2" style="background-color:#1DB6F0;color:white;" href="../Admin/view_doc_list/<?= $row->main_doc_id?>">
                                <i class="mdi mdi-file-pdf menu-icon"></i>
                              </a>
                            </td>
                            <td>
                              <?php 
                                $approved = $row->approved;
                                if($approved == 1)
                                  echo 'Approved';
                                else if($approved == 2)
                                  echo 'Disapproved';
                                else
                                  echo '<a class="btn pt-1 pb-1 pl-2 pr-2" style="background-color:green;color:white;"  href="../Admin/approve_doc/'.$row->main_doc_id.'/'.$row->doc_id.'">
                                          <i class="mdi mdi-checkbox-marked-circle-outline menu-icon"></i>
                                        </a>
                                        <a class="btn pt-1 pb-1 pl-2 pr-2" style="background-color:#FF3737;
                                        color:white;"  href="../Admin/disapprove_doc/'.$row->main_doc_id.'/'.$row->doc_id.'">
                                          <i class="mdi mdi-window-close menu-icon"></i>
                                        </a>';
                              ?>                              
                            </td>
                            <td>
                              <?php 
                                if($row->published)
                                  echo 'Published';
                                else
                                  echo '<a class="btn pt-1 pb-1 pl-2 pr-2" style="background-color:orange;color:white;"  href="../Admin/publish_doc/'.$row->main_doc_id.'/'.$row->doc_id.'">
                                          <i class="mdi mdi-upload menu-icon"></i>
                                        </a>';
                              ?>
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