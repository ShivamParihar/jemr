<!DOCTYPE html>
<html lang="en">
<head>
  <title>JEMR</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/jpg" href="../../assets/images/logo1.jpg">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../assets/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="../../assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/util.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="../../assets/css/main1.css">
<!--===============================================================================================-->
<style>
  .header-top-right {
    float: right;
    padding-top: 30px;
  }
  .logo-text {
    float: left;
    padding-top: 30px;
    padding-left: 30px;
  }
  .left-topbar-item, .right-topbar a{
     font-size: 15px;
  }
  .table thead th{
    background-color: #222222;
    color: white;
  }
  .body{
    color: black;
  }
  .carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: block;
    max-width: 100%;
    height: auto;
  }
  .carousel {
    position: relative;
  }
  .carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
  }
  .carousel-inner>.item {
      position: relative;
      display: none;
      padding: 20px;
      -webkit-transition: .6s ease-in-out left;
      -o-transition: .6s ease-in-out left;
      transition: .6s ease-in-out left;
  }
  .carousel-inner>.item>a>img, .carousel-inner>.item>img {
      line-height: 1;
  }
@media all and (transform-3d), (-webkit-transform-3d) {
  .carousel-inner>.item {
    -webkit-transition: -webkit-transform .6s ease-in-out;
    -o-transition: -o-transform .6s ease-in-out;
    transition: -webkit-transform .6s ease-in-out;
    transition: transform .6s ease-in-out;
    transition: transform .6s ease-in-out, -webkit-transform .6s ease-in-out, -o-transform .6s ease-in-out;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
    padding: 20px;
  }

  .carousel-inner>.item.active.right, .carousel-inner>.item.next {
      -webkit-transform: translate3d(100%, 0, 0);
      transform: translate3d(100%, 0, 0);
      left: 0;
  }
  .carousel-inner>.item.active.left, .carousel-inner>.item.prev {
      -webkit-transform: translate3d(-100%, 0, 0);
      transform: translate3d(-100%, 0, 0);
      left: 0;
  }
  .carousel-inner>.item.active, .carousel-inner>.item.next.left, .carousel-inner>.item.prev.right {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
      left: 0;
  }
}
.carousel-inner>.active, .carousel-inner>.next, .carousel-inner>.prev {
    display: block;
}
.carousel-inner>.active {
    left: 0;
}
.carousel-inner>.next, .carousel-inner>.prev {
    position: absolute;
    top: 0;
    width: 100%}
.carousel-inner>.next {
    left: 100%
  }
.carousel-inner>.prev {
    left: -100%
  }
.carousel-inner>.next.left, .carousel-inner>.prev.right {
    left: 0;
}
.carousel-inner>.active.left {
    left: -100%
  }
.carousel-inner>.active.right {
    left: 100%
  }
.carousel-control {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 15%;
    font-size: 20px;
    color: #fff;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
    background-color: rgba(0, 0, 0, 0);
    filter: alpha(opacity=50);
    opacity: .5;
}
.carousel-control.left {
    background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
    background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
    background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000',  endColorstr='#00000000',  GradientType=1);
    background-repeat: repeat-x;
}
.carousel-control.right {
    right: 0;
    left: auto;
    background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
    background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
    background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',  endColorstr='#80000000',  GradientType=1);
    background-repeat: repeat-x;
}
.carousel-control:focus, .carousel-control:hover {
    color: #fff;
    text-decoration: none;
    outline: 0;
    filter: alpha(opacity=90);
    opacity: .9;
}
.carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next, .carousel-control .icon-prev {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -10px;
}
.carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev {
    left: 50%;
    margin-left: -10px;
}
.carousel-control .glyphicon-chevron-right, .carousel-control .icon-next {
    right: 50%;
    margin-right: -10px;
}
.carousel-control .icon-next, .carousel-control .icon-prev {
    width: 20px;
    height: 20px;
    font-family: serif;
    line-height: 1;
}
.carousel-control .icon-prev:before {
    content: "\2039"
  }
.carousel-control .icon-next:before {
    content: "\203a"
  }
