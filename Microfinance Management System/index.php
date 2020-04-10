<!doctype html>
<html lang="en">
<?php include('includes/header.php'); ?>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-12 col-sm-12 ">
            <div class="login-con">
                <img src="profile/profile.svg" alt="login icon">
            </div>
            <div class="login-text">
                <span class="login-text1">MICROFINANCE</span><span> MANAGEMENT SYSTEM</span>
            </div>
            <div class="card" id="login-card">
                <div class="card-body">
                    <form action="#">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label for="username"><strong><span class="fa fa-user fa-fw"></span>Username:</strong></label>
                                <input type="text" class="form-control shadow-none" required="required" placeholder="Enter Username" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label for="password"><strong><span class="fa fa-lock fa-fw"></span>Password:</strong></label>
                                <input type="password" class="form-control shadow-none" required="required" placeholder="Enter Password" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-8">
                                Forget Password? <a href="#">Click here</a><br>
                                <a href="admin/admin_dashboard.php?admin">Admin</a>

                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-outline-info btn-md float-lg-right">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="custom-js/microfinance.js"></script>
</body>
</html>
