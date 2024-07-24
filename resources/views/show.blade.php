@extends('templates.template')

@section('content')
    <h1 class="text-center">Detalhes</h1>
    <hr>

    <div class="container">
        @php
            $user=$book->find($book->id)->relBooks;
        @endphp
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-secondary rounded"><strong>Titulo:</strong></li>
                    <li class="list-group-item mb-2 rounded">{{$book->title}}</li>
                    <li class="list-group-item list-group-item-secondary rounded"><strong>Paginas:</strong></li>
                    <li class="list-group-item mb-2 rounded">{{$book->pages}}</li>
                    <li class="list-group-item list-group-item-secondary rounded"><strong>Preço:</strong></li>
                    <li class="list-group-item mb-2 rounded">R$ {{$book->price}}</li>
                    <li class="list-group-item list-group-item-secondary rounded"><strong>Autor:</strong></li>
                    <li class="list-group-item mb-2 rounded">{{$book->author}}</li>
                </ul>
                <div class="text-center mt-2">
                    <a href="{{url("books")}}" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection