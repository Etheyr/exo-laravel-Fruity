<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Produits</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>

	<div class="ui  top fixed menu">
		<div class="item">
			<img src="https://www.raspberrypi.org/wp-content/uploads/2011/10/Raspi-PGB001.png">
		</div>
		<div class="item">
			<h1 class="header">Article</h1>
		</div>
		<div class="item">
			<a href="/products/new" class="ui green button"><i class="add square icon"></i>Nouvelle article</a>
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
		<div class="ui pagination menu">
			<a class="active item">
				1
			</a>
			<a class="item">
				2
			</a>
			<a class="item">
				3
			</a>
			<a class="item">
				4
			</a>
			<a class="item">
				5
			</a>
			<a class="item">
				6
			</a>
			<a class="item">
				7
			</a>
		</a>
		<a class="item">
			8
		</a>
		<a class="item">
			9
		</a>
		<a class="item">
			10
		</a>
		<a class="item">
			11
		</a>
	</div>
</div>

<div class="ui two column centered grid">

	@foreach($produits as $product)
	<div class="ui  cards">
		<div class="card">
		<a href="/products/edit/modifier/{{$product->id}}" class="ui top attached button"><i class="setting icon"></i> Editer</a>
			<div class="image">
				<img src="https://www.raspberrypi.org/wp-content/uploads/2011/10/Raspi-PGB001.png">
			</div>
			<div class="content">
				<div class="header">{{$product->name}} : {{$product->description}}</div>
			</div>
			<span class="left floated">
				Stock :	{{$product->stock}}
			</span>
			<div class="extra content">
				<span class="left floated">
					<a href="/products/show/{{$product->id}}" class="ui green button">Gérer</a></button>
				</span>
				<span class="left floated">
					<form action="/products/{{$product->id}}" method="POST">
						{{csrf_field()}}
						<button type="submit" class="ui red button">Supprimer</button>
					</form>
				</span>
				<span class="right floated">
					<h3>{{$product->price}}<i class="euro icon"></i></h3>
				</span>
			</div>
		</div>
	</div>
	@endforeach

</div>

<br>
<br>
<br>
<br>

<div class="ui two column centered grid">
	<div class="ui pagination menu">
		<a class="active item">
			1
		</a>
		<a class="item">
			2
		</a>
		<a class="item">
			3
		</a>
		<a class="item">
			4
		</a>
		<a class="item">
			5
		</a>
		<a class="item">
			6
		</a>
		<a class="item">
			7
		</a>
	</a>
	<a class="item">
		8
	</a>
	<a class="item">
		9
	</a>
	<a class="item">
		10
	</a>
	<a class="item">
		11
	</a>
</div>
</div>

<br>
<br>
<br>
<br>

</body>
</html>
