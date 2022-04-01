<div>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
         {{ isset($currentCategory) ? $currentCategory->name : "FilterByProduct" }}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="/">all</a></li>
          @foreach ($categories as $category)
          <li><a class="dropdown-item" href="/?category={{ $category->slug }}{{ request('search') ? '&search='.request('search') : '' }}{{ request('username') ? '&username='.request('username') : '' }}">{{ $category->name }}</a></li>
          @endforeach
        </ul>
      </div> <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>
