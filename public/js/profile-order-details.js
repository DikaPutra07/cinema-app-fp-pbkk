// profile
let profileTable = document.getElementById('profile-orderdetails-table');
console.log(profileTable);
// Subtotal
for (let i = 1; i < profileTable.rows.length; i++) {
    let price = parseFloat(profileTable.rows[i].cells[2].innerHTML);
    let qty = parseFloat(profileTable.rows[i].cells[3].innerHTML);
    profileTable.rows[i].cells[4].innerHTML = "Rp" + price * qty;
}