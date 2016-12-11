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
            <div class="post">
                <div class="row">
                    <div id="wrap-content">
                        <div class="col-sm-12">
                            <div class="content-heading">
                                <h3>Buku Terbaru<a href="">Lihat Semua<i class="fa fa-chevron-right"></i></a></h3>
                            </div>
                        </div>
                        <?php foreach ($terbaru as $book) { ?>
                        <div class="col-sm-2">
                            <a href="#">
                                <div class="post-content">
                                    <img src="img/<?=$book->BookPhoto?>">
                                    <h4><?=$book->BookTitle?></h4>
                                    <p><?=$book->category->CategoryName?></p>
                                    <a href="<?=base?>/Book/detail/<?=$book->BookID?>"><button>Details</button></a>
                                </div>
                            </a>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <h5>copyright@yusufeka</h5>
</div>
</body>
</html>