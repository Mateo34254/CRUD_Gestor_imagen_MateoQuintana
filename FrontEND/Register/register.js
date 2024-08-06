window.onload=()=>{
    
    let formElement = document.querySelector("#Form")

    formElement.onsubmit = async (e) =>{
        e.preventDefault()
        let formData = new FormData(formElement);
        let url = "http://localhost/CRUD_Gestor_imagen_MateoQuintana/backEND/controlador/ControladorUsuario.php?funcion=registrar"


        let config = {
                method: 'POST',
                body: formData
        }

        let respuesta = await fetch(url, config);
        let datos = await respuesta.json();
        console.log(datos);

        if (datos !=true){
            console.log("Ya existe");
        }else{
            console.log("Registrado conrrectamente");
            alert("Registrado correctamente");
            document.getElementById("register").reset();
        }
    }
}