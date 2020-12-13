function TesteAlert(msg){
    alert(msg);
}

function CreateMaisPedidos(nameItem, numPedidos, period){
    
    switch(period) {
        case 'semana':
            var pedidosDiv = document.getElementById('maisPedidosSemana');
            break;
        case 'mes':
            var pedidosDiv = document.getElementById('maisPedidosMes');
            break;
        case 'semestre':
            var pedidosDiv = document.getElementById('maisPedidosSemestre');
            break;
        default:
            break;
    }
    
    var divP = document.createElement('div');
    var pPedidoName = document.createElement('p');
    var pPedidoNum = document.createElement('p');
    //var line = document.createElement('div');
    
    divP.className = 'maisPedidosPDiv';
    pPedidoName.className = 'maisPedidosNameClass';
    pPedidoNum.className = 'maisPedidosNumClass';
    //line.className = 'maisPedidosLine';
    
    pPedidoName.innerHTML = nameItem;
    pPedidoNum.innerHTML = numPedidos;
    
    pedidosDiv.appendChild(divP);
    divP.appendChild(pPedidoName);
    divP.appendChild(pPedidoNum);
    //pedidosDiv.appendChild(line);
}