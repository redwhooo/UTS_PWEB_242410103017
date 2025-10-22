<nav class="navbar">
    <div class="nav-container">
        <a href="#" class="nav-brand">BookRev</a>
        <ul class="nav-links">
            <li>
                <a href="{{route('dashboard', ['username'=> request()->query('username')])}}">Dashboard</a>
            </li>
            <li>
                <a href="{{route('pengelolaan', ['username'=> request()->query('username')])}}">Book Reviews</a>
            </li>
            <li>
                <a href="{{route('profile', ['username'=> request()->query('username')])}}">My Profile</a>
            </li>
            <li>
                <a href="{{route('login')}}">Logout</a>
            </li>
        </ul>
    </div>
</nav>
