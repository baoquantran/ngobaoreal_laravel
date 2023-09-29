<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Login Form</title>
    <link rel="stylesheet" href="/admin/stylelogin.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>
    <div class="login-form w3_form">
        <div class="login-title w3_title">
            <h1>Elegant Login Form</h1>
        </div>
        <div class="login w3_login">
            <h2 class="login-header w3_header">Log in</h2>
            <div class="w3l_grid">
                <form class="login-container" action="{{url('dashboard/login')}}" method="post"> @csrf
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="submit" value="Submit">
                    @if(Session::exists('thongbao'))
                         <b class="text-danger text-center mt-5" >{{ Session::get('thongbao') }} </b>
                    @endif
                </form>
                <div class="second-section w3_section">
                    <div class="bottom-header w3_bottom">
                        <h3>OR</h3>
                    </div>
                    <div class="social-links w3_social">
                        <ul>
                            <li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="googleplus" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="bottom-text w3_bottom_text">
                    <p>No account yet? <a href="#">Signup</a></p>
                    <h4><a href="#">Forgot your password?</a></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-w3l">
        <p class="agile">&copy; 2017 Elegant Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
</body>
</html>
