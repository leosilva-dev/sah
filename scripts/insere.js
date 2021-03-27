const buttonInsert = document.getElementById('insere-button')

buttonInsert.addEventListener("click", validaInsert)

function timeValid(time){
    const hours = parseInt(time.substring(0,2))
    const separator = time.substring(3,2)
    const minutes = parseInt(time.substring(3,5))

    if(hours < 0 || hours > 23){
        return false
    }else if(minutes < 0 || minutes > 59){
        return false
    }else if(separator != ":"){
        return false
    }else{
        return true
    }
}

function validaInsert(){
    const data = document.getElementById('data-input').value
    const horaEntrada = document.getElementById('hora-entrada-input').value
    const horaSaida = document.getElementById('hora-saida-input').value
    const justificativa = document.getElementById('justificativa-select').value
    
    if(data == ""){
        alert("O campo data é de preenchimento obrigatório.")
        return
    }

    if(timeValid(horaEntrada) == false){
        alert("Ajuste de hora de entrada inserido Inválido. Verifique os valores informados.")
        return
    }

    if(timeValid(horaSaida) == false){
        alert("Ajuste de hora de saída inserido Inválido. Verifique os valores informados.")
        return
    }

    if(justificativa == ""){
        alert("O campo justificativa é de preenchimento obrigatório.")
        return
    }

    alert("Registrado com sucesso!")
}
