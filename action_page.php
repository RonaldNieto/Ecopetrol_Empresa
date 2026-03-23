<!-- action_page.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }
        .perfil {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #006400; /* Verde Ecopetrol */
        }
        p {
            margin: 8px 0;
        }
    </style>
</head>
<body>
    <div class="perfil">
        <h1>🌍 Bienvenido a Ecopetrol</h1>
        <p><strong>Cédula:</strong> <?php echo $_POST["cc"]; ?></p>
        <p><strong>Nombres:</strong> <?php echo $_POST["nombres"]; ?></p>
        <p><strong>Apellidos:</strong> <?php echo $_POST["apellidos"]; ?></p>
        <p><strong>Email:</strong> <?php echo $_POST["email"]; ?></p>
        <p><strong>Usuario:</strong> <?php echo $_POST["usuario"]; ?></p>
        
        <p>✨ Gracias por registrarte. Ahora formas parte de nuestra comunidad de usuarios Ecopetrol.</p>
<<<<<<< HEAD
			 <footer class="bottom">
            <p>Página web realizada para fines netamente académicos por: Ronald Andrés Nieto Collante © 2016</p>
            <div class="social">
                <a href="https://www.facebook.com/EcopetrolOficial/" target="_blank">
                    <img src="img/boton_facebook.png" alt="Facebook">
                </a>
                <a href="https://www.instagram.com/ecopetroloficial/" target="_blank">
                    <img src="img/boton_instagram.png" alt="Instagram">
                </a>
                <a href="https://www.linkedin.com/company/ecopetroloficial/" target="_blank">
                    <img src="img/boton_linkedin.png" alt="LinkedIn">
                </a>
            </div>
            <p>Ingeniero en formación Ronald Andrés Nieto Collante<br>Docente UPC Seccional Aguachica</p>
            <small>"El éxito es como los pedos, la gente se molesta cuando no es de ellos." - Bill Gates</small>
        </footer>
    </div>
</body>
=======
			<footer class="bottom">
				<p>Página web realizada para fines netamente académicos por: Ronald Andrés Nieto Collante © 2016</p>
				<div class="social">
				<a href="https://www.facebook.com/EcopetrolOficial/"><img src="../img/boton_facebook.png" alt="Facebook"></a>
				<a href="https://www.instagram.com/accounts/login/?next=%2Fecopetroloficial%2F&source=omni_redirect"><img src="../img/boton_instagram.png" alt="Instagram"></a>
				<a href="https://www.linkedin.com/company/ecopetroloficial/"><img src="../img/boton_linkedin.png" alt="LinkedIn"></a>
				</div>
				<p>Ingeniero en formación Ronald Andrés Nieto Collante<br>Docente UPC Seccional Aguachica</p>
				<small>"El éxito es como los pedos, la gente se molesta cuando no es de ellos." - Bill Gates</small>
			</footer>
    </div>
</body>

>>>>>>> 57800e2fd0ffae2e298efbe71ecd02341b93cf80
</html>
