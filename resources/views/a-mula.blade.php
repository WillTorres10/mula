@extends('base')
@section('title', "$mula é uma mula!")
@section('content')
    <div class="text-center">
        <h1><span class="text-primary">{{ $mula }}</span> é uma mula!</h1>
        <input type="hidden" id="url" value="{{route('mula', $mula)}}">
        <div class="row">
            <div class="col">
                <a href="#" onclick="copyToClipboard('#url')" class="btn btn-secondary btn-sm text-white mt-5 btn-block">Copiar link</a>
            </div>
            <div class="col">
                <a href="/" class="btn btn-primary btn-sm text-white mt-5 btn-block">Gerar outra mula</a>
            </div>
        </div>
    </div>
@endsection
