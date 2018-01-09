@extends('app')

@section('content')
    <div class="container">
        <h1>Images of {{ $product->name }}</h1>
        <div class="span6 pull-right">
            <a class="btn btn-info" href='{{ route('products') }}'>Back</a>
        </div>
        <a class="btn btn-info" href="{{ route('products.images.create', ['id'=>$product->id]) }}">New Image</a>
        <br>
        <br>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Extension</th>
                <th>Action</th>
            </tr>

            @foreach($product->images as $image)
                <tr>
                    <td>{{ $image->id }}</td>
                    <td>
                        <img src="{{ '	https://s3-sa-east-1.amazonaws.com/trawius/'.$image->id.'.'.$image->extension }}" width='80'>
                        {{--<img src="{{ Storage::disk('s3')->get($image->id.'.'.$image->extension) }}" width='80'>--}}
                    </td>
                    <td>{{ $image->extension }}</td>
                    <td>
                        <a href="{{ route('products.images.destroy', ['id'=>$image->id]) }}">Delete</a>
                        {{--<a href="{{ route('products.edit', ['id'=>$image->product->id]) }}">Edit</a>--}}
                    </td>
                </tr>
            @endforeach
        </table>

    </div>

@endsection