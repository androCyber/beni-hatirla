<?php
ob_start();
session_start();
if (isset($_POST['giris'])){

  if($_POST['kullaniciAdi']=="admin" && $_POST['sifre']=='123')
                    { 
                      $_SESSION['kullaniciAdi']=$_POST['kullaniciAdi'];
                      $_SESSION['sifre']=$_POST['sifre'];

                        if (isset($_POST['beniHatirla'])){
                          setcookie("kullaniciAdi","admin",strtotime("+1 day"));
                          setcookie("sifre","123",strtotime("+1 day"));

                        }
                    }



}
?>