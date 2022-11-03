<?php
include('../admin/database.php');
$output = '';
$get_id = $_GET['id']; 
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM teacher_class_student LEFT JOIN 
          student ON student.student_id = teacher_class_student.student_id 
          INNER JOIN class ON class.class_id = student.class_id where teacher_class_id = '$get_id' order by lastname ";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table>  
    <tr>  
         <th>First name</th>  
         <th>Lastname</th>  
         <th>Student Number</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
         <td>'.$row["firstname"].'</td>  
         <td>'.$row["lastname"].'</td>  
         <td>'.$row["username"].'</td> 
    </tr>
   ';
  
 }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=student_data.xls');
  echo $output;

 }
}
?>