.carousel-indicators {
    position: absolute;
    bottom: 10px;
    left: 50%;
    z-index: 15;
    width: 60%;
    padding-left: 0;
    margin-left: -30%;
    text-align: center;
    list-style: none;
}
.carousel-indicators li {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 1px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #000\9;
    background-color: rgba(0, 0, 0, 0);
    border: 1px solid #fff;
    border-radius: 10px;
}
.carousel-indicators .active {
    width: 12px;
    height: 12px;
    margin: 0;
    background-color: #fff;
}
.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
}
.carousel-caption .btn {
    text-shadow: none;
}
@media screen and (min-width:768px) {
  .carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next, .carousel-control .icon-prev {
    width: 30px;
    height: 30px;
    margin-top: -10px;
    font-size: 30px;
}
.carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev {
    margin-left: -10px;
}
.carousel-control .glyphicon-chevron-right, .carousel-control .icon-next {
    margin-right: -10px;
}
.carousel-caption {
    right: 20%;
    left: 20%;
    padding-bottom: 30px;
}
.carousel-indicators {
    bottom: 20px;
}
}
.my-table-btn, .my-table-btn:hover{
  font-size:12px;
      color: #FFFFFF;
      background-color: #1658B3 ;
          border-radius: 20px;
    font-size: 12px !important;
    padding: 3px 10px;
  }

  @media screen and (max-width:768px) {
    .my-table-btn, .my-table-btn:hover{
  font-size:12px !important;
      color: #FFFFFF !important;
      background-color: #1658B3  !important;
          border-radius: 20px !important;
    font-size: 12px !important;
    padding: 3px 10px !important;
  }
  }


