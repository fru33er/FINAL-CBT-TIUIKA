<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200 items-center flex justify-center h-screen">
    <nav class="bg-purple-500 p-4 text-white fixed top-0 left-0 right-0 z-10">
    <div class="container mx-auto flex justify-between items-center">
        <Link class="navbar-brand me-lg-3" href="/student/dashboard">
                <img class="navbar-brand-dark" src="{{ asset('assets/logocbt.png') }}" style="height:70px">
            </Link>
    </nav>
    <div class=" max-w-screen-xl  mx-auto mt-8 p-4">
        <div class="bg-green-100 p-4 rounded-md text-center">
            <span class="text-lg font-semibold">Selamat Datang</span>
            <span class="text-lg font-bold">Dwi Larasati</span>
        </div>

        <div class="w-full flex max-w-screen-xl flex-wrap">
            <div class="mt-8 bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4">UTS (Ujian Tengah Semester)</h2>
                <div class="space-y-2">
                <div class="flex justify-between">
                    <span class="font-semibold">Mata Pelajaran</span>
                    <span>Kalkulus</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-semibold">Kelas</span>
                    <span>Reguler B</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-semibold">Dosen</span>
                    <span>Freza Riana, S.Si., M.Si</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-semibold">Durasi</span>
                    <span>120 Menit</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-semibold">Mulai</span>
                    <span>2024-03-25 / 08:00:00</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-semibold">Selesai</span>
                    <span>2024-03-25 / 10:00:00</span>
                </div>
            </div>
            <div class="flex justify-center mt-8">
                <button class="bg-green-500 text-white px-6 py-2 rounded-md shadow-md hover:bg-green-600">Kerjakan</button>
            </div>
            </div>

            
            <div class="mt-8 ml-10 bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">UTS (Ujian Tengah Semester)</h2>
            <div class="space-y-2">
                <div class="flex justify-between">
                    <span class="font-semibold">Mata Pelajaran</span>
                    <span>Metode Penelitian</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-semibold">Kelas</span>
                    <span>Reguler B</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-semibold">Dosen</span>
                    <span>Safarudin Hidayat</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-semibold">Durasi</span>
                    <span>90 Menit</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-semibold">Mulai</span>
                    <span>2024-03-25 / 08:00:00</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-semibold">Selesai</span>
                    <span>2024-03-25 / 09:30:00</span>
                </div>
            </div>
            <div class="flex justify-center mt-8">
                <button class="bg-green-500 text-white px-6 py-2 rounded-md shadow-md hover:bg-green-600">Kerjakan</button>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
