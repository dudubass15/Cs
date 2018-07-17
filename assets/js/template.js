function loginAlert() {
	alert("Usuario/Senha inválidos !");
}

function NewCadastro(){
  	alert("Encomenda arquivada com sucesso !");
}

function ValidaHome(){

	/**
	  * Função para criar um objeto XMLHTTPRequest
	  */
		function CriaRequest() {
			try{
				request = new XMLHttpRequest();        
			}catch (IEAtual){

				try{
					request = new ActiveXObject("Msxml2.XMLHTTP");       
				}catch(IEAntigo){

					try{
						request = new ActiveXObject("Microsoft.XMLHTTP");          
					}catch(falha){
						request = false;
					}
				}
			}

			if (!request) 
				alert("Seu Navegador não suporta Ajax!");
			else
				return request;
		}

		function ConsultaDados() {
			
		}

	document.getElementById('validacao').innerHTML = '<div class=wrapper wrapper-content animated fadeInRight><h1 id=h1-error>Você não possui encomendas cadastradas no Sistema ...</h1></div>';
}