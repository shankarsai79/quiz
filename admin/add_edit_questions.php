<?php
session_start();
include "header.php";
include "../connection.php";


if(!isset($_SESSION["admin"])){
    ?>
   <script type="text/javascript">

   window.location="index.php";


   </script>

   <?php
}

$id=$_GET["id"];
$exam_category='';
$res=mysqli_query($link,"select * from exam_category where id=$id");

while($row=mysqli_fetch_array($res)){
    $exam_category=$row["category"];
}
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Question inside <?php echo "<font color='red'>" .$exam_category."</font>";?></h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                
                            

                            <div class="col-lg-6">
                            <form name="form1" action="" method="post" enctype="multipart/form-data">

                        <div class="card">
                            <div class="card-header"><strong>Add new questions with text</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label"> Add Question</label><input type="text"  placeholder="Add Question" class="form-control" name="question"></div>
                                <div class="form-group"><label for="company" class=" form-control-label"> Add opt1</label><input type="text"  placeholder="Add opt1" class="form-control" name="opt1"></div>
                                <div class="form-group"><label for="company" class=" form-control-label"> Add opt2</label><input type="text"  placeholder="Add opt2" class="form-control" name="opt2"></div>
                                <div class="form-group"><label for="company" class=" form-control-label"> Add opt3</label><input type="text"  placeholder="Add opt3" class="form-control" name="opt3"></div>
                                <div class="form-group"><label for="company" class=" form-control-label"> Add opt4</label><input type="text"  placeholder="Add opt4" class="form-control" name="opt4"></div>
                                <div class="form-group"><label for="company" class=" form-control-label"> Add Answer</label><input type="text"  placeholder="Add answer" class="form-control" name="answer"></div>
                                    <div class="form-group">
                                        <input type="submit" name="submit1" value="Add Question" class="btn btn-success"></div>
                                                    </div>
                                                </div>
                        
                                            </div>


                        <div class="col-lg-6">
                            
                        <div class="card">
                            <div class="card-header"><strong>Add new questions with images</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label"> Add Question</label><input type="text"  placeholder="Add Question" class="form-control" name="fquestion"></div>
                                <div class="form-group"><label for="company" class=" form-control-label"> Add opt1</label><input type="file"   class="form-control" name="fopt1" style="padding-bottom: 38px;"></div>
                                <div class="form-group"><label for="company" class=" form-control-label"> Add opt2</label><input type="file"  class="form-control" name="fopt2" style="padding-bottom: 38px;"></div>
                                <div class="form-group"><label for="company" class=" form-control-label"> Add opt3</label><input type="file"   class="form-control" name="fopt3" style="padding-bottom: 38px;"></div>
                                <div class="form-group"><label for="company" class=" form-control-label"> Add opt4</label><input type="file"   class="form-control" name="fopt4" style="padding-bottom: 38px;"></div>
                                <div class="form-group"><label for="company" class=" form-control-label"> Add Answer</label><input type="file"   class="form-control" name="fanswer" style="padding-bottom: 38px;"></div>
                                    <div class="form-group">
                                        <input type="submit" name="submit2" value="Add Question" class="btn btn-success"></div>
                                                    </div>
                                                </div>
                            
                                            </div>

                                            </form>

                            </div>
                            
                        </div> 

                    </div>
                    <!--/.col-->
                         </div>



                         <div class="row">
                           <div class="col-lg-12">
                             <div class="card">
                               <div class="card-body">
                                <table class="table table-bordered">
                                 <tr>
                                 
                                  <th>No</th>
                                  <th>Questions</th>
                                  <th>opt1</th>
                                  <th>opt2</th>
                                  <th>opt3</th>
                                  <th>opt4</th>
                                  <th>Edit</th>
                                  <th>Delete</th>

                                 
                                 
                                 </tr>
                                
                                
                             

    

                                <?php
                                $res=mysqli_query($link,"select * from questions where category='$exam_category' order by question_no asc");
                                while($row=mysqli_fetch_array($res)){
                                    echo "<tr>";

                                    echo"<td>";  echo$row["question_no"];  echo"</td>";
                                    echo"<td>";  echo$row["question"];  echo"</td>";
                                    echo"<td>";
                                    if(strpos($row["opt1"],'opt_images/')!==false){
                                        ?>
                                        <img src="<?php echo $row["opt1"]; ?>" height="50" width="50">
                                        <?php
                                    }
                                    else
                                    {
                                        echo $row["opt1"];
                                    }
                                    echo"</td>";
                                    

                                    echo"<td>";
                                    if(strpos($row["opt2"],'opt_images/')!==false){
                                        ?>
                                        <img src="<?php echo $row["opt2"]; ?>" height="50" width="50">
                                        <?php
                                    }
                                    else
                                    {
                                        echo $row["opt2"];
                                    }
                                    echo"</td>";
                                    

                                    echo"<td>";
                                    if(strpos($row["opt3"],'opt_images/')!==false){
                                        ?>
                                        <img src="<?php echo $row["opt3"]; ?>" height="50" width="50">
                                        <?php
                                    }
                                    else
                                    {
                                        echo $row["opt3"];
                                    }
                                    echo"</td>";


                                    echo"<td>";
                                    if(strpos($row["opt4"],'opt_images/')!==false){
                                        ?>
                                        <img src="<?php echo $row["opt4"]; ?>" height="50" width="50">
                                        <?php
                                    }
                                    else
                                    {
                                        echo $row["opt4"];
                                    }

                                    echo"</td>";

                                    echo"<td>";
                                    if(strpos($row["opt4"],'opt_images/')!==false){
                                        ?>
                                        <a href="edit_option_images.php ?id= <?php echo $row["id"]; ?> &id1=<?php echo $id ?>"> Edit</a>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <a href="edit_option.php ?id= <?php echo $row["id"]; ?> &id1=<?php echo $id ?>"> Edit</a>
                                        <?php
                                    }

                                    echo"</td>";


                                    echo"<td>";
                                        ?>
                                        <a href="delete_option.php ?id= <?php echo $row["id"]; ?> &id1=<?php echo $id ?>"> Delete</a>
                                        <?php
                                    
                                   

                                    echo"</td>";








                                    echo "</tr>";


                                }
                              



                            ?>
                                </table>



                               </div>
                             </div>
                           </div>
                         </div>
                



                        </div><!-- .animated -->
                    </div><!-- .content -->




