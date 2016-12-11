<html>
<head>
<?php require_once('parts/head-front.php'); ?>
</head>
<body>

<?php require_once('parts/header-front.php'); ?>
<?php require_once('parts/left.php'); ?>

<div id="content">
    <div class="row">
        <div class="col-sm-12">
            <center>
                <div class="form">
                    <form enctype="multipart/form-data" method="post" action="<?=base?>/Auth/prosesRegister">
                        <p>Email</p>
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                        <p>Nama</p>
                        <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Nama">
                        <p>Alamat</p>
                        <input type="text" name="address" class="form-control" id="inputEmail3" placeholder="Alamat">
                        <p>No Telp</p>
                        <input type="text" name="phone" class="form-control" id="inputEmail3" placeholder="No Telp">
                        <p>Password</p>
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                        <p>Confirm Password</p>
                        <input type="password" name="confirm" class="form-control" id="inputPassword3" placeholder="Password">

                        <input type="submit" value="Register">
                    </form>
                </div>
            </center>
        </div>
    </div>
</div>


<div id="footer">
    <h5>copyright@yusufeka</h5>
</div>
</body>
</html>