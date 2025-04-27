<?php  
$page_title="Index Page";
include_once("./includes/head.php") ;
include_once("./includes/navbar.php")  ;
include_once("./includes/sidebar.php")  ;
?>


    <section class="section dashboard">
      <div class="row">

       
 

        <div class="card">
            <?php  
           //  `title`, `Desciption`, `status`, `created_att`, `Due_date`, `userid`
           include_once("./config/db.php");
            $conn=getConnection();
            if (isset($_GET["id"])){
                $id=$_GET["id"];
                $sql="select * from tasks where id =$id";
                $result=$conn->query($sql) ;
                if ($result->num_rows>0){
                    while($item=$result->fetch_assoc()){
                       
                        $title=$item["title"];
                        $Desciption=$item["Desciption"];
                        $status=$item["status"];
                        $Due_date=$item["Due_date"];
                        $userid=$item["Due_date"];
                    }
                }
                 
                
                $userid=1;
            }
             if (isset($_POST["btnupdate"])){
                $id=$_POST["id"];
                $title=$_POST["title"];
                $Desciption=$_POST["Desciption"];
                $status=$_POST["status"];
                $Due_date=$_POST["Due_date"];
                $userid=1;
                $sql="update   tasks set  title='$title', Desciption='$Desciption', 
                status='$status',  Due_date='$Due_date', userid=$userid where id=$id;";
                // print_r($sql);
                // exit();
                if($conn->query($sql)==true){

                }
                else{
                    echo  "<div class='alert alert-success'> cilad aya dhcaday :$conn->error </div>";
                }
             }
            
            ?>
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h4 class="card-title"> Edit user</h4>
                    </div>
                    <div class="col-md-2">
                        <a href="list-task.php" class="btn btn-primary w-100"> go back</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" name="id"  value="<?php  echo $id;  ?>" >
                                <label for="title">title</label>
                                <input type="text" name="title" value="<?php  echo $title;  ?>"  id="title" class="form-control" placeholder="Enter title">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Desciption">Desciption</label>
                                <input type="text" name="Desciption" value="<?php  echo $Desciption;  ?>"  id="Desciption" class="form-control" placeholder="Enter Desciption">

                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">status</label>
                                <input type="text" name="status" id="status" value="<?php  echo $status;  ?>"  class="form-control" placeholder="Enter status">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Due_date">Due_date</label>
                                <input type="Date" name="Due_date" id="Due_date" value="<?php  echo $Due_date;  ?>"  class="form-control" placeholder="Enter Due_date">

                            </div>
                        </div>
                    </div>
                    <div class="row p-3">
                     <div class="col-md-6">
                        </div>
                        <div class="col-md-3">
                            <button type="resset" class="btn btn-outline-info w-100" >resset</button>
                        </div>
                        <div class="col-md-3">
                            <button type="submit"  class="btn btn-primary w-100" name="btnupdate">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    </div>
      </div>
    </section>

  </main><!-- End #main -->
  <?php   include_once("./includes/footer.php")  ?>