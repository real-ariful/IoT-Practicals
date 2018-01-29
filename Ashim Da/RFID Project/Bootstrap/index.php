<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="practicestyle.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">OSMS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Help</a>
                    </li>
                    <li>
                        <a href="#">Result</a>
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Action</a>
                            </li>
                            <li>
                                <a href="#">Another action</a>
                            </li>
                            <li>
                                <a href="#">Something else here</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="#">Separated link</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="user-info-section">
        <div class="container">
            <div class="row">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="Name" class="form-control" id="user-name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="Phone" class="form-control" id="user-phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input type="email" name="Email" class="form-control" id="user-email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea name="Address" placeholder="Address" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="Designation" class="form-control" id="user-Designation" placeholder="Designation">
                        </div>
                        <div class="form-group">
                            <input type="text" name="BloodGroup" class="form-control" id="user-BloodGroup" placeholder="BloodGroup">
                        </div>
                        <div class="form-group">
                            <input type="text" name="CardNo" class="form-control" id="user-Id" placeholder="Card No">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ExpireDate" class="form-control" id="user-ExpireDate" placeholder="Expire Date">
                        </div>


                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="parking" value="1">Parking</label>
                            <label>
                                <input type="checkbox" name="workingArea" value="1">Working Area</label>
                            <label>
                                <input type="checkbox" name="MeetingRoom" value="1">Meeting Room
                            </label>
                            <label>
                                <input type="checkbox" name="conferenceRoom" value="1">Conference Room</label>

                            <label>
                                <input type="checkbox" name="FunZone" value="1"> Fun Zone:</label>
                        </div>



                    </div>
                    <div class="col-md-6">


                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>