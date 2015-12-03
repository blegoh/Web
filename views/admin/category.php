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
                    <h1>Category</h1>
                </div>
                <div class="col-md-12">
                    <a class="btn btn-primary" href="<?=base?>/Category/add">Add New Category</a>

                </div>
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach ($categories as $category) {
                            ?>
                            <tr>
                                <td><?=$i++?></td>
                                <td><?=$category->CategoryName?></td>
                                <td>
                                    <a href="<?=base?>/Category/edit/<?=$category->CategoryID?>" class="btn btn-primary">Edit</a>
                                    <a href="<?=base?>/Category/delete/<?=$category->CategoryID?>" class="btn btn-danger">Delete</a>
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