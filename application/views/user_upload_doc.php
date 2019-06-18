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
              
              <div class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputCity1">Title*</label>
                  <input type="text" class="form-control" id="title" placeholder="Title">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputCity1">Article Subject*</label>
                  <input type="text" class="form-control" id="subject" placeholder="Article subject">
                </div>
                
                <div class="form-group">
                  <label>File upload*</label>
                  <input type="file" id="file" name="file" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload document">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
                <button id="add" class="btn btn-primary mr-2">Add</button>
              </div>


            </div>
          </div>
        </div>    
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                   
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Subject</th>
                        <th>File</th>
                        <th>Remove</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input class="myinput" name="title" type="text" value="Computer Networks"></td>
                        <td><input class="myinput" name="subject" type="text" value="Computer"></td>
                        <td><input class="myinput" name="file" type="text" value="C://ACB.txt"></td>
                        <td>
                          <button class="btn pt-1 pb-1 pl-2 pr-2 mydelete" style="background-color:red;color:white;"><i class="mdi mdi-delete menu-icon"></i></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
              </form>  
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../../assets/js/add_remove_upload.js"></script>
    <!-- content-wrapper ends -->
    
 <!-- footer and end -->   
 <?php  $this->load->view('user_footer'); ?>