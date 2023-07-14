<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 1030px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 160px;
        }
    </style>

    <title>@yield('title')</title>
</head>
<body style="background-color: #f2f3f7!important;">
@include("layouts.header")



@yield('main-content')

@yield('sub-content')

<script !src="{{asset('/js/bootstrap.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var closeButton = document.querySelector('.btn-close');
        var toast = document.querySelector('.toast');

        closeButton.addEventListener('click', function () {
            toast.classList.add('d-none');
        });
    });
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>
</html>

