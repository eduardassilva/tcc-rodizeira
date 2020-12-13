function CloseModalRodizio(){
    var selectedTags = document.getElementsByClassName('tagCheckbox');
    
	nameRodizio = document.getElementById('nomeRodizio');
	priceRodizio = document.getElementById('precoRodizio');
	descRodizio = document.getElementById('descRodizio');
	
	ClearInputsRodizio(nameRodizio, priceRodizio, descRodizio, selectedTags);
}

function NewRodizio(){
    var selectedTags = document.getElementsByClassName('tagCheckbox');
    var selectedLabels = document.getElementsByClassName('tagLabel');
    var selectedTagsString = '';
    
    for (var i = 0; i < selectedTags.length; i++){
        if(selectedTags[i].checked){
            selectedTagsString += '#' + selectedLabels[i].innerHTML + '~';
        }
    }
    
	nameRodizio = document.getElementById('nomeRodizio');
	priceRodizio = document.getElementById('precoRodizio');
	descRodizio = document.getElementById('descRodizio');
	
	if(nameRodizio.value.trim() == '' 
    || priceRodizio.value.trim() == '')
		alert('Os campos não podem estar em branco.');
	else{
        priceRodizio.value = priceRodizio.value.replace(",", ".");
        
		CreateDivRodizio(nameRodizio.value, priceRodizio.value, descRodizio.value, selectedTagsString);
        
        InsertRodizios(nameRodizio, priceRodizio, descRodizio, selectedTagsString);
        
		ClearInputsRodizio(nameRodizio, priceRodizio, descRodizio, selectedTags);
	}
}

function CreateDivRodizio(nameRodizio, priceRodizio, descRodizio, tagString){
    var divRodizio = document.createElement('div');
	var divName = document.createElement('div');
    var pName = document.createElement('p');
    var deleteDiv = document.createElement('div');
    var aDelete = document.createElement('a');
    var divPrice = document.createElement('div');
    var pPrice = document.createElement('p');
    var divTags = document.createElement('div');
    var pTagsDisplay = document.createElement('p');
    var pTags = document.createElement('p');
    var divDesc = document.createElement('div');
    var pDesc = document.createElement('p');
	
    divRodizio.className = 'rodizio';
    divName.className = 'rodizioName';
    deleteDiv.className = 'rodizioDeleteDiv';
    divPrice.className = 'rodizioPrice';
    divTags.className = 'rodizioTags';
    pTags.className = 'tagsRodizio';
    divDesc.className = 'rodizioDesc';
	
    aDelete.onclick = function() { DeleteRodizio(this, nameRodizio); };
    
	pName.innerHTML = nameRodizio;
    aDelete.innerHTML = 'DELETAR';
	pPrice.innerHTML = 'R$ ' + priceRodizio;
    pTagsDisplay.innerHTML = 'Etiquetas disponíveis neste rodízio:';
    pTags.innerHTML = tagString.replaceAll('~', '\n');
    pDesc.innerHTML = descRodizio;

	document.getElementById('rodiziosDiv').appendChild(divRodizio);
    divRodizio.appendChild(divName);
    divName.appendChild(pName);
    divRodizio.appendChild(deleteDiv);
    deleteDiv.appendChild(aDelete);
    divRodizio.appendChild(divPrice);
    divPrice.appendChild(pPrice);
    divRodizio.appendChild(divTags);
    divTags.appendChild(pTagsDisplay);
    divTags.appendChild(pTags);
    divRodizio.appendChild(divDesc);
    divDesc.appendChild(pDesc);
}

function ClearInputsRodizio(name, price, desc, tags){
	name.value = '';
	price.value = '';
	desc.value = '';
    
    for (var i = 0; i < tags.length; i++){
        if(tags[i].checked){
            tags[i].checked = false;
        }
    }
}

/*Insere as informações do novo item na tabela cardapios*/
function InsertRodizios(nameRodizio, priceRodizio, descRodizio, tagString){
    $.ajax({                                      
        url: '/TCC-Rodizeira/srcRestaurant/php/insertRodizio.php',       
        type: "POST",
        data: {resID: restaurant_id, name: nameRodizio.value, price: priceRodizio.value, desc: descRodizio.value, tags: tagString} 
    });
}

function DeleteRodizio(btn, name){
    
    if(confirm("Tem certeza que quer deletar este rodízio?")){
        btn.parentElement.parentElement.style.display = 'none';
        
        $.ajax({                                      
            url: '/TCC-Rodizeira/srcRestaurant/php/deleteRodizio.php',       
            type: "POST",
            data: {resID: restaurant_id, name: name} 
        });
    }
}