@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($book)) Editar @else Cadastrar @endif</h1> <hr>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                @if(isset($errors) && count($errors)>0)
                    <div class="text-center mt-4 mb-4 p-2 alert-danger">
                        @foreach($errors->all() as $erro)
                            {{$erro}}<br>
                        @endforeach
                    </div>
                @endif

                @if(isset($book))
                    <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
                        @method('PUT')
                @else
                    <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
                @endif
                        @csrf
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-secondary rounded"><strong>Título:</strong></li>
                            <li class="list-group-item mb-2 rounded">
                                <input class="form-control" type="text" name="title" id="title" placeholder="Título:" value="{{$book->title ?? ''}}" required>
                            </li>
                            <li class="list-group-item list-group-item-secondary rounded"><strong>Autor:</strong></li>
                            <li class="list-group-item mb-2 rounded">
                                <input class="form-control" type="text" name="author" id="author" placeholder="Autor:" value="{{$book->author ?? ''}}" required>
                            </li>
                            <li class="list-group-item list-group-item-secondary rounded"><strong>Páginas:</strong></li>
                            <li class="list-group-item mb-2 rounded">
                                <input class="form-control" type="number" name="pages" id="pages" placeholder="Páginas:" value="{{$book->pages ?? ''}}" required>
                            </li>
                            <li class="list-group-item list-group-item-secondary rounded"><strong>Preço:</strong></li>
                            <li class="list-group-item mb-2 rounded">
                                <input class="form-control" type="number" step="0.01" name="price" id="price" placeholder="Preço:" value="{{$book->price ?? ''}}" required>
                            </li>
                        </ul>
                        <div class="text-center mt-2">
                            <input class="btn btn-primary" type="submit" value="@if(isset($book)) Editar @else Cadastrar @endif">
                            <a href="{{url("books")}}" class="btn btn-secondary">Voltar</a> 
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection