<label for="{{$name}}">{{ ucfirst($name) }}</label>
<input value="{{ old($name,$model->$name) }}" name="{{$name}}" type="text" class="form-control" id="{{$name}}">
@error($name)
<p>{{ $errors->first($name) }}</p>
@enderror
