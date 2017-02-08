<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editer</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>

	<div class="ui  top fixed menu">
		<div class="item">
			<img src="https://www.raspberrypi.org/wp-content/uploads/2011/10/Raspi-PGB001.png">
		</div>
		<div class="item">
			<h1 class="header">Edit</h1>
		</div>
		<div class="ui right item">
			<button class="ui green button">
				<i class="shopping basket icon"></i>
				Panier
			</button>
		</div>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="ui two column centered grid">
		<div class="ui  cards">
			<div class="card">
				<div class="image">
					<img src="https://www.raspberrypi.org/wp-content/uploads/2011/10/Raspi-PGB001.png">
				</div>

			</div>
		</div>
	</div>

	<div class="ui centered grid">
		<div class="ui centered six wide column">
			<form action="/products/edit/modif/{{$produits->id}}" method="post" class="ui form">
				{{csrf_field()}}
				<div class="field">
					<label for="fruit">Fruit</label>
					<input type="text" name="name" placeholder="Fruit" value="{{$produits->name}}">
				</div>
				<div class="field">
					<label for="price">Prix</label>
					<input type="text" name="price" placeholder="Prix" value="{{$produits->price}}"> 
				</div>
				<div class="field">
					<label for="description">Marque</label>
					<input type="text" name="description" placeholder="Marque" value="{{$produits->description}}">
				</div>
				<div class="field">
					<label for="stock">Stock</label>
					<input type="text" name="stock" placeholder="Stock" value="{{$produits->stock}}">
				</div>
				<br>
				<br>
				<br>
				<div class="ui centered grid">
					<button type="submit" class="ui big green button">Valider</button>
				</form>
			</div>
		</form>
	</div>
</div>



</body>
</html>