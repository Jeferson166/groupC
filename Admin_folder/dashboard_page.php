<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/groupC/Admin_folder/sharedStyle.css">
    <link rel="stylesheet" href="/groupC/Admin_folder/dashboard_page.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<!-- if updates and changes won't work do "Ctrl+F5  or  Ctrl+Shift+R" -->

    <body>
        <aside class="content_container side_panel_expanded" data-mode="active">
            <nav>
                <div class="side_panel_ctner_1">
                    <li>
                        <i class="hospital_logo side_panel_active" data-mode="active"></i>
<!--
                        //DONE hide icons when collapse
                        //DONE remove the aside bg color when collapse
                        //DONE make this container relative and the symbol absolute
                        //DONE make small box container for the symbol make it transparent
                        //DONE when collapse, clickable area should be unclickable too
                        //DONE the collapse button expand mode position is off, fix it

                        //DONE in laptop, PC, Tablet view; side panel cannot be hide
                        //DONE in laptop, PC, Tablet view; remove collapse button
                        //DONE in laptop, PC, Tablet view; side panel should not overlap the main content

                        //DONE in mobile view; for every container should take the 100%
                        //DONE in mobile view; the main_content1_text and its icon should start in right
                        //DONE in mobile view; Total Patients icon should not be seen
                        //DONE in mobile view; the patients summary sub titles, should be in center
                        //DONE in mobile view; the patients summary counts, should be extra bigggg
                        //DONE in mobile view; make mobile view table

-->
                        <div class="side_panel_btn_ctnair">
                            <span class="material-symbols-outlined expand_btn" id="collapse_btn" data-mode="active">
                                arrow_forward_ios
                            </span>
                        </div>
                    </li>
                </div>
                <!--Other tabs-->
                <div class="side_panel_ctner_1">
                    <li>
                        <a href="">
                            <span class="material-symbols-outlined side_panel_active" data-mode="active">
                                dashboard
                            </span>
                            <p class="side_panel_active" data-mode="active">Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="material-symbols-outlined side_panel_active" data-mode="active"">
                                person_heart
                            </span>
                            <p class="side_panel_active" data-mode="active">Patient Management</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="material-symbols-outlined side_panel_active" data-mode="active"">
                                calendar_clock
                            </span>
                            <p class="side_panel_active" data-mode="active">Appointments & Scheduling</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="material-symbols-outlined side_panel_active" data-mode="active"">
                                hotel
                            </span>
                            <p class="side_panel_active" data-mode="active">Facilities</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="material-symbols-outlined side_panel_active" data-mode="active"">
                                supervisor_account
                            </span>
                            <p class="side_panel_active" data-mode="active">Staff management</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="material-symbols-outlined side_panel_active" data-mode="active"">
                                notifications
                            </span>
                            <p class="side_panel_active" data-mode="active">Notification</p>
                        </a>
                    </li>
                </div>
                <!--Other options-->
                <div class="side_panel_ctner_2">
                    <li>
                        <a href="">
                            <span class="material-symbols-outlined side_panel_active" data-mode="active"">
                                settings
                            </span>
                            <p class="side_panel_active" data-mode="active">Setting</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="material-symbols-outlined side_panel_active" data-mode="active"">
                                exit_to_app
                            </span>
                            <p class="side_panel_active" data-mode="active">Logout</p>
                        </a>
                    </li>
                </div>
            </nav>
        </aside>
        <main>
            <div class="user_name_container">
                <li>
                    <span class="material-symbols-outlined">
                        account_circle
                    </span>
                    <p>User_name</p>
                </li>
            </div>
            <div class="main_container">
