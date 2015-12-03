<html>
<head>
    <?php require_once "views/parts/head.php"; ?>
</head>
<body>
<?php require_once "views/parts/header.php"; ?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h1>Publisher</h1>
                </div>
                <div class="col-md-12">
                    <a class="btn btn-primary" href="<?=base?>/Publisher/add">Add New Publisher</a>

                </div>
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($publishers as $publisher) {
                            ?>
                            <tr>
                                <td><?=$publisher->PublisherName?></td>
                                <td><?=$publisher->PublisherAddress?></td>
                                <td><?=$publisher->PublisherCity?></td>
                                <td>
                                    <a href="<?=base?>/Publisher/edit/<?=$publisher->PublisherID?>" class="btn btn-primary">Edit</a>
                                    <a href="<?=base?>/Publisher/delete/<?=$publisher->PublisherID?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


</body></html>