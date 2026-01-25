<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/groupC/Admin_folder/sharedStyle.css">
    <link rel="stylesheet" href="/groupC/Admin_folder/side_panel.css">
    <link rel="stylesheet" href="/groupC/Admin_folder/dashboard_page.css">
</head>

<!-- if updates and changes won't work do "Ctrl+F5  or  Ctrl+Shift+R" -->

<body>
    <div class="section">
        <div class="side_panel">
            <div class="logo_container">
                <div class="logo"></div>
                <h3>ABC Hospital</h3>
            </div>
            <div class="side_panel_tabs_container">
                <div class="side_panel_tabs">
                    <div class="dashboard_icon"></div>
                    <p>Dashboard</p>
                </div>
                <div class="side_panel_tabs">
                    <div class="patient_icon"></div>
                    <p>Patient Management</p>
                </div>
                <div class="side_panel_tabs">
                    <div class="scheduling_icon"></div>
                    <p>Appointments & Scheduling</p>
                </div>
                <div class="side_panel_tabs">
                    <div class="facilities_icon"></div>
                    <p>Facilities</p>
                </div>
                <div class="side_panel_tabs">
                    <div class="staff_icon"></div>
                    <p>Staff management</p>
                </div>
                <div class="side_panel_tabs">
                    <div class="notification_icon"></div>
                    <p>Notification</p>
                </div>
            </div>
            <div class="side_panel_more_container">
                <div class="side_panel_tabs">
                    <div class="settings_icon"></div>
                    <p>Notification</p>
                </div>
                <div class="side_panel_tabs">
                    <div class="log_out_icon"></div>
                    <p>Log out</p>
                </div>
            </div>
        </div>
        <div class="main_content">
            <div class="profile_container">
                <p>User name</p>
                <div class="profile_image"></div>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_row">
                    <div class="dashboard_content1">
                        <div class="row1_content round_border">
                            <p class="title even_row">Total Patients</p>
                            <p class="row1_result">5</p>
                            <div class="Dashboard_patient_icon"></div>
                        </div>
                        <div class="row1_content round_border">
                            <p class="title even_row">Total Facilities</p>
                            <p class="row1_result">5</p>
                            <div class="Dashboard_facilities_icon"></div>
                        </div>
                    </div>
                    <div class="dashboard_content1">
                        <div class="row1_content round_border">
                            <p class="title even_row">Upcoming Appointments</p>
                            <p class="row1_result">5</p>
                            <div class="Dashboard_appointments_icon"></div>
                        </div>
                        <div class="row1_content round_border">
                            <p class="title even_row">Total Staff</p>
                            <p class="row1_result">5</p>
                            <div class="Dashboard_staff_icon"></div>
                        </div>
                    </div>
                </div>
                <div class="dashboard_content_row">
                    <div class="row2_content round_border">
                        <p class="title even_row">Daily Appointments</p>
                        <div class="graph_image"></div>
                        <div class="total_patient_row2">
                            <p class="sub_title_content">Total Patient</p>
                            <div class="sub_title_content"> <h1><strong>88</strong></h1> out of <h1><strong>20</strong></h1></div>
                        </div>
                    </div>
                    <div class="row2_content round_border">
                        <p class="title even_row">Patient Summary</p>
                        <div class="even_column from_center">
                            <div class="sub_title_content">Total Registered Patients</div>
                            <p>50</p>
                        </div>
                        <div class="even_column from_center">
                            <div class="sub_title_content">New Patients This Month</div>
                            <p>12</p>
                        </div>
                    </div>
                </div>
                <div class="dashboard_content_row">
                    <div class="row2_content round_border">
                        <p class="title even_row">Recent Appointments</p>
                        <table class="table_container even_row">
                            <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Doctor</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Patient A</td>
                                    <td>Doctor A</td>
                                    <td>Date A</td>
                                    <td>Status A</td>
                                </tr>
                                <tr>
                                    <td>Patient B</td>
                                    <td>Doctor B</td>
                                    <td>Date B</td>
                                    <td>Status B</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row2_content round_border">
                        <p class="title even_row">Staff Overview</p>
                        <table class="staff_overview_table">
                            <thead>
                                <tr class="sub_title_content">
                                    <th>Doctors on duty</th>
                                    <th>Active nurse</th>
                                    <th>Present Assistant</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>6</td>
                                    <td>5</td>
                                    <td>4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>