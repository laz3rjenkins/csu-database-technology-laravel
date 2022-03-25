<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <title>Профиль</title>
    <style>
        body {
            background: rgb(99, 39, 120)
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }
        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }
        .profile-button:hover {
            background: #682773
        }
        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }
        .profile-button:active {
            background: #682773;
            box-shadow: none
        }
        .back:hover {
            color: #682773;
            cursor: pointer
        }
        .labels {
            font-size: 11px
        }
        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
    </style>
    <link rel="stylesheet" href="/css/headers.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
@include('layouts.header')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">{{$user->first_name}} {{$user->last_name}}</span>
                <span class="text-black-50">{{$user->email}}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label>
                        <input type="text" class="form-control" placeholder="first name" value="{{$user->first_name}}"></div>
                    <div class="col-md-6"><label class="labels">Surname</label>
                        <input type="text" class="form-control" value="{{$user->last_name}}" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Email</label>
                        <input type="email" class="form-control" placeholder="Email" value="{{$user->email}}">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Birth day</label>
                        <input class="form-control" name="bdate" type="date" placeholder="Birth day" value="{{$user->bdate}}"/>
                    </div>
                    <div class="col-md-12"><label class="labels">Login</label>
                        <input type="text" class="form-control" placeholder="Login" value="{{$user->login}}">
                    </div>
                    <div class="col-md-12"><label class="labels">Experience</label>
                        <input type="text" class="form-control" placeholder="Expirience" value="{{$user->exp}}">
                    </div>
                    <div class="col-md-12"><label class="labels">Я работодатель</label>
                        <input class="form-control" type="hidden" name="jobgiver" value="{{!$user->jobgiver}}" />
                        <input type="checkbox" name="jobgiver" name="jobgiver" value="{{$user->jobgiver}}" @if($user->jobgiver == 1) checked @endif />
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">New password</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">Confirm new password</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
</body>
</html>
