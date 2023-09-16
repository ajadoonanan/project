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
                                <h3 class="display-4">REGISTER!!</h3> <br>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group mb-3">
                                        @error('name')
                                        <p>
                                            <strong>{{ $message }}</strong>
                                        </p>
                                        @enderror
                                        <input name="name" value="{{ old('name') }}" id="inputEmail" type="text"
                                            placeholder="Name" required="" autofocus=""
                                            class="form-control rounded-pill border-1 shadow-sm px-4">
                                    </div>

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
                                        <input name="password" value="{{ old('password') }}" id="inputEmail"
                                            type="password" placeholder="Password" required="" autofocus=""
                                            class="form-control rounded-pill border-1 shadow-sm px-4">
                                    </div>

                                    <div class="form-group mb-3">

                                        <input name="password_confirmation" id="inputPassword" type="password"
                                            placeholder="Confirm password" required=""
                                            class="form-control rounded-pill border-1 shadow-sm px-4 text-danger"><br>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-1">
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
        </div>
    </div>


</x-layouts.layout-template>