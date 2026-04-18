console.log("JS Connected Successfully");

function collect_data() {
    collect_quantity();
    return false;
}

function collect_quantity() {
    const unitPrice = 1000;
    const days = 30;
    let quantityValue = document.getElementById("quantity").value;
    console.log("Quantity entered:", quantityValue);

    if (quantityValue === "") {
        document.getElementById("totalPrice").value = 0;
        couponShown = false;
        return false;
    }
    let quantity = Number(quantityValue);

    if (quantity < 0) {
        alert("Quantity cannot be negative");
        quantity = 0;
        document.getElementById("quantity").value = 0;
    }
    let totalPrice = unitPrice * quantity * days;
    document.getElementById("totalPrice").value = totalPrice;

    if (totalPrice > 1000) {
        alert("Congratulations! You are eligible for a Gift Coupon!");
    }
}