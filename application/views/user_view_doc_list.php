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
              <h4>Your Articles</h4><br>              
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Sr no.</th>
                      <th>Title</th>
                      <th>Subject</th>
                      <th>Document</th>
                      <th>Approved</th>
                      <th>Paid</th>
                      <th>Published</th>
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
                    <?php if($doc_list != 0 && count($doc_list) ): ?>
                      <?php foreach( $doc_list as $row ): ?>
                        <tr>
                          <td><?= getSR(); ?></td>
                          <td><?= $row->title ?></td>
                          <td><?= $row->article_subject ?></td>
                          <td><?= $row->doc_link ?></td>
                          <td><?= $row->approved ?></td>
                          <td><?= $row->paid ?></td>                                
                          <td><?= $row->published ?></td>                                
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
 <?php  $this->load->view('user_footer'); ?>