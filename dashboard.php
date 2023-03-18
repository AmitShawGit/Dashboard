<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<?php include 'header.php' ?>





    <section class="main-content page-content mt-2" id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="lead breadcumb">
                        <div class="left-content mt-3">
                            <ul>
                                <li><i class="fa fa-home" id="sidebarCollapse" style="cursor:pointer"></i></li>
                                <li>|</li>
                                <li>Dashboard</li>
                            </ul>
                        </div>
                        <div class="right-content mt-3">
                            <select name="" id="" class="form-control">
                                <option value=""><?php echo " Mr " .$_SESSION['username'];?></option>
                                <option><a href="logout.php">Log out</a></option>
                            </select>
                           
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </section>

 
      
</body>
</html>
