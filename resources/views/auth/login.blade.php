<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <title>Documentation | Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fabrx.co/preview/muse-dashboard/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('assets/css/theme.min.css') }} " rel="stylesheet" type="text/css" media="all">
</head>
<body class="signup-simple-template bg-gray-100">
<div class="bg-primary signup-header text-center">
    <div class="container">
        <a href="#">
            <img src="https://fabrx.co/preview/muse-dashboard/assets/svg/brand/logo-white@150.svg"
                 alt="Muze">
        </a>
    </div>
</div>
<div class="container">
    <div class="simple-login-form rounded-12 shadow-dark-80 bg-white">
        <h2 class="mb-3">Login</h2>
        <form class="pt-3" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4 pb-md-2">
                <label class="form-label form-label-lg" for="Username">Email</label>
                <input id="email" type="email" placeholder="Email"
                       class="form-control form-control-xl @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-4 pb-md-2">
                <label class="form-label form-label-lg" for="Password">Mot de passe</label>

                <input type="password" id="Password"
                       placeholder="••••••••••••••••"
                       class="form-control form-control-xl @error('password') is-invalid @enderror" name="password"
                       required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-xl btn-primary">Login</button>
            </div>
            <div class="my-3 my-sm-4 d-flex">
                <div class="form-check form-check-sm mb-0">
                    <input class="form-check-input" type="checkbox" name="remember"
                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label small text-gray-600" for="gridCheck">
                        Remember me
                    </label>
                </div>
                <a href="#" class="small text-gray-600 ms-auto mt-1">Mot de passe oublié?</a>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
