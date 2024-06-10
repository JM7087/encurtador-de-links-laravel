<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url'
        ]);

        // Verificar se a URL original já existe
        $existingLink = Link::where('original_url', $request->original_url)->first();

        if ($existingLink) {
            // Se a URL já existe, retorna o short_code existente
            return redirect()->route('home')->with('success', url($existingLink->short_code));
        }

        // Gerar um short_code único
        do {
            $shortCode = Str::random(6);
        } while (Link::where('short_code', $shortCode)->exists());

        // Criar um novo link
        Link::create([
            'original_url' => $request->original_url,
            'short_code' => $shortCode
        ]);

        return redirect()->route('home')->with('success', url($shortCode));
    }

    public function show($shortCode)
    {
        $link = Link::where('short_code', $shortCode)->firstOrFail();
        return redirect($link->original_url);
    }
}
