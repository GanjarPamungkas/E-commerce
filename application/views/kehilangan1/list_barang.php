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
    <h3>LIST LOST ITEMS</h3>
    <div class="menu">
        <ul>
            <li><a href="<?=base_url()?>"><h4>HOME</h4></a></li>
            <li><a href="<?=site_url('kehilangan/add')?>">ADD LOST ITEMS</a></li>
        </ul>
    </div>
    <?=$this->session->flashdata('msg')?>
    <table border="5">
        <tr>
            <th>NO</th>
            <th>Nama Pemilik</th>
            <th>Nama Barang</th>
            <th>Jenis</th>
            <th>Photo Barang</th>
            <th>Tempat Kehilangan</th>
            <th>Waktu Kehilangan</th>
            <th>Tanggal Kehilangan</th>
            <th colspan="3">Action</th>
        </tr>
        <?php foreach($lost as $los) { ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$los->nama_pemilik?></td>
            <td><?=$los->nama_barang?></td>
            <td><?=$los->jenis_barang?></td>
            <td><img src="<?=base_url('uploads/kehilangan1/'.$los->photobrg)?>" w   idth="50" height="50" />
                <br><a href="<?=site_url('kehilangan/changephoto/'.$los->id_barang)?>">Add Photo</a>
            </td>
            <td><?=$los->tempat_kehilangan?></td>
            <td><?=$los->waktu_kehilangan?></td>
            <td><?=$los->tanggal_kehilangan?></td>
            <td><a href="<?=site_url('kehilangan/edit/'.$los->id_barang)?>" class="btn">Edit</a></td>
            <td><a href="<?=site_url('kehilangan/delete/'.$los->id_barang)?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
           <td><?php if($los->founded==1) echo 'FOUNDED'; else { ?><a href="<?=site_url('kehilangan/found/'.$los->id_barang)?>" class="btn">LOST</a><?php } ?></td>
        </tr><?php } ?>
    </table>
    <p class="logreg"><?=$this->pagination->create_links();?></p>
    </center>
</body>
</html>