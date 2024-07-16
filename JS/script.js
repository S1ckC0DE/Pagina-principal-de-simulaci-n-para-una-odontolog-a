function toggleMenu() {
    var sidebar = document.getElementById("sidebar");
    var menuIcon = document.getElementById("menu-icon");

    if (sidebar.style.width === "250px") {
        sidebar.style.width = "0";
        document.getElementById("main-content").style.marginRight = "0";
        menuIcon.classList.remove("hidden"); 
    } else {
        sidebar.style.width = "250px";
        document.getElementById("main-content").style.marginRight = "250px";
        menuIcon.classList.add("hidden"); 
    }
}
