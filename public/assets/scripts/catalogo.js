const tabs = document.querySelectorAll('.tab');
const secciones = document.querySelectorAll('.seccion')

tabs.forEach((tab,index) => {
    tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('tab-activo'))
        tab.classList.add('tab-activo')
        secciones.forEach(s => s.hidden = true)
        secciones[index].hidden = false;
    })
})


