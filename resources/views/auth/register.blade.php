<x-mylayouts.layout-default title=""
hideBanner="true">

<section class="py-5 auth-section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-6 col-md-8">

                <div class="auth-card">

                    <div class="text-center mb-4">

                        <span class="section-subtitle">
                            Join Chef NV
                        </span>

                        <h2>Create Account</h2>

                        <p class="text-muted">
                            Create your account to place orders and track your purchases.
                        </p>

                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">

                            <label class="form-label">Full Name</label>

                            <input
                                id="name"
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autofocus>

                            @error('name')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="mb-3">

                            <label class="form-label">Email Address</label>

                            <input
                                id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                required>

                            @error('email')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="mb-3">

                            <label class="form-label">Password</label>

                            <input
                                id="password"
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                required>

                            @error('password')
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="mb-4">

                            <label class="form-label">
                                Confirm Password
                            </label>

                            <input
                                id="password-confirm"
                                type="password"
                                class="form-control"
                                name="password_confirmation"
                                required>

                        </div>

                        <button class="btn btn-primary btn-lg w-100">
                            Create Account
                        </button>

                        <div class="text-center mt-4">

                            <small class="text-muted">
                                Already have an account?
                            </small>

                            <br>

                            <a href="{{ route('login') }}" class="forgot-link">
                                Sign In
                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>
</x-mylayouts.layout-default>
