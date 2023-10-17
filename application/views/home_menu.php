<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LOST & FOUND</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { 
            font-family: arial;
            background-color: #d5f0f3;  
        }
        h1 {
            font-size: 30px;
            text-align: center; 
        }
        .menu {
            background-color: black;
            font-weight: bold;
            font-size: 13px;
        }
        .menu ul {
            margin: 0;
            padding: 0;
        }
        .menu ul li {
            display: inline-table;
            margin-left: 4px;
        }
        .menu ul li a {
            display: block;
            text-decoration: none;
            line-height: 40px;
            padding: 0 10px;
            color: #fff;
        }
        .menu ul li a:hover {  
            background-color: white; 
            color: black; 
        }
        h4 {
            font-size: 24px;
            text-align: center;
            margin-top: 40px;
        }
        .image {
            margin-left: 580px;
            width: 240px; 
            height: 240px;
            border-radius: 50%
        }
        .post {
    width: 100%;
    height: auto;
    font-family: 'montserrat', sans-serif;
}

#pozizi {
    display: inline-block;
    margin-top: 60px;
    margin-left: 130px;
    font-family: 'montserrat', sans-serif;
}

#footering {
    margin: 0;
    background-image: url(uploads/home/tumpukan_sepatu.png);
    background-repeat: no-repeat;
    height: 150px;
    width: 100%;
    margin-top: 200px;
    position: absolute;
    border: 1px;
}
</style>

    </style>
</head>
<body>
    <h1>JUNIOR SECOND STORE</h1>
    <center>
    <h3>APPS MENU</h3>
    <div class="menu">
    <ul>
        <li><a href="<?=site_url('kehilangan')?>">List Lost Items</a></li>
        <li><a href="<?=site_url('kehilangan')?>">SHOP</a></li>
        <li><a href="<?=site_url('kehilangan')?>">CONTACT</a></li>
        <li><a href="<?=site_url('kehilangan')?>">LOGIN</a></li>
        <li><a href="<?=site_url('penemuan')?>">List Found Items</a></li>
        <li><a href="<?=site_url('category')?>">Categories Items</a></li>
        <li><a href="<?=site_url('users')?>">Manage Users</a></li>
        <li><a href="<?=site_url('kehilangan/founded')?>">Discovery Report</a></li>
        <li><a href="<?=site_url('penemuan/taken')?>">Take Items Report</a></li>
        <li><a href="<?=site_url('auth/changepass')?>">Change Password</a></li>
        <li><a href="<?=site_url('auth/changephoto')?>">Change Photo</a></li>
        <li><a href="<?=site_url('auth/logout')?>">Logout</a></li>
    </ul>
    </div>
    <div class="slider">
        <div class="images">
            <input type="radio" name="slide" id="img1" checked>
            <input type="radio" name="slide" id="img2">
            <input type="radio" name="slide" id="img3">
            <input type="radio" name="slide" id="img4">

            <img src="1.jpg" class="m1" alt="img1">
            <img src="2.jpg" class="m2" alt="img2">
            <img src="3.jpg" class="m3" alt="img3">

        </div>
        <div class="dots">
            <label for="img1"></label>
            <label for="img2"></label>
            <label for="img3"></label>
        </div>
    </div>
   <div class="swiperslide">
   <img src="<?=base_url('uploads/home/tumpukan_sepatu.png')?>" width="1581px" height="570px" />
   </div>
</body>
</html>