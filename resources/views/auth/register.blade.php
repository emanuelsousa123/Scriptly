<div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
            <x-input-error :messages="$errors->get('name')"/>
        </div>

        <div>
            <label for="email" :value="__('Email')">Email</label>
            <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username">
            <x-input-error :messages="$errors->get('email')"/>
        </div>

        <div>
            <label for="password">Password</label>

            <input id="password"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')"/>
        </div>

        <div>
            <label for="password_confirmation">Confirm Password</label>

            <input id="password_confirmation"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')"/>
        </div>

        <a href="{{ route('login') }}">Already registered</a>

            <button>
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>
