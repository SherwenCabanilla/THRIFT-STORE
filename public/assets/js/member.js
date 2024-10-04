function filterTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    table = document.getElementById("tableBody");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; // Change index to the column you want to search
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function edit(...data) {
    var id = (document.getElementById("member_id").value = data[0]);
    var firstname = (document.getElementById("firstname").value = data[1]);
    var lastname = (document.getElementById("lastname").value = data[2]);
    var dependent = (document.getElementById("dependent").value = data[3]);
    var warning = (document.getElementById("warning").value = data[4]);
    // update();
}

// function update() {
//     var id = document.getElementById("member_id").value;
//     var formAction = `{{ route('members.update', ['id' => '${id}']) }}`;
//     document.getElementById("updateData").action.value = formAction;
//     document.getElementById("updateData").submit();
// }
