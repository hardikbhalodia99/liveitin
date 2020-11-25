<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   

</head>

<body>
    <style>
        .form-control:focus {
            border-color: rgba(7, 10, 59, 0.39) darkturquoise fuchsia dimgray;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#btn').click(function () {
                $('#modal').modal('show');
            });

        });
    </script>

    <div class="modal" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title">SIGN IN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputUser1">Username</label>
                            <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="userHelp"
                                placeholder="Enter Username">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-primary">Login</button>
                            <button type="submit" class="btn btn-outline-primary">Register</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class=" navbar-brand" href="#"><img src="images/logo5.png" class="img-fluid" style="height:50px;width:120px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle navbar-brand" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Experiences
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="#">Action</a>
                        <a class="dropdown-item " href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item " href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link navbar-brand" href="tripplannerpage.php"><img src="suitcase (1).svg"
                            style="height: 18px;">&nbsp;Trip
                        Planner<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link navbar-brand" href="#">Profile Page</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link navbar-brand btn btn-outline-primary" id="btn" href="#">SIGN IN</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link navbar-brand " href="#"><img src="profile.png" class="rounded-circle"
                            style="height: 35px;"></a>
                </li>
            </ul>
        </div>
    </nav><br><br>

</body>

</html>