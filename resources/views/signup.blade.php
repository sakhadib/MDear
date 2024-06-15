@extends('layouts.main')
@section('main')
<div class="bg-main">
    <div class="container vh-100 df dfc jcc">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="signup-box">
                    <h1 class="display-5 text-light mb-4">Signup to start creating <strong>mdears</strong></h1>

                    <form action="/signup" method="post">
                        @csrf
                        <div class="row mt-1">
                            <div class="col-md-8">
                                <div class="form-floating mb-3">
                                    <input name="fullname" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                    <label for="floatingInput">Full Name</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input name="uname" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                    <label for="floatingInput">username</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                    <label for="floatingInput">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="confirm_pass" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <p class="text-light">By joining to this platform you are agreeing 
                                    to our <a href="/tnc">terms and conditions</a> and <a href="/privacy">privacy policy</a>
                                </p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12 df jcc">
                                <button type="submit" class="btn btn-lg btn-success">Signup</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<style>
    .signup-box {
        width: 100%;
        margin: 0 auto;
        padding: 40px;
        border: 2px solid #ffffff;
        border-radius: 12px;
        background-color: rgba(0, 0, 0, 0.4);
        min-height: 40vh;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
    }

    .bg-main {
        /* background-color: #f8f9fa; */
        background-image: url('/rsx/signup.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .form-control:hover{
        border: none;
        box-shadow: none;
        border-radius: 10px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.5);
    }

    .form-control:focus {
        border: none;
        box-shadow: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.5);
    }
</style>




@endsection