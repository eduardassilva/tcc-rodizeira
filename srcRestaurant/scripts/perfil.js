var restaurantNamePerfil, logoImagePerfil, telefonePerfil, emailPerfil, usernamePerfil, senhaUsernamePerfil, senhaAntigaPerfil, novaSenhaPerfil, confirmarSenhaPerfil, cepPerfil, estadoPerfil, cidadePerfil, enderecoPerfil;
var newName, newTelefone, newEmail, newCep, newEstado, newCidade, newEndereco;

/*Abre as sub-abas do Perfil*/
function OpenSubTab(evt, tabName) {
	var i, tabContent;
	tabContent = document.getElementsByClassName("tabContent");
	for (i = 0; i < tabContent.length; i++)
		tabContent[i].style.display = "none";
	
	document.getElementById(tabName).style.display = "block";
}

function GetInputsValues(){
	restaurantNamePerfil = document.getElementById("restaurantNameInput");
	logoImageInput = document.getElementById("logoImageInput");
	telefonePerfil = document.getElementById("telefoneInput");
	emailPerfil = document.getElementById("emailInput");
    usernamePerfil = document.getElementById("userInput");
    senhaUsernamePerfil =  document.getElementById("senhaUser");
    senhaAntigaPerfil = document.getElementById("senhaAntiga");
	novaSenhaPerfil = document.getElementById("novaSenhaInput");
	confirmarSenhaPerfil = document.getElementById("confirmarSenhaInput");
	cepPerfil = document.getElementById("cepInput");
	estadoPerfil = document.getElementById("estadoInput");
	cidadePerfil = document.getElementById("cidadeInput");
	enderecoPerfil = document.getElementById("enderecoInput");
}

function SetPerfilTab(nome, logo, telefone, email, cep, estado, cidade, endereco){
	GetInputsValues();
	
	restaurantNamePerfil.placeholder = nome;
    if(telefone != '')
        telefonePerfil.placeholder = telefone;
    if(email != '')
        emailPerfil.placeholder = email;
    if(cep != '')
        cepPerfil.placeholder = cep;
    if(estado != '')
        estadoPerfil.placeholder = estado;
    if(cidade != '')
        cidadePerfil.placeholder = cidade;
    if(endereco != '')
        enderecoPerfil.placeholder = endereco;
    
    //novaSenhaPerfil.placeholder = '';
	//confirmarSenhaPerfil.placeholder = '';
}

function SavePerfilChanges(){
	
	var success = true;
	
	/*if(novaSenhaPerfil.value != ''){
		if (novaSenhaPerfil.value == confirmarSenhaPerfil.value){
            $.ajax({                                      
                url: '/TCC-Rodizeira/srcRestaurant/php/updatePassword.php',       
                type: "POST",
                data: {resID: restaurant_id, newPass: novaSenhaPerfil.value} 
            });
			alert('Senha alterada com sucesso!');
        }
		else{
			alert('As senhas não são iguais.');
			if(confirmarSenhaPerfil.className != 'errorInput'){
				confirmarSenhaPerfil.className = 'errorInput';
				document.getElementById('confirmarSenhaLabel').innerHTML = document.getElementById('confirmarSenhaLabel').innerHTML + ' *';
			}
			success = false;
		}
	}*/
	
	if (success){
		if(restaurantNamePerfil.value != ''){
			newName = restaurantNamePerfil.value;
			document.getElementById("restaurantName").innerHTML = newName;
			restaurantNamePerfil.placeholder = newName;
		}
        else
            newName = restaurantNamePerfil.placeholder;
	
		if(telefonePerfil.value != ''){
            newTelefone = telefonePerfil.value
			telefonePerfil.placeholder = newTelefone;
		}
        else
            newTelefone = telefonePerfil.placeholder;
		
		if(emailPerfil.value != ''){
            newEmail = emailPerfil.value;
			emailPerfil.placeholder = newEmail;
		}
        else
            newEmail = emailPerfil.placeholder;
		
		if(cepPerfil.value != ''){
            newCep = cepPerfil.value;
			cepPerfil.placeholder = newCep;
		}
        else
            newCep = cepPerfil.placeholder;
		
		if(estadoPerfil.value != ''){
            newEstado = estadoPerfil.value;
			estadoPerfil.placeholder = newEstado;
		}
        else
            newEstado = estadoPerfil.placeholder;
		
		if(cidadePerfil.value != ''){
            newCidade = cidadePerfil.value;
			cidadePerfil.placeholder = newCidade;
		}
        else
            newCidade = cidadePerfil.placeholder;
		
		if(enderecoPerfil.value != ''){
            newEndereco = enderecoPerfil.value;
			enderecoPerfil.placeholder = newEndereco;
		}
        else
            newEndereco = enderecoPerfil.placeholder;
		
		readURLLogo(document.getElementById("logoImageInput", false));
		
		ClearPerfilInputs();	
		
        $.ajax({                                      
            url: '/TCC-Rodizeira/srcRestaurant/php/updatePerfil.php',       
            type: "POST",
            data: {resID: restaurant_id, newName: newName, newTelefone: newTelefone, newEmail: newEmail, newCep: newCep, newEstado: newEstado, newCidade: newCidade, newEndereco: newEndereco} 
        });
	}
}

