<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOST&FOUND</title>
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

        th, td {
          padding: 6px;
          text-align: right;
          border-bottom: 1px solid #ddd;
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
    <h1>LOST&FOUND</h1>
    <h3>FORM PENEMUAN BARANG</h3>
    <?php
      $nama        ='';
      $nama_b      ='';
      $jenis       =''; 
      $tempat      ='';
      $waktu       ='';
      $tanggal     ='';

    if(isset($found)) {
        $nama        =$found->nama_penemu;
        $nama_b      =$found->nama_barang;
        $jenis       =$found->jenis_barang; 
        $tempat      =$found->tempat_menemukan;
        $waktu       =$found->waktu_menemukan;
        $tanggal     =$found->tanggal_menemukan;
  
    }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Penemu</td>
                <td><input type="text" name="nama_penemu" value="<?=$nama?>" required></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" value="<?=$nama_b?>" required></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td>
                    <select name="jenis_barang" required>
                        <option value="">Choose Type</option>
                        <option value="Aksesoris" <?=$jenis=='Aksesoris'?'selected':''?>>Aksesoris</option>
                        <option value="Elektronik" <?=$jenis=='Elektronik'?'selected':''?>>Elektronik</option>
                        <option value="Outfit" <?=$jenis=='Outfit'?'selected':''?>>Outfit</option>
                        <option value="Key" <?=$jenis=='Key'?'selected':''?>>Key</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tempat Menemukan</td>
                <td><textarea name="tempat_menemukan" cols="20" rows="5" required><?=$tempat?></textarea></td>
            </tr>
            <tr>
                <td>Waktu Menemukan</td>
                <td><input type="time" name="waktu_menemukan" value="<?=$waktu?>" required></td>
            </tr>
            <tr>
                <td>Tanggal Menemukan</td>
                <td><input type="date" name="tanggal_menemukan" value="<?=$tanggal?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="submit">
                    <a href="<?=site_url('penemuan')?>"><input type="button" value="CANCEL"></a>
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</head>
</html>