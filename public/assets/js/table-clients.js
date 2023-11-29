if (window.screen.width >= 800) {
    document
        .querySelector(".create-new")
        .insertAdjacentHTML(
            "beforeend",
            "<span class='text-btn'>Add New User</span>"
        );
    document.querySelectorAll(".actions");
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
const e = document.querySelector(".create-new"),
    t = document.querySelector("#add-new-user");

e.addEventListener("click", () => {
    (offCanvasEl = new bootstrap.Offcanvas(t)),
        (t.querySelector(".dt-name").value = ""),
        (t.querySelector(".dt-last-name").value = ""),
        (t.querySelector(".dt-email").value = ""),
        offCanvasEl.show();
});

const datatem = [
    {
        id: 2,
        name: "Carlos",
        last_name: "Duverney",
        email: "carlos@gmail.com",
    },
];
function fillTable() {
    let tr = document.createElement("tr");
    datatem.forEach((data) => {
        tr.innerHTML = `
        <td>
            <input type="checkbox" name="all" id="all"/>
        </td>
        <td>${data.id}</td>
        <td>
            <a href="">
                ${data.name}
            </a>
        </td>
        <td>${data.last_name}</td>
        <td>${data.email}</td>
        <td>
            <div class="actions d-flex gap-2">
                <button
                    type="button"
                    class="btn btn-danger p-2"
                    data-bs-toggle="modal"
                    data-bs-target="#modalDelete"
                >
                    <i class="ti ti-trash"></i>
                </button>
                <button
                    type="button"
                    class="btn btn-primary p-2"
                    data-bs-toggle="modal"
                    data-bs-target="#modalEdit"
                >
                    <i class="ti ti-pencil"></i>
                </button>
            </div>
        </td>
        `;
        document.querySelector("tbody").appendChild(tr);
    });
}
fillTable();
