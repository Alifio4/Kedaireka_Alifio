<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Tabel Barang Elektronik</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <table class ="table">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Type</th>
			<th>Price</th>
			
		</tr>
		@foreach($items as $d)
		<tr>
			<td>{{ $d->id }}</td>
			<td>{{ $d->name }}</td>
			<td>{{ $d->type }}</td>
			<td>{{ $d->price }}</td>
			<td>
				<a href="/edit/{{ $d->id }}">Update</a>
				<a href="/delete/{{ $d->id }}">Delete</a>
				
			</td>
			
		</tr>
		@endforeach
	</table>
	<button style="margin-right: 300px;width: 100px;background-color: rgba(1, 204, 21, 0.829);font-size: 14px;height: 35px;padding: 0px;"><a href="/create">Add</a></button>
	
  </body>
</html>