<x-admin-layout>
    <h3 class="text-center my-3">Admin Create Form</h3>

        <x-card-wrapper>
            <form  enctype="multipart/form-data" method="POST" action="/admin/blogs/create">
            @csrf
                 <x-form.input name="title"></x-form.input>

                 <x-form.input name="slug"></x-form.input>

                 <x-form.input name="intro"></x-form.input>

               <x-form.textarea name="body"></x-form.textarea>

               <x-form.input name="thumbnail" type="file"></x-form.input>

               <x-form.input-wrapper>
               <x-form.label name="category"></x-form.label>
                <select name="category_id" id="category" class="form-control">
                    @foreach ($categories as $category)
                       <option {{$category->id==old('category_id') ? 'selected' : ''}} value={{ $category->id }}>{{ $category->name }}</option>
                    @endforeach
                </select>
               </x-form.input-wrapper>


                <div class="d-flex justify-content-start mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </x-card-wrapper>
   
</x-admin-layout>
