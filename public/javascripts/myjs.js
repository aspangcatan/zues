$(document).ready(function () {

    $(".noChildren").click(function(){
        $(".submenu-icon").removeClass("fa-chevron-down").addClass("fa-chevron-right");
        $(".submenu").slideUp(300);
    });

    $(".submenu-button").click(function () {
        var submenu = $(this).next(".submenu");
        $(".submenu-icon").removeClass("fa-chevron-down").addClass("fa-chevron-right");

        var iconID = $(this).find(".submenu-icon").attr("id"); // Get the ID of the <i>
    
        // Hide all other submenus except the clicked one
        $(".submenu").not(submenu).slideUp(300);
    
        // Slide toggle animation with a callback to change the icon
        submenu.stop().slideToggle(300, function () {
            if (submenu.is(":visible")) {
                $('#'+iconID).removeClass("fa-chevron-right").addClass("fa-chevron-down");
            } else {
                $('#'+iconID).removeClass("fa-chevron-down").addClass("fa-chevron-right");
            }
        });
    });

    $('#networkViewer').on('click', function(){
        Swal.fire({
            icon: 'warning', // Can be 'success', 'error', 'warning', 'info', or 'question'
            title: 'Access Denied',
            text: 'Access exclusively for those who have upgraded and placed in Binary Tree.',
            confirmButtonText: 'OK',
            confirmButtonColor: '#d33'
        });        
    });

    $('#loginbtn').on('click', function() {
        let url = $(this).data('url'); // Get route from data-url attribute
        window.location.href = url;
    });    

    $('#verifybtn').on('click', function(){
        let url = $(this).data('url'); // Get route from data-url attribute
        window.location.href = url;
    });

    $('#resendAuthBtn').on('click', function(){
        Swal.fire({
            icon: 'success', // Can be 'success', 'error', 'warning', 'info', or 'question'
            title: 'RESEND AUTH',
            text: 'Authentication has been successfuly sent to your email.',
            confirmButtonText: 'OK',
            confirmButtonColor: '#d33'
        });        
    });

    // Open Modal
    $("#openModalBtn").click(function () {
        $("#forgotPasswordModal").removeClass("hidden");
    });

    // Close Modal
    $("#closeModalBtn").click(function () {
        $("#forgotPasswordModal").addClass("hidden");
    });

    $('#sendForgotPassword').on('click', function(){
        Swal.fire({
            icon: 'success', // Can be 'success', 'error', 'warning', 'info', or 'question'
            title: 'FORGOT PASSWORD',
            text: 'Forgot password link has been successfuly sent to your email.',
            confirmButtonText: 'OK',
            confirmButtonColor: '#d33'
        });        
    });

    $('#closeModalBtn').on('click', function(){
        $("#forgotPasswordModal").addClass("hidden");
    });
    
}); //end of ready

//functions

function moveFocus(input, next) {
    if (input.value.length === 1) {
        let nextInput = input.parentElement.children[next];
        if (nextInput) nextInput.focus();
    }
}


//globals

const slider = document.getElementById("slider");
const container = document.getElementById("slider-container");
const slideText = document.getElementById("slide-text");

let isDragging = false;

slider.addEventListener("mousedown", function (event) {
    isDragging = true;
    slider.style.cursor = "grabbing";
});

document.addEventListener("mousemove", function (event) {
    if (!isDragging) return;
            
    let containerRect = container.getBoundingClientRect();
    let x = event.clientX - containerRect.left;

    if (x < 0) x = 0;
    if (x > containerRect.width - slider.offsetWidth) x = containerRect.width - slider.offsetWidth;

    slider.style.transform = `translateX(${x}px)`;

    if (x >= containerRect.width - slider.offsetWidth) {
        slideText.innerText = "Verified!";
        slideText.classList.add("text-green-600");
        slider.style.backgroundColor = "green";
        isDragging = false;
    }
});

document.addEventListener("mouseup", function () {
    if (!isDragging) return;
    isDragging = false;

    if (slider.style.transform.includes(`${container.offsetWidth - slider.offsetWidth}px`)) {
        return;
    }
            
    // Reset position if not fully slid
    slider.style.transition = "transform 0.3s ease";
    slider.style.transform = "translateX(0px)";
    setTimeout(() => {
        slider.style.transition = "";
    }, 300);
});


    

