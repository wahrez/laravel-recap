<x-layout>
    <x-slot:heading>Register</x-slot:heading>

    <form method="POST" action="/login/" class="mt-6 space-y-6">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Login</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Please fill out the form.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" :value="old('email')"/>
                        </div>
                        <x-form-error name="email"/>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password"/>
                        </div>
                        <x-form-error name="password"/>
                    </x-form-field>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <x-form-button>Login</x-form-button>
            </div>
    </form>


</x-layout>
