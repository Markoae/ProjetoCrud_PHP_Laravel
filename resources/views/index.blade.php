@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastro Biblioteca</h1>

    <div class="col-8 m-auto">
        @csrf
        <table class="table table-bordered text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>

            @foreach($book as $books)
                @php
                    $user=$books->find($books->id)->relBooks;
                @endphp
                <tr>
                    <th scope="row">{{$books->id}}</th>
                    <td>{{$books->title}}</td>
                    <td>{{$books->author}}</td>
                    <td>{{$books->price}}</td>
                    <td>
                        <a href="{{url("books/$books->id")}}" style="text-decoration:none;">
                            <button class="btn btn-secondary">Detalhes</button>
                        </a>
                        <a href="{{url("books/$books->id/edit")}}" style="text-decoration:none;">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="{{url("books/$books->id")}}" class="js-del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>    
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$book->links()}}
    </div>
    
    <div class="text-center mt-3 mb-4">
        <a href="{{url('books/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
@endsection