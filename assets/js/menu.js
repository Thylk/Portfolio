let isActiveSidebar = false;
        let getSideBar = document.getElementById("nav-sidebar");

document.getElementById("menu-icon").addEventListener("click",

    function() {

        if (isActiveSidebar === false) {
            getSideBar.style.visibility = "visible";
            isActiveSidebar = true;
        } else {
            getSideBar.style.visibility = "hidden";
            isActiveSidebar = false;
        }
        
    }

);

