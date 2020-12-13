<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="styles/variables.css"/>
		<link rel="stylesheet" href="styles/styleRestaurant.css"/>
		<link rel="stylesheet" href="styles/hamburgers.css"/>
		<link rel="stylesheet" href="styles/cardapio.css"/>
		<link rel="stylesheet" href="styles/perfil.css"/>
		<link rel="stylesheet" href="styles/rodizio.css"/>
        <link rel="stylesheet" href="styles/pedidos.css"/>
        <link rel="stylesheet" href="styles/inicio.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="scripts/main.js"></script><script src="scripts/inicio.js"></script><script src="scripts/pedidos.js"></script>
		<script src="scripts/cardapio.js"></script><script src="scripts/perfil.js"></script><script src="scripts/rodizio.js"></script><script src="scripts/etiquetas.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<title>TCC</title>
    </head>
    <body background="img/bg1.png" onload="StartPage()">
		<div id=nav>
			<div class="navBar" id="navBarID">
				<img id="logoRestaurant" src="img/bbqLogo.png" class="logoImage" alt="Missing Logo" style="color:white"></img>
				<p class="navHeader" id="restaurantName">Gado Demais</p>
				<section class="navDiv">
					<a class="navButton" onclick="OpenTab(event, 'navInicio')" id="defaultOpen">Início</a>
					<a class="navButton" onclick="OpenTab(event, 'navPedidos')">Pedidos</a>
					<a class="navButton" onclick="OpenTab(event, 'navRodizio')">Rodízio</a>
					<a class="navButton" onclick="OpenTab(event, 'navCardapio')">Cardápio</a>
					<a class="navButton" onclick="OpenTab(event, 'navPerfil')">Perfil</a>					
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
                <div id="divMaisPedidos">
                    <div id="maisPedidosSemana">
                        <h4>Mais pedidos da Semana:</h4>
                    </div>
                    <div id="maisPedidosSemestre">
                        <h4>Mais pedidos do Semestre:</h4>
                    </div>
                    <div id="maisPedidosMes">
                        <h4>Mais pedidos do Mês:</h4>
                    </div>
                </div>
				<br><br><br>
            </div>
			
            <div id="navPedidos" class="tabContent">
				<h3>Pedidos</h3>
				<div class="line"></div>
                <div id="pedidosDiv">
					<!--<div class="divPedido">
						<div class="divTitle">
							<p class="pedidoName">Pedido #1</p>
							<div class="pedidoDeleteDiv">
								<a href="#">DELETAR</a>
							</div>
						</div>
						<div class="line"></div>
						<div class="divItemsPedido">
							<p class="itemsPedido">- Pizza 1</p>
						</div>
					</div>-->
				</div>
            </div>
            
            <div id="navRodizio" class="tabContent">
				<h3 class="tabHeader">Rodízio</h3>
				<button type="button" class="btn btn-success addCardapio" data-toggle="modal" data-target="#modalRodizio">
					Adicionar
				</button>
				<div class="line"></div>
                <br>
				<div id="rodiziosDiv">
					<!--<div class="rodizio">
						<div class="rodizioPrice">11.11</div>
						<div class="rodizioName">hdhsfds</div>
						<div class="rodizioDeleteDiv">
							<a href="#">DELETAR</a>
						</div>
						<div class="rodizioTags">
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
 
            <div id="navCardapio" class="tabContent">		
				<div id="divCardapio"> 
					<h3 class="cardapio activeCardapio">Cardápio</h3>
					<h3 class="cardapio" id="cardapioTag" onclick="OpenSubTab(event, 'navTags')">Etiquetas</h3>
					<button type="button" class="btn btn-success addCardapio" data-toggle="modal" data-target="#myModal">
						Adicionar	
					</button>
				</div>
				
				<div class="line"></div>
				<br>
				<div id="itemsCardapio">
					<!--<div class="cardapioItemDiv">
						<div class="cardapioImg"></div>
						<div class="cardapioName">
							<p>dsfsdf</p>
						</div>
						<div class="cardapioDeleteDiv">
							<a href="#">DELETAR</a>
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
					<h3 class="cardapio activeCardapio" id="cardapioTag">Etiquetas</h3>
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
								<h4 class="modal-title">Adicionar nova Etiqueta</h4>
							</div>
							<div class="modal-body">
								<label>
									Nome da Etiqueta <br><input type="text" id="nomeTag" maxlength="40" autocomplete="off"/>
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
					<h3>Etiquetas Adicionadas</h3>
					<br><br>
				</div>

            </div>

			<div id="navPerfil" class="tabContent">
				<div id="divPerfil"> 
					<h3 class="perfil activePerfil">Perfil</h3>
					<h3 class="perfil" id="perfilAlt" onclick="OpenSubTab(event, 'perfilConfig')">Login</h3>
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
					<h3 class="perfil activePerfil" id="perfilAlt">Login</h3>
				</div>
				<div class="line"></div>
				<br><br>
				<div id="configSelection">
					<div class="configContainer configLogin">
						<h3>Mudar nome de Usuário</h3>
						<br>
						<label>
							<p>Novo Login</p><input type="text" id="userInput" maxlength="40" size="40" autocomplete="off"/>
						</label><br><br>
                        <label>
							<p>Senha</p><input type="password" id="senhaUser" maxlength="64" size="40" autocomplete="off"/><br><br>
						</label>
					</div>
					<div class="configContainer configSenha">
						<h3>Mudar a senha</h3>
						<br>
						<label>
							<p>Senha antiga</p><input type="password" id="senhaAntiga" maxlength="64" size="40" autocomplete="off"/>
						</label><br><br>
						<label>
							<p>Nova senha</p><input type="password" id="novaSenhaInput" maxlength="64" size="40" autocomplete="off"/>
						</label><br><br>
						<label>
							<p id="confirmarSenhaLabel">Confirmar nova senha</p><input type="password" id="confirmarSenhaInput" maxlength="64" size="40" autocomplete="off"/>
						</label><br><br><br><br>
					</div>
				</div>
				
				<button type="button" class="btn btn-success" id="configButton" onClick="SaveLoginChanges()">Salvar Alterações</button>
			</div>
		</div>
		<footer>
			<p>Rodizeira © Copyright 2020. Todos os direitos reservados</p>
		</footer>
        <?php/*
            include 'C:\wamp64\www\TCC-Rodizeira\srcRestaurant\php\startRestaurant.php';
            fillInicio();
            fillRestaurantInfo();
            fillCardapio();
            fillRodizio();
            fillEtiquetas();
            fillPedidos();*/
        ?>
        <script>
            SetPerfilTab('Churrascaria Gado Demais', 'img/bbqLogo.png', '(51) 3387-3733', 'gadodemais@contato.com.br', '90470-340', 'Rio Grande do Sul', 'Porto Alegre', 'Avenida Soledade, Número 374');
        
            CreateTag('Acompanhamentos');CreateTag('Galeto');CreateTag('Classico');CreateTag('Completo');
            
            CreateDivItemCardapio('Peito de Frango', '', '#Galeto~');
            CreateDivItemCardapio('Coxa de Frango', '', '#Galeto~');
            CreateDivItemCardapio('Sobrecoxa de Frango', '', '#Galeto~');
            CreateDivItemCardapio('Coração de Frango', '', '#Galeto~');
            CreateDivItemCardapio('Asa de Frango', '', '#Galeto~');
            CreateDivItemCardapio('Sassami Grelhado', '', '#Galeto~');
            CreateDivItemCardapio('Costela Suína', '', '#Galeto~');
            CreateDivItemCardapio('Salsichão', '', '#Galeto~');
            CreateDivItemCardapio('Filé Suíno com Bacon', '', '#Galeto~');
            CreateDivItemCardapio('Filé de Costela', '', '#Galeto~');
            CreateDivItemCardapio('Costelinha Suína com Molho Barbecue', '', '#Classico~');
            CreateDivItemCardapio('Filé de Costela', '', '#Classico~');
            CreateDivItemCardapio('Costela', '', '#Classico~');
            CreateDivItemCardapio('Costelão 12 Horas', '', '#Classico~');
            CreateDivItemCardapio('Cupim', '', '#Classico~');
            CreateDivItemCardapio('Maminha', '', '#Classico~');
            CreateDivItemCardapio('Vazio', '', '#Classico~');
            CreateDivItemCardapio('Picanha', '', '#Completo~');
            CreateDivItemCardapio('Alcatra', '', '#Completo~');
            CreateDivItemCardapio('Filé Mignon', '', '#Completo~');
            CreateDivItemCardapio('Contrafilé', '', '#Completo~');
            CreateDivItemCardapio('Fraldinha', '', '#Completo~');
            CreateDivItemCardapio('Linguiça Calabresa', '', '#Completo~');
            CreateDivItemCardapio('Pão de Alho', 'Pão francês com alho e maionese da casa', '#Acompanhamentos~');
            CreateDivItemCardapio('Queijo Coalho', '', '#Acompanhamentos~');
            CreateDivItemCardapio('Polenta Frita', '', '#Acompanhamentos~');
            CreateDivItemCardapio('Batata Frita', '', '#Acompanhamentos~');
            
            CreateDivRodizio('Rodízio de Galeto', '37.90', 'Sequência inclui TODOS os cortes de frango da casa mais TRÊS cortes suínos [costela suína, salsichão e filé suíno com bacon], mais UM corte bovinho [filé de costela], além de acompanhamentos.', '#Galeto~#Acompanhamentos~');
            CreateDivRodizio('Rodízio Clássico', '57.90', 'Sequência inclui TODOS os cortes de frango da casa mais QUATRO cortes suínos [costela suína, salsichão, filé suíno com bacon e costelinha suína com molho barbecue], mais SEIS cortes bovinhos [filé de costela, costela, costelão 12 horas, cupim, maminha e vazio], além de acompanhamentos.', '#Galeto~#Classico~#Acompanhamentos~');
            CreateDivRodizio('Rodízio Completo', '79.90', 'Sequência de Carnes Nobres incluindo TODOS os cortes da casa, entre eles frango , suíno, bovino e cordeiro, além de acompanhamentos.', '#Galeto~#Classico~#Completo~#Acompanhamentos~');
            
            CreatePedido('Costelinha Suína com Molho Barbecue');
            CreatePedido('Linguiça Calabresa');
            CreatePedido('Pão de Alho');
            CreatePedido('Queijo Coalho');
            CreatePedido('Polenta Frita');
        </script>
    </body>
</html>