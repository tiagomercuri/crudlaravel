@extends('layouts.app')

@section('content')
    <form action="{{ route('products.store') }}" method="post">
        @csrf

        <div class="w-full mb-6">
            <label class="block mb-2">Nome</label>
            <input type="text" name="name" class="w-full p-2 rounded border border-gray-900" value="{{ old('name') }}">
        </div>

        <div class="w-full mb-6">
            <label>Descrição</label>
            <input type="text" name="description" class="w-full p-2 rounded border border-gray-900" value="{{ old('description') }}">
        </div>

        <div class="w-full mb-6">
            <label>Conteúdo</label>
            <textarea name="body" id="" cols="30" rows="10" class="w-full p-2 rounded border border-gray-900">{{ old('body') }}</textarea>
        </div>

        <div class="w-full mb-6">
            <label>Preço</label>
            <input type="text" name="price" class="w-full p-2 rounded border border-gray-900" value="{{ old('price') }}">
        </div>

        <div class="w-full mb-6">
            <label>Slug</label>
            <input type="text" name="slug" class="w-full p-2 rounded border border-gray-900" value="{{ old('slug') }}">
        </div>

        <button class="px-4 py-2 bg-green-700 border border-green-900 rounded text-white font-thin">
            Criar Produto
        </button>
    </form>
@endsection