<div class="login-dark">
    <div class="main-container p-3">
    <div class="back-btn-container">
        <a href="<?= base_url('/') ?>" class="btn btn-outline-light">
            <i class="fa-solid fa-arrow-left"></i>
            Home
        </a>
    </div>


</div>
    <style>
        .login-dark {
            height: 100vh;
            background: #475d62 url('../../assets/img/star-sky.jpg');
            background-size: cover;
            position: relative;
        }
        .login-dark form {
            max-width: 420px;
            width: 90%;
            background-color: #1e2833;
            padding: 40px;
            border-radius: 4px;
            transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            left: 50%;
            color: #fff;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.2);
        }
        .login-dark .illustration {
            text-align: center;
            padding: 15px 0 20px;
            font-size: 100px;
            color: #2980ef;
        }
        .login-dark form .form-control {
            background: none;
            border: none;
            border-bottom: 1px solid #434a52;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
        }
        .login-dark form .form-control::placeholder {
            color: #ccc;
            opacity: 1;
        }
        .login-dark form .btn-primary {
            background: #214a80;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 26px;
            text-shadow: none;
            outline: none;
        }
        .login-dark form .btn-primary:hover,
        .login-dark form .btn-primary:active {
            background: #214a80;
            outline: none;
        }
        .login-dark form .forgot {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #6f7a85;
            opacity: 0.9;
            text-decoration: none;
        }
        .login-dark form .forgot:hover,
        .login-dark form .forgot:active {
            opacity: 1;
            text-decoration: none;
        }
        .login-dark form .btn-primary:active {
            transform: translateY(1px);
        }
    </style>
    
    <form method="post" action="<?= base_url('/signup') ?>">
        <h2 class="fw-bold mb-2 text-uppercase text-center">sign up</h2>
        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
        <div class="form-group">
            <input class="form-control" type="text" name="username" placeholder="Username">
            <input class="form-control" type="text" name="fullname" placeholder="Full Name">
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password">
        </div>
        <div class="form-group d-flex justify-content-center mt-4">
            <button class="btn btn-success px-5" type="submit">Sign Up</button>
        </div>
        <div class="d-flex justify-content-center">
            <p class="or-txt m-3">or</p>
        </div>
        <div class="d-flex justify-content-center">
            <a href="<?= base_url('/login')?>" class="create-account-a text-decoration-none text-primary" >
                Login
            </a>
        </div>
    </form>
</div>
