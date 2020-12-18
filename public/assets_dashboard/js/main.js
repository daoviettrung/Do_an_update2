let getDivSelect = document.querySelector(".select-tag");
getDivSelect.addEventListener("click", () =>{
    let getUlElement = document.querySelector(".select-tag__list");
    getUlElement.classList.toggle("show-option")
})
