<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-2 mt-2">
                <ul class="list-group mt-5">
                    <li class="list-group-item"><a href="/admin/blogs">Dashboard</a></li>
                    <li class="list-group-item"><a href="/admin/blogs/create">Create Blog</a></li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                  </ul>
            </div>
            <div class="col-md-10">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layout>
