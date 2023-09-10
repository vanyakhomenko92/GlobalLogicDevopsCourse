<!DOCTYPE html> 
<html lang="ru"> 
<head> 
  <meta charset="utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Generals Gallery</title> 
    
    <link href="../css/style.css" rel="stylesheet">
  <link href="../css/bootstrap.css" rel="stylesheet"> 
     <link href="../css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen" /> 
  <style> 
    .mosaicflow__item { 
      padding:3px; 
    } 
    .mosaicflow__column { 
      float:left; 
    } 
    .mosaicflow__item img { 
      display:block; 
      width:100%; 
      height:auto; 
      padding: 4px; 
      background-color: #fff; 
      border: 1px solid #ddd; 
      border-radius: 4px; 
    } 
    .mosaicflow__item img:hover { 
      opacity: 0.6; 
      filter: alpha(opacity=60); 
    } 
  </style> 
</head> 
<body> 


    <?php
    include '../header.php'
        ?>  
  <div class="container"> 
    <div class="clearfix mosaicflow">  
      <div class="mosaicflow__item"> 
        <a class="fancyimage" rel="group" href="images/1.jpg">
          <img src="images/1.jpg" />
        </a> 
      </div>
      <div class="mosaicflow__item"> 
        <a class="fancyimage" rel="group" href="images/2.jpg">
          <img src="images/2.jpg" />
        </a> 
      </div> 
      <div class="mosaicflow__item"> 
        <a class="fancyimage" rel="group" href="images/3.jpg">
          <img src="images/3.jpg" />
        </a> 
      </div> 
      <div class="mosaicflow__item"> 
        <a class="fancyimage" rel="group" href="images/4.jpg">
          <img src="images/4.jpg" />
        </a> 
      </div> 
      <div class="mosaicflow__item"> 
        <a class="fancyimage" rel="group" href="images/5.jpg">
          <img src="images/5.jpg" />
        </a> 
      </div>
        <div class="mosaicflow__item"> 
        <a class="fancyimage" rel="group" href="images/6.jpg">
          <img src="images/6.jpg" />
        </a> 
      </div>
        <div class="mosaicflow__item"> 
        <a class="fancyimage" rel="group" href="images/7.jpg">
          <img src="images/7.jpg" />
        </a> 
      </div>
        <div class="mosaicflow__item"> 
        <a class="fancyimage" rel="group" href="images/8.jpg">
          <img src="images/8.jpg" />
        </a> 
      </div>
        <div class="mosaicflow__item"> 
        <a class="fancyimage" rel="group" href="images/9.jpg">
          <img src="images/9.jpg" />
        </a> 
      </div>
        <div class="mosaicflow__item"> 
        <a class="fancyimage" rel="group" href="images/10.jpg">
          <img src="images/10.jpg" />
        </a> 
      </div>
        <div class="mosaicflow__item"> 
        <a class="fancyimage" rel="group" href="images/11.jpg">
          <img src="images/11.jpg" />
        </a> 
      </div>

    </div> 
</div> 
<?php
        include ('../footer.php');
        ?>
    

    <script src="jquery/jquery-1.11.2.min.js"></script> 
  <script src="bootstrap-3.3.2/js/bootstrap.min.js"></script> 
  <script src="jmosaicflow/jquery.mosaicflow.min.js"></script> 
  <script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script> 
  <script type="text/javascript"> 
    $(document).ready(function() { 
      $("a.fancyimage").fancybox(); 
    }); 
  </script> 
</body> 
</html>
