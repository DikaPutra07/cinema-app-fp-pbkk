// cart
let table = document.getElementById('fnb-cart-table');
// Subtotal
for (let i = 1; i < table.rows.length; i++) {
    let price = parseFloat(table.rows[i].cells[3].innerHTML);
    let qty = parseFloat(table.rows[i].cells[4].innerHTML);
    table.rows[i].cells[5].innerHTML = "Rp" + price * qty;
}

// Total
let sum = 0;
for (let i = 1; i < table.rows.length; i++) {
    let price = parseFloat(table.rows[i].cells[3].innerHTML);
    let qty = parseFloat(table.rows[i].cells[4].innerHTML);
    let subtotal = price * qty;
    sum += subtotal;
}
document.getElementById('fnb-cart-subtotal').innerHTML = "Rp" + sum;
document.getElementById('fnb-cart-total').innerHTML = "Rp" + sum;
document.getElementById('fnb-order-total').value = sum;