<!--//Total Patient, Total Facilities, Upcoming Appointments, and Total Staff Container -->
                <div class="main_content_row1">
                    <div class="column">
                        <div class="content_container_bg content_right">
                        <p class="title">Total Patient</p>
                        <p class="main_content1_text">20</p>
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            width="52" height="52" viewBox="0 0 24 24" fill="none" 
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>
                        </div>
                        <div class="content_container_bg content_right">
                            <p class="title">Total Facilities</p>
                            <p class="main_content1_text">03</p>
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="60" height="60" viewBox="0 0 24 24" fill="none" 
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-bed">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 9a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M22 17v-3h-20" /><path d="M2 8v9" />
                                <path d="M12 14h10v-2a3 3 0 0 0 -3 -3h-7v5" />
                            </svg>
                        </div>
                    </div>
                    <div class="column">
                        <div class="content_container_bg content_right">
                        <p class="title">Upcoming Appointments</p>
                        <p class="main_content1_text">20</p>
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            width="52" height="52" viewBox="0 0 24 24" fill="none" 
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-time">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
                            <path d="M14 18a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M15 3v4" /><path d="M7 3v4" />
                            <path d="M3 11h16" />
                            <path d="M18 16.496v1.504l1 1" />
                        </svg>
                        </div>
                        <div class="content_container_bg content_right">
                            <p class="title">Total Staff</p>
                            <p class="main_content1_text">20</p>
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="52" height="52" viewBox="0 0 24 24" fill="none" 
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-nurse">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M12 5c2.941 0 6.685 1.537 9 3l-2 11h-14l-2 -11c2.394 -1.513 6.168 -3.005 9 -3" />
                                <path d="M10 12h4" />
                                <path d="M12 10v4" />
                            </svg>
                        </div>
                    </div>
                </div>
<!--//Daily Appointments and Patients Summary Container -->
                <div class="main_content_row2">
<!--                //Daily Appointments Container                    -->
                    <div class="column">
                        <div class="content_container_bg content_center content_1441">
                            <p class="title">Daily Appointments</p>
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="220" height="220" viewBox="0 0 24 24" fill="currentColor" 
                                class="icon icon-tabler icons-tabler-filled icon-tabler-chart-pie-2">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M11 2.05v9.95a1 1 0 0 0 1 1h9.95a10 10 0 0 1 -19.95 -1l.005 -.324a10 10 0 0 1 8.995 -9.626m6 1.29a10 10 0 0 1 4.95 7.66h-8.95v-8.95a10 10 0 0 1 4 1.29" />
                            </svg>
                            <div class="daily_app_info">
                                <p class="h1">Total Patients</p>
                                <p class="h1"><bold class="daily_app_count">8</bold>out of<bold class="daily_app_count">20</bold></p>
                                <svg class="hide_me" xmlns="http://www.w3.org/2000/svg" 
                                    width="52" height="52" viewBox="0 0 24 24" fill="none" 
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                </svg>
                            </div>
                        </div>
                    </div>
<!--                //Patients Summary Container                    -->
                    <div class="column">
                        <div class="content_container_bg">
                            <div class="title">Patients Summary</div>
                            <div class="content_center patient_smry">
                                <p class="h2">Total Registered Patients</p>
                                <p class="big_ass_text">50</p>
                            </div>
                            <div class="content_center patient_smry">
                                <p class="h2">New Patients This Month</p>
                                <p class="big_ass_text">12</p>
                            </div>
                        </div>
                    </div>
                </div>
<!--//Recent Appointments and Staff Overview Container -->
                <div class="main_content_row2">
                    <div class="column">
