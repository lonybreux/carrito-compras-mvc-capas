const btnIncrementar = document.querySelectorAll('.btn-incrementar')
const btnDecrementar = document.querySelectorAll('.btn-decrementar')
const cantidadProducto = document.querySelectorAll('.cantidad-producto')

btnIncrementar.forEach((btn,index) => {
    btn.addEventListener('click',() => {
        cantidadProducto[index].textContent = parseInt(cantidadProducto[index].textContent) + 1

    })
});

btnDecrementar.forEach((btn,index) => {
    btn.addEventListener('click',() => {
        cantidadProducto[index].textContent = parseInt(cantidadProducto[index].textContent) - 1

        if(parseInt(cantidadProducto[index].textContent) <= 0) {
            cantidadProducto[index].textContent = '1'
        }
    })
})