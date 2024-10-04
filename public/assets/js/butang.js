function toggleCheckbox(row) {
    var checkbox = row.querySelector('input[type="checkbox"]');
    checkbox.checked = !checkbox.checked;
    var bg = checkbox.checked ? "blue" : "white";
    document.getElementById("checkys").style.backgroundColor = bg;
    document.getElementById("checky").style.backgroundColor = bg;
}
