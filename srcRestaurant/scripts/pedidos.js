var qtd_pedidos = 0;

function CreatePedido(name){
    var divPedido = document.createElement('div');
    var divTitle = document.createElement('div');
	var pPedido = document.createElement('p');
    var deleteDiv = document.createElement('div');
    var aDelete = document.createElement('a');
	var divLine = document.createElement('div');
    var pItem = document.createElement('p');
	
	divPedido.className = 'divPedido';
    divTitle.className = 'divTitle';
	pPedido.className = 'pedidoName';	
    deleteDiv.className = 'pedidoDeleteDiv';
	divLine.className = 'linePedidos';
	pItem.className = 'itemPedido';
    
    aDelete.onclick = function() { DeletePedido(this, name); };
    
    qtd_pedidos++;
    pPedido.innerHTML = 'Pedido #' + qtd_pedidos;
    aDelete.innerHTML = 'DELETAR';
    pItem.innerHTML = '- ' + name;
    
	document.getElementById('pedidosDiv').appendChild(divPedido);
    divPedido.appendChild(divTitle);
	divTitle.appendChild(pPedido);
    divTitle.appendChild(deleteDiv);
    deleteDiv.appendChild(aDelete);
	divPedido.appendChild(divLine);
	divPedido.appendChild(pItem);
}

function DeletePedido(btn, name){
    
    if(confirm("Tem certeza que quer deletar este pedido?")){
        btn.parentElement.parentElement.parentElement.style.display = 'none';
        
        $.ajax({                                      
            url: '/TCC-Rodizeira/srcRestaurant/php/deletePedido.php',       
            type: "POST",
            data: {resID: restaurant_id, name: name} 
        });
    }
}