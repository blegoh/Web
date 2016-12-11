<html>
<head>
    <?php require_once "views/parts/head.php"; ?>
</head><body>
<?php require_once "views/parts/header.php"; ?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h1>Peminjaman</h1>
                </div>
                <?php
                if(isset($_SESSION['msg'])){
                    ?>
                    <div class="alert alert-<?=($_SESSION['error'])?"danger":"succes"?>">
                        <?=$_SESSION['msg']?>
                    </div>
                <?php
                    unset($_SESSION['msg']);
                    unset($_SESSION['error']);
                }
                ?>
                <div class="col-md-12">
                    <form class="form-horizontal" role="form" action="<?=base?>/Transaksi/prosesPinjam" method="post">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Member ID</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="member" placeholder="Member ID" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Item Buku</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="item" placeholder="Item ID" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body></html>