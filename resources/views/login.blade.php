@extends('layouts.main')
@section('main')

<div class="vh-100 main-bg">
    <div class="container vh-100 df dfc jcc">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-box">
                    <h1 class="display-5 text-light mb-4">Hey ! Login Here</h1>

                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="/login" method="post">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input name="uname" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                    <label for="floatingInput">username</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-1">
                                    <input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 df jcfe mb-3">
                                <a href="#" class="link-light">Forgot Password ? Click Here</a>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12 df jcc">
                                <button type="submit" class="btn btn-lg btn-warning">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
    .main-bg {
        background-image: url('/rsx/login.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

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
