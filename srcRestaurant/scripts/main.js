var restaurant_id = window.location.search.substring(1).split('=')[1];

/*Abre as abas do header (Inicio, Pedidos, Cardapio e Perfil)*/
function OpenTab(evt, tabName) {
	var i, tabContent, navButton;
	tabContent = document.getElementsByClassName("tabContent");
	for (i = 0; i < tabContent.length; i++) {
		tabContent[i].style.display = "none";
	}
	navButton = document.getElementsByClassName("navButton");
	for (i = 0; i < navButton.length; i++) {
		navButton[i].className = navButton[i].className.replace(" active", "");
	}
	document.getElementById(tabName).style.display = "block";
	evt.currentTarget.className += " active";
  
	if(document.getElementById("navBarID").className != "navBar")
		OpenNavMobile();
}

/*Roda no início da página*/
function StartPage(){
	// Abre a aba que tem a ID 'defaultOpen'
	document.getElementById("defaultOpen").click();
	
	//SetPerfilTab();
}

/*Abre as abas do modo mobile e controla o menu "hamburguer"*/
function OpenNavMobile() {
  var x = document.getElementById("navBarID");
  if (x.className === "navBar") {
    x.className += " responsive";
  } else {
    x.className = "navBar";
  }
  
  var x = document.getElementById("icon");
  if (x.className === "hamburger hamburger--squeeze") {
    x.className += " is-active";
  } else {
    x.className = "hamburger hamburger--squeeze";
  }
}

function SetRestaurantInfo(nome, logo, telefone, email, cep, estado, cidade, endereco){
    if(logo != '')
        document.getElementById('logoRestaurant').src = logo;
    document.getElementById('restaurantName').innerHTML = nome;
    
    SetPerfilTab(nome, logo, telefone, email, cep, estado, cidade, endereco);
}