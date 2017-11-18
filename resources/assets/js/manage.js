const accordions = document.getElementsByClassName('has-submenu')

for (let index = 0; index < accordions.length; index++) {
    accordions[index].onclick = function () {
        this.classList.toggle('is-active');

        const submenu = this.nextElementSibling;
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
