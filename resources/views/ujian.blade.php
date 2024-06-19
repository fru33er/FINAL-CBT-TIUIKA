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
    <div class="w-full flex max-w-screen-xl flex-wrap">
    
{{-- soal --}}
 <div id="kiri" class="flex-1 bg-white p-8 rounded-lg shadow-lg" >
            <div id="nama_peserta" class="mb-4">
                <span class="block font-semibold">Peserta Ujian: <span class="font-bold">Dwi Larasati</span></span>
                <span class="block font-semibold">Mata Kuliah: <span class="font-bold">Kalkulus</span></span>
            </div>
            <div class="mb-6">
                <h2 class="text-xl font-bold">Soal No.1</h2>
                <p class="text-gray-500">CPL 001 dan CPMK 020</p>
                <p class="mt-4">Tentukan persamaan garis yang melalui titik (-1,3) dan (2,5).</p>
            </div>
            <div class="space-y-4">
                <div class="flex items-center">
                    <input type="radio" id="optionA" name="answer" class="mr-2">
                    <label for="optionA">A. 3y - 2x + 11</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="optionB" name="answer" class="mr-2">
                    <label for="optionB">B. 3y - 2x + 11</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="optionC" name="answer" class="mr-2">
                    <label for="optionC">C. 3y - 2x + 11</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="optionD" name="answer" class="mr-2">
                    <label for="optionD">D. 3y - 2x + 11</label>
                </div>
            </div>
            <div class="flex justify-between mt-8">
                <button class="bg-yellow-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-yellow-600">Ragu-ragu</button>
                <button class="bg-gray-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-gray-600">Soal Selanjutnya</button>
            </div>
        </div>

        {{-- Pilihan Nomor --}}
    <div id="kanan"class=" flex-1 ml-10 bg-white p-8 rounded-lg shadow-lg">
        <div class="mb-4 flex justify-between items-center">
            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">1 dikerjakan</span>
             <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">1 jam, 29 menit, 58 detik</span>
            </div>
            <div class="grid grid-cols-5 gap-2 mb-8">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">1</button>
                <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md">2</button>
                <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md">3</button>
                <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md">4</button>
                <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md">5</button>
                <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md">6</button>
                <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md">7</button>
                <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md">8</button>
                <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md">9</button>
                <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md">10</button>
            </div>
            <div class="flex justify-between">
                <button class="bg-red-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-red-600">Akhiri Ujian</button>
                <button class="bg-green-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-green-600">Simpan Jawaban</button>
            </div>
        </div>
        </div>
</body>
</html>