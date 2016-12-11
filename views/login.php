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
                    <form enctype="multipart/form-data" method="post" action="<?=base?>/Auth/prosesLogin">
                        <p>Email</p>
                        <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Email">
                        <p>Password</p>
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                        <input type="submit" value="Login">
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