const btnAddCard= document.querySelector('#btnAddCart');
const cantidad=document.querySelector('#product-quanity');
const idProducto=document.querySelector('#idProducto');
document.addEventListener('DOMContentLoaded',function(){
    btnAddCard.addEventListener('click',function(e){
        e.preventDefault()
        agregarproducto(idProducto.value,cantidad.value);
        
    })

})