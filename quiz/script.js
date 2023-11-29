function repostas(){
    let respostas = document.querySelector('#rest').ariaValueMax;
    let nome = document.querySelector('#nome').value;
    switch (respostas){
        case "a":
            document.querySelector("#res").textContent=`${nome} a resposta correta é: A`;
            break;

            default:
                break;
    }
    }