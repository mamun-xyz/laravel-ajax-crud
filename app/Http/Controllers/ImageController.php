<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            foreach ($request->file('images') as $file) {
                $path = $file->store('uploads', 'public');
                Image::create(['image_path' => $path]);
            }

            return response()->json(['success' => 'Images uploaded successfully'], 201);
        } catch (\Exception $e) {
            Log::error('Image upload failed: ' . $e->getMessage());
            return response()->json(['error' => 'Image upload failed'], 500);
        }
    }
}
