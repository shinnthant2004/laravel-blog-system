@props(['name','type'=>'text'])
<x-form.input-wrapper>
    <x-form.label :name="$name"/>
    <input type="{{ $type }}"
           name="{{ $name }}"
           class="form-control"
           id="{{ $name }}"
           value="{{ old($name) }}">
   <x-error :name="$name"/>
</x-form.input-wrapper>
