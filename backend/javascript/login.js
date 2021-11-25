function limpiar_formulario(){
    let resultado = window.confirm("Seguro que desea reiniciar la captura?");
    
    if (resultado === true){
        document.getElementById("formulario").reset();
    }
}

function mostrarContrasena(){
      var pass = document.getElementById("pass");
      
      if(pass.type === "password"){
          pass.type = "text";
      }else{
          pass.type = "password";
      }
      
 }

 function login(){
     alert("Bienvenid@ ")
     window.open('principal_docente.html', '_self')
     
 }