<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./CSS/header.css">
	<link rel="stylesheet" type="text/css" href="./CSS/banner.css">
	<link rel="stylesheet" type="text/css" href="./CSS/category.css">
	<link rel="stylesheet" type="text/css" href="./CSS/recipes.css">
</head>
<body>
    <!-- Header Contenu -->
   
	<header>
		<?php include './index/header.php'; ?>	
	</header>


	<!-- Banner Home Section -->
	<div class="banner">
		<?php include './index/banner.php'; ?>
	</div>

	
	
	<!-- Category Section -->
	<section id="category">
		<?php include './index/category.php'; ?>
	</section>


	<!-- Recette Section -->
<div class="title">
	<h1>Simple and tasty recipes</h1>
	<p>Lorem ipsum dolor sit amet, consectetuipisicing elit, 
	sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim </p>
</div>
	


</body>
</html>