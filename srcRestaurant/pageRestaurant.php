<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles/variables.css"/>
		<link rel="stylesheet" href="styles/styleRestaurant.css"/>
		<link rel="stylesheet" href="styles/hamburgers.css"/>
		<link rel="stylesheet" href="styles/cardapio.css"/>
		<link rel="stylesheet" href="styles/perfil.css"/>
		<link rel="stylesheet" href="styles/rodizio.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<script src="scripts/main.js"></script><script src="scripts/inicio.js"></script><script src="scripts/pedidos.js"></script>
		<script src="scripts/cardapio.js"></script><script src="scripts/perfil.js"></script><script src="scripts/rodizio.js"></script><script src="scripts/etiquetas.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<title>TCC</title>
    </head>
    <body background="img/bg1.png" onload="StartPage()">
		<div id=nav>
			<div class="navBar" id="navBarID">
				<img id="logoRestaurant" src="img/mcLogo.png" class="logoImage" alt="Missing Logo" style="color:white"></img>
				<p class="navHeader" id="restaurantName">Luda Lanches</p>
				<section class="navDiv">
					<a class="navButton" onclick="OpenTab(event, 'navInicio')">Início</a>
					<a class="navButton" onclick="OpenTab(event, 'navPedidos')">Pedidos</a>
					<a class="navButton" onclick="OpenTab(event, 'navRodizio')">Rodízio</a>
					<a class="navButton" onclick="OpenTab(event, 'navCardapio')">Cardápio</a>
					<a class="navButton" onclick="OpenTab(event, 'navPerfil')" id="defaultOpen">Perfil</a>					
				</section>
				<button class="hamburger hamburger--squeeze" onclick="OpenNavMobile()" id="icon" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
		</div>
		
		<div id="container" class="box-shadow">
			<div id="navInicio" class="tabContent">
				<h3>Início</h3>
				<div class="line"></div>
				<br><br><br>

            </div>
			
            <div id="navRodizio" class="tabContent">
				<h3 class="tabHeader">Rodízio</h3>
				<button type="button" class="btn btn-success addCardapio" data-toggle="modal" data-target="#modalRodizio">
					Adicionar
				</button>
				<div class="line"></div>
				<div id="rodiziosDiv">
					<!--<div class="rodizio">
						<div class="rodizioPrice">11.11</div>
						<div class="rodizioName">hdhsfds</div>
						<div class="rodizioTags">
							<label>
								<img src="img/tagred.png" class="imgCardapioTag">
								Exemplo 5 
							</label>
							<br>
							<label>
								<img src="img/tagred.png" class="imgCardapioTag">
								Exemplo 6   
							</label> 
							<br>
							<p># Exemplo 5</p> 
							<p># Exemplo 6</p>
						</div>
						
						<div class="rodizioDesc">dhhsdhfksdjhfksdhkdshf</div>
					</div>-->
				</div>
                
                <!-- Modal -->
				<div id="modalRodizio" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Adicionar novo rodízio</h4>
							</div>
							<div class="modal-body">
								<label>
									Nome do Rodízio <br><input type="text" id="nomeRodizio" size="30" autocomplete="off"/>
								</label><br><br>
								<label>
									Preço do Rodízio <br><input type="number" id="precoRodizio" size="10" autocomplete="off"/>
								</label><br><br>
                                <label>
									Descrição do Rodízio <br><input type="text" id="descRodizio" size="60" autocomplete="off"/>
								</label><br><br>
								<label>Selecione as tags: </label>
								<br>
								<div id="divTagRodizio" class="divTagRodizio">
									<!--<label for="tagRodizio1">
										<input type="checkbox" id="tagRodizio1" class="tagCardapio" autocomplete="off">
										Exemplo 1   
									</label>
									<label for="tagRodizio2">
										<input type="checkbox" id="tagRodizio2" class="tagCardapio" autocomplete="off">
										Exemplo 2   
									</label> 
									<label for="tagRodizio3">
										<input type="checkbox" id="tagRodizio3" class="tagCardapio" autocomplete="off">
										Exemplo 3   
									</label>
									<label for="tagRodizio4">
										<input type="checkbox" id="tagRodizio4" class="tagCardapio" autocomplete="off">
										Exemplo 4   
									</label> 
									<label for="tagRodizio5">
										<input type="checkbox" id="tagRodizio5" class="tagCardapio" autocomplete="off">
										Exemplo 5   
									</label>
									<label for="tagRodizio6">
										<input type="checkbox" id="tagRodizio6" class="tagCardapio" autocomplete="off">
										Exemplo 6   
									</label> 
									<label for="tagRodizio7">
										<input type="checkbox" id="tagRodizio7" class="tagCardapio" autocomplete="off">
										Exemplo 7   
									</label>
									<label for="tagRodizio8">
										<input type="checkbox" id="tagRodizio8" class="tagCardapio" autocomplete="off">
										Exemplo 8   
									</label> -->
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-light" data-dismiss="modal" onclick="CloseModalRodizio()">Fechar</button>
								<button type="button" class="btn btn-success" onclick="NewRodizio()">Adicionar</button>
							</div>
						</div>
					</div>
				</div>
                
			</div>			
			
			<div id="navPedidos" class="tabContent">
				<h3>Pedidos</h3>
				<div class="line"></div>
                
            </div>
              
            <div id="navCardapio" class="tabContent">		
				<div id="divCardapio"> 
					<h3 class="cardapio activeCardapio">Cardápio</h3>
					<h3 class="cardapio" id="cardapioTag" onclick="OpenSubTab(event, 'navTags')">Tags</h3>
					<button type="button" class="btn btn-success addCardapio" data-toggle="modal" data-target="#myModal">
						Adicionar	
					</button>
				</div>
				
				<div class="line"></div>
				
				<div id="itemsCardapio">
					<!--<div class="cardapioItemDiv">
						<div class="cardapioImg"></div>
						<div class="cardapioName">
							<p>dsfsdf</p>
						</div>
						<div class="cardapioDescDiv">
							<p>hdsugdsgfjcvbkuidsgfjsdhfbvjvcdsvfksdhbdnjsvfikufjhd</p>
							<p>hdsugdsgfjcvbkuidsgfjsdhfbvjvcdsvfksdhbdnjsvfikufjhd</p>
							<p>hdsugdsgfjcvbkuidsgfjsdhfbvjvcdsvfksdhbdnjsvfikufjhd</p>
							<p>hdsugdsgfjcvbkuidsgfjsdhfbvjvcdsvfksdhbdnjsvfikufjhd</p>
						</div>
						<div class="cardapioTag">
							<label for="tagCardapio5">
								#Exemplo 5, 
							</label>
							<label for="tagCardapio6">
								#Exemplo 6   
							</label> 
						</div>
					</div>-->
				</div>

				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Adicionar novo item ao cardápio</h4>
							</div>
							<div class="modal-body">
								<label>
									Nome do Item <br><input type="text" id="nomeItem" autocomplete="off"/>
								</label><br><br>
								<label>
									Descrição do Item <br><input type="text" id="descItem" size="60" autocomplete="off"/>
								</label><br><br>
								<label>
									Imagem: <input type="file" id="imagemItem" onChange="readURLCardapio(this,true,null)" autocomplete="off"/>
								</label>
								<img src="" id="previewCardapio" class="logoImage"></img>
								<br><br>
								<label>Selecione as etiquetas: </label>
								<br>
								<div id="divTagCardapio" class="divTagCardapio">
									<!--<label for="tagCardapio1">
										<input type="checkbox" id="tagCardapio1" class="tagCardapio">
										Exemplo 1   
									</label>
									<label for="tagCardapio2">
										<input type="checkbox" id="tagCardapio2" class="tagCardapio">
										Exemplo 2   
									</label> 
									<label for="tagCardapio3">
										<input type="checkbox" id="tagCardapio3" class="tagCardapio">
										Exemplo 3   
									</label>
									<label for="tagCardapio4">
										<input type="checkbox" id="tagCardapio4" class="tagCardapio">
										Exemplo 4   
									</label> 
									<label for="tagCardapio5">
										<input type="checkbox" id="tagCardapio5" class="tagCardapio">
										Exemplo 5  
									</label>
									<label for="tagCardapio6">
										<input type="checkbox" id="tagCardapio6" class="tagCardapio">
										Exemplo 6   
									</label> 
									<label for="tagCardapio7">
										<input type="checkbox" id="tagCardapio7" class="tagCardapio">
										Exemplo 7   
									</label>
									<label for="tagCardapio8">
										<input type="checkbox" id="tagCardapio8" class="tagCardapio">
										Exemplo 8   
									</label>-->
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-light" data-dismiss="modal" onclick="CloseModalCardapio()">Fechar</button>
								<button type="button" class="btn btn-success" onclick="NewItemCardapio()">Adicionar</button>
							</div>
						</div>
					</div>
				</div>

            </div>
			
			<div id="navTags" class="tabContent">
				<div id="divCardapio"> 
					<h3 class="cardapio" onclick="OpenSubTab(event, 'navCardapio')">Cardápio</h3>
					<h3 class="cardapio activeCardapio" id="cardapioTag">Tags</h3>
					<button type="button" class="btn btn-success addTag" data-toggle="modal" data-target="#myModalTags">
						Adicionar	
					</button>
				</div>
				<div class="line"></div>
				<div id="myModalTags" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Adicionar nova Tag</h4>
							</div>
							<div class="modal-body">
								<label>
									Nome da Tag <br><input type="text" id="nomeTag" maxlength="40" autocomplete="off"/>
								</label> 
							</div>
							<div class="modal-footer">
							<!--Mudar nome do onclik-->	<button type="button" class="btn btn-light" data-dismiss="modal" onclick="CloseModalEtiqueta()">Fechar</button>
								<button type="button" class="btn btn-success" onclick="NewEtiqueta()">Adicionar</button>
							</div>
						</div>
					</div>
				</div>
				<div id="divTagsID" class="divTag">
					<h3>Tags Adicionadas</h3>
					<br><br>
				</div>

            </div>

			<div id="navPerfil" class="tabContent">
				<div id="divPerfil"> 
					<h3 class="perfil activePerfil">Perfil</h3>
					<h3 class="perfil" id="perfilAlt" onclick="OpenSubTab(event, 'perfilConfig')">Alterar dados de login</h3>
				</div>
				
				<div class="line"></div>
				<br><br>
				<div id="perfilSelection">
					<div class="perfilContainer left">
						<h3>Informações gerais</h3>
						<br><br>
						<label>
							<p>Nome do Restaurante</p><input type="text" id="restaurantNameInput" maxlength="40" size="40" autocomplete="off"/>
						</label><br><br>
						<label>
							<p>Logo do Restaurante:</p><input type="file" id="logoImageInput" onChange="readURLLogo(this, true)" autocomplete="off"/>
						</label>
						<br>
						<img src="" id="previewLogo" class="logoImage"></img>
						<br><br>
					</div>
					<div class="perfilContainer central">
						<h3>Informações de contato</h3>
						<br><br>
						<label>
							<p>Telefone</p><input type="tel" id="telefoneInput" maxlength="40" size="40" onChange="TelefoneValidation(this)" autocomplete="off"/>
							<p class="observationInput">* Insira somente números no formato XX XXXXXXXX</p>
						</label><br><br>
						<label>
							<p>E-Mail</p><input type="text" id="emailInput" maxlength="40" size="40" onChange="EmailValidation(this)" autocomplete="off"/>
						</label>
						<br><br>
					</div>
					<div class="perfilContainer right">
						<h3>Localização</h3>
						<br><br>
						<label>
							<p>CEP</p><input type="text" id="cepInput" maxlength="40" size="40" onChange="CEPValidation(this)" autocomplete="off"/>
							<p class="observationInput">* Insira somente números no formato XXXXXXXX</p>
						</label><br><br>
						<label>
							<p>Estado</p><input type="text" id="estadoInput" maxlength="40" size="40" autocomplete="off"/>
						</label><br><br>
						<label>
							<p>Cidade</p><input type="text" id="cidadeInput" maxlength="40" size="40" autocomplete="off"/>
						</label><br><br>
						<label>
							<p>Endereço</p><input type="text" id="enderecoInput" maxlength="40" size="40" autocomplete="off"/>
						</label><br><br>
					</div>
				</div>
				<button type="button" class="btn btn-success" id="perfilButton" onClick="SavePerfilChanges()">Salvar Alterações</button>
			</div>

			<div id="perfilConfig"  class="tabContent">
				<div id="divPerfil"> 
					<h3 class="perfil" onclick="OpenSubTab(event, 'navPerfil')">Perfil</h3>
					<h3 class="perfil activePerfil" id="perfilAlt">Alterar dados de login</h3>
				</div>
				<div class="line"></div>
				<br><br>
				<div id="configSelection">
					<div class="configContainer configLogin">
						<h3>Login</h3>
						<br>
						<label>
							<p>Username</p><input type="text" id="userInput" maxlength="40" size="40" autocomplete="off"/>
						</label>
					</div>
					<div class="configContainer configSenha">
						<h3>Mudar a senha</h3>
						<br>
						<label>
							<p>Senha antiga</p><input type="password" id="senhaAntiga" maxlength="10" size="40" autocomplete="off"/>
						</label><br><br>
						<label>
							<p>Nova senha</p><input type="password" id="novaSenhaInput" maxlength="10" size="40" autocomplete="off"/>
						</label><br><br>
						<label>
							<p id="confirmarSenhaLabel">Confirmar senha</p><input type="password" id="confirmarSenhaInput" maxlength="10" size="40" autocomplete="off"/>
						</label><br><br><br><br>
					</div>
				</div>
				
				<button type="button" class="btn btn-success" id="configButton" onClick="SavePerfilChanges()">Salvar Alterações</button>
			</div>
		</div>
		<footer>
			<p>Rodizeira © Copyright 2020. Todos os direitos reservados</p>
		</footer>
        <?php
            include 'C:\wamp64\www\TCC-Rodizeira\srcRestaurant\php\startRestaurant.php';
            fillRestaurantInfo();
            fillCardapio();
            fillRodizio();
            fillEtiquetas();
        ?>
    </body>
</html>