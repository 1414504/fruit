<?php
$message = "";
if(isset($_POST['save_bug']))
{
    $name = $_POST['bug_name'];
    $category = $_POST['bug_category'];
    $summary = $_POST['bug_summary'];
    
    $con = new mysqli("ap-cdbr-azure-east-c.cloudapp.net", "b1236d751c9714", "41e55854", "acsm_dd5dc4ba52b59d7");
    
    if(mysqli_errno($con))
    {
        die(mysqli_errno($con)." Failed to connect database.");
    }
    
    $sql = "insert into bug (bug_name,bug_category,bug_summary)values('$name','$category','$summary')";
    
    $con->query($sql);
    $con->close();
    $message = "<h3>Data saved successfully</h3>";
    
}//end if statement

?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
         <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
       <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>BugTracker</title>
    </head>
    <body>
        
        <div class="container border">

            <?php include './header.php'; ?>
           
            <div class="row">
                <div class="col-md-2 min-height">
                    
                 <?php
                   include './navbar.php';
                   ?>  
                </div>
                    
                <form action="" method="POST">           
                <div class="col-md-10 border min-height">
                    
                    <div class = "row" style="margin-top: 10px;">
                        <div class="col-md-3"> Bug Name</div>
                        <div class="col-md-9"> <input name="bug_name" type="text" class="form-control" required=""> </div>
                    </div>
                    
                      <div class = "row" style="margin-top:10px;">
                        <div class="col-md-3"> Bug summary</div>
                        <div class="col-md-9"> <textarea name="bug_summary" class="form-control" required=""></textarea> </div>
                    </div>
                    
                      <div class = "row" style="margin-top: 10px;">
                        <div class="col-md-3"> Bug Catagory </div>
                        <div class="col-md-9"> <input name="bug_category" type="text" class="form-control" required=""></div>
                    </div>
                    <div class="row" style="margin-top: 10px">
                        <div class="col-md-2" style="float:right;">
                            <input type="submit" name="save_bug" value="Submit" class="form-control">
                            
                        </div>
                        
                    </div>
                     <?php echo $message; ?>
                </div>
                
            </form>
              
               
                
                
                
            </div>
            
            <div class="row">
            
                <div class="col-md-12 border footer">
                    Designed by Shahid Baig
                    
                </div>
                
        </div>

            </div>
        
               
            
        
        
        
    </body>
</html>

