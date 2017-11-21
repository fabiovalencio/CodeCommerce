@extends('app')

@section('content')
    <div class="container">
        <h1>Upload Image</h1>
        <div class="form-group">

            <a href='{{ route('products') }} class="btn btn-defaul"'>Back</a>
        </div>
        @if ($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
        @endif

        {!! Form::open(['route'=>['products.images.store', $product->id], 'enctype'=>'multipart/form-data']) !!}

        <div class="form-group">
            {!! Form::label('image', 'Image:') !!}
            {!! Form::file('image', null, ['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('Upload image', ['class'=>'btn btn-primary form-control']) !!}
        {!! Form::close() !!}

    </div>

@endsection