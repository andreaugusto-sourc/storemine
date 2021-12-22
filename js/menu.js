let show = true
let menuSection = document.querySelector('.menu-section')
let menuToggle = menuSection.querySelector('.menu-toggle')

menuToggle.addEventListener('click', () => {
    menuSection.classList.toggle("on",show)
    show = !show
})




