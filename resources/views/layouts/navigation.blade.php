<nav class="bg-green-400">
    <div>
        <a href="{{ route('dashboard') }}">logo</a>
    </div>

    <div>
        <div>user name: {{ Auth::user()->name }}</div>
        <a href="{{ route('profile.edit') }}">profile</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Log Out</button>
        </form>
    </div>

</nav>
