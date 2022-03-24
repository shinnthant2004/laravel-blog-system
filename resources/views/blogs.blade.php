<x-layout>

<x-slot name="title">
    <title>Blogs</title>
</x-slot>

@foreach ($blogs as $blog )
<div class="">

    <h1><a href="blogs/{{ $blog->slug }}">{{ $blog->title }}</a></h1>

 <div>
    Published by<p>{{ $blog->date }}</p>
    <p>{{ $blog->body }}</p>
 </div>

</div>
@endforeach

</x-layout>
