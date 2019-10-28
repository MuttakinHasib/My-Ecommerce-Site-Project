// Dashboard Heading

var type = new Typed(".type", {
    strings: ["Hasib Molla", "A Student", "Also", "A Web Developer"],
    typeSpeed: 30,
    backSpeed: 35,
    startDelay: 1000,
    backDelay: 1000,
    loop: true
});

// tab control

function setupTabs() {
    document.querySelectorAll(".tabs-control").forEach(button => {
        button.addEventListener("click", () => {
            const sideBar = button.parentElement;
            const tabsContainer = document.querySelector(".main-container");
            const tabsNumber = button.dataset.forTab;
            const tabToActive = tabsContainer.querySelector(
                `.tabs-content[data-tab = '${tabsNumber}']`
            );
            sideBar.querySelectorAll(".tabs-control").forEach(button => {
                button.classList.remove("tabs-control-active");
            });
            tabsContainer.querySelectorAll(".tabs-content").forEach(tab => {
                tab.classList.remove("tabs-content-active");
            });
            button.classList.add("tabs-control-active");
            tabToActive.classList.add("tabs-content-active");
        });
    });
}

document.addEventListener("DOMContentLoaded", () => {
    setupTabs();
});
