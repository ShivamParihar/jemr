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
              <h4>Upload New Document</h4><br>
              
              <form class="forms-sample" method="post" action="../User/user_upload_doc">

                <div class="form-group">
                  <label for="exampleInputCity1">Title*</label>
                  <input type="text" class="form-control" id="title" placeholder="Title">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputCity1">Article Subject*</label>
                  <select class="form-control" name="article_subject">
                    <?php if( count($subject_list) ): ?>
                      <?php foreach( $subject_list as $row ): ?>
                        <option value="<?= $row->article_subject ?>"><?= $row->article_subject ?></option>
                      <?php endforeach; ?>
                    <?php endif; ?>                           
                  </select> 
                </div>
                
                <div class="form-group">
                  <label>File upload*</label>
                  <input type="file" id="file" name="file" class="file-upload-default"  accept=".doc,.docx">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload document">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputCity1">I/We Agree*</label><br>
                  <input type="checkbox" id="title" required>
                  <span>I Acknowledge that attached file carries Authors Name & Designations on first page of the Manuscript.</span>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Add</button>
              </form>


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