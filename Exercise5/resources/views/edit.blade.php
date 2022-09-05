<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action= "/update" method="post">
        
        @csrf
        <h1>Form Edit Barang</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <input type="hidden" name="id" value="{{ $items->id }}"> <br/>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value= "{{ $items->name }}">
      </div>
    <div class="mb-3">
        <label for="qty" class="form-label">qty</label>
        <input type="text" class="form-control" id="qty" name="qty" value= "{{ $items->qty }}">
      </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" value= "{{ $items->price }}">
      </div>
      <div class="mb-3">
        <label for="type_id" class="form-label">type_id</label>
        <input type="text" class="form-control" id="type_id" name="type_id" value= "{{ $items->type_id }}">
      </div>
    {{-- <button class="btn btn-primary" type="submit">Add</button> --}}
    <div class="mb-3">
        <button type="reset" onclick="return confirm('Reset Form?')" style="margin: 350px;margin-top:0px; width: 100px;background-color: rgba(244, 44, 44, 0.829);font-size: 14px;height: 35px;padding: 0px;" value="Reset">Reset</button>
        <a><button type="submit" onclick="return confirm('Save Changes?')" style="margin-right: 300px;width: 100px;background-color: rgba(8, 246, 32, 0.829);font-size: 14px;height: 35px;padding: 0px;">Edit</button></a>
    </div>
    </form>
    
  </body>
</html>