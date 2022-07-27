const sidebar = document.querySelector('#sidebar')
const btnSidebar = document.querySelector('#btn-sidebar')
const content = document.querySelector('#content')
const badrop = document.querySelector('#badrop')
const btnProfile = document.querySelector('#btn-profile')
const toggle = document.querySelector('#toggle')
const btnTheme = document.querySelector('#btn-theme')
const iconTheme = document.querySelector('#icon-theme')

btnSidebar.addEventListener('click', function () {
    if(sidebar.classList.contains('active')){
        sidebar.classList.replace('active','deactive')
        badrop.classList.replace('block', 'hidden')
    }else{
        sidebar.classList.replace('deactive','active')
        badrop.classList.replace('hidden', 'block')
    }
})

btnProfile.addEventListener('click', () => {
    if(toggle.classList.contains('hidden')){
        toggle.classList.replace('hidden', 'toggle')
    }else{
        toggle.classList.replace('toggle', 'hidden')
    }
})

btnTheme.addEventListener('click', () => {
    if(iconTheme.classList.contains('fa-moon')){
        iconTheme.classList.replace('fa-moon', 'fa-sun')
    }else{
        iconTheme.classList.replace('fa-sun', 'fa-moon')
    }
    // <i class="fa-solid fa-sun"></i>
})