let dashboard = document.getElementById("dashboardTab");
let patientTab = document.getElementById("patientTab");
let schedule = document.getElementById("scheduleTab");
let facilities = document.getElementById("facilitiesTab");
let staff = document.getElementById("staffTab");
let notification = document.getElementById("notificationTab");

dashboard.addEventListener("click", function(){
    window.location.href = "dashboard.php";
});

patientTab.addEventListener("click", function () {
    window.location.href = "patientManagement.php";
});

schedule.addEventListener("click", function(){
    window.location.href = "scheduling.php";
});

facilities.addEventListener("click", function(){
    window.location.href = "facilities.php";
});

staff.addEventListener("click", function(){
    window.location.href = "staffManage.php";
});

notification.addEventListener("click", function(){
    window.location.href = "notification.php";
});