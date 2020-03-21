<field-label :for="$name" />
<select name="{{$name}}" class="form-control" id="{{$name}}">
    @foreach($categories as $category)
        <option {{ $isSelected($category) }} value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
</select>
@error($name)
<p>{{ $errors->first($name) }}</p>
@enderror
