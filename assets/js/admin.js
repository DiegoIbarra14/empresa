const frm=document.getElementById("formulario");
const correo=document.getElementById("correo");
const contra=document.getElementById("contrasena");

document.addEventListener("DOMContentLoaded",function(){
    frm.addEventListener("submit",function(e){
        e.preventDefault();
        // if(correo.value=="" || contra.value=="" ){
        //     alertas("TODOS LOS CAMPOS SON REQUERIDOS","warning")
            
            
        // }else{
            let formdata = new FormData();
            formdata.append("correo", correo.value);
            formdata.append("clave", contra.value);
            
            const envio = async () => {


                const response = await fetch("http://localhost/trabajo/admin/validar", {
                    method: 'POST',
                    body: formdata

                })
                if (response.ok) {
                    const texresponde = await response.json();
                    alertas(texresponde.msg,texresponde.icono)
                    if(texresponde.icono == "success"){
                        setTimeout(()=>{
                            window.location=base_url+'admin/home'
                        },1500)
                    }
                    

                   
                }
            }
            envio()

        // }
    })
})
function alertas(msg,icon){
    Swal.fire(
        'Aviso',
        msg,
        icon
    )

}