<?php
include('includes/session.php');
include('includes/header.php'); 
include('includes/admin_sidebar.php'); 

?>
<style type="text/css">
  @media (max-width: 500px){
     #addbtn{  
      width: 100px;
      margin-left: 160px;
    }
  }
  @media (min-width: 1000px){
    #addbtn{
      margin-left: 83%;
    }
  }
</style>
<body>
    <div id="app">

        
                    <div class="d-flex justify-content-between">
                        
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
               
        <div id="main" >
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

           <!--  <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>DataTable</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">

                            </nav>
                        </div>
                    </div>
                                                   </ol> -->
                                
<!-- Add data session -->   
             <?php

          if (isset($_SESSION['message'])): ?> 
            <div class="alert-success text-center" id="hide">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
          <?php endif?>


<!-- delete data session -->
            <?php
            if (isset($_SESSION['message_delete'])): ?> 
              <div class="alert-danger text-center" id="hide">
                  <?php
                  echo $_SESSION['message_delete'];
                  unset($_SESSION['message_delete']);
                  ?>
              </div>
            <?php endif?>


<!-- update data session -->
            <?php
            if (isset($_SESSION['update_message'])): ?> 
              <div class="alert-success text-center" id="hide">
                  <?php
                  echo $_SESSION['update_message'];
                  unset($_SESSION['update_message']);
                  ?>
              </div>
            <?php endif?>


<!-- validate username session -->
             <?php
            if (isset($_SESSION['validate'])): ?> 
              <div class="alert-danger text-center" id="hide">
                  <?php
                  echo $_SESSION['validate'];
                  unset($_SESSION['validate']);
                  ?>
                  </div>
            <?php endif?>
                </div>
                <section class="section" >
                    <div class="card ml-3 mr-3">
                        <div style="background: #374c9d;" class="card-header " >
                          
                        </div>
                         <a id="addbtn" href="#addnew" style=" width: 150px;  
                         margin-top: 20px;" data-toggle="modal" class="btn btn-primary ">Add User</a>
                        <div class="card-body">
                            <table id="table1" class="table table-hover text-dark">
                    <thead>                       
                        <th>NAME</th>
                        <th>USERNAME</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                        <?php
                            include "database.php";
                            $sql = "SELECT * FROM users ORDER BY id DESC";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()):?>
                              <tr>                                  
                                    <td> <?=htmlspecialchars($row['firstname'])?> <?= htmlspecialchars($row['lastname'])?></td>
                                    <td>$row['username']</td>
                                    <td>
                                        <a href="#edit_$row['id']" class="btn btn-success" data-toggle="modal"><i class="far fa-edit"></i></a>
                                        <a href="#delete_$row[id']" class="btn btn-danger" data-toggle="modal"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php include('edit_delete_modal.php'); ?>
                            <?php endwhile; ?>
                          

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