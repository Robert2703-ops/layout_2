@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="container w-50">
        <h1>Criar Clientes</h1>
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

    <form class="bg-secondary w-75 container rounded" action="{{ route('createClient') }}" method="POST">
        @csrf

        <div class="container w-50">
            <label>Nome do cliente</label>
            <input class="form-control-sm w-100 rounded" type="text" name="name">
        </div>

        <div class="container w-50">
            <label>Email</label>
            <input class="form-control-sm w-100 rounded"  type="email" name="email">
        </div>

        <div class="container w-50">
            <label>Telefone</label>
            <input class="form-control-sm w-100 rounded" type="tel" name="phoneNumber">
        </div>

        <div class="container w-50">
            <label>Endereco</label>
            <input class="form-control-sm w-100 rounded" type="text" name="address">
        </div>

        <div class="container w-50">
            <label>CEP</label>
            <input class="form-control-sm w-100 rounded" type="number" name="zipCode">
        </div>

        <div class="container w-25">
            <input class="form-control-sm w-100 rounded" type="submit" value="Cadastrar">
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