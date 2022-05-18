@props(['name','value'=>''])
<x-form.input-wrapper>
    <x-form.label :name="$name"/>
    <textarea class="form-control editor"
              name="{{ $name }}"
              id="{{ $name }}"
              rows="10"
              cols="30"
              >
        {!! old($name,$value) !!}
    </textarea>
   <x-error :name="$name"/>
</x-form.input-wrapper>
