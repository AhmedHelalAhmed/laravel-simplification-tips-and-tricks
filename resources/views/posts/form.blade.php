@csrf
<div class="form-group">
   <x-input-field :model="$post" name="title"/>
</div>
<div class="form-group">
    <label for="text">Text</label>
    <textarea name="text" class="form-control" id="text" rows="3">{{ old('text',$post->text) }}</textarea>
    @error('text')
    <p>{{ $errors->first('text') }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="category_id">Category</label>
    <select name="category_id" class="form-control" id="category_id">
        @foreach($categories as $category)
            <option {{ $isSelected($category) }} value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    @error('category_id')
    <p>{{ $errors->first('category_id') }}</p>
    @enderror
</div>
<button class="btn btn-primary" type="submit">Save</button>
