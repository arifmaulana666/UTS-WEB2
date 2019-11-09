<?php 
//koneksi sederhana dengan PDO
$con=new PDO("mysql:host=localhost;dbname=db_login", "root", "");

if (isset($_POST['login'])) {
      $user=$_POST['user'];
      $pass=$_POST['pass'];

      $query=$con->prepare("select * from user where username=:user and password=:pass");
      $query->BindParam(":user",$user);
      $query->BindParam(":pass", $pass);
      $query->execute();
      if($query->rowCount()>0) {
          session_start();
          $data=$query->fetch();
          if($data['level'] == "admin") {
              $_SESSION['username']=$data['username'];
              $_SESSION['level']=$data['level'];
              header('location:admin.php');
          }else{
              $_SESSION['username']=$data['username'];
              $_SESSION['level']=$data['level'];
              header('location:user.php');
          }
      }
      else{
          echo "tidak di temukan";
      }
  }

?> 