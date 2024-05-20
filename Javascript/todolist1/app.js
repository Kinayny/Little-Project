const form = document.querySelector('form');

//Storage part
function storeList() {
    window.localStorage.todoList = list.innerHTML;
}

function getTodos() {
    if (window.localStorage.todoList) {
        list.innerHTML = window.localStorage.todoList;
    } else {
        list.innerHTML = '<li>Ajouter un element et cliquer pour le supprimer</li>';
    }
}

window.addEventListener("load", getTodos);



// Add Element 
form.addEventListener("submit", (e) => {
    e.preventDefault();

    console.log(item.value);
    //on recupere input avec ".value">
    list.innerHTML += `<li>${item.value}</li>`;
    // efface ce qui est inscrit dans l'input>
    item.value = "";
    storeList();
});

// Remove element 
list.addEventListener("click", (e) => {
if (e.target.classList.contains("checked")) {
    e.target.remove();
} else {
    e.target.classList.add("checked");
}
storeList();
});





