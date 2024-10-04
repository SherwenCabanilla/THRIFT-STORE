function checkDate() {
    const form = document.getElementById("setDateForm");
    const date = document.getElementById("date").value;
    const dateObject = new Date(date);
    const currentDate = new Date();
    if (!confirm("Continue?")) {
        alert("cancelled");
    } else {
        if (isNaN(dateObject.getTime()) || dateObject < currentDate) {
            alert("Invalid Date!!");
            return;
        } else {
            form.submit();
            alert("Butang Date created!!");
        }
    }
}
