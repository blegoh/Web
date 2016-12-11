<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>LiMS</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown">Transaction<span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?=base?>/Transaksi/peminjaman">Peminjaman</a>
                        </li>
                        <li>
                            <a href="<?=base?>/Transaksi/pengembalian">Pengembalian</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="<?=base?>/Book">Book</a>
                </li>
                <li>
                    <a href="<?=base?>/Publisher">Publisher</a>
                </li>
                <li>
                    <a href="<?=base?>/Category">Category</a>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown">Member<span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?=base?>/Member/show/1">Active</a>
                        </li>
                        <li>
                            <a href="<?=base?>/Member/show/0">Request</a>
                        </li>
                        <li>
                            <a href="<?=base?>/Member/show/1/0">Non Active</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown"> <?=$petugas->PetugasName?><span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?=base?>/Auth/logout">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>