<?php
    include '../header.php'
?>
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/font-awesome.css" rel="stylesheet">
<div class="container" style="background-color:white">
            <div class="row">

                    <div class="container">
                        <p class="headerh3">Останні новини</p>

          </div>
        </div>
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
                    $query = mysql_query("Select * from general_news where id=".$id."",$conn);
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
                        </div>
                    </div>", $row['title'],$row['image'], $row['article']
                               
                            );
                            
                        }
                    }
                }
            } else 
            {
                $query = mysql_query("Select * from general_news order by id limit 9",$conn);
                echo "<div class='row masonry' data-columns>";
                while($row = mysql_fetch_assoc($query)) 
                {
                    printf(
                       "<div class='item'>
                            <div class='thumbnail'><img src='img/%s'>
                            <div class='caption'>
                            <h4>%s</h4>
                            <p>%s</p>
                            
                            <a href='news.php?id=%s' class='btn btn-success'>Детальніше <i class='fa fa-arrow-right'></i> </a>
                                </div>
                            </div>
                        </div>", $row['image'],$row['title'],$row['tdate'], $row['id']
                    );
                }
                echo "</div>";
            }
        }

for($i=1;$i<=$num_pages;$i++) {
  if ($i-1 == $page) {

  }}
    ?>         
</div>
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/salvattore.min.js"></script>    
<?php
      include ('../footer.php');
          ?>
      <div id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>