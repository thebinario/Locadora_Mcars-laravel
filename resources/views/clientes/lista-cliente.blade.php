@extends('layouts.template')
    <title>Document</title>
    <style>
        table,
        td,
        th {
            border: 2px black solid;
        }
    </style>

@section('sidebar')
@parent

@endsection

@section('content')
    <div>
        <table>
            <tr>
                <th>Nome Cliente</td>
                <th>CPF Cliente</th>
            </tr>
            @foreach ($cliente as $item)
                <tr>
                    <td>
                        {{ $item['nome'] }} <br>
                    </td>
                    <td>
                        {{ $item['cpf'] }} <br>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection

@section('content-form')

    @include('carros.form')


@endsection

