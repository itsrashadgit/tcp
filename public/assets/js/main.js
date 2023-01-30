var sidebar = document.getElementById("main-sidebar");
var maincontent = document.getElementById("main-content");
var topheader = document.getElementById("top-header");

var sidebarcontroller = document.getElementById("sidebar-controller");

sidebarcontroller.addEventListener("click", function(e){

    const sidebar_open = sidebar.className.includes("sidebar-open");

    if(sidebar_open){
        
        // close sidebar
        sidebar.classList.remove("sidebar-open");
        sidebar.classList.add("sidebar-close");

        // expand main content
        maincontent.classList.remove("main-content-collapse");
        maincontent.classList.add("main-content-expand");

        // expand Top Header
        topheader.classList.remove("main-content-collapse");
        topheader.classList.add("main-content-expand");

    }else{

        // open sidebar
        sidebar.classList.remove("sidebar-close");
        sidebar.classList.add("sidebar-open");

        // collapse main content
        maincontent.classList.remove("main-content-expand");
        maincontent.classList.add("main-content-collapse");

        // collapse top header
        topheader.classList.remove("main-content-expand");
        topheader.classList.add("main-content-collapse");
    }

});