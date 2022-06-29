const openModalButtons = document.querySelectorAll("[data-modal-target]")
const closeModalButtons = document.querySelectorAll("[data-close-button]")
const overlay = document.getElementById("overlay")

openModalButtons.forEach(button => {
    button.addEventListener("click", () =>{
        const modal = document.querySelector(button.dataset.modalTarget)
        openModal(modal)
    })
})

overlay.addEventListener("click", () =>{
    const modals = document.querySelectorAll(".modal.active")
    modals.forEach(modal => {
        closeModal(modal)
    })
})

closeModalButtons.forEach(button => {
    button.addEventListener("click", () =>{
        const modal = button.closest(".modal")
        closeModal(modal)
    })
})

function openModal(modal) {
    if (modal == null) return
    modal.classList.add("active")
    overlay.classList.add("active")
}

function closeModal(modal) {
    if (modal == null) return
    modal.classList.remove("active")
    overlay.classList.remove("active")
}

const popUpButton = document.querySelector(".pop-up-desktop")

let lastScrollY = window.scrollY;

window.addEventListener("scroll", () => {
    if (window.scrollY > "2500"){
        popUpButton.classList.add("hide")
    } else {
        popUpButton.classList.remove("hide")
    }
})

// const observer = new IntersectionObserver(entries => {
//         entries.forEach(entry => {
//             entry.target.classList.toggle("hide", entry.isIntersecting)
//         })
//     }, {
//         rootMargin: "-500px",
//     }
// )

// observer.observe(popUpButton)

let 