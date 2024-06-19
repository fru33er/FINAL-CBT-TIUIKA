<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
{
    Log::info('Starting login process.');

    // Validasi input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    Log::info('Input validated.');

    // Kirim request ke endpoint eksternal
    $response = Http::post('https://cpl.ft.uika-bogor.ac.id/api/login/tias', [
        'email' => $request->email,
        'password' => $request->password,
    ]);

    // Ambil respons JSON
    $jsonResponse = $response->json();

    // Log seluruh respons untuk debugging
    // Log::info('Full Login Response: ', $response->body());

    // Cek status respons
    if ($response->successful() && isset($jsonResponse['status']) && $jsonResponse['status'] === 200) {
        // Periksa apakah respons menunjukkan bahwa login gagal berdasarkan kondisi tertentu
        if ($this->isLoginFailed($jsonResponse)) {
            Log::info('Login failed, redirecting back with errors.');

            // Login gagal
            return back()->withErrors([
                'email' => $jsonResponse['message'] ?? 'Login failed',
            ]);
        }

        Log::info('Login successful, storing user data in session.');

        // Simpan informasi pengguna ke sesi
        Session::put('user', $jsonResponse['data']);

        // Log untuk memastikan redireksi
        Log::info('Redirecting to dashboard.');

        // Redirect ke dashboard
        return redirect()->route('dashboard');
    } else {
        // Log detail kesalahan spesifik
        Log::error('Login failed with response: ', $jsonResponse);

        // Login gagal karena respons tidak berhasil
        return back()->withErrors([
            'email' => $jsonResponse['message'] ?? 'Login failed',
        ]);
    }
}

public function showDashboard()
    {
        $user = Session::get('user');

        return view('dashboard', compact('user'));
    }

private function isLoginFailed($jsonResponse)
{
    // Tambahkan logika pengecekan kondisi di sini
    // Misalnya, cek apakah ada pesan kesalahan tertentu dalam respons
    // atau cek apakah data pengguna dalam respons kosong, dll.
    return false; // Ganti dengan logika pengecekan sesuai kebutuhan Anda
}
}
