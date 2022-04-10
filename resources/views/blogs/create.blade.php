<x-layout>
    <h3 class="text-center my-3">Admin Create Form</h3>
    <div class="col-md-8 mx-auto">
        <x-card-wrapper>
            <form  enctype="multipart/form-data" method="POST" action="/admin/blogs/create">
            @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text"
                           name="title"
                           class="form-control"
                           id="title"
                           value="{{ old('title') }}">
                   <x-error name='title'/>
                   </div>

                   <div class="mb-3">
                   <label for="slug" class="form-label">Slug</label>
                   <input type="text"
                          class="form-control"
                          id="slug"
                          name="slug"
                          value="{{ old('slug') }}">
                  <x-error name='slug'/>
                  </div>

                  <div class="mb-3">
                  <label for="intro" class="form-label">Intro</label>
                  <input type="text"
                         class="form-control"
                         id="intro"
                         name="intro"
                         value="{{ old('intro') }}">
                 <x-error name='intro'/>
                 </div>

                 <div class="mb-3">
                 <label for="body" class="form-label">Body</label>
                 <textarea class="form-control"
                           name="body"
                           id="body"
                           rows="10"
                           cols="30" >
                     {{ old('body') }}
                 </textarea>
                <x-error name='body'/>
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Upload Photo</label>
                    <input type="file" id="photo" name="thumbnail" class="form-control">
                   <x-error name='thumbnail'/>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)
                           <option {{$category->id==old('category_id') ? 'selected' : ''}} value={{ $category->id }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-start mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </x-card-wrapper>
    </div>
</x-layout>
