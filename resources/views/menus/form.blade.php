@csrf
<input type="hidden" name="count" value="{{( $menu->count) ? $menu->count:1}}">
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{old('name') ?? $menu->name}}" class="form-control">
    <div>
        {{ $errors->first('name') }}
    </div>
</div>

<div class="form-group">
    <label for="price">Price</label>
    <input type="number" name="price" value="{{old('price') ?? $menu->price}}" class="form-control">
    <div>
        {{ $errors->first('price') }}
    </div>
</div>

<div class="form-group d-flex flex-column">
    <label for="image">Menu Image</label>
    <input type="file" name="image"  class="form-control">
    <div>
        {{ $errors->first('image') }}
    </div>
</div>



<div class="form-group">
    <lable for="category_id">Category</lable>
    <select name="category_id" id="category_id" class="form-control">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $menu->category_id ? 'selected': '' }}>{{ $category->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="desc">Description</label>
    <textarea name="desc" id="desc" cols="30" rows="5" class="form-control">{{old('desc') ?? $menu->desc}}</textarea>
    <div>
        {{ $errors->first('desc') }}
    </div>
</div>