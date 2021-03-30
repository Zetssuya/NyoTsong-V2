<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for ="$cate">Add Category</label>
    <input type="text" id="cate" class="form-control" name="category">
    <span class="text-danger">{{ $errors->has('category') ? $errors->first('category') : '' }}</span>
</div>
