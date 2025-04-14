@extends('layouts.app')

@section('content')
    <form action="{{ route('products.update', ['product' => $product->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="w-full mb-6">
            <label class="block mb-2">Nome</label>
            <input type="text" name="name" class="w-full p-2 rounded border border-gray-900" value="{{ $product->name }}">
        </div>

        <div class="w-full mb-6">
            <label>Descrição</label>
            <input type="text" name="description" class="w-full p-2 rounded border border-gray-900" value="{{ $product->description }}">
        </div>

        <div class="w-full mb-6">
            <label>Conteúdo</label>
            <textarea name="body" id="" cols="30" rows="10" class="w-full p-2 rounded border border-gray-900">{{ $product->body }}</textarea>
        </div>

        <div class="w-full mb-6">
            <label>Preço</label>
            <input type="text" name="price" class="w-full p-2 rounded border border-gray-900" value="{{ number_format($product->price, 2, ',', '.') }}">
        </div>

        <div class="w-full mb-6">
            <label>Slug</label>
            <input type="text" name="slug" class="w-full p-2 rounded border border-gray-900" value="{{ $product->slug }}">
        </div>

        <button class="px-4 py-2 bg-green-700 border border-green-900 rounded text-white font-thin">
            Atualizar Produto
        </button>
    </form>

    <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="px-4 py-2 bg-red-700 border border-red-900 rounded text-white font-thin mt-8">
            Remover Produto
        </button>
    </form>
@endsection