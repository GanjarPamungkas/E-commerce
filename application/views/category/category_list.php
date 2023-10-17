<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOST & FOUND</title>
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
            font-size: 14px;
        }
        .menu ul {
            list-style: none;
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
        h3 { text-align: center;
        }

        table { margin: 20px auto; 
        
        }
        
        .btn{
            background-color: black;
            border-radius: 10px;
            line-height: 10px;
            font-size: 16px;
            font-weight: bold;
            font-family: Verdana;
            border: none;
            border-radius: 8px;
            color: white;
            padding: 8px 8px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 10px;
            margin: 4px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: black;
            color: white;
        }

        .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
    }
 
    .table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
    }
 
    .table1, th, td {
    padding: 8px 20px;
    text-align: center;
    }
 
    .table1 tr:hover {
    background-color: #f5f5f5;
}
 
    .table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
    </style>
    </style>
</head>
<body>
    <center>
    <h1>LOST & FOUND</h1>
    <h3>Categories List</h3>
    <div class="menu">
        <ul>
            <li><a href="<?=base_url()?>"><h4>HOME</h4></a></li>
            <li><a href="<?=site_url('category/add')?>">Add New Categories</a></li>
        </ul>
    </div>
    <?=$this->session->flashdata('msg')?>
    <table border="3">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Deskripsi Barang</th>
            <th colspan="2">Action</th>
        </tr>
        <?php $i=1; foreach($category as $categori) { ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$categori->category_name?></td>
            <td><?=$categori->description?></td>
            <td><a href="<?=site_url('category/edit/'.$categori->category_id)?>" class="btn">Edit</a></td>
            <td><a href="<?=site_url('category/delete/'.$categori->category_id)?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr><?php } ?>
    </table>
    </center>
</body>
</html>