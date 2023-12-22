const amountOil = document.getElementById("amount");

amountOil.addEventListener("input", function() {
    this.value = this.value.replace(/[^0-9.]/g, '');

    if (parseFloat(this.value) < 0) {
        this.value = "0";
    }
});

function openModal() {
    document.getElementById("myModal").style.display = "block";
}

function closeModal() {
    document.getElementById("myModal").style.display = "none";
}