 <?php
include('database.php');

if (isset($_POST['save'])) {
    $question = $_POST['ques'];

    $query = mysqli_query($conn,"INSERT INTO `tbl_ques`(`ques`) VALUES ('$question')");
}
 ?>

 <form action="1.php" method="post">
                <table>
                   <!--  <tr>
                        <td>Question No</td>
                        <td>:</td>
                        <td><input type="number" value="<?php
                               if(isset($next)){
                                   echo $next;
                               }
                            ?>" name="quesNo"/></td>
                    </tr> -->
                    <tr>
                        <td>Question</td>
                        <td>:</td>
                        <td><input type="text" name="ques" placeholder="Enter a Question" required=""/></td>
                    </tr>
                    <tr>
                        <td>Choice One</td>
                        <td>:</td>
                        <td><input type="text" name="ans1" placeholder="Enter Choice One..." required=""/></td>
                    </tr>
                    <tr>
                        <td>Choice Two</td>
                        <td>:</td>
                        <td><input type="text" name="ans2" placeholder="Enter Choice Two..." required=""/></td>
                    </tr>
                    <tr>
                        <td>Choice Three</td>
                        <td>:</td>
                        <td><input type="text" name="ans3" placeholder="Enter Choice Three..." required=""/></td>
                    </tr>
                    <tr>
                        <td>Choice Four</td>
                        <td>:</td>
                        <td><input type="text" name="ans4" placeholder="Enter Choice Four..." required=""/></td>
                    </tr>
                    <tr>
                        <td>Correct No</td>
                        <td>:</td>
                        <td><input type="number" name="rightAns" required=""/></td>
                    </tr>
                    <tr>
                        <td class="button_class" colspan="3" align="center">
                            <input style="color: green;" type="submit" name="save" value="Add a Question" required=""/>
                        </td>
                    </tr>

                </table>
            </form>