.header-left{
  text-align:right;
}
.header-middle{
  text-align: left;
  text-transform:uppercase;
}
.header-middle > h1{
  font-size: 50px;
  color: #333;  
  border-radius: 15px;
}
.header-right{
  text-align: left;
}
@media only screen and (max-width: 768px){
    .header-left{
    text-align:center;
  }
  .header-middle{
    text-align: center;
  }
  .header-right {
    text-align: center;
  }
}
.form-inline {
    justify-content: center;
} 
</style>
</head>
<body class="animsition">
  
  <!-- Header -->
  <header>
    <!-- Header desktop -->
    <div class="container p-b-20">
      <div class="row" style="color:#000;">

        <!-- Image -->
        <div class="col-md-3 header-left">
          <img src="../../assets/images/logo1.jpg" alt="Paripex - Indian Journal Of Research"width="200px" height="200px">          
        </div>

        <!-- middle-content -->
        <div class="col-md-6 m-t-10 header-middle">
          <h1>JEMR</h1>
          <h3><strong>Journal of Engineering Management And Research</strong></h3>
          <h3>PRINT ISSN NO 2250 - 1991</h3>
          <h3><strong>PEER REVIEW, INTERNATIONAL JOURNAL</strong></h3>
          <h3><strong>JOURNAL DOI : 10.15373/22501991</strong></h3>
        </div>
        <!-- right-side-content -->
        <div class="col-md-3 header-right">          
          <span>             
            <h3 class="m-t-50">
              <i class="fa fa-calendar"></i>
              &nbsp;<?= date("l jS \of F Y")?><br>
            </h3>
            <!-- <h3><i class="fa fa-clock"></i><span style="margin-left:4px;padding: 1px;"><span id="txt" style="font-size: 13px;">3:45:43 PM</span></span></h3> -->
          </span>
          <h3 ><i class="fa fa-envelope"></i><a href="mailto: editor@paripex.in"> editor@paripex.in</a></h3>
          <h3 ><i class="fa fa-phone"></i> +91 88 66 00 3636</h3>
          <h3 ><i class="fa fa-phone"></i> +91 88 66 11 3636</h3>
            
        </div>
      </div>
    </div>
    <!-- <div class="row">
      <div class="container clearfix header-top">
                  <div id="logo">          
          <span style="font-size: 16px;">International Journal</span>             </div>
        
        <div class="logo-text">
          <span> paripex-indian journal of research </span>
          <label>PRINT ISSN NO 2250 - 1991</label>               
          <label><a target="_blank" title="PEER REVIEW, INTERNATIONAL JOURNAL">PEER REVIEW, INTERNATIONAL JOURNAL</a></label>
          <label style="color:#000000;">Journal DOI : 10.15373/22501991</label>
        </div>
        <div class="header-top-right">
          <span>                <br><br>
              <p style="margin-top: -30px;"><i class="fa fa-calendar"></i>&nbsp;Tuesday, Jun,18<sup>th</sup>, 2019,&nbsp;<br></p><p style="font-size: 16px;"><i class="fa fa-clock-o"></i><span style="margin-left:4px;padding: 1px;"><span id="txt" style="font-size: 13px;">5:44:57 PM</span></span></p><p></p></span>
          <p style="font-size: 17px;"><i class="fa fa-envelope"></i><a href="mailto: editor@paripex.in">  editor@paripex.in</a></p>
          <p style="font-size: 17px;"><i class="fa fa-phone"></i> +91 88 66 00 3636</p>
          <p style="font-size: 18px;"><i class="fa fa-phone"></i> +91 88 66 11 3636</p>
        </div>
      </div>
    </div> -->
    <div class="container-menu-desktop m-b-30">
      <div class="topbar">
        <div class="content-topbar container h-100">
          <div class="left-topbar">
            <a href="../Start/home" class="left-topbar-item">Home</a>
            <a href="../Start/current_issue" class="left-topbar-item">Current Issue</a>
            <a href="../Start/editorial_board" class="left-topbar-item">Editorial Board</a>
            <a href="../Start/about_us" class="left-topbar-item">About Us</a>
            <a href="../Start/contact_us" class="left-topbar-item">Contact Us</a>
          </div>

          <div class="right-topbar" style="font-size: 15px;">
            <!-- <a href="#"><span class="fab fa-facebook-f"></span></a>
            <a href="#"><span class="fab fa-twitter"></span></a> -->
            <a href="../LoginController">Sign in</a>
            <a href="../LoginController/register_view">Sign up</a>           
          </div>
        </div>
      </div>

      <!-- Header Mobile -->
      <div class="wrap-header-mobile">
        <!-- Logo moblie -->    
        <!-- <div class="logo-mobile">JERM</div> -->

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </div>
      </div>

      <!-- Menu Mobile -->
      <div class="menu-mobile">
        <ul class="topbar-mobile">
          <li class="left-topbar"><a href="../Start/home" class="left-topbar-item">Home</a></li>
          <li class="left-topbar"><a href="../Start/current_issue" class="left-topbar-item">Current Issue</a></li>
          <li class="left-topbar"><a href="../Start/editorial_board" class="left-topbar-item">Editorial Board</a></li>  
          <li class="left-topbar"><a href="../Start/about_us" class="left-topbar-item">About Us</a></li>
          <li class="left-topbar"><a href="../Start/contact_us" class="left-topbar-item">Contact Us</a></li>

         <!--  <li class="right-topbar"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
          <li class="right-topbar"><a href="#"><span class="fab fa-twitter"></span></a></li> -->
          <li class="right-topbar"><a href="LoginController">Sign in</span></a></li>
          <li class="right-topbar"><a href="LoginController/register_view">Sign in</span></a></li>
        </ul>        
      </div>
    </div>
  </header>

  <section class="bg0 p-b-10 p-t-10">
    <div class="container">
      <div class="row justify-content-center"> 
        
        <!-- image -->
        <div  style="max-width: 700px;">
          <img src="../../assets/images/banner.jpg" style="width: 100%; height: auto;">
        </div>

        <!-- buttons -->
        <div class="m-t-20" style="width : 100%;text-align: center;">
          <a href="../LoginController" ><img src="../../assets/images/upload.png"  style="width:25%;max-width: 200px;"></a>
          <a href="../Start/author_guideline"><img src="../../assets/images/authguid.png"  style="width:25%;max-width: 200px;"></a>
          <a href="../Start/download"><img src="../../assets/images/download.png"  style="width:25%;max-width: 200px;"></a>
        </div>
      </div>
    </div>
  </section>
  
  