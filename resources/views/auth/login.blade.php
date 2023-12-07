<x-guest-layout>
    <div
            class="authentication-wrapper authentication-cover authentication-bg"
        >
            <div class="authentication-inner row">
                <div class="d-none d-lg-flex col-lg-7 p-0">
                    <div
                        class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center"
                    >
                        <img
                            src="{{ asset('assets/img/machape/logo.png') }}"
                            alt="auth-login-cover"
                            class="img-fluid my-5 auth-illustration"
                        />
                    </div>
                </div>
                <div
                    class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4"
                >
                    <div class="w-px-400 mx-auto">
                        <h3 class="mb-1">Welcome to Machape</h3>
                        <p class="mb-4">
                            Please sign-in to your account
                        </p>

                        <x-validation-errors class="my-4" />

                        <form
                            id="formAuthentication"
                            class="mb-3"
                            action="{{ route('login') }}"
                            method="POST"
                        >
                            @csrf

                            <div class="mb-3">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email"
                                    autofocus
                                    required
                                    autocomplete="email"
                                    :value="old('email')"
                                />
                            </div>

                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <x-label class="form-label" for="password" value="{{__('Password')}}" />
                                </div>
                                <div class="input-group input-group-merge">
                                    <x-input
                                        type="password"
                                        id="password"
                                        name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        required
                                        aria-describedby="password"
                                    />
                                    <span
                                        class="input-group-text cursor-pointer"
                                        ><i class="ti ti-eye-off"></i
                                    ></span>
                                </div>
                            </div>

                            <x-button>
                                {{ __('Sign in') }}
                            </x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>
