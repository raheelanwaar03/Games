@extends('auth.layout.app')

@section('content')
    <section class="profile edit-profile px-3">
        <div class="d-flex justify-content-between align-items-center py-4">
            <a href="#" onclick="window.history.back()">
                <i class="bi bi-arrow-left text-white"></i>
            </a>
            <h3 class="mb-0 text-white">Change Login Password</h3>
            <span>

            </span>
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
                    <x-text-input id="password" name="password" type="password"
                        class="mt-1 block w-full form-control bg-transparent text-white" autocomplete="new-password" />
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
