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
        <h2 class="mb-3">S'inscrire</h2>
        <form class="pt-3" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4 pb-md-2">
                <label class="form-label form-label-lg" for="Username">Email</label>
                <input id="email" type="email" placeholder="Votre email"
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
            <div class="mb-4 pb-md-2">
                <label class="form-label form-label-lg" for="Password">Confirmer le mot de passe</label>
                <input id="password-confirm" type="password" placeholder="••••••••••••••••"
                       class="form-control form-control-xl"
                       name="password_confirmation" required
                       autocomplete="new-password">
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-xl btn-primary">S'inscrire</button>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
