 <?php
include('../admin/database.php');
 include('include/session.php');
 
 
                            if (isset($_POST['change'])) {
                               

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $_FILES["image"]["name"]);
                                $location = "img/" . $_FILES["image"]["name"];
                                
                                mysqli_query($conn,"update  teacher set picture = '$location' where teacher_id  = '$session_id' ")or die(mysqli_error());
                                
                                ?>
 
                                <script>
                                window.location = "settings.php";  
                                </script>

                       <?php     }  ?>