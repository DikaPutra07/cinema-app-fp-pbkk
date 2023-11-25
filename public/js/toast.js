let display_btn = document.querySelector('.toast-display-btn');
let close_btn = document.querySelector('.toast-close-btn');
let notification_box = document.querySelector('.toast-notification-box');
let action;


document.addEventListener('DOMContentLoaded', function(){
    setTimeout(function(){
        notification_box.classList.add('toast-active');
        action = setTimeout(function(){
            notification_box.classList.remove('toast-active');
        }, 3000);
    }, 300);
});

close_btn.addEventListener('click', function(){
    notification_box.classList.remove('toast-active');
    clearTimeout(action);
});