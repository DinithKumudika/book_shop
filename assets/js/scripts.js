/*!
    * Start Bootstrap - SB Admin v7.0.5 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2022 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }
});

// Alert
function showAlert(title, text, icon, btnText){
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        confirmButtonText: btnText
      })
}

// Toast
function showToast(text, icon, position){
    Swal.fire({
        text: text,
        icon: icon,
        toast: true,
        position: position,
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen:(toast)=>{
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
}

// confirmation dialog
function showConfirm(title, text, confirmBtnText, cancelBtnText, confirmBtnColor, cancelBtnColor){
    Swal.fire({
        title: title,
        text: text,
        icon: "question",
        showCancelButton: true,
        confirmButtonText: confirmBtnText,
        cancelButtonText: cancelBtnText,
        confirmButtonColor: confirmBtnColor,
        cancelButtonColor: cancelBtnColor
    })
    // .then(function(result){
    //         if(result.isConfirmed){
    //             showAlert("Item edited", "", "success", "Ok");
    //         }
    //     }
    // )
}

// select2.js
$(document).ready(function() {
    $('.UOMDropDown').select2();
});
