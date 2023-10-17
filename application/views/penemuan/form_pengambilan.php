<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOST & FOUND</title>
</head>
<body>
    <style>
                * {
        font-family: Arial, Helvetica;
        }
        body{
          background-color: #d5f0f3;
          }
        .logreg{
            background-color: lightsteelblue;
            border: none;
            border-radius: 8px;
            color: white;
            padding: 15px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 2px;
            cursor: pointer;
          }
        .logreg:hover{
            background: #354259;
        }
        input, a {
            font-weight: bold;
        }
        .input{
            width: 100%;
            padding: 5px 20px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        img{
          width: 100px;
        }
        table {
          border-collapse: collapse;
          width: 30%;
        }
        th {
          background-color: #354259;
          color: white;
          height: 50px;
        }
        input, a {
            font-weight: bold;
        }
    </style>
    <center>
    <h1>LOST & FOUND</h1>
    <h3>TAKEN ITEM FORM</h3>
    <form action="" method="post">
        <table>
            <tr>
                <td>Id Barang</td>
                <td>: <?=$fon->id_barang?></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>: <?=$fon->nama_barang?></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td>: <?=$fon->jenis_barang?></td>
            </tr>
            <tr>
                <td>Tanggal Menemukan</td>
                <td>: <?=$fon->tanggal_menemukan?></td>
            </tr>
            <tr>
                <td>Nama Pemilik</td>
                <td><input type="text" name="nama_pemilik"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="TAKE" class="btn">
                <a href="<?=site_url('penemuan')?>"><input type="button" value="CANCEL" class="btn"></a>
                </td>
            </tr>
        </table>
    </form>
    </center>