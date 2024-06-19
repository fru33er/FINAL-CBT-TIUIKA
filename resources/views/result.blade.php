<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    
</head>

<body class="bg-gray-200 items-center flex justify-center h-screen">
    
    <nav class="bg-purple-500 p-4 text-white fixed top-0 left-0 right-0 z-10">
    <div class="container mx-auto flex justify-between items-center">
        <Link class="navbar-brand me-lg-3" href="/student/dashboard">
                <img class="navbar-brand-dark" src="{{ asset('assets/logocbt.png') }}" style="height:70px">
            </Link>
        
</nav>

</body>
</html>