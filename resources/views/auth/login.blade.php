<div>

    <x-auth-session-status :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')"/>
        </div>

        <div>
            <label for="password">Password</label>

            <input id="password" 
                            type="password"
                            name="password"
                            required autocomplete="current-password">

            <x-input-error :messages="$errors->get('password')"/>
        </div>

        <div>
            <label for="remember_me">
                <input id="remember_me" type="checkbox">
                <span>{{ __('Remember me') }}</span>
            </label>
        </div>

        <div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

             <a href="{{ route('register') }}">ainda nao se cadastrou?</a>

            <button>
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</div>
