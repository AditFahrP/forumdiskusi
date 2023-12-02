@extends('layouts.auth')

@section('body')
    <section class="bg-gray vh-100">
        <div class="container">
            <div class="row pt-5 justify-content-center">
                <div class="col-12 col-lg-6 my-auto mb-5 mb-lg-auto me-0">
                    <div class="d-none d-lg-block">
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <p>
                            <ul>
                                <li>Lorem, ipsum dolor.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
                            </ul>
                        </p>
                    </div>
                    <div class="d-block d-lg-none fs-4 text-center">
                        Lorem ipsum dolor sit amet.
                    </div>
                </div>
                <div class="col-12 col-lg-3 h-100">
                    <a href="{{ route('home') }}" class="nav-link mb-5 text-center">
                        <img src="{{ url('assests/images/logo-2.svg') }}" alt="logo diskusi" class="h-32px">
                    </a>
                    <div class="card mb-5">
                        <form action="{{ route('auth.sign-up.sign-up') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" 
                                id="email" name="email" placeholder="name@example.com" autocomplete="off" autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control border-end-0 pe-0 rounded-0 rounded-start @error('password') is-invalid @enderror" 
                                    id="password" name="password">
                                    <span class="input-group-text bg-white border-start-0 pe-auto
                                    @error('password') border-danger rounded-end @enderror">
                                        <a href="javascript:;" id="password-toggle">
                                        <img src="{{ url('assests/images/eye-slash.svg') }}" alt="password-toggle" id="password-toggle-img">
                                        </a>
                                    </span>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" value="{{ old('username') }}" 
                                class="form-control @error('username') is-invalid @enderror" id="username" autocomplete="off">
                                @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary rounded-2">Sign up</button>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        Already have an account? <a href="{{ route('auth.login.show') }}"><u>Log in</u></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('after-script')
    <script>
        var isPasswordRevealed = false;

        $('#password-toggle').on('click', function() {
            isPasswordRevealed = !isPasswordRevealed;

            if (isPasswordRevealed) {
                $('#password-toggle-img').attr('src', "{{ url('assests/images/eye.svg') }}");
                $('#password').attr('type', 'text');
            }
            else {
                $('#password-toggle-img').attr('src', "{{ url('assests/images/eye-slash.svg') }}");
                $('#password').attr('type', 'password');
            }
        });
    </script>
@endsection