<!--                //Mobile View Table                    -->
                        <div class="content_container_bg table_mobile_view">
                            <div class="title">Recent Appointments</div>
                            <div class="mobile_V_table">
                                <div class="mobile_V_cards highlights">
                                    <div class="patient_information">
                                        <p class="h2 important_text take_full_width">Patient Name1</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="doctor_name information_text">Dr. Smith</p>
                                        <p class="date information_text">2023-04-15</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="information_text">Status</p>
                                        <p class="status information_text">Confirmed</p>
                                    </div>
                                </div>
                                <div class="mobile_V_cards highlights">
                                    <div class="patient_information">
                                        <p class="h2 important_text take_full_width">Patient Name2</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="doctor_name information_text">Dr. Smith</p>
                                        <p class="date information_text">2023-04-15</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="information_text">Status</p>
                                        <p class="status information_text">Confirmed</p>
                                    </div>
                                </div>
                                <div class="mobile_V_cards highlights">
                                    <div class="patient_information">
                                        <p class="h2 important_text take_full_width">Patient Name3</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="doctor_name information_text">Dr. Smith</p>
                                        <p class="date information_text">2023-04-15</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="information_text">Status</p>
                                        <p class="status information_text">Confirmed</p>
                                    </div>
                                </div>
                                <div class="mobile_V_cards highlights">
                                    <div class="patient_information">
                                        <p class="h2 important_text take_full_width">Patient Name4</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="doctor_name information_text">Dr. Smith</p>
                                        <p class="date information_text">2023-04-15</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="information_text">Status</p>
                                        <p class="status information_text">Confirmed</p>
                                    </div>
                                </div>
                                <div class="mobile_V_cards highlights">
                                    <div class="patient_information">
                                        <p class="h2 important_text take_full_width">Patient Name5</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="doctor_name information_text">Dr. Smith</p>
                                        <p class="date information_text">2023-04-15</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="information_text">Status</p>
                                        <p class="status information_text">Confirmed</p>
                                    </div>
                                </div>
                                <div class="mobile_V_cards highlights">
                                    <div class="patient_information">
                                        <p class="h2 important_text take_full_width">Patient Name6</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="doctor_name information_text">Dr. Smith</p>
                                        <p class="date information_text">2023-04-15</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="information_text">Status</p>
                                        <p class="status information_text">Confirmed</p>
                                    </div>
                                </div>
                                <div class="mobile_V_cards highlights">
                                    <div class="patient_information">
                                        <p class="h2 important_text take_full_width">Patient Name7</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="doctor_name information_text">Dr. Smith</p>
                                        <p class="date information_text">2023-04-15</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="information_text">Status</p>
                                        <p class="status information_text">Confirmed</p>
                                    </div>
                                </div>
                                <div class="mobile_V_cards highlights">
                                    <div class="patient_information">
                                        <p class="h2 important_text take_full_width">Patient Name8</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="doctor_name information_text">Dr. Smith</p>
                                        <p class="date information_text">2023-04-15</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="information_text">Status</p>
                                        <p class="status information_text">Confirmed</p>
                                    </div>
                                </div>
                                <div class="mobile_V_cards highlights">
                                    <div class="patient_information">
                                        <p class="h2 important_text take_full_width">Patient Name9</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="doctor_name information_text">Dr. Smith</p>
                                        <p class="date information_text">2023-04-15</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="information_text">Status</p>
                                        <p class="status information_text">Confirmed</p>
                                    </div>
                                </div>
                                <div class="mobile_V_cards highlights">
                                    <div class="patient_information">
                                        <p class="h2 important_text take_full_width">Patient Name10</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="doctor_name information_text">Dr. Smith</p>
                                        <p class="date information_text">2023-04-15</p>
                                    </div>
                                    <div class="patient_information">
                                        <p class="information_text">Status</p>
                                        <p class="status information_text">Confirmed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                //Desktop View Table                    -->
                        <div class="content_container_bg table_desktop_view content_center">
                            <div class="title">Recent Appointments</div></table>
                            <div class="table_container">
                                <table>
                                    <thead class="table_header">
                                        <tr>
                                            <th>Patient Name</th>
                                            <th>Doctor</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="h2">
                                        <tr>
                                            <td>Patient Name1</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                        </tr>
                                            <td>Patient Name2</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <tr>
                                            <td>Patient Name3</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <tr>
                                            <td>Patient Name4</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <tr>
                                            <td>Patient Name5</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <tr>
                                            <td>Patient Name6</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <tr>
                                            <td>Patient Name7</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <tr>
                                            <td>Patient Name8</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <tr>
                                            <td>Patient Name9</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <tr>
                                            <td>Patient Name10</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <tr>
                                            <td>Patient Name11</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <tr>
                                            <td>Patient Name12</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <tr>
                                            <td>Patient Name13</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <tr>
                                            <td>Patient Name14</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                        <tr>
                                            <td>Patient Name15</td>
                                            <td>Dr. Smith</td>
                                            <td>2023-04-15</td>
                                            <td>Confirmed</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="column">
<!--                //Staff Overview Container                    -->
                        <div class="content_container_bg content_center">
                            <div class="title">Staff Overview</div>
                            <div class="patient_smry">
                                <p class="h2">Doctors on Duty</p>
                                <p class="main_content1_text content_center">6</p>
                            </div>
                            <div class="patient_smry">
                                <p class="h2">Active Nurse</p>
                                <p class="main_content1_text content_center">5</p>
                            </div>
                            <div class="patient_smry">
                                <p class="h2">Present Assistant</p>
                                <p class="main_content1_text content_center">4</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <script src="/groupC/Admin_folder/sidepanel.js"></script>
    </body>

</html>