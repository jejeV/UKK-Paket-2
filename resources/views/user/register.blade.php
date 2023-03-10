<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="http://rubick.left4code.com/dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User Register</title>

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

    <body class="login">
            <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="http://rubick.left4code.com/dist/images/logo.svg">
                    <span class="text-white text-lg ml-3">
                        LaporAje
                    </span>
                </a>
                <div class="my-auto">
                    <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="http://rubick.left4code.com/dist/images/illustration.svg">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">A few more clicks to <br> sign up to your account.</div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your e-commerce accounts in one place</div>
                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Sign Up</h2>
                    <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                    <form action="{{ route('lapor.register') }}" method="POST">
                        @csrf
                        <div class="intro-x mt-8">
                            <input type="number" class="intro-x login__input form-control py-3 px-4 block" placeholder="NIK" name="nik">
                            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Nama" name="nama">
                            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Username" name="username">
                            <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password" name="password">
                            <input type="number" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Telepon" name="telp">
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            @if (Session::has('pesan'))
            <div class="alert alert-success show flex items-center mb-2" role="alert">
                {{ Session::get('pesan') }}
            </div>
            @endif
            <!-- END: Register Form -->
        </div>
    </div>
</body>
</html>
