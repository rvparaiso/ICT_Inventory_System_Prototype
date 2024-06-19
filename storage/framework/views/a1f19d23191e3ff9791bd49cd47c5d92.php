<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<title>ICT Inventory System</title>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


<!-- Scripts -->
<?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
<style>
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.sidebar{
    position: fixed;
    height: 100%;
    width: 300px;
    background: #0A2558;
    transition: all 0.5s ease;
}
.sidebar.active{
    width: 60px;
}
.sidebar .logo-details{
    height: 80px;
    display: flex;
    align-items: center;
}
.sidebar .logo-details i{
    font-size: 28px;
    font-weight: 500;
    color: #fff;
    min-width: 60px;
    text-align: center
}
.sidebar .logo-details .logo_name{
    color: #fff;
    font-size: 24px;
    font-weight: 500;
}
.sidebar .nav-links{
    margin-top: 10px;
}
.sidebar .nav-links li{
    position: relative;
    list-style: none;
    height: 50px;
}
.sidebar .nav-links li a{
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: all 0.4s ease;
}
.sidebar .nav-links li a.active{
    background: #081D45;
}
.sidebar .nav-links li a:hover{
    background: #081D45;
}
.sidebar .nav-links li i{
    min-width: 60px;
    text-align: center;
    font-size: 18px;
    color: #fff;
}
.sidebar .nav-links li a .links_name{
    color: #fff;
    font-size: 15px;
    font-weight: 400;
    white-space: nowrap;
}
.sidebar .nav-links .log_out{
    position: absolute;
    bottom: 0;
    width: 100%;
}
.home-section{
    position: relative;
    background: #f5f5f5;
    min-height: 100vh;
    width: calc(100% - 240px);
    left: 240px;
    transition: all 0.5s ease;
}
/* body {
    background-image: url("3274408.jpg");
} */
.sidebar.active ~ .home-section{
    width: calc(100% - 60px);
    left: 60px;
}
.home-section nav{
    display: flex;
    justify-content: space-between;
    height: 80px;
    background: #fff;
    display: flex;
    align-items: center;
    position: fixed;
    width: calc(100% - 240px);
    left: 240px;
    z-index: 100;
    padding: 0 20px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    transition: all 0.5s ease;
}
.sidebar.active ~ .home-section nav{
    left: 60px;
    width: calc(100% - 60px);
}
.home-section nav .sidebar-button{
    display: flex;
    align-items: center;
    font-size: 24px;
    font-weight: 500;
}
nav .sidebar-button i{
    font-size: 35px;
    margin-right: 10px;
}
.home-section nav .search-box{
    position: relative;
    height: 50px;
    max-width: 550px;
    width: 100%;
    margin: 0 20px;
}
nav .search-box input{
    height: 100%;
    width: 100%;
    outline: none;
    background: #F5F6FA;
    border: 2px solid #EFEEF1;
    border-radius: 6px;
    font-size: 18px;
    padding: 0 15px;
}
nav .search-box .bx-search{
    position: absolute;
    height: 40px;
    width: 40px;
    background: #2697FF;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    border-radius: 4px;
    line-height: 40px;
    text-align: center;
    color: #fff;
    font-size: 22px;
    transition: all 0.4 ease;
}
.home-section nav .profile-details{
    display: flex;
    align-items: center;
    background: #F5F6FA;
    border: 2px solid #EFEEF1;
    border-radius: 6px;
    height: 50px;
    min-width: 190px;
    padding: 0 15px 0 2px;
}
nav .profile-details img{
    height: 40px;
    width: 40px;
    border-radius: 6px;
    object-fit: cover;
}
nav .profile-details .admin_name{
    font-size: 15px;
    font-weight: 500;
    color: #333;
    margin: 0 10px;
    white-space: nowrap;
}
nav .profile-details i{
    font-size: 25px;
    color: #333;
}
.home-section .home-content{
    position: relative;
    padding-top: 104px;
    background-image: url("Images/3274408.jpg");
}
.home-content .overview-boxes{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 0 20px;
    margin-bottom: 26px;
}
.overview-boxes .box{
    display: flex;
    align-items: center;
    justify-content: center;
    width: calc(100% / 4 - 15px);
    background: #fff;
    padding: 15px 14px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.overview-boxes .box-topic{
    font-size: 20px;
    font-weight: 500;
}
.home-content .box .number{
    display: inline-block;
    font-size: 35px;
    margin-top: -6px;
    font-weight: 500;
}
.home-content .box .indicator{
    display: flex;
    align-items: center;
}
.home-content .box .indicator i{
    height: 20px;
    width: 20px;
    background: #8FDACB;
    line-height: 20px;
    text-align: center;
    border-radius: 50%;
    color: #fff;
    font-size: 20px;
    margin-right: 5px;
}
.box .indicator i.down{
    background: #e87d88;
}
.home-content .box .indicator .text{
    font-size: 12px;
}
.home-content .box .cart{
    display: inline-block;
    font-size: 32px;
    height: 50px;
    width: 50px;
    background: #cce5ff;
    line-height: 50px;
    text-align: center;
    color: #66b0ff;
    border-radius: 12px;
    margin: -15px 0 0 6px;
}
.home-content .box .cart.two{
    color: #2BD47D;
    background: #C0F2D8;
}
.home-content .box .cart.three{
    color: #ffc233;
    background: #ffe8b3;
}
.home-content .box .cart.four{
    color: #e05260;
    background: #f7d4d7;
}
.home-content .total-order{
    font-size: 20px;
    font-weight: 500;
}
.home-content .sales-boxes{
    display: flex;
    justify-content: space-between;
    /* padding: 0 20px; */
}

/* left box */
.home-content .sales-boxes .recent-sales{
    width: 65%;
    background: #fff;
    padding: 20px 30px;
    margin: 0 20px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.home-content .sales-boxes .sales-details{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.sales-boxes .box .title{
    font-size: 24px;
    font-weight: 500;
    /* margin-bottom: 10px; */
}
.sales-boxes .sales-details li.topic{
    font-size: 20px;
    font-weight: 500;
}
.sales-boxes .sales-details li{
    list-style: none;
    margin: 8px 0;
}
.sales-boxes .sales-details li a{
    font-size: 18px;
    color: #333;
    font-size: 400;
    text-decoration: none;
}
.sales-boxes .box .button{
    width: 100%;
    display: flex;
    justify-content: flex-end;
}
.sales-boxes .box .button a{
    color: #fff;
    background: #0A2558;
    padding: 4px 12px;
    font-size: 15px;
    font-weight: 400;
    border-radius: 4px;
    text-decoration: none;
    transition: all 0.3s ease;
}
.sales-boxes .box .button a:hover{
    background:  #0d3073;
}

/* Responsive Media Query */
@media (max-width: 1240px) {
    .sidebar{
        width: 60px;
    }
    .sidebar.active{
        width: 220px;
    }
    .home-section{
        width: calc(100% - 60px);
        left: 60px;
    }
    .sidebar.active ~ .home-section{
        /* width: calc(100% - 220px); */
        overflow: hidden;
        left: 220px;
    }
    .home-section nav{
        width: calc(100% - 60px);
        left: 60px;
    }
    .sidebar.active ~ .home-section nav{
        width: calc(100% - 220px);
        left: 220px;
    }
}
@media (max-width: 1150px) {
    .home-content .sales-boxes{
        flex-direction: column;
    }
    .home-content .sales-boxes .box{
        width: 100%;
        overflow-x: scroll;
        margin-bottom: 30px;
    }
    .home-content .sales-boxes .top-sales{
        margin: 0;
    }
}
@media (max-width: 1000px) {
    .overview-boxes .box{
        width: calc(100% / 2 - 15px);
        margin-bottom: 15px;
    }
}
@media (max-width: 700px) {
    nav .sidebar-button .dashboard,
    nav .profile-details .admin_name,
    nav .profile-details i{
        display: none;
    }
    .home-section nav .profile-details{
        height: 50px;
        min-width: 40px;
    }
    .home-content .sales-boxes .sales-details{
        width: 560px;
    }
}
@media (max-width: 550px) {
    .overview-boxes .box{
        width: 100%;
        margin-bottom: 15px;
    }
    .sidebar.active ~ .home-section nav .profile-details{
        display: none;
    }
}
@media (max-width: 400px) {
    .sidebar{
        width: 0;
    }
    .sidebar.active{
        width: 60px;
    }
    .home-section{
        width: 100%;
        left: 0;
    }
    .sidebar.active ~ .home-section{
        left: 60px;
        width: calc(100% - 60px);
    }
    .home-section nav{
        width: 100%;
        left: 0;
    }
    .sidebar.active ~ .home-section nav{
        left: 60px;
        width: calc(100% - 60px);
    }
    
}
</style>
</head>
<body>
<div class="sidebar">
<div class="logo-details">
<i class='bx bxl-c-plus-plus'></i>
<span class="logo_name">ICT Inventory System</span>
</div>
<ul class="nav-links">
<li>
<a href="<?php echo e(route('home')); ?>">
<i class='fa fa-home' ></i>
<span class="links_name">Dashboard</span>
</a>
</li>
<!-- <li>
<a href="<?php echo e(route('HDepartment.index')); ?>">
<i class='fas fa-building' ></i>
<span class="links_name">Department</span>
</a>
</li> -->
<li>
<a href="<?php echo e(route('Ict.index')); ?>">
<i class='fas fa-ethernet' ></i>
<span class="links_name">Ict Devices</span>
</a>
</li>
<li>
<a href="<?php echo e(route('Ict.index')); ?>">
<i class='fas fa-ethernet' ></i>
<span class="links_name">IP Configuration</span>
</a>
</li>
<li>
<a href="<?php echo e(route('Ict.index')); ?>">
<i class='fas fa-ethernet' ></i>
<span class="links_name">Ict Category</span>
</a>
</li>
<li>
<a href="<?php echo e(route('Ict.index')); ?>">
<i class='fas fa-ethernet' ></i>
<span class="links_name">Ict Status</span>
</a>
</li>
<li class="log_out">
<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
<?php echo csrf_field(); ?>
<a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
<i class='bx bx-log-out'></i>
<span class="links_name">Log out</span>
</a>
</form>
</li>
</ul>
</div>
<div class="sidebar-button">
<i class='bx bx-menu sidebarBtn'></i>
<span class="dashboard">Dashboard</span>
</div>


<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
<span class="navbar-toggler-icon"></span>
</button>

<div>
<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
<!-- Left Side Of Navbar -->
<ul class="navbar-nav me-auto">

</ul>

<!-- Right Side Of Navbar -->
<ul class="navbar-nav ms-auto">
<!-- Authentication Links -->
<?php if(auth()->guard()->guest()): ?>
<?php if(Route::has('login')): ?>
 <!-- <li class="nav-item">
<a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
</li>  -->
<?php endif; ?>

<?php if(Route::has('register')): ?>
<li class="nav-item">
<a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
</li>
<?php endif; ?>
<?php else: ?>
<li class="nav-item dropdown">
<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
<?php echo e(Auth::user()->name); ?>

</a>

 <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
<?php echo e(__('Logout')); ?>

</a>

<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
<?php echo csrf_field(); ?>
</form>
</div> -->
<?php endif; ?>
</ul>
</div>
</div>
</nav>

 <main class="py-4">
<?php echo $__env->yieldContent('content'); ?>
</main>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ICT_Inventory_System_Prototype\resources\views/layouts/app2.blade.php ENDPATH**/ ?>