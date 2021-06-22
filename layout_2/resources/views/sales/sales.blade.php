@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="header">
    <div>
        <h1>Vendas</h1>advanced tables
    </div>

    <div>
        <button class="btn-flat btn-primary" onclick="window.location.href = '{{ route('createSales') }}' ">+ CADASTRAR</button>
    </div>
</div>
@stop

@section('content')
<div>
    <div>
        Listagem de produtos
    </div>
    <div>
        <div>
            Show 
            <select name="" id="">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select> Entries
        </div>
        <div>
            <input type="search" placeholder="search">
        </div>
    </div>

    <table class="w-100 conatiner table">
        <thead>
            <tr>
                <th><b>Pedido</b></th>
                <th><b>Cliente</b></th>
                <th><b>Produto</b></th>
                <th><b>Valor</b></th>
                <th><b>Status</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $item)
                <tr>
                    <th>{{ $item['id'] }}</th>
                    <th>{{ $item['client'] }}</th>
                    <th>{{ $item['products'] }}</th>
                    <th>{{ $item['price'] }}</th>
                    <th>{{ $item['status'] }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/style.css">
@stop

@section('js')
    <script src=""></script>
@endsection