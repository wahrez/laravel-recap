@props(['name'])

@error($name)
<p class="text-xs italic text-red-500">{{ $message }}</p>
@enderror
