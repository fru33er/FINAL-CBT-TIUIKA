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
    <div class="bg-white mx-auto p-8 rounded-lg shadow-lg w-full max-w-md">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="kode_mata_kuliah" class="block font-semibold">Kode Mata Kuliah</label>
                <input id="kode_mata_kuliah" type="text" name="kode_mata_kuliah" class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:ring-purple-200" required>
            </div>
            <div class="mb-4">
                <label for="kelas" class="block font-semibold">Kelas</label>
                <select id="kelas" name="kelas" class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:ring-purple-200" required>
                    <option value="" disabled selected>Pilih Kelas</option>
                    <option value="Reguler A">Reguler A</option>
                    <option value="Reguler B">Reguler B</option>
                    <option value="Reguler C">Reguler C</option>
                    <option value="Reguler D">Reguler D</option>
                    <option value="Karyawan A">Karyawan A</option>
                    <option value="Karyawan B">Karyawan B</option>
                    <!-- Tambahkan opsi lain jika diperlukan -->
                </select>
            </div>
            <div class="mb-4">
                <label for="email" class="block font-semibold">Email</label>
                <input id="email" type="email" name="email" class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:ring-purple-200" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block font-semibold">Password</label>
                <input id="password" type="password" name="password" class="w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:ring-purple-200" required>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-black w-full text-white px-4 py-2 rounded-md shadow-md hover:bg-gray-800">Login</button>
            </div>
        </form>
    </div>
</body>
</html>