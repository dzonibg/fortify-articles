<HTML>
<head>
    <title>Articles</title>
</head>

<body>
<link href="{{ asset("style/style.css") }}" rel="stylesheet">
<div>
    <ul class="menu">
        <li><a href="/">Main</a></li>
        <li><a href="/articles">Articles</a></li>
        @guest()
            <li class="auth"><a href="/login">Login</a></li>
            <li class="auth"><a href="/register">Register</a></li>
            @csrf
        @endguest
        @auth()
            <li class="auth"><a href="/update">Update profile</a></li>
            <li class="auth"><a href="#" onclick="document.logout.submit();">Logout</a></li>
            <form method="POST" action="{{ route('logout') }}" name="logout">
                @csrf
            </form>
        @endauth
    </ul>
</div>

@yield("content")
</body>
</HTML>
