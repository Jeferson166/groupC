<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>
    <link rel="stylesheet" href="patientManagement.css">
    <link rel="stylesheet" href="sidePanelAdmin.css">
</head>
<body>
    <section>
<!--First row-->
        <div class="row1">
            <div class="logoContainer">
                <div class="logo"></div>
            </div>
            <div class="tabOne">
                <div class="sidePanelContainers" id="dashboardTab">
                    <div class="icon"><div class="dashboardIcon"></div></div>
                    <div class="subject">
                        <p>Dashboard</p>
                    </div>
                </div>
                <div class="sidePanelContainers" id="patientTab">
                    <div class="icon"><div class="patManageIcon"></div></div>
                    <div class="subject">
                        <p>Patient Management</p>
                    </div>
                </div>
                <div class="sidePanelContainers" id="scheduleTab">
                    <div class="icon"><div class="appSchedIcon"></div></div>
                    <div class="subject">
                        <p>Appointments & Scheduling</p>
                    </div>
                </div>
                <div class="sidePanelContainers" id="facilitiesTab">
                    <div class="icon"><div class="facilitiesIcon"></div></div>
                    <div class="subject">
                        <p>Facilities</p>
                    </div>
                </div>
                <div class="sidePanelContainers" id="staffTab">
                    <div class="icon"><div class="staffManageIcon"></div></div>
                    <div class="subject">
                        <p>Staff management</p>
                    </div>
                </div>
                <div class="sidePanelContainers" id="notificationTab">
                    <div class="icon"><div class="notificationIcon"></div></div>
                    <div class="subject">
                        <p>Notification</p>
                    </div>
                </div>
            </div>
            <div class="tabTwo">
                <div class="sidePanelContainers" id="settingTab">
                    <div class="icon"><div class="settingIcon"></div></div>
                    <div class="subject">
                        <p>Settings</p>
                    </div>
                </div>
                <div class="sidePanelContainers">
                    <div class="icon"><div class="logOutIcon"></div></div>
                    <div class="subject">
                        <p>Log out</p>
                    </div>
                </div>
            </div>

        </div>
<!--Second row-->
        <div class="row2">
            <div class="usernameContainer">
                <div class="userName">
                    <div class="header">Username</div>
                </div>
                <div class="userIconContainer">
                    <div class="userNameIcon"></div>
                </div>
            </div>
        </div>
    </section>
    <script src="/groupC/sidePFunc.js"></script>
</body>
</html>