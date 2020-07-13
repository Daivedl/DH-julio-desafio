function validar(){
    //console.log("hola");
    var name, apellido, edad, email, password, passwordConfirm,expresion;


    name=document.getElementById("name").value;
    apellido=document.getElementById("apellido").value;
    edad=document.getElementById("edad").value;
    email=document.getElementById("email").value;
    password=document.getElementById("password").value;
    passwordConfirm=document.getElementById("passwordConfirm").value;

    expresion= /\w+@\w+\.+[a-z]/;

    if(name === "" || apellido === "" || edad === "" || email === "" ||
    password === "" || password-confirm === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(name.length<3 || apellido.length<3){
        alert("El nombre y el apellido deben tener más de 3 caracteres");
        return false;
    }
    else if(isNaN(edad)){
        alert("La edad ingresada no es un número");
    }
    else if(edad > 150){
        alert("La edad tiene que ser menor");
        return false;
    }
    else if(email.length<3){
        alert("El email no es válido");
        return false;
    }
    else if(!expresion.test(email)){
        alert("El email no es válido");
        return false;
    }
    else if(password.length<8){
        alert("La contraseña es muy corta");
        return false;
    }
    else if(passwordConfirm != password){
        alert("Las contraseñas no son las mismas");
        return false;
    }
}