<?php
if(isset($_POST["submit1"]))
{
    $loop=0;
    $count=0;
    $res=mysqli_query($link,"select * from questions where category='$exam_category' order by id asc") or die(mysqli_error($link));
    $count=mysqli_num_rows($res);

    if($count==0){

    }
    else{
        while($row=mysqli_fetch_array($res)){
            $loop=$loop+1;
            mysqli_query($link,"update questions set question_no='$loop' where id=$row[id]");
        }
    }
    $loop=$loop+1;
    mysqli_query($link,"insert into questions values(NULL,'$loop','$_POST[question]','$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[answer]','$exam_category')") or die(mysqli_error($link));

    ?>

   <script type="text/javascript">
   alert("question added successfully");
   window.location.href=window.location.href;
   </script>


    <?php
    
    
}

?>



<?php
if(isset($_POST["submit2"]))
{
    $loop=0;
    $count=0;
    $res=mysqli_query($link,"select * from questions where category='$exam_category' order by id asc") or die(mysqli_error($link));
    $count=mysqli_num_rows($res);

    if($count==0){

    }
    else{
        while($row=mysqli_fetch_array($res)){
            $loop=$loop+1;
            mysqli_query($link,"update questions set question_no='$loop' where id=$row[id]");
        }
    }
    $loop=$loop+1;

    $tm=md5(time());

    $fnm1=$_FILES["fopt1"]["name"];
    $dst1="./opt_images/" .$tm.$fnm1;
    $dst_db1="opt_images/" .$tm.$fnm1;
    move_uploaded_file($_FILES["fopt1"]["tmp_name"],$dst1);
    
    $fnm2=$_FILES["fopt2"]["name"];
    $dst2="./opt_images/" .$tm.$fnm2;
    $dst_db2="opt_images/" .$tm.$fnm2;
    move_uploaded_file($_FILES["fopt2"]["tmp_name"],$dst2);
    

    $fnm3=$_FILES["fopt3"]["name"];
    $dst3="./opt_images/" .$tm.$fnm3;
    $dst_db3="opt_images/" .$tm.$fnm3;
    move_uploaded_file($_FILES["fopt3"]["tmp_name"],$dst3);
    

    $fnm4=$_FILES["fopt4"]["name"];
    $dst4="./opt_images/" .$tm.$fnm4;
    $dst_db4="opt_images/" .$tm.$fnm4;
    move_uploaded_file($_FILES["fopt4"]["tmp_name"],$dst4);

    $fnm5=$_FILES["fanswer"]["name"];
    $dst5="./opt_images/" .$tm.$fnm5;
    $dst_db5="opt_images/" .$tm.$fnm5;
    move_uploaded_file($_FILES["fanswer"]["tmp_name"],$dst5);






    mysqli_query($link,"insert into questions values(NULL,'$loop','$_POST[fquestion]','$dst_db1','$dst_db2','$dst_db3','$dst_db4','$dst_db5','$exam_category')") or die(mysqli_error($link));

    ?>

   <script type="text/javascript">
   alert("question added successfully");
   window.location.href=window.location.href;
   </script>


    <?php
    
    
}

?>




<?php

include "footer.php";

?>
