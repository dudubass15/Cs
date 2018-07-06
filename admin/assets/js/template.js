function valida_form() {
    
    var condominio = document.getElementById("condominio").value;
    var bloco = document.getElementById("bloco").value;
    var apartamento = document.getElementById("apartamento").value;
    var morador = document.getElementById("morador").value;
    var nome_produto = document.getElementById("nome_produto").value;
    var empresa = document.getElementById("empresa").value;
    var status = document.getElementById("status").value;

    if(condominio == ''){
        alert("Campo do condomínio vazio !");
        return false;
    }
    if(bloco == ''){
        alert("Campo do bloco vazio !");
        return false;
    }
    if(apartamento == ''){
        alert("Campo do apartamento vazio !");
        return false;
    }
    if(morador == ''){
        alert("Campo do morador vazio !");
        return false;
    }
    if(nome_produto == ''){
        alert("Campo do Nome Produto vazio !");
        return false;
    }
    if(empresa == ''){
        alert("Campo do empresa vazio !");
        return false;
    }
    if(status == ''){
        alert("Campo do status vazio !");
        return false;
    }
}