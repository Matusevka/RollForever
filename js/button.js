let cart = {
    'dfg':{
        "name" : "rgb",
        "count": 3,
    },
};
document.onclick = event=>{
    console.log(event.target.classList);
    if (event.target.classList.contains('plus')){
        console.log(event.target.dataset.id);
        plusFuction(event.target.dataset.id);
    }
    if (event.target.classList.contains('minus')){
        console.log(event.target.dataset.id);
        minusFuction(event.target.dataset.id);
    }
}
const plusFuction = id => {
    cart[id]['count']++;
    renderCart();
}

const deleteFuction = id => {
    
    delete cart[id];
    renderCart();
}
const minusFuction = id => {
    if (cart [id]['count'] - 1 ==0){
        deleteFuction(id);
        return true;
    }
    cart[id]['count']--;
    renderCart();
}

 const renderCart = () => {
    console.log(cart);
 }
 renderCart();