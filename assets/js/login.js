const btnRegister=document.getElementById("btn-register");
const btnlogin=document.getElementById("btn-login");
const formlogin=document.getElementById("formlogin");
const formregister=document.getElementById("formregister");
const registrar=document.getElementById("registrarse");


const nombreRegistro=document.getElementById("nombreRegistro");
const apellidoRegistro=document.getElementById("apellidosRegistro");
const correoRegistro=document.getElementById("correoRegistro");
const contraRegistro=document.getElementById("contraRegistro");
const myModal = new bootstrap.Modal(document.getElementById("modallogin"));
const user=document.getElementById("user");







const login=document.getElementById("login");
const correoLogin=document.getElementById("correoLogin");
const contraLogin=document.getElementById("contraLogin");




document.addEventListener("DOMContentLoaded",function(){
    btnRegister.addEventListener("click",function(){
        formregister.classList.remove("d-none");
        formlogin.classList.add("d-none"); 
        
    });
    btnlogin.addEventListener("click",function(){
        formlogin.classList.remove("d-none");
        formregister.classList.add("d-none"); 
        
    })
    
    user.addEventListener("click",function(){
    myModal.show();
})




    //Registrarse
    registrar.addEventListener("click",function(){
        if (nombreRegistro.value == '' || apellidoRegistro.value == '' || correoRegistro.value == '' || contraRegistro.value == '') {
            Swal.fire(
                'Aviso',
                'TODOS LOS CAMPOS SON REQUERIDOS',
                'warning'
            )

        } else {
            let formdata = new FormData();
            formdata.append("nombre", nombreRegistro.value);
            formdata.append("apellido", apellidoRegistro.value);
            formdata.append("correo", correoRegistro.value);
            formdata.append("clave", contraRegistro.value);

            const envio = async () => {


                const response = await fetch("http://localhost/trabajo/clientes/registroDirecto", {
                    method: 'POST',

                    body: formdata

                })
                if (response.ok) {
                    const texresponde = await response.json();

                    Swal.fire(
                        'Aviso?',
                        texresponde.msg,
                        texresponde.icono
                    )
                    if (texresponde.icono == 'success') {

                        setTimeout(() => {


                            enviarCorreo(correoRegistro.value, texresponde.token);



                        }, 2000)

                    }
                }
            }
            enviarCorreo = async function (correo, token) {


                let formdata = new FormData();
                formdata.append("correo", correo);
                formdata.append("token", token);
                const responde = await fetch("http://localhost/trabajo/clientes/enviarCorreo", {
                    method: 'POST',

                    body: formdata

                })
                if (responde.ok) {
                    const texrespondes = await responde.json();


                    Swal.fire(
                        'Aviso?',
                        texrespondes.msg,
                        texrespondes.icono
                    )
                    if (texrespondes.icono == 'success') {

                        setTimeout(() => {


                            window.location.reload()


                        }, 2000)

                    }
                }


            }
            envio();

            
        }
        
       
        
        

        
        
        
    })
    //logearse
    login.addEventListener("click",function(){
        if (correoLogin.value == '' || contraLogin.value == '' ) {
            Swal.fire(
                'Aviso',
                'TODOS LOS CAMPOS SON REQUERIDOS',
                'warning'
            )

        }else {
            let formdata = new FormData();
            formdata.append("correo", correoLogin.value);
            formdata.append("clave", contraLogin.value);
           

            const entrar = async () => {


                const response = await fetch("http://localhost/trabajo/clientes/loginDirecto", {
                    method: 'POST',

                    body: formdata

                })
                if (response.ok) {
                    const texresponde = await response.json();

                    Swal.fire(
                        'Aviso?',
                        texresponde.msg,
                        texresponde.icono
                    )
                    if (texresponde.icono == 'success') {
                        setTimeout(() => {


                            window.location.reload()


                        }, 2000)

                       

                    }
                }
            }
            entrar()


        }})

    
})