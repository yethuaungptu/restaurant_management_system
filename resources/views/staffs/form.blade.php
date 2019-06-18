@csrf

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{old('name') ?? $staff->name}}" class="form-control">
    <div>
        {{ $errors->first('name') }}
    </div>
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" value="{{old('email') ?? $staff->email}}" class="form-control">
    <div>
        {{ $errors->first('email') }}
    </div>
</div>


