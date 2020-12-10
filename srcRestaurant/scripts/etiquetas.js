function CloseModalEtiqueta(){
	nameTag = document.getElementById('nomeTag');
	
	ClearInputsEtiquetas(nameTag);
}

/*Adiciona novo item as tags (chamado ao apertar o botão de Adicionar)*/
function NewEtiqueta(){
    
	nameTag = document.getElementById('nomeTag');
	
	if(nameTag.value.trim() == '')
		alert('Preencha o campo Nome');
	else{
		CreateTag(nameTag.value);

		itemQty++;
        
        /*InsertEtiqueta(nameTag);*/
        ClearInputsEtiquetas(nameTag);
	}
}

/*Cria os elementos da tag*/
function CreateTag(nameTag){
	var img = document.createElement('img');
	var label = document.createElement('label');
	var breaklines = document.createElement('text');
	
	img.className = 'imgTag';	
    img.src = 'img/tagRed.png';
	
	label.innerHTML = nameTag;
	breaklines.innerHTML = '<br>';

    document.getElementById('divTagsID').appendChild(img);
	document.getElementById('divTagsID').appendChild(label);
	document.getElementById('divTagsID').appendChild(breaklines);
    
    //Cria as etiquetas na modal de rodízio e cardápio
    CreateTagsModal(nameTag);
}

function CreateTagsModal(nameTag){
    //Cria para modal do cardápio
    var box1 = document.createElement('input');
    var label1 = document.createElement('label');
    
    box1.type = 'checkbox';
    box1.id = nameTag.replace(/\s/g, '') + 'Cardapio';
    box1.className = 'tagCheckbox';
    
    label1.htmlFor = nameTag.replace(/\s/g, '') + 'Cardapio';
    label1.innerHTML = nameTag;
    label1.className = 'tagLabel';
    
    document.getElementById('divTagCardapio').appendChild(box1);
    document.getElementById('divTagCardapio').appendChild(label1);
    
    //Cria para modal do rodizio
    var box2 = document.createElement('input');
    var label2 = document.createElement('label');
    
    box2.type = 'checkbox';
    box2.id = nameTag.replace(/\s/g, '') + 'Rodizio';
    box2.className = 'tagCheckbox';
    
    label2.htmlFor = nameTag.replace(/\s/g, '') + 'Rodizio';
    label2.innerHTML = nameTag;
    label2.className = 'tagLabel';
    
    document.getElementById('divTagRodizio').appendChild(box2);
    document.getElementById('divTagRodizio').appendChild(label2);
}

/*Deixa os inputs em branco após adicionar uma tag*/
function ClearInputsEtiquetas(nameTag){
	nameTag.value = '';
}

/*Insere a nova etiqueta no banco*/
function InsertEtiqueta(nameTag){
    $.ajax({                                      
        url: '/TCC-Rodizeira/srcRestaurant/php/insertEtiqueta.php',       
        type: "POST",
        data: {resID: restaurant_id, name: nameTag.value} 
    });
}