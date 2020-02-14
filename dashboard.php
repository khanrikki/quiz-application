<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="dashboard.css">
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
         <div class="bg-shadow"></div>
         <div class="sidebar-inner">
             <div class="close">
                 <i class="fa fa-times"></i>
             </div>
         <div class="profile-info">
              <div class="profile-img">
                 <img src="./onlinequiz/image/avatar.png" alt="profile-pic">
              </div>
              <div class="profile-data">
              <div class="name">Aman</div>
              </div>
         </div>
         <hr >
         <ul class="sidebar-menu">
         <li><a href="" class="active">
             <div class="icon">
             <i class="fa fa-laptop" ></i>
             </div>
             <div class="title" >Dashboard</div>
         </a></li>

         <li><a href="">
             <div class="icon"><i class="fa fa-user-circle-o" ></i></div>
             <div class="title">Profile</div>
         </a></li>

         <li><a href="">
         <div class="icon"><i class="fa fa-lock"></i></div>
         
             <div class="title">Logout</div>
         </a></li>
         </ul>
         </div>
    </div>

    <div class="main-container">
        <div class="top-nav">
            <div class="humburger">
                <div class="humburger-inner">
                     <i class="fa fa-bars"></i>
                </div>
            </div>
            <ul class="menu">
               <li><a href="#" class="active">Profile</a></li>
               <li><a href="#">About</a></li>
               


            </ul>
            <ul class="right-bar">
                <li><i class="fa fa-search"></i></li>
                <li><i class="fa fa-arrow-down" ></i></li>
            </ul>
        </div>
     <div class="container">
         <div class="item">
             Welcome :  
         </div>
         <div class="item">
            <button class="btn btn-primary">English</button> 
            <button class="btn btn-warning">General knowledge</button> 
         </div>
         <div class="item">
             <section class="course">
                 <h1>Select Course For Exam</h1>
                 <div class="container">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="feature-box">
                                 <div class="feature-img">
                                     <img src="./onlinequiz/image/english1.jpg">
                                     <div class="price">
                                         <p>55$</p>
                                     </div>
                                     <div class="rating">
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star-half-o"></i>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4"></div>
                     </div>
                 </div>
             </section>  
         </div>
     </div>
    </div>

</div>


</body>

</html>