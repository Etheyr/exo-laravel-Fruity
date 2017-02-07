<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>

	<div class="ui top fixed menu">
		<div class="item">
			<img src="https://www.raspberrypi.org/wp-content/uploads/2011/10/Raspi-PGB001.png">
		</div>
		<div class="item">
			<h1 class="header">Article</h1>
		</div>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="ui two column centered grid">
		@foreach($produits as $product)
		<div class="ui link cards">
			<div class="card">
				<div class="image">
					<img src="https://www.raspberrypi.org/wp-content/uploads/2011/10/Raspi-PGB001.png">
				</div>
				<div class="content">
					<div class="header">{{$product->name}}</div>
					<div class="description">
						{{$product->description}}
					</div>
				</div>
				<div class="extra content">
					<span class="right floated">
						{{$product->price}}€
					</span>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<br>
	<br>

</body>
</html>
