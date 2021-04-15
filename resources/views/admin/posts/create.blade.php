@extends('admin.layouts.app')
@section('title', 'Criar novo Post')
@section('content')
    <h1>Cadastrar novo Post</h1>

    <form action="{{ route('posts.store') }}" method="post">
        @include('admin.posts._partials.form')
    </form>

@endsection
