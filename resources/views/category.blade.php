<h1>Categories</h1>

<ul>
    @foreach($categories as $category)
        <li><a href='{{ route('admin.category', array('id' => $category->id)) }}'>{{ $category->name }}</a></li>
    @endforeach
</ul>