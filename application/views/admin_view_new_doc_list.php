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
                              <a class="btn pt-1 pb-1 pl-2 pr-2" style="background-color:#1DB6F0;color:white;" href="https://docs.google.com/viewerng/viewer?url=<?=base_url('uploads/'. $row->doc_link);?>">
                                <i class="mdi mdi-file-pdf menu-icon"></i>
                              </a>

                              <!-- <div class="form-popup" id="myForm" style="display: none;position: fixed;top:10%;left:10%;width:80%;height:80%;border: 3px solid #333;z-index: 99999;background-color: white;padding :20px;overflow: scroll;">
                                <div class="m-tb-20" style="text-align:center;">
                                  <button type="button" class="cancel btn btn-danger m-b-10" onclick="closePopUp()">Close</button>                  
                                </div> 
                                <iframe id="step2-pdf" src="https://docs.google.com/gview?url=https://easychair.org/publications/easychair.docx&embedded=true" frameborder="0" height="100%" width="100%"></iframe>
                              </div>    -->                        
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