{{-- <!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index/public/css/style.css" />
    <link rel="stylesheet" href="index/public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <title>Document</title>
</head>

<body> --}}
<div class="module2021">
    <div class="remaincontainer">
        <div class="boxcontent">
            <div class="u-columns col2-set">
                <div class="u-column1 col-1">
                    <form action="" class="formSignin">
                        <h3 class="title-login"> Login </h3>
                        <p class="titleinput-login">
                            <label class="mb-1 font-weight-medium" for="username">Username or email address&nbsp;
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="input-login" name="Username" id="Username">
                        </p>
                        <p class="titleinput-login">
                            <label class="mb-1 font-weight-medium" for="password">Password&nbsp;
                                <span class="required">*</span>
                            </label>
                            <input type="password   " class="input-login" name="Password" id="Password">
                        </p>
                        <div class="Remember-password d-flex flex-column flex-sm-row justify-content-between mb-4">
                            <div class="checkbox-login my-2 my-sm-0">
                                <input type="checkbox" name="rememberme" id="rememberme" value="forever"
                                    class="control-input">
                                <label class="label-control no-radius" for="rememberme">Remember me</label>
                            </div>
                            <a href="{{ url('/login-google') }}" class="text-v-dark font-weight-semibold">Login by
                                gmail</a>
                        </div>
                        <p class="form-row mb-3 mb-lg-0 pb-1 pb-lg-0">
                            <input type="hidden" id="login-btn" name="login-btn" value="ca1cd3182f" /><input
                                type="hidden" name="_wp_http_referer" value="/wordpress/porto/shop1/my-account/" />
                            <button type="submit" class="Login-Button button login-btn btn-v-dark py-3 text-md w-100"
                                name="login" value="Login">
                                LOGIN</button>
                        </p>
                    </form>
                </div>
                <div class="u-column2 col-2">
                    <form action="" class="formSignin">
                        <h3 class="title-login"> Register </h3>
                        <p class="titleinput-login">
                            <label class="mb-1 font-weight-medium" for="username">Email address&nbsp;
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="input-login" name="email" id="email">
                        </p>
                        <div class="Remember-password d-flex flex-column flex-sm-row justify-content-between mb-4">
                            <label for="" style="color: #777777;">A link to set a new password will be sent to your
                                email address.</label>
                        </div>
                        <p class="form-row mb-3 mb-lg-0 pb-1 pb-lg-0">
                            <input type="hidden" id="login-btn" name="register-btn" value="ca1cd3182f" /><input
                                type="hidden" name="_wp_http_referer" value="/wordpress/porto/shop1/my-account/" />
                            <button type="submit" class="Login-Button button login-btn btn-v-dark py-3 text-md w-100"
                                name="register" value="Register">
                                REGISTER</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- </body>

</html> --}}
