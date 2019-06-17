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
              <h4 class="card-title">Upload New Document</h4>
              
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputCity1">Title*</label>
                  <input type="text" class="form-control" id="exampleInputCity1" placeholder="Title">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputCity1">Article Subject*</label>
                  <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                </div>
                
                <div class="form-group">
                  <label>File upload*</label>
                  <input type="file" name="img[]" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload document">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    
 <!-- footer and end -->   
 <?php  $this->load->view('user_footer'); ?>