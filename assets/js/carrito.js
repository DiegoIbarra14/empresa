const btnAddProducto = document.querySelectorAll(".btnAddProducto");
const cantidadCarrito=document.getElementById('cantidadCarrito')
const carrito=document.getElementById('carrito')
let  listaProductos;


document.addEventListener("DOMContentLoaded",function(){
    if(localStorage.getItem('listaProductos') != null){
        listaProductos=JSON.parse(localStorage.getItem('listaProductos'))

    }
    
    
    for (let index = 0; index < btnAddProducto.length; index++) {
        
        btnAddProducto[index].addEventListener("click",(e)=>{
            e.preventDefault();

            let idProducto=btnAddProducto[index].getAttribute('prod');  
            agregarproducto(idProducto);
        })       
    }
    contarCarrito()
    //ver carrito
    const myModal = new bootstrap.Modal(document.getElementById('myModal'))
    carrito.addEventListener('click',function(){
        myModal.show();
    })

})  
function agregarproducto(id,cantidad=20){
    if(localStorage.getItem('listaProductos')== null){
        listaProductos=[];
        

    }else{
        let lista=JSON.parse(localStorage.getItem('listaProductos'))
        for(let i=0;i<lista.length;i++){
            if(lista[i]['idProducto']==id){
                Swal.fire(
                    'Aviso',
                    'PRODUCTO YA ESTA EN EL CARRITO',
                    'warning'
                )
                return;

            } 
        }
        listaProductos.concat(localStorage.getItem('listaProductos'));
        
    }

    listaProductos.push({
        'idProducto':id,
        'cantidad':cantidad
    }
    );
    localStorage.setItem('listaProductos',JSON.stringify(listaProductos));
    Swal.fire(
        'Aviso',
        'PRODUCTO AGREGADO AL CARRITO',
        'success'
    )
    contarCarrito()

    

}
function contarCarrito(){
    let lista = JSON.parse(localStorage.getItem('listaProductos'));
    if(lista !=null){
        cantidadCarrito.textContent=lista.length;

    }else{
        cantidadCarrito.textContent=0;
        
    }
    
}
function getListaCarrito(){
    

}
