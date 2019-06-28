<?php  $this->load->view('start_page_header'); ?>

  <!-- Content -->
  <section class="bg0 p-b-140 p-t-10">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 p-b-30">
          <div class="p-r-10 p-r-0-sr991">
            <!-- Blog Detail -->
            <div class="p-b-70">
            <div class="table-responsive">
                <table class="table table-striped table-condensed">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">TABLE OF CONTENT</th>
                      <th scope="col">SUBJECT</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if( count($article_list) ): ?>
                      <?php foreach( $article_list as $row ): ?>
                        <tr>
                          <td>
                            <a href="https://docs.google.com/viewerng/viewer?url=<?=base_url('uploads/'. $row->doc_link);?>" style="text-decoration: none;color:#333;">
                              <h2><b><?= $row->title ?></b></h2>
                              <p><?= $row->name ?></p>                            
                            </a>

                            <a href="" class="my-table-btn">Journal DOI : <?= $row->upload_time ?></a>

                            <a href="https://docs.google.com/viewerng/viewer?url=<?=base_url('uploads/'. $row->doc_link);?>" class="my-table-btn">Certificate</a>
                            
                            <a href="../Start/start_download/<?=$row->doc_link;?>" class="my-table-btn">Download Pdf</a>
                          </td>
                          <td  style="width: 100px;"><?= $row->article_subject ?></td>
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
  </section>

  <?php  $this->load->view('start_page_footer'); ?>