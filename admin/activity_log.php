<?php
include('includes/session.php');
include('includes/header.php'); 
include('includes/activitylog_sidebar.php'); 

?>


<body>
    <div id="app">
        
                    <div class="d-flex justify-content-between">
                        
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
               
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

        
                <section class="section">
                    <div class="card ml-3 mr-3">
                        <div style="background: #374c9d;" class="card-header" >
                          
                        </div>
                         
                        <div class="card-body">
                            <table id="table1" class="table table-hover text-dark">
                    <thead>                       
                        <th>DATE</th>
                        <th>USER</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                        <?php
                            include "database.php";
                            $sql = "SELECT * FROM activity_log ORDER BY activIty_log_id DESC";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                                echo 
                                "<tr>                                  
                                    <td>".$row['date']."</td>
                                    <td>".$row['username']."</td>
                                    <td>".$row['action']."</td>
                                    
                                </tr>";
                               
                            }
                          

                        ?>
                    </tbody>
                    
                </table>
                </section>
            </div>

            
        </div>
    </div>
<?php include('add_modal.php') ?>

  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>