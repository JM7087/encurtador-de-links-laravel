@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <h1 class="text-center">Encurtador de Links</h1>
        @if (session('success'))
        <div class="alert alert-success d-flex align-items-center">
            URL encurtada:<span id="shortened-link" class="px-3">{{ session('success') }}</span>
            <button class="btn btn-secondary btn-sm ml-2" data-clipboard-target="#shortened-link">
                Copiar <img src="{{ asset('img/svg/copy.svg') }}" alt="Copy Icon" style="width: 16px; height: 16px;">
            </button>
        </div>
        <div id="copy-message" class="alert alert-info" style="display: none; margin-top: 10px;">
            Link copiado!
        </div>
        @endif

        <form action="{{ route('shorten') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="original_url" class="form-label h4 d-flex justify-content-center p-3">URL Original</label>
                <input type="url" class="form-control" id="original_url" name="original_url" required>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-encurtar-link">Encurtar Link</button>
            </div>
        </form>
    </div>

@endsection