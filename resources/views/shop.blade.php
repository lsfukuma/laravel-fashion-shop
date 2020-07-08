@extends('layouts/app')
@section('page-title' , 'Fashion Shop')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-dark">
                    <thead>
                        <tr>
                              <th scope="col">Prodotto</th>
                              <th scope="col">Descrizione</th>
                              <th scope="col">Prezzo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clothes as $clothe)
                            <tr>
                                <td>{{ $clothe->prodotto}}</td>
                                <td>{{ $clothe->descrizione}}</td>
                                <td>{{ $clothe->prezzo}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
