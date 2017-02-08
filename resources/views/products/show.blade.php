<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Stock</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>

	<div class="ui  top fixed menu">
		<div class="item">
			<img src="https://www.raspberrypi.org/wp-content/uploads/2011/10/Raspi-PGB001.png">
		</div>
		<div class="item">
			<h1 class="header">Stock</h1>
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
	<br>
	<br>
	<br>

	<div class="ui two column centered grid">
		<div class="ui cards">
			<div class="card">
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
					<div class="ui big buttons">

						<form action="/products/sell/{{$product->id}}" method="POST">
							{{csrf_field()}}
							<button class="ui red button"><i class="minus icon"></i></button>:
						</form>

						<div class="or"></div>

						<form action="/products/restock/{{$product->id}}" method="POST">
							{{csrf_field()}}
							<button class="ui green button"><i class="plus icon"></i></button>
						</form>

					</div>
				</div>
				<a href="/products" class="ui green button">Validez</a>
			</div>
		</div>
	</div>

</body>
</html>