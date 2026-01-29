const collapseBtn = document.getElementById('collapse_btn');
const side_panel_mode = document.querySelectorAll('[data-mode="active"]')

collapseBtn.addEventListener('click', function() {
    
    if(side_panel_mode.length > 0){
        for (let mode of side_panel_mode){
            if(mode.getAttribute("data-mode") === "active"){
                mode.setAttribute("data-mode", "hidden");
                // if, using class list check if side_panel_active exist
                // then remove it and add side_panel_hidden
                // if, using class list check if side_panel_expanded exist 
                // then remove it and add side_panel_collapsed
                // if, using class list check if expand_btn exist
                // then remove it and add collapse_btn
                if(mode.classList.contains("side_panel_active")){
                    mode.classList.remove("side_panel_active");
                    mode.classList.add("side_panel_hidden");
                }
                if(mode.classList.contains("side_panel_expanded")){
                    mode.classList.remove("side_panel_expanded");
                    mode.classList.add("side_panel_collapsed");
                }
                if(mode.classList.contains("expand_btn")){
                    mode.classList.remove("expand_btn");
                    mode.classList.add("collapse_btn");
                }
            }else if(mode.getAttribute("data-mode") === "hidden"){
                mode.setAttribute("data-mode", "active");
                // if, using class list check if side_panel_hidden exist
                // then remove it and change to side_panel_active
                // if, using class list check if side_panel_collapsed exist
                // then remove it and change to side_panel_expanded
                if(mode.classList.contains("side_panel_hidden")){
                    mode.classList.remove("side_panel_hidden");
                    mode.classList.add("side_panel_active");
                }
                if(mode.classList.contains("side_panel_collapsed")){
                    mode.classList.remove("side_panel_collapsed");
                    mode.classList.add("side_panel_expanded");
                }
                if(mode.classList.contains("collapse_btn")){
                    mode.classList.remove("collapse_btn");
                    mode.classList.add("expand_btn");
                }
            }else{
                window.alert("Error")
            }
        }
    }
});