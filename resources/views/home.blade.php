@extends('template.layout')

@section('content')

    <div>
        <form action="/store" method="POST" enctype="multipart/form-data">
            @csrf
            @error('kategori')
                <h1>{{$message}}</h1>
            @enderror
            <input class="border-4 @error('kategori')
                border-red-900
            @enderror" type="text" name="kategori">
            <input type="file" name="image">
            <input class="bg-red-400" type="submit" name="button" value="simpan">
        </form>
    </div>

    <h1>HOME</h1>

    @foreach ($kategoris as $isi)
        <li>{{ $isi -> kategori }} ------ <a href="/store/{{ $isi -> idkategori }}">Delete</a></li>
    @endforeach

@endsection

