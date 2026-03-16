function collect_data() {
    let isQuantityValid = collect_quantity();
    return false;
}

function collect_quantity() {
    const unitPrice = 1000;
    const days = 30;
    let quantity = document.getElementById("quantity").value;
    console.log(quantity);
    if (quantity < 0) {
        alert("Quantity can not be negative");
        document.getElementById("quantity").value = 0;
        quantity = 0;
    }
    if (quantity = "") {
        document.getElementById("totalPrice").value = 0;
    }
}