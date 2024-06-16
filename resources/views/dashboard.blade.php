@extends('layouts.main')
@section('main')
<div class="bg-main">
    <div class="vh-10"></div>
    <div class="container profile-container df dfc jcc">
        <div class="row">
            <div class="col-md-4 df jcc aic">
                <img src="rsx/avatar/{{session('image')}}" alt="" class="dp" data-bs-toggle="modal" data-bs-target="#exampleModal">
            </div>
            <div class="col-md-8 df dfc jcc">
                <h1 class="display-4 text-light mt-3 mt-md-0 text-center text-md-start">sakhadib</h1>
                <div class="row">
                    <div class="col-6 col-md-3 mt-3">
                        <p class="text-light lead"><i class="fa-solid fa-wand-magic-sparkles"></i> Full Name :</p>
                        <p class="text-light lead"><i class="fa-solid fa-calendar"></i> Member Since :</p>
                    </div>
                    <div class="col-6 col-md-3 mt-3">
                        <p class="text-light lead"><strong>Sakhawat Adib</strong></p>
                        <p class="text-light lead"><strong>16 June 2023</strong></p>
                    </div>
                    <div class="col-6 col-md-3 mt-3 offset-md-1">
                        <p class="text-light lead">Total Mdears :</p>
                        <p class="text-light lead">Public Mdears :</p>
                    </div>
                    <div class="col-6 col-md-1 mt-3">
                        <p class="text-light lead"><strong>240</strong></p>
                        <p class="text-light lead"><strong>17</strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <a href="/editprofile" class="btn btn-outline-light"><i class="fa-solid fa-pen-to-square"></i> Edit Profile</a>
                        <a href="/create" class="btn btn-outline-light">Create New Mdear</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{session('username')}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="rsx/avatar/{{session('image')}}" alt="" class="big-dp">
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>

<style>
    .bg-main {
        background-image: url('/rsx/dashboard.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        min-height: 100vh;
    }
    .dp {
        width: 250px;
        height: 250px;
        border-radius: 50%;
        border: 3px solid #ffffff;
        /* margin-top: 20px; */
        cursor: pointer;
    }

    .profile-container {
        padding: 20px;
        border: 2px solid #ffffff;
        border-radius: 12px;
        background-color: rgba(0, 0, 0, 0.7);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        min-height: 40vh;
    }

    .big-dp {
        width: 100%;
        height: 100%;
        border-radius: 12px;
    }
</style>
@endsection