function SaveLoginChanges(){
    
    usernamePerfil
    senhaUsernamePerfil
    senhaAntigaPerfil
    novaSenhaPerfil
    confirmarSenhaPerfil
    
    if(usernamePerfil.value != ''){
        if(senhaUsernamePerfil.value != ''){
            $.ajax({                                      
                url: '/TCC-Rodizeira/srcRestaurant/php/updateLoginInfo.php',       
                type: "POST",
                data: {resID: restaurant_id, newUser: usernamePerfil.value, passUser: senhaUsernamePerfil.value, oldPass: '', newPass: ''},
                success: function() {
                    alert('Usuário alterado com sucesso!');
                }
            });
        }
        else
            alert('Para trocar o nome de usuário, insira a senha!');
    }
    
    if(senhaAntigaPerfil.value != '' 
    || novaSenhaPerfil.value != '' 
    || confirmarSenhaPerfil.value != ''){
        
        if(senhaAntigaPerfil.value == '' 
        || novaSenhaPerfil.value == '' 
        || confirmarSenhaPerfil.value == ''){
            alert('Para trocar a senha, preencha os campos "Senha antiga", "Nova senha" e "Confirmar nova senha"');
        }
        else{
            if(novaSenhaPerfil.value == confirmarSenhaPerfil.value){
                $.ajax({                                      
                    url: '/TCC-Rodizeira/srcRestaurant/php/updateLoginInfo.php',       
                    type: "POST",
                    data: {resID: restaurant_id, newUser: '', passUser: '', oldPass: senhaAntigaPerfil.value, newPass: novaSenhaPerfil.value},
                    success: function() {
                        alert('Senha alterada com sucesso!');
                    }
                });   
            }
            else
                alert('As senhas não coincidem!');
        }
    }
    
    ClearPerfilInputs();
    /*if(confirmarSenhaPerfil.className == 'errorInput'){
		confirmarSenhaPerfil.className = '';
		document.getElementById('confirmarSenhaLabel').innerHTML = document.getElementById('confirmarSenhaLabel').innerHTML.replace(' *', '');
	}*/
}

function TelefoneValidation(inputTelefone){
	var inputNumber = inputTelefone.value.replace(/ /g, '');
	var phoneNumber;
	
	if(isNaN(inputNumber)){
		alert('Por favor insira somente números');
		inputTelefone.value = '';
		return;
	}
	if(inputNumber.length < 10 || inputNumber.length > 11){
		alert('Por favor insira um número de telefone/celular válido');
		inputTelefone.value = '';
		return;
	}
	if(inputNumber.length == 10)
		phoneNumber = inputNumber.substr(2,4) + '-' + inputNumber.substr(6);
	else
		phoneNumber = inputNumber.substr(2,5) + '-' + inputNumber.substr(7);
	
	inputNumber = '(' + inputNumber.substr(0,2) + ') ' + phoneNumber;
	inputTelefone.value = inputNumber;
}

function EmailValidation(inputEmail){
	
	if(!inputEmail.value.includes('@')){
		alert('E-Mail inválido!');
		inputEmail.value = '';
		return;
	}
}

function CEPValidation(inputCEP){
	var cepNumber = inputCEP.value.replace(/ |-/g, '');
	
	if(isNaN(cepNumber)){
		alert('Insira somente números')
		inputCEP.value = '';
		return;
	}
	if(cepNumber.length != 8){
		alert('CEP inválido!')
		inputCEP.value = '';
		return;
	}
	
	cepNumber = cepNumber.substr(0,5) + '-' + cepNumber.substr(5);
	inputCEP.value = cepNumber;
}

function ClearPerfilInputs(){
	restaurantNamePerfil.value = '';
	logoImageInput.value = '';
	document.getElementById('previewLogo').src = '';
	telefonePerfil.value = '';
	emailPerfil.value = '';
	novaSenhaPerfil.value = '';
	confirmarSenhaPerfil.value = '';
	cepPerfil.value = '';
	estadoPerfil.value = '';
	cidadePerfil.value = '';
	enderecoPerfil.value = '';
    usernamePerfil.value = '';
    senhaUsernamePerfil.value = '';
    senhaAntigaPerfil.value = '';
}

function readURLLogo(input, isPreview) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
		reader.onload = function (e) {
            //alert(e.target.result);
			if(isPreview)
				$('#previewLogo').attr('src', e.target.result);
			else
				$('#logoRestaurant').attr('src', e.target.result);
        }
		reader.readAsDataURL(input.files[0]);
    }
}