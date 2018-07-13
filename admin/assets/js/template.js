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

    alert("Encomenda cadastrada com sucesso !");
    return true;
}

function AddCondominio(){

    var nome = document.getElementById("nome").value;
    var cnpj = document.getElementById("cnpj").value;
    var telefone = document.getElementById("telefone").value;
    var endereco = document.getElementById("endereco").value;
    var cidade = document.getElementById("cidade").value;
    var estado = document.getElementById("estado").value;

    // var variaveis = new Array(nome, cnpj, telefone, endereco, cidade, estado);
    
    if(nome == 'Ed. ' || nome == ''){
        alert("Campo do nome vazio !");
        return false;
    }
    if(cnpj == ''){
        alert("Campo do cnpj vazio !");
        return false;
    }
    // if(telefone == ''){
    //     alert("Campo do telefone vazio !");
    //     return false;
    // }
    if(endereco == ''){
        alert("Campo do endereco vazio !");
        return false;
    }
    if(cidade == ''){
        alert("Campo do cidade vazio !");
        return false;
    }
    if(estado == ''){
        alert("Campo do estado vazio !");
        return false;
    }
    alert("Condomínio cadastro com sucesso !");
    return true;
}

function AddBloco(){

    var condominio = document.getElementById("condominio").value;
    var numero = document.getElementById("numero").value;
    var nome_bloco = document.getElementById("nome_bloco").value;
    
    if(condominio == ''){
        alert("Campo Condominio vazio !");
        return false;
    }
    if(numero == ''){
        alert("Campo Numero Bloco vazio !");
        return false;
    }
    // if(nome_bloco == ''){
    //     alert("Campo Nome vazio !");
    //     return false;
    // }
    alert("Bloco cadastro com sucesso !");
    return true;
}

function AddApartamento(){

    var condominio = document.getElementById("condominio").value;
    var bloco = document.getElementById("bloco").value;
    var apartamento = document.getElementById("apartamento").value;
    var telefone = document.getElementById("telefone").value;
    var senha = document.getElementById("senha").value;

    if(condominio == ''){
        alert("Campo Condominio vazio !");
        return false;
    }
    if(bloco == ''){
        alert("Campo Numero do Bloco vazio !");
        return false;
    }
    if(apartamento == ''){
        alert("Campo Numero do Apartamento vazio !");
        return false;
    }
    // if(telefone == ''){
    //     alert("Campo Numero do Telefone vazio !");
    //     return false;
    // }
    alert("Apartamento cadastro com sucesso !");
    return true;
}

function AddMorador(){

    var condominio = document.getElementById("condominio").value;
    var bloco = document.getElementById("bloco").value;
    var apartamento = document.getElementById("apartamento").value;
    var nome = document.getElementById("nome").value;
    var celular = document.getElementById("celular").value;
    var cpf = document.getElementById("cpf").value;
    var email = document.getElementById("email").value;

    if(condominio == ''){
        alert("Campo Condominio vazio !");
        return false;
    }
    if(bloco == ''){
        alert("Campo Numero do Bloco vazio !");
        return false;
    }
    if(apartamento == ''){
        alert("Campo Numero do Apartamento vazio !");
        return false;
    }
    if(nome == ''){
        alert("Campo Morador(a) vazio !");
        return false;
    }
    alert("Morador cadastro com sucesso !");
    return true;
}

function edit(){
    alert("Dados alterados com sucesso");
}