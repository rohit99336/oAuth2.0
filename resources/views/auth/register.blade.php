<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
            <img src="images/ganpanti.png" alt="logo" width="80px" height="80px">
        </x-slot>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 100000,
                    values: [10000, 30000],
                    slide: function (event, ui) {
                        $("#income2").val("₹" + ui.values[0] + " - ₹" + ui.values[1]);
                        // $('#income3').val($(ui.values[1]);
                    }
                });
                $("#income2").val("₹" + $("#slider-range").slider("values", 0) +
                    " - ₹" + $("#slider-range").slider("values", 1));
                $('#income3').val($("#slider-range").slider("values", 1));


            });

        </script>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <p class="flex justify-center mt-5 font-semibold underline mt-4">Basic Information</p>
            <div>
                <x-jet-label for="firstName" value="{{ __('First Name') }}" />
                <x-jet-input id="firstName" class="block mt-1 w-full" type="text" name="name"
                    :value="old('firstName')" required autofocus autocomplete="firstName" />
            </div>

            <div class="mt-4">
                <x-jet-label for="lastName" value="{{ __('Last Name') }}" />
                <x-jet-input id="lastName" class="block mt-1 w-full" type="text" name="lastName"
                    :value="old('lastName')" required autofocus autocomplete="lastName" />
            </div>

            <div class="mt-4">
                <x-jet-label for="dob" value="{{ __('Date Of Birth') }}" />
                <x-jet-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required
                    autofocus autocomplete="dob" />
            </div>

            <div class="mt-4">
                <p>Please select gender:</p>
                  <input type="radio" id="male" name="gender" value="male" checked>
                  <label for="male">Male</label>
                  <input type="radio" id="female" name="gender" value="female">
                  <label for="female">Female</label>
            </div>

            <div class="mt-4">
                <label for="occupation">Choose a Occupation :</label>
                <select name="occupation" id="occupation ">
                    <option value="private_job">Private job</option>
                    <option value="government_job">Government Job</option>
                    <option value="business">business</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="income" value="{{ __('Annual Income (₹)') }}" />
                <x-jet-input id="income" class="block mt-1 w-full" type="number" name="income" :value="old('income')"
                    required autofocus autocomplete="income" />
            </div>

            <div class="mt-4">
                <label for="family">Choose a family type :</label>
                <select name="family" id="family ">
                    <option value="joint_family">Joint family</option>
                    <option value="nuclear_family">Nuclear family</option>
                </select>
            </div>

            <div class="mt-4">
                <label for="manglik">Are you manglik :</label>
                <select name="manglik" id="manglik">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            <p class="flex justify-center mt-5 font-semibold underline">Partner Preference</p>
            <div class="mt-4">
                <label for="occupation2">Choose a Occupation :</label>
                <select name="occupation2" id="occupation ">
                    <option value="private_job">Private job</option>
                    <option value="government_job">Government Job</option>
                    <option value="business">business</option>
                </select>
            </div>

            <div class="mt-4">
                <p>
                    <label for="income2">Income:</label>
                    <input type="text" id="income2" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    <input type="hidden" id="income3" name="income3" value="">
                </p>

                <div id="slider-range"></div>
            </div>

            <div class="mt-4">
                <label for="family2">Choose a family type :</label>
                <select name="family2" id="family2">
                    <option value="joint_family">Joint family</option>
                    <option value="nuclear_family">Nuclear family</option>
                </select>
            </div>

            <div class="mt-4">
                <label for="manglik2">manglik :</label>
                <select name="manglik2" id="manglik2">
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                    <option value="both">Both</option>
                </select>
            </div>


            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of
                                Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
