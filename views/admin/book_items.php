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
                    <h1>Book Items</h1>
                </div>
                <div class="col-md-12">
                    <a class="btn btn-primary" href="<?=base?>/Book/addItem/<?=$book->BookID?>">Add New Items</a>
                </div>
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Item ID</th>
                            <th>Status</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach ($book->items as $item) {
                            ?>
                            <tr>
                                <td><?=$i++?></td>
                                <td><?=$item->ItemID?></td>
                                <td><?=$item->ItemStatus?></td>
                                <td>
                                    <a href="<?=base?>/Book/deleteItem/<?=$item->ItemID?>" class="btn btn-danger">Delete</a>
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