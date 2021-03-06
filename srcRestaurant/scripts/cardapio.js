/*Quantidade de itens no cardápio*/
var itemQty = 0;

function CloseModalCardapio(){
    var selectedTags = document.getElementsByClassName('tagCheckbox');
    
	nameItem = document.getElementById('nomeItem');
	descItem = document.getElementById('descItem');
	imageItem = document.getElementById('imagemItem');
	
	ClearInputsCardapio(nameItem, descItem, imageItem, selectedTags);
}

/*Adiciona novo item ao cardápio (chamado ao apertar o botão de Adicionar)*/
function NewItemCardapio(){
    var selectedTags = document.getElementsByClassName('tagCheckbox');
    var selectedLabels = document.getElementsByClassName('tagLabel');
    var selectedTagsString = '';
    
    for (var i = 0; i < selectedTags.length; i++){
        if(selectedTags[i].checked){
            selectedTagsString += '#' + selectedLabels[i].innerHTML + '~';
        }
    }
    
	nameItem = document.getElementById('nomeItem');
	descItem = document.getElementById('descItem');
	imageItem = document.getElementById('imagemItem');
	
	if(nameItem.value.trim() == '')
		alert('O nome do item não pode estar em branco.');
	else{
		CreateDivItemCardapio(nameItem.value, descItem.value, selectedTagsString);

		itemQty++;
        
        InsertCardapios(nameItem, descItem, imageItem, selectedTagsString);
        ClearInputsCardapio(nameItem, descItem, imageItem, selectedTags);
	}
}

/*Cria a Div e os elementos do item do cardápio*/
function CreateDivItemCardapio(nameItem, descItem, tagString){
    var imageItem = document.getElementById('imagemItem');
    
    var divItem = document.createElement('div');
	var img = document.createElement('img');
	var divDesc = document.createElement('div');
	var name = document.createElement('h');
    var deleteDiv = document.createElement('div');
    var aDelete = document.createElement('a');
    var divTags = document.createElement('div');
    var labelTags = document.createElement('label');
	
	divItem.className = 'cardapioItemDiv';
	img.className = 'cardapioImg';	
	divDesc.className = 'cardapioDescDiv';
	name.className = 'cardapioName';
    deleteDiv.className = 'cardapioDeleteDiv';
    divTags.className = 'cardapioTag';
	
    aDelete.onclick = function() { DeleteCardapio(this, nameItem); };
    
	if(imageItem.value == '')
        img.src = 'img/meatIcon.png';
	else
		readURLCardapio(imageItem, false, img);
	
	if(descItem == '')
		divDesc.style.borderColor = 'transparent';
	
	name.innerHTML = nameItem;
    aDelete.innerHTML = 'DELETAR';
	divDesc.innerHTML = descItem;
    labelTags.innerHTML = tagString.replaceAll('~', '\n');
    
	document.getElementById('itemsCardapio').appendChild(divItem);
	divItem.appendChild(img);
	divItem.appendChild(name);
    divItem.appendChild(deleteDiv);
    deleteDiv.appendChild(aDelete);
	divItem.appendChild(divDesc);
    divTags.appendChild(labelTags);
    divItem.appendChild(divTags);
}

function readURLCardapio(input, isPreview, newImageCardapio) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
		reader.onload = function (e) {
            //alert(e.target.result);
			if(isPreview)
				$('#previewCardapio').attr('src', e.target.result);
			else
				newImageCardapio.src = e.target.result;
        }
		reader.readAsDataURL(input.files[0]);
    }
}

/*Deixa os inputs em branco após adicionar um sabor*/
function ClearInputsCardapio(name, desc, imag, tags){
	name.value = '';
	desc.value = '';
	imag.value = '';
    
    for (var i = 0; i < tags.length; i++){
        if(tags[i].checked){
            tags[i].checked = false;
        }
    }
    
	document.getElementById('previewCardapio').src = '';
}

/*Insere as informações do novo item na tabela cardapios*/
function InsertCardapios(nameItem, descItem, imgItem, tagString){    
    $.ajax({                                      
        url: '/TCC-Rodizeira/srcRestaurant/php/insertCardapio.php',       
        type: "POST",
        data: {resID: restaurant_id, name: nameItem.value, desc: descItem.value, tags: tagString} 
    });
}

function DeleteCardapio(btn, name){
    
    if(confirm("Tem certeza que quer deletar este item?")){
        btn.parentElement.parentElement.style.display = 'none';
        
        $.ajax({                                      
            url: '/TCC-Rodizeira/srcRestaurant/php/deleteCardapio.php',       
            type: "POST",
            data: {resID: restaurant_id, name: name} 
        });    
    }
}