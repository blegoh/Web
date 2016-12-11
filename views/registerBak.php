<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?=base?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base?>/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base?>/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
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
                <li class="active">
                    <a href="#">Book</a>
                </li>
                <li>
                    <a href="#">Publisher</a>
                </li>
                <li>
                    <a href="#">Category</a>
                </li>
                <li>
                    <a href="#">Member</a>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown"> Namanya User <span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#">Action</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="<?=base?>/Auth/prosesRegister">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="inputEmail3" class="control-label">Email</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="inputEmail3" class="control-label">Nama</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="inputEmail3" class="control-label">Alamat</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="address" class="form-control" id="inputEmail3" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="inputEmail3" class="control-label">No Telp</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="phone" class="form-control" id="inputEmail3" placeholder="No Telp">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="inputPassword3" class="control-label">Password</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="inputPassword3" class="control-label">Confirm Password</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="password" name="confirm" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>