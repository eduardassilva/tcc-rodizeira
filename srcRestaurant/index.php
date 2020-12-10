<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/variables.css"/>
		<link rel="stylesheet" href="styles/styleLogin.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!--<script src="scripts/login.js"></script>-->
        <title>Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
    </head>
    <body background="img/bg1.png">
		<div id=nav>
			<div class="navBar" id="navBarID">
				<!--<img src="" class="logoImage" alt="Logo"></img>-->
				<p class="navHeader" id="restaurantName">Rodizeira</p>
			</div>
		</div>
        
        <div class="loginContainer">
            <div id="formContent">
                <form action="/TCC-Rodizeira/srcRestaurant/pageRestaurant.php" method="POST">
                    <br>
                    <input type="text" id="login" name="login" placeholder="Username" autocomplete="off">
                    <input type="password" id="password" name="password" placeholder="Senha">
                    <br><br>
                    <button id="submit" class="btn btn-lg">Entrar</button>
                    <br><br>
                </form>
                <div id="formFooter">
                    <a type="button" class="underlineHover"  data-toggle="modal" data-target="#myModalLogin">Esqueceu a senha?</a>
                </div>
                <div id="myModalLogin" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Esqueceu a senha?</h4>
							</div>
							<div class="modal-body">
                                <p>Ligue para nosso suporte que ajudamos você!</p>
                                <p><b>(51) 99399-2523</b> ou <b>(51) 99863-3280</b></p>
							</div>
						</div>
					</div>
				</div>  
            </div>
        </div>
		

		<footer>
			<p>Rodizeira © Copyright 2020. Todos os direitos reservados</p>
		</footer>
    </body>
</html>