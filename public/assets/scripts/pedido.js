const metodoTabs = document.querySelectorAll('.metodo-tab')
const metodoSeleccionado = document.getElementById('metodo-seleccionado')

metodoTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        metodoTabs.forEach(t => t.classList.remove('metodo-activo'))
        tab.classList.add('metodo-activo')
        metodoSeleccionado.value = tab.dataset.metodo
    })
});