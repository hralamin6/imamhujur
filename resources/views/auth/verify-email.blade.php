@section('title', 'verify email')
<x-guest-layout>
    <main class="browse-section mx-auto w-8/12 bg-white p-4 border border-blue-500 shadow-xl my-6">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="lg_form">
                        <div class="main-heading">
                            <h2>{{ __('Verify email address') }}</h2>
                            <div class="line-shape1">
                                <img src="{{\App\Models\Setup::first()->getFirstMediaUrl('logo')}}" alt="">
                            </div>
                        </div>

                        <div class="mb-4 text-gray-600">
                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                        </div>

                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif

                        <div class="mt-4 flex items-center justify-between">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <div>
                                    <x-jet-button type="submit">
                                        {{ __('Resend Verification Email') }}
                                    </x-jet-button>
                                </div>
                            </form>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-guest-layout>
