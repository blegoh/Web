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
                    <h1>Member</h1>
                </div>

                <div class="col-md-12">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name">
                        </div>
                        <button type="submit" class="btn btn-default">Filter</button>
                    </form>
                </div>
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telp</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($members as $member) {
                            ?>
                            <tr>
                                <td><?=$member->MemberName?></td>
                                <td><?=$member->MemberAddress?></td>
                                <td><?=$member->MemberPhone?></td>
                                <td>
                                    <?php
                                    if($kode == 1){
                                        echo "<a href='".base."' class=\"btn btn-primary\">Non Aktifkan</a>";
                                    }elseif($kode == 2){
                                        echo "<a href='".base."/Member/Validasi/".$member->MemberID."' class=\"btn btn-primary\">Validasi</a>";
                                    }else{
                                        echo "<a href='".base."' class=\"btn btn-primary\">Aktifkan</a>";
                                    }
                                    ?>
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