// Handles modals for the admin pages

const modalBackground = document.getElementById("modal-bg");
modalBackground.addEventListener("click", closeAllModals);

// Opens a modal
// The modal parameter should be the ID of the modal's container element
export function openModal(modal) {
    const modalContainer = document.getElementById(modal);

    // Close any existing modals
    closeAllModals();

    // Open the modal
    modalBackground.classList.add("visible");
    modalContainer.classList.add("visible");
}

// Closes any open modal
export function closeAllModals() {
    modalBackground.classList.remove("visible");

    document.querySelectorAll(".modal-container").forEach(modal => {
        modal.classList.remove("visible");
    });
}

// Add an event listener
document.querySelectorAll("[data-modal]").forEach(element => {
    const modal = element.dataset.modal;
    element.addEventListener("click", () => {
        openModal(modal);
    });
});


document.querySelectorAll(".close-modal").forEach(element => {
    element.addEventListener("click", () => {
        closeAllModals();
    });
});
