const collapseBtn = document.getElementById('collapse_button');
const sidebar = document.querySelector('aside');
const hidden_sidebar = document.querySelectorAll('.hidden_sidebar');

collapseBtn.addEventListener('click', function () {

    const isHidden = sidebar.dataset.mode === "hidden";

    if (isHidden) {

        // Update button
        collapseBtn.dataset.mode = "sidebar_mode_active";

        // Update sidebar
        sidebar.dataset.mode = "active";

        sidebar.classList.remove("side_panel_collapsed");
        sidebar.classList.add("side_panel_expanded");

        // Update button / inner elements
        hidden_sidebar.forEach(el => {
            el.classList.remove("hidden_sidebar");
            el.classList.add("active_sidebar");
        });

        console.log("Sidebar expanded");

    } else {

        collapseBtn.dataset.mode = "sidebar_mode_hidden";

        sidebar.dataset.mode = "hidden";

        sidebar.classList.remove("side_panel_expanded");
        sidebar.classList.add("side_panel_collapsed");

        hidden_sidebar.forEach(el => {
            el.classList.remove("active_sidebar");
            el.classList.add("hidden_sidebar");
        });

        console.log("Sidebar collapsed");
    }
});