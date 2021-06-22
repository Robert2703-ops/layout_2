@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="header">
        <div>
            <h1>Clientes</h1>advanced tables
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
    <div class="entries">
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
                <th><b>Nome</b></th>
                <th><b>Email</b></th>
                <th><b>Telefone</b></th>
                <th><b>Endereco</b></th>
                <th><b>CEP</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($client as $item)
                <tr>
                    <th>{{ $item['name'] }}</th>
                    <th>{{ $item['email'] }}</th>
                    <th>{{ $item['phoneNumber'] }}</th>
                    <th>{{ $item['address'] }}</th>
                    <th>{{ $item['zipCode'] }}</th>
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