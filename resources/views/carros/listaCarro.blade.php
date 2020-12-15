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
                <th>MODELO</td>
                <th>PLACA</th>
            </tr>
            @foreach ($carro as $item)
                <tr>
                    <td>
                        {{ $item['modelo'] }} <br>
                    </td>
                    <td>
                        {{ $item['placa'] }} <br>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection

@section('content-form')

    @include('carros.form')


@endsection

