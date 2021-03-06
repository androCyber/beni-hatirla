<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
<h1>Beni Hatırla Uygulaması</h1>
<hr><?php
            if ($_GET['authentication']=="reject"){

    ?>
        <div class="alert alert-danger">Giriş İşlemi Başarısız.</div>

        <?php } else if($_GET['authentication']=="logout"){?>

            <div class="alert alert-success">Başarı ile Çıkış yaptınız.</div>

            <?php }?>
        
        
      
        <form action="islem.php" method="POST">
            <div class="form-group">
                <label class="form-label">Kullanıcı Adı</label>
                <input type="text" class="form-control" name="kullaniciAdi"
                <?php if (isset($_COOKIE['kullaniciAdi'])){?>
                        value="<?php echo $_COOKIE['kullaniciAdi']; ?>"
                    
                    <?php } else {?>
                        placeholder="Kullanıcı Adını Giriniz..."
                <?php } ?>
                 >
                <div id="emailHelp" class="form-text">Bilgileriniz kimse ile paylaşılmamaktadır.</div>
            </div>
            <div class="form-group">
                <label class="form-label">Şifre</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="sifre" 
                <?php if (isset($_COOKIE['kullaniciAdi'])){?>
                        value="<?php echo $_COOKIE['sifre']; ?>"
                    
                    <?php } else {?>       
                                    placeholder="Şifrenizi Giriniz..."
                <?php } ?>
                 >
                
                
                
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" <?php echo isset($_COOKIE['kullaniciAdi']) ? "checked" : ""; ?> name="beniHatirla" id="exampleCheck1">
                <label class="form-check-label " for="exampleCheck1">Beni Hatırla</label>
            </div>
            <div class="bg-light clearfix">
            <button type="submit" name="giris" class="btn btn-primary float-right ">Giriş Yap</button>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</body>

</html>