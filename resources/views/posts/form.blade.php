@csrf
<div class="form-group">
   <x-input-field :model="$post" name="title"/>
</div>
<div class="form-group">
    <x-textarea-field :model="$post" name="text" />
</div>
<div class="form-group">
   <x-category-select :categories="$categories" name="category_id" :model="$post"/>
</div>
<button class="btn btn-primary" type="submit">Save</button>
