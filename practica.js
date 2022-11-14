/* let gratis = false;
function entrada (hora){
    let pregunta = prompt ("¿Cuantos años tienes?");
    if(pregunta >= 18){
        if(hora >= 2 && hora <= 7 && gratis == false){
            alert("Estás de suerte mi perro, puedes entrar gratis");
            gratis=true;
        }else{
            alert("Mi perro, puedes entrar, peeeero, tienes que pagar un valor de 20000");
        }
    }else{
        alert("Sapo perro, lo siento, eres menor de edad");
    }
}
entrada(5);
entrada(3);
entrada(4);
entrada(2);
entrada(6); */
let gratis = false;
const validarcliente = (hora)=>{
    let pregunta = prompt ("¿Cuantos años tienes?");
    if(pregunta >= 18){
      if(hora >= 2 && gratis == false){
        alert("Es gratis la entrada")
        gratis = true;
      }else{
        alert("Entras pero pagas")
      }
    }else{
        alert("Sapo perro, lo siento, eres menor de edad");
    }
}
validarcliente(1);
validarcliente(3);
validarcliente(4);
validarcliente(2);
validarcliente(6);