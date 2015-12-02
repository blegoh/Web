<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?=base?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base?>/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base?>/css/bootstrap.css" rel="stylesheet" type="text/css">
</head><body>
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
                <div class="col-md-12">
                    <h1>Book</h1>
                </div>
                <div class="col-md-12">
                    <a class="btn btn-primary">Add New Book</a>
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
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($books as $book) {
                        ?>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
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