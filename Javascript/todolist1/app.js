const form = document.querySelector('form');

// Add Element 
form.addEventListener("submit", (e) => {
    e.preventDefault();

    console.log(item.value);

    list.innerHTML += `<li>${item.value}</li>`;
    item.value = "";
});

// Remove element 



