@extends('admin.layouts.app')
@section('title', 'Criar novo Post')
@section('content')
    <h1 class="text-center text-3x1 uppercase font-black my-4">Cadastrar novo Pregão</h1>

    <div class="w-11/12 p-12 bg-white sm:w8/12 md:w1/2 lg:w5/12 mx-auto">
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @include('admin.posts._partials.form')
        </form>
    </div>
@endsection
