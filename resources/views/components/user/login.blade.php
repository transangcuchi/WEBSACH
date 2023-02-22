@include('cdn')
<div>
    <x-header title="Đăng Nhập" :category="$category" />
</div>
<div class="container ">
    <label class=" d-flex justify-content-center "><b>
         
        </b></label>
    <div class=" d-flex justify-content-center ">

        <form method="Post" action="{{ route('user.login') }}">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
                <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                    required autocomplete="email" autofocus />

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="email">{{ __('Password') }}</label>
                <input type="password" name="password"
                    class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" />

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div>

                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4 ">{{ __('Login') }}</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="#!">Register</a></p>
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                </button>
            </div>
        </form>
        <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    </div>
</div>
