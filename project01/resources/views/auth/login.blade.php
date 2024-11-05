<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        
    </style>

</head>

<body class="bg-light">
    <section class="vh-100" style="background-color: #e7a793;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-200">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-7 d-none d-md-block">
                                <img src="images/fot.jpg" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-5 col-lg-5 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-6 text-black">

                                    @session('status')
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ $value }}
                                        </div>
                                    @endsession

                                    <form method="POST" action="{{ route('login') }}">
                                        <div>
                                             <h2>Dean Office Management System </h2>
                                            <h3>[ Faculty of Technology ]</h3><br>
                                        </div>
                                        @csrf

                                        <div data-mdb-input-init class="form-outline mb-4 ">
                                        
                                            <x-input id="text" class="block mt-1 w-full" type="text"
                                                name="text" :value="old('text')" required autofocus
                                                autocomplete="username" placeholder="UserID"/>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                        
                                            <x-input id="password" class="block mt-1 w-full" type="password"
                                                name="password" required autocomplete="current-password" placeholder="Password"/>
                                        </div>

                                        <div class="block mt-4">
                                            <label for="remember_me" class="flex items-center">
                                                <x-checkbox id="remember_me" name="remember" />
                                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>

                                            <div class="pt-3 mb-2">
                                            <x-button data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-lg btn-block" type="button" style="background-color: #8b352b; color: #ffffff;">
                                                {{ __('Log in') }}
                                            </x-button>
                                            </div>

                                            <div data-mdb-input-init class="form-outline mb-4">
                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                        href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
