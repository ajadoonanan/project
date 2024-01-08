<x-layouts.layout-template>

    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>TNTCELLULAR</p>
                        <h1>Welcome</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        .login,
        .image {
            min-height: 100vh
        }

        .bg-image {
            background-image: url('https://epe.brightspotcdn.com/dims4/default/2766e46/2147483647/strip/true/crop/2084x1414+37+0/resize/840x570!/format/webp/quality/90/?url=https%3A%2F%2Fepe-brightspot.s3.amazonaws.com%2F00%2F43%2F1bebdc514ff9a9f1987f7e3d7f02%2Fcellphones-1198516602.jpg');
            background-size: center;
            background-position: center center
        }
    </style>

    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-6 d-none d-md-flex bg-image"></div>
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-xl-6 mx-auto">
                                <h3 class="display-4">LOGIN!!</h3> <br>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group mb-3">

                                        @error('email')
                                        <p>
                                            <strong>{{ $message }}</strong>
                                        </p>
                                        @enderror

                                        <input name="email" value="{{ old('email') }}" id="inputEmail" type="email"
                                            placeholder="Email address" required="" autofocus=""
                                            class="form-control rounded-pill border-1 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">

                                        @error('password')
                                        <p>
                                            <strong>{{ $message }}</strong>
                                        </p>
                                        @enderror

                                        <input name="password" id="inputPassword" type="password" placeholder="Password"
                                            required=""
                                            class="form-control rounded-pill border-1 shadow-sm px-4 text-danger"><br>


                                        <div class="row mb-3">
                                            <div class="col-md-6 offset-md-1">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-8 offset-md-1">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                                @endif
                                            </div>
                                        </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type='text/javascript'>
        (function(I, L, T, i, c, k, s) {
            if(I.iticks) return;
            I.iticks = {
                host:c,
                settings:s,
                clientId:k,
                cdn:L,
                queue:[]
            };
            var h = T.head || T.documentElement;
            var e = T.createElement(i);
            var l = I.location;
            e.async = true;
            e.src = (L||c)+'/client/inject-v2.min.js';
            h.insertBefore(e, h.firstChild);
            I.iticks.call = function(a, b) {
                I.iticks.queue.push([a, b]);
            };
        })(window, 'https://cdn-v1.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', '5ajhSjN5jBavRzuXR_c', {});
    </script>


</x-layouts.layout-template>