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
        .kopkima{
          width: 50%;
          border-collapse: collapse;
        }
        .kopkima2{
          border-bottom: 10px solid lightslategray ;
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
    <h3>FORM BARANG HILANG</h3>
    <?php
      $nama        ='';
      $nama_b      ='';
      $jenis       ='';
      $tempat      ='';
      $waktu       ='';
      $tanggal     ='';

    if(isset($lost)) {
        $nama        =$lost->nama_pemilik;
        $nama_b      =$lost->nama_barang;
        $jenis       =$lost->jenis_barang;
        $tempat      =$lost->tempat_kehilangan;
        $waktu       =$lost->waktu_kehilangan;
        $tanggal     =$lost->tanggal_kehilangan;
  
    }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Pemilik</td>
                <td><input type="text" name="nama_pemilik" value="<?=$nama?>" required></td>
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
                <td>Tempat Kehilangan</td>
                <td><textarea name="tempat_kehilangan" cols="20" rows="5" required><?=$tempat?></textarea></td>
            </tr>
            <tr>
                <td>Waktu Kehilangan</td>
                <td><input type="time" name="waktu_kehilangan" value="<?=$waktu?>" required></td>
            </tr>
            <tr>
                <td>Tanggal Kehilangan</td>
                <td><input type="date" name="tanggal_kehilangan" value="<?=$tanggal?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="submit">
                    <a href="<?=site_url('kehilangan')?>"><input type="button" value="CANCEL"></a>
                </td>
            </tr>
        </center>
        </table>
    </form>
</body>
</head>
</html>