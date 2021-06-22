@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="container w-50">
        <h1>Criar ocorrencia</h1>
    </div>
@stop

@section('content')   
    @if ($errors->any())
    <div class="error">
        <ul type = "none">
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="bg-secondary w-75 container rounded" action="{{ route('createOccurrence') }}" method="POST">
        @csrf

        <div class="container w-50">
            <label>Responsavel</label>
            <input class="form-control-sm w-100 rounded" type="text" name="accountable">
        </div>

        <div class="container w-50">
            <label>Staus:</label>

            <div class="container w-50">
                <label>Pronto</label>
                <input class="form-control-lm" type="radio" value="done" name="status">
            </div>

            <div class="container w-50">
                <label>Resolvendo</label>
                <input class="form-control-lm" checked type="radio" value="doing" name="status">
            </div>
        </div>

        <div class="container w-50">
            <label>Label</label>
            <input class="form-control-sm w-100 rounded" type="text" name="label">
        </div>

        <div class="container w-50">
            <label>Descricao</label>
            <input class="form-control-sm w-100 rounded" type="text" name="description">
        </div>

        <div class="container w-50">
            <label>Titulo</label>
            <input class="form-control-sm w-100 rounded" type="text" name="title">
        </div>

        <div class="container w-25">
            <input class="form-control-sm w-100 rounded" class="bg-primary" type="submit" value="Cadastrar">
        </div>
    </form>

    <div>
        <a href="{{ route('occurrences') }}" class="text-success">Voltar</a>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src=""></script>
@endsection