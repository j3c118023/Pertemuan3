<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hapus data</title>
  </head>
  <body>
  <div class="hero">
    <form style="margin-top:200px">
    
    <?php
    include "koneksi.php";
    $r = mysqli_query($kon,"SELECT * FROM mahasiswa WHERE id=".$_GET["id"]);
    $brs = mysqli_fetch_assoc($r);
    ?>
    
    <div class="container">
        <div class="container-dalem">
    <h1 style="text-align:center">Anda yakin ingin menghapus data ?</h1>
    <br>
    <input type="hidden" name="idDelete" value="<?php echo $_GET["id"]; ?>">
    <input style="margin-left: 800px;" type="submit" name="jawab" value="YA" class="btn btn-danger"></input>
    <input style="text-align:center;" type="submit" name="jawab" value="TIDAK" class="btn btn-light"></input >
    </form>
        </div>
    </div>
    <?php
    if(isset($_GET['jawab'])){
        if($_GET['jawab']=="YA"){
            $r = mysqli_query($kon,"DELETE FROM `mahasiswa` WHERE `id` = ".$_GET['idDelete']);
            header("location:index.php");}
        else{
            header("location:index.php");
        }
    }
    ?>
  </div> 
  <script>
        var show = document.getElementById("nav-links");
        function showMenu(){
            show.style.right = "0";
        }
        function closeMenu(){
            show.style.right = "-200px";
        }
    </script>
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>