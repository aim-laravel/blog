const accordions = document.getElementsByClassName('has-submenu')
const adminSlideoutButton = document.getElementById('admin-slideout-button')

// function setSubmenuStyles(submenu, maxHeight, margins) {
//     submenu.style.maxHeight = maxHeight + "px"
//     submenu.style.marginTop = margins
//     submenu.style.marginBottom = margins
// }

adminSlideoutButton.onclick = function () {
    this.classList.toggle('is-active')
    document.getElementById('admin-side-menu').classList.toggle('is-active')
}

for (let index = 0; index < accordions.length; index++) {
    if (accordions[index].classList.contains('is-active')) {
        const submenu = accordions[index].nextElementSibling
        submenu.style.maxHeight = submenu.scrollHeight + "px"
        submenu.style.marginTop = "0.75em"
        submenu.style.marginBottom = "0.75em"
    }
    accordions[index].onclick = function () {
        this.classList.toggle('is-active')
        const submenu = this.nextElementSibling
        if (submenu.style.maxHeight) {
            // close submenu
            submenu.style.maxHeight = null
            submenu.style.marginTop = null
            submenu.style.marginBottom = null
        } else {
            // open submenu
            submenu.style.maxHeight = submenu.scrollHeight + "px"
            submenu.style.marginTop = "0.75em"
            submenu.style.marginBottom = "0.75em"
        }
    }
}
