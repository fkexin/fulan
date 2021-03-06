<!DOCTYPE html>
<html lang="zh-Hans">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">


    <title>作品页</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <!--lightbox to view large picture-->
    <link rel="stylesheet" href="assets/css/lightbox.min.css">


  </head>
<!-- NAVBAR
================================================== -->
<header class="header">
      <div class="row">
        <div class="col-1-1 text-center">
          <div class="site-title"><a href="main.html"><img src="image/title.png" style="width:304px;height:100px;" /></a></div>
          <!--<div class="mobile-nav menu-btn"><i class="fa fa-bars"></i></div>-->
          <nav class="main-nav">
            <ul>
              <!--<li class="selectednavlink"><a href="http://nagytibor.com">Home</a></li>-->
              <li class="navlink"><a href="collectionindex.html">作品集</a></li>
              <li class="navlink"><a href="about.html">关于</a></li>
              <!-- <li class="navlink"><a href="http://fulanfineart.com/books">Books</a></li> -->
              <li class="navlink"><a href="contact.html">联系我</a></li>

            </ul>
          </nav>
        </div>
      </div>
      </header>



  <body>
      <div class="content">
      <h1 class="page-title text-center"></h1>
        
      <section class="padding-top">
        <div class="row">
          <div class="col-2-3 centered text-center">
            <font color="grey">
            <h2>山水作品</h2>          
          </div>
        </div>    
      </section>

      <section>
        <div class="row">
          <div class="col-1-1">
            
          <ul class="grid margin-bottom-dbl">

            <tr>
              <td>
                <li class="grid-item">
                  <a class="example-image-link" href="image/青城幽居.jpg" data-lightbox="example-set" data-title="青城幽居">
                    <div class="item-box">
                     $directory = "mytheme/images/myimages";
                       $images = glob($directory . "*.jpg"); 
                       foreach($images as $image)
                              {
                                echo $image;
                              }
                      <img src="image/青城幽居.jpg" alt="青城幽居 ~ 68cm x 45cm" title="青城幽居 ~ 68cm x 45cm">
                      <div class="item-caption">
                          <h3 class="item-title">青城幽居
                            <div class="item-category"> 
                             <span>68cm x 45cm<br></span>                    
                            </div>
                          </h3>
                      </div>
                    </div>
                  </a>
                </li>
              </td>
            </tr>

            <div class="pagination pull-right">
              <ul>
                <li>
                  <a href="collection.html">1</a></li>
                  <li><a href="collection2.html">&rarr;</a></li>
              </ul>
            </div>
    </div>
  </div>    



      <!-- FOOTER -->
      <footer>
<!--         <p class="pull-right"><a href="#">Back to top</a></p>
 --><!--         <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
 -->  </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="assets/js/lightbox-plus-jquery.min.js"></script>

  </body>

</html>
