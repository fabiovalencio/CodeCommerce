@extends('app')

@section('content')
    <div class="container">
        <h1>Products</h1>

        <a class="btn btn-info" href="{{ route('products.create') }}">New Product</a>
        <br>
        <br>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Featured</th>
                <th>Recommend</th>
                <th>Category</th>
                <th>Action</th>
            </tr>

            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->featured ? 'yes' : 'no' }}</td>
                    <td>{{ $product->recommend ? 'yes' : 'no' }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                        <a href="{{ route('products.destroy', ['id'=>$product->id]) }}">Delete</a> |
                        <a href="{{ route('products.images', ['id'=>$product->id]) }}">Image</a> |
                        <a href="{{ route('products.edit', ['id'=>$product->id]) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="span6 pull-right">
            {!! $products->render() !!}
        </div>
    </div>

@endsection