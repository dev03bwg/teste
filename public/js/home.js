
/* Função ocultar botão */
function acao(dock) {

	var ocultarButao = document.getElementById(dock).style.display;

    if (ocultarButao  == 'none') {
		document.getElementById('dock').style.display = 'inline';
	}else {
		//alert('cheguei');
		document.getElementById('dock').style.display = 'none';
	}
}

/*Função ocultar barra */
function acaoBarra(collapseWidthExample) {

	var ocultarBarra = document.getElementById(collapseWidthExample).style.display;

    
    if (ocultarBarra == 'none') {
		document.getElementById('collapseWidthExample').style.display = 'inline';

	}else {
		document.getElementById('collapseWidthExample').style.display = 'none';	
	}

}

/* Exibi botão */

	dockContainer.addEventListener('mouseleave', e => {
		dock.style.display = 'block';
});


/* Exibi barra e oculta o botão */
dock.addEventListener('mouseenter', e => {
	dock.style.display = 'none';
	document.getElementById('collapseWidthExample').style.display = 'inline';
});
