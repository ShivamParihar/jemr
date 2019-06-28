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

              <!-- profile -->
              <h4>Profile</h4>
              <p style="color:green;"><?php if( $info = $this->session->flashdata('info')) echo($info); ?></p>
              <form class="form-sample" method="post" action="../Admin/update_profile">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" value="<?=$this->session->userdata('name') ?>" required="true"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" value="<?=$this->session->userdata('email') ?>" required="true"/>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input id="mypassword" type="password"  name="password" class="form-control" value="<?=$this->session->userdata('password') ?>" required="true"/>
                        <input type="checkbox" onclick="passwordToggle()">Show Password
                      </div>
                    </div>
                  </div>                  
                </div>
                <button type="submit" class="btn btn-primary mr-2">Update</button>
              </form><br><br><hr>

              <!-- news form -->
              <h4>Add Latest news</h4><br>
              <form class="form-sample" method="post" action="../Admin/add_latest_news">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-1 col-form-label">News</label>
                      <div class="col-sm-11">
                        <input type="text" class="form-control" name="news" required="true" />
                      </div>
                    </div>
                  </div>                  
                </div>                 
                <button type="submit" class="btn btn-primary mr-2">Add</button>
              </form><br><br><hr>

              <!-- news table -->
              <h4>Latest news</h4><br>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Sr no.</th>
                      <th>News</th>
                      <th>Remove</th>
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
                    <?php if( count($news_list) ): ?>
                      <?php foreach( $news_list as $row ): ?>
                        <tr>
                          <td><?= getSR(); ?></td>
                          <td><?= $row->news ?></td>
                          <td>
                            <a class="btn pt-1 pb-1 pl-2 pr-2" style="background-color:#FF3737;color:white;" href="../Admin/remove_news/<?= $row->news_id?>">
                              <i class="mdi mdi-window-close menu-icon"></i>
                            </a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>                          
                  </tbody>
                </table>
              </div><br><br><hr>

              <!-- subject form -->
              <h4>Add Article subject</h4><br>
              <form class="form-sample" method="post" action="../Admin/add_article_subject">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Subject</label>
                      <div class="col-sm-11">
                        <input type="text" class="form-control" name="subject" required="true" />
                      </div>
                    </div>
                  </div>                  
                </div>                 
                <button type="submit" class="btn btn-primary mr-2">Add</button>
              </form><br><br><hr>

              <!-- subject table -->
              <h4>Subjects</h4><br>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Sr no.</th>
                      <th>Subject</th>
                      <th>Remove</th>
                    </tr>
                  </thead>
                  <?php
                    function getSR1(){
                        static $sr=0;
                        $sr++;
                        return $sr;
                    }
                  ?> 
                  <tbody>
                    <?php if( count($subject_list) ): ?>
                      <?php foreach( $subject_list as $row ): ?>
                        <tr>
                          <td><?= getSR1(); ?></td>
                          <td><?= $row->article_subject ?></td>
                          <td>
                            <a class="btn pt-1 pb-1 pl-2 pr-2" style="background-color:#FF3737;color:white;" href="../Admin/remove_news/<?= $row->article_subject_id?>">
                              <i class="mdi mdi-window-close menu-icon"></i>
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