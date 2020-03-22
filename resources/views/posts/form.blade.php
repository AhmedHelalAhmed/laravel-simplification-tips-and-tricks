@csrf
<div class="form-group">
   <x-input-field :model="$output['post']" name="title"/>
</div>
<div class="form-group">
    <x-textarea-field :model="$output['post']" name="text" />
</div>
<div class="form-group">
   <x-category-select :categories="$output['categories']" name="category_id" :model="$output['post']"/>
</div>
<button class="btn btn-primary" type="submit">Save</button>
