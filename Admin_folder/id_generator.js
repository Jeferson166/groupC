const patient_id = document.getElementById("patient_id");
const submit = document.getElementById("submit");

//for patientM
patient_id.addEventListener("click", function () {
    patient_id.value = generateId12();
});

submit.addEventListener("click", function () {
    window.alert("database not connected");
    window.location.href = "patientM.html"
});

function generateId12() {
    const timePart = Date.now().toString().slice(-8); // last 8 digits of timestamp
    const randomPart = Math.floor(Math.random() * 10000)
        .toString()
        .padStart(4, "0");

    return timePart + randomPart; // 12 digits
    
};

//for appointment_add
patient_id.addEventListener("click", function () {
    patient_id.value = generateId11();
});

submit.addEventListener("click", function () {
    window.alert("database not connected");
    window.location.href = "appointment_add.html"
});

function generateId11() {
    const timePart = Date.now().toString().slice(-7); // last 7 digits of timestamp
    const randomPart = Math.floor(Math.random() * 10101)
        .toString()
        .padStart(4, "0");

    return timePart + randomPart; // 11 digits
    
};