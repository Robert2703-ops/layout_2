@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
    <div class="container w-50">
        <h1>Criar Venda</h1>
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
    
        <form class="bg-secondary w-100 rounded " action="{{ route('createSales') }}" method="POST">
            @csrf
    
            <div class="container w-50"> 
                <label>Cliente</label>
                <input class="form-control-sm w-100 rounded" type="text" name="client">
            </div>
    
            <div class="container w-50">
                <label>Produto</label>
                <input class="form-control-sm w-100 rounded" type="text" name="products">
            </div>
    
            <br>
    
            <div class="container w-50">
                <label>Staus:</label>
    
                <div class="container w-50">
                    <label>Pendente</label>
                    <input class="form-control-lm" type="radio" value="pending" name="status">
                </div>
    
                <div class="container w-50">
                    <label>Pago</label>
                    <input class="form-control-lm" checked type="radio" value="paid" name="status">
                </div>
            </div>
    
            <div class="container w-25">
                <input class="form-control-sm w-100 rounded" type="submit" value="Cadastrar">
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