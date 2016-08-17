<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-3" style="height: 140px; background-color: green;"><h1>BugTracker</h1></div>
                <div class="col-md-9" style="height: 140px; background-color: goldenrod"><h1>Welcome to Bug Tracker</h1></div>
                
            </div>
            <div class="row">
                <div class="col-md-4" style="min-height: 400px; background-color: brown;">
                    <br>
                    <a href="?cat=windows" class="btn btn-default form-control" style="text-align: left;">Windows</a> <br><br>
                    <a href="?cat=ios" class="btn btn-default form-control" style="text-align: left;">IOS</a><br><br>
                     <a href="?cat=android" class="btn btn-default form-control" style="text-align: left;">Anroid</a>
                    
                </div>
                <div class="col-md-8" style="min-height: 400px; background-color: grey;">
                    
                    <?php
                    if(!isset($_GET["cat"]))
                    {
                    include './show-all-bugs.php';
                    }else
                    {
                        include './show-category-bugz.php'; 
                    }
                    
                    ?>
                    
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-12" style="height: 140px; background-color: goldenrod"></div>
                
            </div>
            
        </div> 
        
    </body>
</html>
