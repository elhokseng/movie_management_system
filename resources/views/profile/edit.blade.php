<x-app-layout>
    <x-slot name="header">
        <h2 class="h2 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Update Profile Information Form -->
                    <div class="mb-5 card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-4">{{ __('Update Profile Information') }}</h5>
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <!-- Update Password Form -->
                    <div class="mb-5 card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-4">{{ __('Update Password') }}</h5>
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <!-- Delete User Form -->
                    <div class="mb-5 card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-4">{{ __('Delete Account') }}</h5>
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cancel button placed here, outside the col-md-8 but still within the container -->
            <div class="row">
                <div class="col-md-10  d-flex justify-content-end">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <a href="{{route('dashboard')}}" class="nav-link text-white" >{{ __('Cancel') }}</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
