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
              <h4 class="card-title">Your documents</h4>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Sr no.</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Subject</th>
                            <th>Checked</th>
                            <th>Approved</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="py-1">1</td>
                            <td>Computer Networks</td>
                            <td>12-12-2012</td>
                            <td>Computer</td>
                            <td>Yes</td>
                            <td>Yes</td>
                          </tr>
                          <tr>
                            <td class="py-1">1</td>
                            <td>Computer Networks</td>
                            <td>12-12-2012</td>
                            <td>Computer</td>
                            <td>Yes</td>
                            <td>Yes</td>
                          </tr>
                          <tr>
                            <td class="py-1">1</td>
                            <td>Computer Networks</td>
                            <td>12-12-2012</td>
                            <td>Computer</td>
                            <td>Yes</td>
                            <td>Yes</td>
                          </tr>
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