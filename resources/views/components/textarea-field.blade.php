<field-label for="{{$name}}" />
<textarea name="{{$name}}" class="form-control" id="{{$name}}" rows="3">{{ old($name,$model->$name) }}</textarea>
@error($name)
<p>{{ $errors->first($name) }}</p>
@enderror
