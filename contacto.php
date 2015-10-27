<!DOCTYPE html>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>C U R T U R A - CONTACTO</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/main.css">

    </head>
    <body class="main-contacto">
    	<!--Header-->
			<?php include('includes/header.php')?>
		<!--Header-->
		
		<!--main content-->
		<div class="contacto cf">
			<div class="left">
				<img src="img/contacto/logo.png" alt="Curtura logo" class="curtura-logo">
				
				<form action="mail.php" method="post">
					<p><label>NOMBRE*</label><input type="text" name="nombre"></p>
					<p><label>EMAIL*</label><input type="text" name="email"></p>
					<p>
						<label class="half">CIUDAD</label><input type="text" class="half" name="ciudad">
						<label class="half">ESTADO</label><input type="text" class="half" name="estado">
					</p>
					<p>
						<label class="half">EMPRESA</label><input type="text" class="half" name="empresa">
						<label class="half">RUBRO</label><input type="text" class="half" name="rubro">
					</p>
					<p><label class="area">COMENTARIO*</label><textarea></textarea name="comentarios"></p>
					<p><input type="submit" value="" name="submit"></p>
				</form>
				
				<div class="center">
					<p><small>*Campos obligatorios</small></p>
					
					<img src="img/contacto/zigzag.png" alt="zigzag" style="display:inline-block;">
					
					<h6>
						<span>T. 3637 9351</span><br>
						Chimborazo 1222, Col. El Mirador, C.P. 44370.<br>
						<span>GDL / JAL /MX</span><br>
					</h6>
					
					<img src="img/contacto/logotypo.png" alt="">
					
				</div>
				
			</div>
			<div class="right"></div>
		</div>
		<!--main content-->
		
		<!--footer-->
			<?php include('includes/footer.php')?>
		<!--footer-->
		
    </body>
</html>