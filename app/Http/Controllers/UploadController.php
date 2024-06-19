<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $path = $request->file('file')->store('uploads', 'public');

        return redirect()->back()->with('success', 'File uploaded successfully.');
    }
}
