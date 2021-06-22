@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="container w-50">
        <h1>Products</h1>
    </div>
@stop

@section('content')   
    <div class="container w-50">
        @if ($errors->any())
        <div class="error">
            <ul type = "none">
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    
        <form class="bg-secondary w-100 rounded" action="{{ route('createProduct') }}" method="POST">
            @csrf
            
            <div class="container w-50">
                <label>Nome</label>
                <input  class="form-control-sm w-100 rounded" type="text" name="name">
            </div>
    
            <div class="container w-50">
                <textarea class="rounded" name="description" cols="30" rows="10" placeholder="DESCRICAO"></textarea>
            </div>
    
            <div class="container w-50">
                <label>Label</label>
                <input  class="form-control-sm w-100 rounded" type="text" name="label">
            </div>
    
            <div class="container w-50">
                <label>Valor</label>
                <input class="form-control-sm w-100 rounded" type="number" name="price">
            </div>
    
            <div class="container w-25">
                <input class="w-100 rounded" type="submit" value="Cadastrar">
            </div>
        </form>
    </div>

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