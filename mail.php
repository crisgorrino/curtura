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
				<?php 
					if(isset($_POST['submit'])){
					    $to = "cgorrino@gmail.com"; // this is your Email address
					    $from = $_POST['email']; // this is the sender's Email address
					    $nombre = $_POST['nombre'];
					    $ciudad = $_POST['ciudad'];
					    $estado = $_POST['estado'];
					    $empresa = $_POST['empresa'];
					    $rubro = $_POST['rubro'];
					    $comentarios = $_POST['comentarios'];  
					    $datos =  $ciudad . "\n\n" . $estado . "\n\n" . $empresa . "\n\n" . $rubro . "\n\n" . $comentarios;
					    $subject = "Contacto de Pagina";
					    $message = $nombre . " " . $datos . "\n\n" . $_POST['message'];
					    
					    $headers = "From:" . $from;
					    mail($to,$subject,$message,$headers);
					  
					    echo "<div class='inner'><h1>Gracias su correo ha sido enviado " . $first_name . ", estaremos en contacto con usted.</h1></div>";
					    // You can also use header('Location: thank_you.php'); to redirect to another page.
					    }
				?>		
		</div>
		<!--main content-->
		
		<!--footer-->
			<?php include('includes/footer.php')?>
		<!--footer-->
		
    </body>
</html>