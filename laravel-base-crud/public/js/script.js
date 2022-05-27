function ciao() {
    console.log('ciao');
}

ciao();


const deleteBtn = document.getElementById("delete");


deleteBtn.addEventListener('click', function ($event) {
    const check = confirm('Sei sicuro?');

    if (!check) {
        $event.preventDefault();
    }
})
