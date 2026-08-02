<x-mylayouts.layout-default title=""
hideBanner="true">




<section class="py-5 auth-section">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-5 col-md-8">

                <div class="auth-card">

                    <div class="text-center mb-4">

                        <span class="section-subtitle">
                            Welcome Back
                        </span>

                        <h2>Sign In</h2>

                        <p class="text-muted">
                            Login to manage your Chef NV website.
                        </p>

                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->

                        <div class="mb-4">

                            <label class="form-label">
                                Email Address
                            </label>

                            <input
                                id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                autofocus>

                            @error('email')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <!-- Password -->

                        <div class="mb-4">

                            <label class="form-label">
                                Password
                            </label>

                            <input
                                id="password"
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <!-- Remember -->

                        <div class="d-flex justify-content-between align-items-center mb-4">

                            <div class="form-check">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="remember"
                                    id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    Remember Me
                                </label>

                            </div>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="forgot-link">
                                    Forgot Password?
                                </a>
                            @endif

                        </div>

                        <button class="btn btn-primary w-100 btn-lg">
                            Login
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>
</section>


</x-mylayouts.layout-default>
