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
                    <h1>Add Book</h1>
                </div>
                <div class="col-md-12">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" action="<?=base?>/Book/<?=(isset($book))?"prosesEdit/$book->BookID":"prosesAdd"?>" method="post">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Judul</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="title" placeholder="Judul" value="<?=(isset($book))?$book->BookTitle:""?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Penulis</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="author" placeholder="Penulis" value="<?=(isset($book))?$book->BookAuthor:""?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Penerbit</label>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control" name="publisher">
                                    <option>Pilih Penerbit</option>
                                    <?php
                                    foreach ($publishers as $publisher) {
                                        ?>
                                        <option value="<?=$publisher->PublisherID?>" <?=(isset($book) && $book->PublisherID == $publisher->PublisherID)?"selected":""?>><?=$publisher->PublisherName?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Category</label>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control" name="category">
                                    <option>Pilih Kategori</option>
                                    <?php
                                    foreach ($categories as $category) {
                                    ?>
                                    <option value="<?=$category->CategoryID?>" <?=(isset($book) && $book->CategoryID == $category->CategoryID)?"selected":""?>><?=$category->CategoryName?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Jumlah Halaman</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="pageCount" placeholder="Jumlah Halaman" value="<?=(isset($book))?$book->BookPageCount:""?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Tahun Terbit</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="year" placeholder="Tahun Terbit" value="<?=(isset($book))?$book->BookPublished:""?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Deskripsi</label>
                            </div>
                            <div class="col-sm-6">
                                <textarea class="form-control" rows="5" name="des"><?=(isset($book))?$book->BookDescription:""?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Foto</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="file" name="photo" placeholder="Foto">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="inputEmail3" class="control-label">Harga</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="price" placeholder="Harga" value="<?=(isset($book))?$book->BookPrice:""?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary"><?=(isset($book))?"Update":"Save"?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body></html>