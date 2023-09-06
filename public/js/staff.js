/*
*  ------------------- Close Side Bar Menu -----------------------
*/
document.addEventListener('DOMContentLoaded', () => {
    const menuBar = document.querySelector('.topbar .content .menu-button i');
    const sideBar = document.querySelector('.sidebar');

    menuBar.addEventListener('click', () => {
        sideBar.classList.toggle('close');
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth < 768) {
            sideBar.classList.add('close');
        }
        else {
            sideBar.classList.remove('close');
        }
    });
});
/*
*  --------------------- End of Close Side Bar Menu -----------------------
*/


/*
*  ------------------ Logout Side Menu ----------------
*/
document.addEventListener('DOMContentLoaded', () => {
    const logoutBtn = document.getElementById('logout-button');
    logoutBtn.addEventListener('click', () => {
        const logout = document.getElementById('logout-form');
        logout.submit();
    });
});
/*
*  ------------------ End of Logout Side Menu -------------------
*/