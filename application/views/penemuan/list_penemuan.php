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
            background-color: green;
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

.logreg{
            background-color: pink;
            border-radius: 10px;
            line-height: 10px;
            font-size: 16px;
            font-weight: bold;
            font-family: Verdana;
             border: none;
            border-radius: 8px;
            color: black;
            padding: 13px 13px;
             text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px;
            cursor: pointer;
        }
    .logreg:hover{
        background: lavenderblush;
    }
    </style>
</head>
<body>
    <center><h1>LOST&FOUND</h1></center>
    <center>
    <h3>LIST FOUND ITEMS</h3>
    <div class="menu">
        <ul>
            <li><a href="<?=base_url()?>"><h4>HOME</h4></a></li>
            <li><a href="<?=site_url('penemuan/add')?>">ADD FOUNDED ITEMS</a></li>
        </ul>
    </div>
    <?=$this->session->flashdata('msg')?>
    <table border="5">
        <tr>
            <th>NO</th>
            <th>Nama Penemu</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Add Photo</th>
            <th>Tempat Menemukan</th>
            <th>Waktu Menemukan</th>
            <th>Tanggal Menemukan</th>
            <th colspan="3">Action</th>
        </tr>
        <?php foreach($found as $fon) { ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$fon->nama_penemu?></td>
            <td><?=$fon->nama_barang?></td>
            <td><?=$fon->jenis_barang?></td>
            <td><img src="<?=base_url('uploads/penemuan/'.$fon->phototemu)?>" width="50" height="50" />
                <br><a href="<?=site_url('penemuan/changephoto/'.$fon->id_barang)?>">Add Photo</a>
            </td>
            <td><?=$fon->tempat_menemukan?></td>
            <td><?=$fon->waktu_menemukan?></td>
            <td><?=$fon->tanggal_menemukan?></td>
            <td><a href="<?=site_url('penemuan/edit/'.$fon->id_barang)?>" class="btn">Edit</a></td>
            <td><a href="<?=site_url('penemuan/delete/'.$fon->id_barang)?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            <td><?php if($fon->taken==1) echo 'TAKEN'; else { ?><a href="<?=site_url('penemuan/take/'.$fon->id_barang)?>" class="btn">TAKE</a><?php } ?></td>
        </tr><?php } ?>
    </table>
    <p class="logreg"><?=$this->pagination->create_links();?></p>
    </center>
</body>
</html>