<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="{{ url('assets/compiled/svg/logo.svg') }}" alt="Logo" /></a>
            </div>
            <h1 class="auth-title">Log in.</h1>
            <p class="auth-subtitle mb-5">
                Log in with your data that you entered during registration.
            </p>

            <form wire:submit.prevent>
                <div class="form-group position-relative has-icon-left mb-4 @error('email') is-invalid @enderror">
                    <input type="email" class="form-control form-control-xl" wire:model.live.debounce.500ms='email'
                        placeholder="Email" />
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    @error('email')
                        <span>{{ $message }}</span>
                    @else
                        <span style="visibility: hidden">.</span>
                    @enderror

                </div>
                <div class="form-group position-relative has-icon-left mb-4  @error('password') is-invalid @enderror">
                    <input type="password" class="form-control form-control-xl"
                        wire:model.live.debounce.500ms='password' placeholder="Password" />
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    @error('password')
                        <span>{{ $message }}</span>
                    @else
                        <span style="visibility: hidden">.</span>
                    @enderror

                </div>
                <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" id="flexCheckDefault" wire:model='rememberMe' />
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        Keep me logged in
                    </label>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3" wire:click='login'
                    wire:loading.class='disabled' wire:loading.target='login'>
                    Login
                    <div wire:loading wire:loading.target='login'>
                        <div class="spinner-border text-light spinner-border-sm" role="status"></div>
                    </div>
                </button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="font-bold">Sign up</a>.
                </p>
                <p>
                    <a class="font-bold" href="{{ route('forget-password') }}">Forgot password?</a>.
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right"></div>
    </div>
</div>
