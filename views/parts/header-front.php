<header id="header">
    <div class="row">
        <div class="col-sm-2">
            <a href="index.php"><img src="<?=base?>/img/logo.png"></a>
        </div>
        <div class="col-sm-10">
            <ul class="na navbar-nav navbar-right">
                <li><a href="<?=base?>">Home</a></li>
                <?php if(isset($member)){ ?>
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown"> <?=$member->MemberName?><span class="fa fa-caret-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="<?=base?>/Auth/logout" style="color: #000;">Logout</a>
                            </li>
                        </ul>
                    </li>
                <?php }else{?>
                    <li><a href="<?=base?>/Auth">Login</a></li>
                    <li><a href="<?=base?>/Auth/register">Register</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</header>