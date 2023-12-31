<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dự án 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <style>   
    table {  
        border-collapse: collapse; 
        
    }  
    .inline{   
        display: inline-block;   
        margin-right: 20px;
        margin: 20px 0px;   
    }            
    input, button{   
        height: 34px;
           
    }    
    .items {   
        display: inline-block;   
    }   
    .items a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;  
        margin: 2px; 
    }   
    .items a .active {   
            background-color: red; 
            margin: 20px;  
    }   
    .items a:hover:not(.active) {   
        background-color: #87ceeb;   
    }   
        </style>  
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="../css/home_1.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
     
    </style>
</head>
<body>
    <div class="boxcenter">
       <!-- BIGIN HEADER -->
       <header>
            <div class="admin">
                <h1 style="background-color: aqua; text-align:center">Admin</h1>
            </div>
            <div class="main_header" style="background-color: coral">
                <div class="container">
                    <div class="row small-gutters">					
                            <div class="main-menu" >
                                <ul>
                                    <li class="">
                                        <a href="../index.php" class="hov">Home</a>						
                                    </li>
                                    <li class="">
                                        <a href="index.php?act=adddm" class="hov">Danh mục</a>
                                    </li>
                                    <li class="">
                                        <a href="index.php?act=addsp" class="hov">Sản phẩm</a>									
                                    </li>
                                    <li class="">
                                        <a href="index.php?act=dskh" class="hov">Tài khoản</a>									
                                    </li>	
                                    <li class="">
                                        <a href="index.php?act=dsbl" class="hov">Bình luận</a>									
                                    </li>
                                    <li class="">
                                        <a href="index.php?act=thongke" class="hov">Thống kê</a>									
                                    </li>			
                                </ul>
                            </div>
                            <!--/main-menu -->			
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </header>