
<?php
    include 'header.php'
?>
<div class="container" >
        <div class="row">
               <div class="col-lg-2 col-md-3 col-sm-3" >
         
            <div class="row" >
                <hr>
                    <div class="box text-center">
                        <div class="box-content">
                                          <h4 class=" cool" >Наступний матч: <br>Відбір до зимового сезону чемпіонату "V9ky"</h4>
                            
                            <hr/>
                                <div class="row">
                                    <div class="col-xs-5 sm-5 md-5 lg-4 box">
                                            <img class="img-rounded" src="img/2.png" width="80">
                                            <p class="cool">Generals</p>
                                    </div>
                                    <div class="col-xs-2 sm-2 md-2 lg-1 cool">
                                        <div>vs</div>
                                    </div>
                                    <div class="col-xs-5 sm-5 md-5 lg-4">
                                        <img class="img-rounded" src="http://v9ky.in.ua/2v_turnir/team_logo/YxxsvuzFH8x.jpg" width="70">
                                        <p class="cool">ВУСО<br></p>
                                       
                                    </div>
                                </div>
                            <div class="row block cool">
                                <h3>Дата:</h3>
                                 <h3>17.12.2016 20.40</h3>
                            </div>
                            
                        </div>
                    </div>
                </div>
 
              </div>
          
          <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 vright">
                        <hr>
                    <div id="carousel" class="carousel slide">
         <!-- Р�РЅРґРёРєР°С‚РѕСЂС‹ СЃР»Р°Р№РґРѕРІ--> 
        <ol class="carousel-indicators">
            <li  class="active" data-target="#carousel" data-slide-to="0"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
          
          <!--РЎР»Р°Р№РґС‹-->
        <div class="carousel-inner" >
           <div class="item active">
                <img src="img/10.jpg" alt="">
               <div class="carousel-caption">
                        <h3></h3>
                        <p>mfc-generals.in.ua</p>
               </div>
            </div>
             <div class="item">
            <img src="img/7.jpg" alt="">
               <div class="carousel-caption">
                        <h3></h3>
                        <p></p>
                </div>
              </div>
            <div class="item">
            <img src="img/9.jpg" alt="">
               <div class="carousel-caption">
                        <h3></h3>
                        <p></p>
                    </div>
            </div>   
         <div class="item">
            <img src="img/8.jpg" alt="">
               <div class="carousel-caption">
                        <h3></h3>
                        <p></p>
                </div>
              </div>
          </div>
          <!-- РЎС‚СЂРµР»РєРё РїРµСЂРµРєР»СЋС‡РµРЅРёСЏ СЃР»Р°Р№РґРѕРІ-->
        <a href="#carousel" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>  
        <a href="#carousel" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
<hr>
      
      <div class="container" style="background-color:white">
            <div class="row">

                    <div class="container">
                        <p class="headerh3">Останні новини</p>

          </div>
        </div>
          <div class="row masonry" data-columns> 
              <?php
        $conn = mysql_connect("localhost","b19156757_admin","Ckfdenf17") or die ("error MySQL");
        mysql_set_charset('utf8',$conn);
        mysql_select_db("b19156757_generals_bd") or die ("error db");

        if ($conn) 
        {
              if(isset($_GET['id']) && !empty($_GET['id']))
            {
                $id = intval($_GET['id']);
                if ($id)
                {
                    $query = mysql_query("Select * from general_news order by id desc limit 9  id=".$id."",$conn);
                    if ($query)
                    {
                        while($row = mysql_fetch_assoc($query))
                        {
                            printf ("
                            <div class='container col-lg-2 col-md-2 col-xs-hidden'>
                            </div>      
  
                    <div class='container col-lg-8 col-md-8' >
                            <div class='item'>
                        <h3><b><center><p>%s</p></center></b></h3>
                        <div class='thumbnail'><img src='img/%s'>
                        <div class='caption'>
                        <p>%s</p>
                            </div>
                        </div>
                    </div>", $row['title'],$row['image'], $row['article']
                               
                            );
                            
                        }
                    }
                }
            }
             else 
            {
                $query = mysql_query("Select * from general_news order by id desc limit 9",$conn);
                echo "<div class='row masonry' data-columns>";
                while($row = mysql_fetch_assoc($query)) 
                {
                    printf(
                       "<div class='item'>
                            <div class='thumbnail'><img src='news/img/%s'>
                            <div class='caption'>
                            <h4>%s</h4>
                            <p>%s</p>
                            
                            <a href='news/news.php?id=%s' class='btn btn-success'>Детальніше <i class='fa fa-arrow-right'></i> </a>
                                </div>
                            </div>
                        </div>", $row['image'],$row['title'],$row['tdate'], $row['id']
                    );
                }
                echo "</div>";
            }
        }
    ?>         
               
       
        </div>
          <nav class="text-center">
            <ul class="pagination pagination-sm">
                <li ><a href="#">
                    <i class="fa fa-chevron-left"></i>
                    <i class="fa fa-chevron-left"></i>
                    </a>
                </li>
                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="news/news2.php">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">
                    <i class="fa fa-chevron-right"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-chevron-right"></i>
                    <i class="fa fa-chevron-right"></i>
                    </a></li>

              </ul>
          </nav>
      </div>
<hr>
<hr>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85370981-1', 'auto');
  ga('send', 'pageview');

</script>
      <?php
      include 'footer.php'
          ?>
      