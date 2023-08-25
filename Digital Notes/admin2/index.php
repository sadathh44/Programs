<?php 
include('includes/header.php'); 
include('includes/navbar.php'); 
if($_SESSION["key"]!="mainkeyisthe")
{
    
}
else
{
    
}

?>


<section class="content">
    <!-- Begin Page Content -->
  
    <section class="content">
      <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>01</h3>

                <p>Admins Registered</p>
              </div>
              <div class="icon">
              <i class="fas fa-users-cog"></i>
              </div>
              <a href="404.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                0<?php 
                                    require 'dbconfig.php';
                                   
                                    $query = "SELECT id FROM notes ORDER BY id";
                                    $query_run = mysqli_query($connection, $query);

                                    $row = mysqli_num_rows($query_run);

                                    echo $row;
                                
                                ?>
                </h3>

                <p>Teacher Registrations</p>
              </div>
              <div class="icon">
              <i class="fas fa-chalkboard-teacher"></i>
              </div>
              <a href="register.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                0<?php 
                                    require 'dbconfig.php';
                                   
                                    $query = "SELECT id FROM student ORDER BY id";
                                    $query_run = mysqli_query($connection, $query);

                                    $row = mysqli_num_rows($query_run);

                                    echo $row;
                                
                                ?>
                </h3>

                <p>Student Registrations</p>
              </div>
              <div class="icon">
              <i class="fas fa-user"></i>
              </div>
              <a href="student.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
               <h3>0<?php 
                                    require 'dbconfig.php';
                                   
                                    $query = "SELECT id FROM notes ORDER BY id";
                                    $query_run = mysqli_query($connection, $query);

                                    $row = mysqli_num_rows($query_run);

                                    echo $row;
                                
                                ?> </h3>

                <p>Uploaded Notes</p>
              </div>
              <div class="icon">
              <i class="fas fa-book"></i>
              </div>
              <a href="noteslog.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
      
         
                                <div class="row">
                                
                          <div class="col-lg-3 col-6">

                          <div class="card-body">
                                <?php  
                                    require 'dbconfig.php';
                                    $query = "SELECT branch, count(*) as number FROM notes GROUP BY branch";  
                                    $result = mysqli_query($connection, $query);  
                                ?>
                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
                                <script type="text/javascript">  
                                google.charts.load('current', {'packages':['corechart']});  
                                google.charts.setOnLoadCallback(drawChart);  
                                function drawChart()  
                                {  
                                      var data = google.visualization.arrayToDataTable([  
                                                ['branch', 'Number'],  
                                                <?php  
                                                while($row = mysqli_fetch_array($result))  
                                                {  
                                                    echo "['".$row["branch"]."', ".$row["number"]."],";  
                                                }  
                                                ?>  
                                          ]);  
                                      var options = {  
                                            title: 'Distribution of Notes',  
                                            //is3D:true,  
                                            pieHole: 0.4  
                                          };  
                                      var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                                      chart.draw(data, options);  
                                }  
                                </script>  
     
                              <div style="width:900px;">  
                                  
                                    <br />  
                                    <div id="piechart" style="width: 700px; height: 500px;"></div>  
                              </div> 
                           </div>
                            
                         


                         </div>
                              <div class="col-lg-3 col-6">


  
                                </div>
                              
                             
                             
                          <div class="col-lg-3 col-6">

                          <div class="card-body">
                                <?php  
                                    require 'dbconfig.php';
                                    $query = "SELECT cat, count(*) as number FROM register GROUP BY cat";  
                                    $result = mysqli_query($connection, $query);  
                                ?>
                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
                                <script type="text/javascript">  
                                google.charts.load('current', {'packages':['corechart']});  
                                google.charts.setOnLoadCallback(drawChart);  
                                function drawChart()  
                                {  
                                      var data = google.visualization.arrayToDataTable([  
                                                ['cat', 'Number'],  
                                                <?php  
                                                while($row = mysqli_fetch_array($result))  
                                                {  
                                                    echo "['".$row["cat"]."', ".$row["number"]."],";  
                                                }  
                                                ?>  
                                          ]);  
                                      var options = {  
                                            title: 'Distribution of Teachers',  
                                            //is3D:true,  
                                            pieHole: 0.4  
                                          };  
                                      var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                                      chart.draw(data, options);  
                                }  
                                </script>  
     
                              <div style="width:900px;">  
                                  
                                    <br />  
                                    <div id="piechart2" style="width: 700px; height: 500px;"></div>  
                              </div> 
                            </div>
                            
                         
                            

                              </div>
                              </div>
                              
                                                
                              
            
          
         
    </section>
</section>



    </div>
    <!-- End of Page Wrapper -->

<?php

include('includes/scripts.php');
include('includes/footer.php');
    
?>


