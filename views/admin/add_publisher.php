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
                    <h1>Add Publisher</h1>
                </div>
                <div class="col-md-12">
                    <form class="form-horizontal" role="form" action="<?=base?>/Publisher/<?=(isset($publisher))?"prosesEdit/$publisher->PublisherID":"prosesAdd"?>" method="post">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Nama</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" placeholder="Nama" value="<?=(isset($publisher))?$publisher->PublisherName:""?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Alamat</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="address" placeholder="Alamat" value="<?=(isset($publisher))?$publisher->PublisherAddress:""?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Kota</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="city" placeholder="Kota" value="<?=(isset($publisher))?$publisher->PublisherCity:""?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Telp</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="phone" placeholder="Telp" value="<?=(isset($publisher))?$publisher->PublisherPhone:""?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary"><?=(isset($publisher))?"Update":"Save"?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body></html>