 <?php
include('../admin/database.php');
 include('include/session.php');
 
 
                            if (isset($_POST['change'])) {
                               

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "../teacher/img/" . $_FILES["image"]["name"]);
                                $location = "img/" . $_FILES["image"]["name"];
                                
                                mysqli_query($conn,"update  student set picture = '$location' where student_id  = '$session_id' ")or die(mysqli_error());
                                
                                ?>
 
                                <script>
                                window.location = "student_settings.php";  
                                </script>

                       <?php     }  ?>