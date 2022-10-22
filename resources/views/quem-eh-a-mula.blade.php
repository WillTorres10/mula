@extends('base')
@section('title', 'Quem é a mula?')
@section('content')
    <form method="post">
        @csrf
        <div class="form-group required">
            <label for="mulaNome">Quem é a mula?</label>
            <input type="text" class="form-control" name="mulaNome" id="mulaNome" placeholder="Ex: henriquestation" required>
            <button class="btn btn-success col-12 mt-3">Ir para a mula</button>
        </div>
    </form>
@endsection
