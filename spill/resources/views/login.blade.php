<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>SPILL | Sistem Pengendali Lalu Lintas</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    {{-- <link href="{{ asset('/assets/css/login.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ url('assets/css/login.css') }}" />
</head>
<body>
    <div class="container-fluid ">
        
        <div class="wrapper-login">
            <div class="card">
                <form method="POST" action="">
                    @csrf
                    <h1>Login Page</h1>
                    <label for="usernmae">Username</label>
                    <input type="test" id="username" name="username" placeholder="Username"><br>
                    

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password"><br>
                
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>