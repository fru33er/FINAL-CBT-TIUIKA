<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
    <header class="bg-purple-700 text-white p-4 flex justify-between items-center">
        <div class="text-xl font-bold">CBT TIAS</div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-yellow-400 text-black px-4 py-2 rounded-md">LOGOUT</button>
        </form>
    </header>
    <main class="max-w-6xl mx-auto mt-8 p-4">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <p>Peserta Ujian: <strong>Dwi Larasati</strong></p>
                    <p>Mata Kuliah: <strong>Kalkulus</strong></p>
                </div>
                <div>
                    <p>Soal No.1-5</p>
                    <p>CPL 01 dan CPMK 011</p>
                </div>
                <div class="text-right">
                    <p class="text-blue-500">1 jam, 29 menit, 58 detik.</p>
                    <button class="bg-red-500 text-white px-4 py-2 rounded-md">Akhiri Ujian</button>
                </div>
            </div>
            <div class="border-t border-gray-300 pt-4">
                <div class="flex items-center mb-4">
                    <img src="path/to/your/icon.png" alt="icon" class="w-12 h-12">
                    <div class="ml-4">
                        <p class="text-lg font-bold">Kalkulus</p>
                        <p class="text-gray-600">Soal Teorema</p>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-md p-4 mb-4">
                    <p class="text-gray-600">Soal Teorema</p>
                    <p class="text-gray-600">120 Min</p>
                    <p class="text-gray-600">Lampiran</p>
                    <button class="bg-red-500 text-white px-4 py-2 rounded-md">Unduh Soal</button>
                </div>
                <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="border-dashed border-2 border-gray-300 rounded-md p-4 text-center">
                        <label for="file" class="cursor-pointer">
                            <span class="text-blue-500">Upload Files</span>
                            <input type="file" name="file" id="file" class="hidden">
                        </label>
                        <p class="text-gray-500 mt-2">Drop Your Files Here</p>
                    </div>
                    <div class="flex justify-center mt-4">
                        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md">Upload Files</button>
                    </div>
                </form>
                @if(session('success'))
                    <div class="mt-4 p-4 bg-green-500 text-white rounded-md">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </main>
</body>
</html>
