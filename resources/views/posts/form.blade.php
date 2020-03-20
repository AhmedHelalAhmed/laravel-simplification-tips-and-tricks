@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input value="{{ old('title',$post->title) }}" name="title" type="text" class="form-control" id="title">
    @error('title')
    <p>{{ $errors->first('title') }}</p>
    @enderror
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
            <option
                @if($isSelected($category)) selected @endif
            value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    @error('category_id')
    <p>{{ $errors->first('category_id') }}</p>
    @enderror
</div>
<button class="btn btn-primary" type="submit">Save</button>
