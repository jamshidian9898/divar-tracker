<div class="row h-100">
    <div class="col-lg-5 col-12 m-auto">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="./assets/compiled/svg/logo.svg" alt="Logo" /></a>
            </div>

            <h1 class="auth-title mb-5">Sign Up</h1>

            <form wire:submit.prevent>
                <div class="form-group position-relative has-icon-left mb-4 @error('email') is-invalid @enderror">
                    <input wire:model.live.debounce.500ms='email' type="text" class="form-control form-control-xl"
                        placeholder="Email" />
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    @error('email')
                        <span>{{ $message }}</span>
                    @else
                        <span style="visibility: hidden">.</span>
                    @enderror
                </div>
                <div class="form-group position-relative has-icon-left mb-4 @error('password') is-invalid @enderror">
                    <input wire:model.live.debounce.500ms='password' type="password"
                        class="form-control form-control-xl" placeholder="Password" />
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    @error('password')
                        <span>{{ $message }}</span>
                    @else
                        <span style="visibility: hidden">.</span>
                    @enderror
                </div>
                <div
                    class="form-group position-relative has-icon-left mb-4 @error('passwordConfirmation') is-invalid @enderror">
                    <input wire:model.live.debounce.500ms='passwordConfirmation' type="password"
                        class="form-control form-control-xl" placeholder="Confirm Password" />
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    @error('passwordConfirmation')
                        <span>{{ $message }}</span>
                    @else
                        <span style="visibility: hidden">.</span>
                    @enderror
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3" wire:click='register'
                    wire:loading.class='disabled' wire:loading.target='register'>
                    Sign Up
                    <div wire:loading wire:loading.target='register'>
                        <div class="spinner-border text-light spinner-border-sm" role="status"></div>
                    </div>
                </button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">
                    Already have an account?
                    <a href="{{ route('login') }}" class="font-bold">Log in</a>.
                </p>
            </div>
        </div>
    </div>
</div>
