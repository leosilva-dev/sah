const buttonLogin = document.getElementById('login-button')

buttonLogin.addEventListener("click", validaLogin)

function validaEmail(email) {
 const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 return re.test(String(email).toLowerCase());
}

function isEmpty(field){
    if(field === ""){
        return true
    }else{
        return false
    }
}

function validaLogin(){
    const email = document.getElementById('email-input').value
    const password = document.getElementById('senha-input').value

    if(validaEmail(email) && isEmpty(password) == false){
        buttonLogin.href = "./selecionar-perfil.html"
    }else if(validaEmail(email) == false){
        alert("O e-mail informado para autenticação, não é um e-mail válido.")
    }else if(isEmpty(password) == true){
        alert("O campo senha é de preenchimento obrigatório.")
    }
}
