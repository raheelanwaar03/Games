@extends('auth.layout.app')

@section('content')
    <section class="profile edit-profile px-3">
        <div class="d-flex justify-content-between align-items-center py-4">
            <a href="#" onclick="window.history.back()">
                <i class="bi bi-arrow-left text-white"></i>
            </a>
            <h3 class="mb-0 text-white">Profile Settings</h3>
            <span>

            </span>
        </div>

        <div class="d-flex justify-content-center py-4">
            <div class="position-relative">
                <img src="{{ asset('assets/img/logo.png') }}" width="55" height="55" alt="">
            </div>

        </div>



        <div class="profile-card px-2 py-3 rounded-4">
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('patch')
                <div class="input-box gap-1">
                    <img src="{{ asset('assets/img/user.png') }}" height="18" width="18" alt="">
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                        required autofocus autocomplete="name" />
                </div>
                <div class="input-box">
                    <img src="{{ asset('assets/img/email.png') }}" height="15" width="20" alt="">
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                        required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification"
                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>
                <button type="submit" class="gradient-btn-full">Update</button>
            </form>
        </div>

        <div class="text-center my-3">
            <h3>Change Password</h3>
        </div>

        <div class="profile-card px-2 py-3 rounded-4 mt-4 mb-4">
            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')
                <div>
                    <x-input-label for="current_password" class="text-white" :value="__('Current Password')" />
                    <x-text-input id="current_password" name="current_password" type="password"
                        class="mt-1 block w-full form-control bg-transparent text-white" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="password" class="text-white" :value="__('New Password')" />
                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full form-control bg-transparent text-white"
                        autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="password_confirmation" class="text-white" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                        class="mt-1 block w-full form-control bg-transparent text-white" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button class='btn btn-primary mt-3'>{{ __('Save') }}
                    </x-primary-button>

                    @if (session('status') === 'password-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">
                            {{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </div>

    </section>
@endsection
