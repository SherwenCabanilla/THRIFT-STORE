// // Display the home name
// var homeData = homeData;

// // Display the home name
// document.getElementById("name").innerText = "Name: " + homeData.name;

// // Display each home's address and age in a table
// var homesTableBody = document.getElementById("homesBody");

// homeData.data.forEach(function (home) {
//     var row = document.createElement("tr");

//     var addressCell = document.createElement("td");
//     addressCell.innerText = home.address;

//     var ageCell = document.createElement("td");
//     ageCell.innerText = home.age;

//     row.appendChild(addressCell);
//     row.appendChild(ageCell);

//     homesTableBody.appendChild(row);
// });

function butangDate(date) {
    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];

    const days = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
    ];

    const dateObject = new Date(date);

    const day = dateObject.getDate();
    const month = months[dateObject.getMonth()];
    const year = dateObject.getFullYear();
    const dayOfWeekIndex = days[dateObject.getDay()];

    return {
        date: `${month} ${day},${year}`,
        dayOfWeek: `${dayOfWeekIndex}`,
    };
}
