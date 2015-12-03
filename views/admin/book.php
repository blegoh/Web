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
                    <h1>Book</h1>
                </div>
                <div class="col-md-12">
                    <a class="btn btn-primary" href="<?=base?>/Book/add">Add New Book</a>

                </div>
                <div class="col-md-12">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="sel1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Filter</button>
                    </form>
                </div>
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($books as $book) {
                        ?>
                            <tr>
                                <td><a href="<?=base?>/Book/items/<?=$book->BookID?>"><?=$book->BookTitle?></a></td>
                                <td><?=$book->category->CategoryName?></td>
                                <td><?=$book->BookAuthor?></td>
                                <td>
                                    <a href="<?=base?>/Book/edit/<?=$book->BookID?>" class="btn btn-primary">Edit</a>
                                    <a href="<?=base?>/Book/delete/<?=$book->BookID?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <ul class="pagination">
                        <li>
                            <a href="#">Prev</a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li>
                            <a href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


</body></html>