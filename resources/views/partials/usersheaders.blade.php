
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('users') }}">User Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('users') }}">View All Users</a></li>
        <li><a href="{{ URL::to('users/create') }}">Create a User</a>
        <li><a href="{{ route('blog.index') }}">Home</a></li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
</nav>