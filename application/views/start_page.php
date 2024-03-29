<?php  $this->load->view('start_page_header'); ?>
<!-- #0b1c38 -->
<!-- #56cc24 -->

  <!-- Content -->
  <section class="bg0 p-b-140 p-t-10">
    <div class="container">
      <div class="row justify-content-center"> 
        
        <!-- Sidebar -->
        <div class="col-md-10 col-lg-4 p-b-30 p-l-20">
          <div class="p-l-10 p-rl-0-sr991 p-t-70">            
            <!-- Category -->
            <div class="p-b-60">
              <div class="how2 how2-cl4 flex-s-c">
                <h3 class="f1-m-2 cl3 tab01-title">Latest News</h3>
              </div>

              <ul class="p-t-35">
                <?php if( count($news_list) ): ?>
                  <?php foreach( $news_list as $row ): ?>
                    <li class="how-bor3 p-rl-4 m-t-10"><?=$row->news ?></li>
                  <?php endforeach; ?>
                <?php endif; ?>       
              </ul>
            </div>

            <!-- Archive -->
            
            <div class="p-t-50">
              <div class="how2 how2-cl4 flex-s-c">
                <h3 class="f1-m-2 cl3 tab01-title">
                  Stay Connected
                </h3>
              </div>

              <ul class="p-t-35">
                <li class="flex-wr-sb-c p-b-20">
                  <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
                    <span class="fab fa-facebook-f"></span>
                  </a>

                  <div class="size-w-3 flex-wr-sb-c">
                    <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">Like</a>
                  </div>
                </li>

                <li class="flex-wr-sb-c p-b-20">
                  <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
                    <span class="fab fa-google-plus-g"></span>
                  </a>

                  <div class="size-w-3 flex-wr-sb-c">
                    </span>

                    <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">Follow</a>
                  </div>
                </li>

                <li class="flex-wr-sb-c p-b-20">
                  <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
                    <span class="fab fa-twitter"></span>
                  </a>

                  <div class="size-w-3 flex-wr-sb-c">
                    <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">Follow</a>
                  </div>
                </li>

                <li class="flex-wr-sb-c p-b-20">
                  <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
                    <span class="fab fa-pinterest"></span>
                  </a>

                  <div class="size-w-3 flex-wr-sb-c">
                    </span>

                    <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">Follow</a>
                  </div>
                </li>

                <li class="flex-wr-sb-c p-b-20">
                  <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
                    <span class="fab fa-linkedin-in"></span>
                  </a>

                  <div class="size-w-3 flex-wr-sb-c">
                    </span>

                    <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">Follow</a>
                  </div>
                </li>

                <li class="flex-wr-sb-c p-b-20">
                  <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-success fs-16 cl0 hov-cl0">
                    <span class="fas fa-envelope"></span>
                  </a>

                  <div class="size-w-3 flex-wr-sb-c">
                    </span>

                    <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">Follow</a>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </div>

        <!-- Main content -->
        <div class="col-md-10 col-lg-8 p-b-30 p-l-20">
          <div class="row">          
            <h1 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">JOURNAL OF ENGINEERING MANAGEMENT AND RESEARCH</h1>
            <p class="f1-s-11 cl6 p-b-25">
               JEMR welcomes researchers and academicians to submit their original research work which meets the journal criteria of significance and scientific excellence. IJERMCE is scholarly online open access and peer received journals emphasising on research studies and application in field of Mechanical and Civil. Researchers are requested to submit their original articles online for a peer review and analysis before its publication. The editorial board encourages academician, research scholars and partitions to publish their articles related to Mechanical and Civil and relevant fields.
            </p>
            <p class="f1-s-11 cl6 p-b-10">
               The Subject areas Includes:
            </p>
            <p class="f1-s-11 cl6 p-b-10">
               Accountings, Finance, Management Accounting, Business, Commerce, Corporate Governance, Financial Accounting, Arts, Fine Arts, Designing, Medical, Bio-medical, Clinical Research, Home Science, Medical Science, Anatomy, Anesthesiology, Ayurveda, Biochemistry, Cardiology, Clinical Research, Clinical Science, Community Medicine, Dental Science, Dermatology, Diabetology, Electrotherapy, Endocrinology, Endodontic, ENT, Epidemiology, Forensic Medicine, Forensic Science, Gastroenterology, General Medicine, General Surgery, Genetics, Gynaecology, Health Science, Healthcare, Hepatobiliary Surgery, Homeopathic, Human Genetics, Immunohaematology, Immunology, Medical Physics, Medical Science, Medicine, Microbiology, Morphology, Neonatology, Nephrology, Neurology, Neurosurgery, Nursing, Gynaecology, Oncology, Ophthalmology, Oral Medicine, Oral Pathology, Orthodontology, Orthopaedics, Paediatrics, Pathology, Periodontology, Pharma, Otolaryngology, Pharmaceutical, Pharmacology, Pharmacy, Physiology, Physiotherapy, Plastic Surgery, Prosthodontics, Psychiatry, Pulmonary Medicine, Radiodiagnosis, Radiology, Rehabilitation Science, Rheumatology, Surgery, Unani Medicine, Urology,Psychology, Human ideology, Sociology, Economics, Education, Engineering, Electronics, Electrical, Information technology, Computer Science, Management, Organization behaviour, Organization psychology, Marketing. etc.
            </p>


            <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">Benefits of JEMR Publication:</h3>
            <ul style="background: #e7eef7;padding: 20px;border: 1px solid #dedfe7;">
              <li>1. Quality Publication with Reasonable time</li>
              <li>2. Indexed Journal with Cross Ref, Google Scholar, Index Copernicus etc</li>
              <li>3. Publication Acceptable in India and Over 100 Countries</li>
              <li>4. Scientific Peer Reviewed Process</li>
              <li>5. Open Access Journal for Better High visibility and promotion</li>
            </ul>


            <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">Most Popular Articles of the Month</h3>
            <div class="container">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" style="background: #222;color: #fff;
                font-family:Arial;">
                  <div class="item active">
                    <table style="width:100%;">
                      <tbody>
                        <tr>
                          <td class="p-l-30 p-b-20">Title</td>
                          <td class="p-l-30 p-b-20">: <?=$get_latest_3_article_list[0]['title']?></td>
                        </tr>
                        <tr>
                          <td class="p-l-30 p-b-20">Author</td>
                          <td class="p-l-30 p-b-20">: <?=$get_latest_3_article_list[0]['name']?></td>
                        </tr>
                        <tr>
                          <td class="p-l-30 p-b-20">Subject</td>
                          <td class="p-l-30 p-b-20">: <?=$get_latest_3_article_list[0]['article_subject']?></td>
                        </tr>
                      </tbody>
                    </table>
                    <a class="m-b-40 m-l-40 p-1" style="color:#222;background-color: #fff;display: inline-block;" href="https://docs.google.com/viewerng/viewer?url=<?=base_url('uploads/'.$get_latest_3_article_list[0]['doc_link'] );?>">Read More</a>                   
                  </div>
                 
                  <div class="item">
                    <table style="width:100%;">
                      <tbody>
                        <tr>
                          <td class="p-l-30 p-b-20">Title</td>
                          <td class="p-l-30 p-b-20">: 
                            <?=$get_latest_3_article_list[1]["title"]?>                        
                          </td>
                        </tr>
                        <tr>
                          <td class="p-l-30 p-b-20">Author</td>
                          <td class="p-l-30 p-b-20">: 
                            <?=$get_latest_3_article_list[1]["name"]?>
                          </td>
                        </tr>
                        <tr>
                          <td class="p-l-30 p-b-20">Subject</td>
                          <td class="p-l-30 p-b-20">:
                            <?=$get_latest_3_article_list[1]["article_subject"]?>
                          </td>
                        </tr>
                      </tbody>
                    </table> 
                    <a class="m-b-40 m-l-40 p-1" style="color:#222;background-color: #fff;display: inline-block;" href="https://docs.google.com/viewerng/viewer?url=<?=base_url('uploads/'.$get_latest_3_article_list[1]['doc_link'])?>">Read More</a>                   
                  </div>
                
                  <div class="item">
                    <table style="width:100%;">
                      <tbody>
                        <tr>
                          <td class="p-l-30 p-b-20">Title</td>
                          <td class="p-l-30 p-b-20">: 
                            <?=$get_latest_3_article_list[2]["title"]?>                        
                          </td>
                        </tr>
                        <tr>
                          <td class="p-l-30 p-b-20">Author</td>
                          <td class="p-l-30 p-b-20">: 
                            <?=$get_latest_3_article_list[2]["name"]?>
                          </td>
                        </tr>
                        <tr>
                          <td class="p-l-30 p-b-20">Subject</td>
                          <td class="p-l-30 p-b-20">:
                            <?=$get_latest_3_article_list[2]["article_subject"]?>
                          </td>
                        </tr>
                      </tbody>
                    </table> 
                    <a class="m-b-40 m-l-40 p-1" style="color:#222;background-color: #fff;display: inline-block;" href="https://docs.google.com/viewerng/viewer?url=<?=base_url('uploads/'.$get_latest_3_article_list[2]['doc_link'])?>">Read More</a>                   
                  </div>
              
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>                               
          </div>
        </div>             
      </div>
    </div>
  </section>

  <?php  $this->load->view('start_page_footer'); ?>