<x-layout>

<x-slot name="title">
    <title>Blogs</title>
</x-slot>

@foreach ($blogs as $blog )
<div class="">

    <h1><a href="blogs/{{ $blog->slug }}">{{ $blog->title }}</a></h1>
     <h3>Author <a href="users/{{ $blog->author->username }}">{{ $blog->author->name }}</a></h3>
 <div>
    <p>Published by {{ $blog->created_at->diffForHumans() }}</p>
    <a href="categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a>
    <p>{{ $blog->body }}</p>
 </div>

</div>
@endforeach

</x-layout>
