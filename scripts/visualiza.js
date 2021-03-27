const buttonConsult = document.getElementById('consultar-button')

buttonConsult.addEventListener("click", validaConsult)

function validaConsult(){
    const dataEntrada = document.getElementById('data-entrada-input').value
    const dataSaida = document.getElementById('data-saida-input').value
    const justificativa = document.getElementById('justificativa-select').value
    
    if(dataEntrada == ""){
        alert("O campo data entrada é de preenchimento obrigatório.")
        return
    }

    if(dataSaida == ""){
        alert("O campo data saída é de preenchimento obrigatório.")
        return
    }

    if(dataEntrada > dataSaida){
        alert("O campo data entrada não pode ser menor que o campo data saída.")
        return
    }
    
    if(justificativa == ""){
        alert("O campo justificativa é de preenchimento obrigatório.")
        return
    }

    alert("Registrado com sucesso!")
}
