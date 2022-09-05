<!doctype html>
<html lang="en">
  <head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
	
    <h1>Tabel Barang Elektronik</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <table class ="table">
		
		<p>Search Item:</p>
	<form action="/search" method="GET">
		<input type="text" name="search" placeholder="Item Name" value="{{ old('search') }}">
		<input type="submit" value="search">
		<table class ="table">
		<tr>
			
			<th>No</th>
			<th>Name</th>
			<th>Quantity</th>
			
			<th>Price</th>
			<th>Jenis</th>
			<th>Jumlah</th>
			
		</tr>
		@foreach($items as $d => $a)
		<tr>
			<td>{{ $d + $items->firstItem() }}</td>
			<td>{{ $a->name }}</td>
			<td>{{ $a->qty }}</td>
			
			<td>{{ $a->price }}</td>
			<td>{{ $a->jenis }}</td>
			<td>{{ $a->jumlah }}</td>
			<td>
				
				<a class="btn btn-primary" href="/edit/{{ $a->id }}" 
					role="button"><i class="fa fa-edit"> </i></a>
				<a class="btn btn-primary" href="/delete/{{ $a->id}}" 
					onclick="return confirm('Move data to trash?')" role="button"><i class="fa fa-remove"> </i></a>
				
			</td>
			
		</tr>
		@endforeach
		{{ $items->links() }}
		<a class="btn btn-primary" href="/" 
			role="button"disabled>Ascending</a>
			
		<a class="btn btn-primary" href="/desc" 
			role="button">Descending</a>
	</table>
	{{-- <button style="margin-right: 300px;width: 100px;background-color: rgba(1, 204, 21, 0.829);font-size: 14px;height: 35px;padding: 0px;"><a href="/create">Add</a></button> --}}
	<a class="btn btn-primary" href="/create" 
		role="button">Add</a>
		
	
		{{-- <table class ="table">
			<tr>
				
				<th>No</th>
				<th>Name</th>
				<th>Description</th>
				
			</tr>
			@foreach($types as $e => $b)
			<tr>
				<td>{{ $e + $types->firstItem() }}</td>
				<td>{{ $b->name }}</td>
				<td>{{ $b->description }}</td>
				
				<td>
					
					<a class="btn btn-primary" href="/edit/{{ $b->id }}" 
						role="button"disabled><i class="fa fa-edit"> </i></a>
					<a class="btn btn-primary" href="/delete/{{ $b->id}}" 
						onclick="return confirm('Move data to trash?')" role="button"disabled><i class="fa fa-remove"> </i></a>
					
				</td>
				
			</tr>
			@endforeach
		{{ $items->links() }}
		</table> --}}

			<a class="btn btn-primary" href="/create_type" 
		role="button">Add Item Type</a>

  </body>
</html>