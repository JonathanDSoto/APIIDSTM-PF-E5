if (window.screen.width >= 800) {
    let addButton = document.querySelector(".create-new");
    if (addButton.getAttribute("data-type")) {
        addButton.insertAdjacentHTML(
            "beforeend",
            `<span class="text-btn">Add New ${addButton.getAttribute(
                "data-type"
            )}</span>`
        );
    }
} else {
    let textBtn = document.querySelector(".text-btn");
    if (textBtn) {
        textBtn.remove();
    }
}

window.addEventListener("resize", () => {
    let textBtn = document.querySelector(".text-btn");
    if (window.screen.width < 800) {
        if (textBtn) {
            textBtn.remove();
        }
    } else if (!textBtn) {
        document
            .querySelector(".create-new")
            .insertAdjacentHTML(
                "beforeend",
                "<span class='text-btn'>Add New User</span>"
            );
    }
});
