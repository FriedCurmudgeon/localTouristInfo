function toggleAddressList() {
    var locationListDiv = document.getElementById("locationListDiv");

    // Toggle the visibility of the div
    if (!locationListDiv.style.display || locationListDiv.style.display === "block") {
        locationListDiv.style.display = "none";
    } else {
        locationListDiv.style.display = "block";
    }

    // Add event listeners to close the div
    var closeLink = document.getElementById("closeLink");
    closeLink.addEventListener("click", toggleAddressList);

    /*var homePage = document.getElementById("homePage");
    homePage.addEventListener("click", function (event) {
        if (event.target !== locationListDiv && !locationListDiv.contains(event.target)) {
            locationListDiv.style.display = "none";
            homePage.removeEventListener("click", arguments.callee);
        }
    });*/
}

function toggleFooter() {
    var footerDiv = document.getElementById("footerDiv");

    // Toggle the visibility of the div
    if (!footerDiv.style.display || footerDiv.style.display === "block") {
        footerDiv.style.display = "none";
        // Store the closed state in localStorage
        localStorage.setItem("footerState", "closed");
    } else {
        footerDiv.style.display = "block";
        // Store the open state in localStorage
        localStorage.setItem("footerState", "open");
    }
}

// Check the footer state on page load
document.addEventListener("DOMContentLoaded", function () {
    var footerDiv = document.getElementById("footerDiv");
    var footerState = localStorage.getItem("footerState");

    if (footerState === "closed") {
        footerDiv.style.display = "none";
    } else {
        footerDiv.style.display = "block";
    }
});

// Add event listener to the close link

const closeFooterLink = document.getElementById('closeFooterLink');
if (closeFooterLink) {
    closeFooterLink.addEventListener('click', toggleFooter);
}

//var closeFooterLink = document.getElementById("closeFooterLink");
//closeFooterLink.addEventListener("click", toggleFooter);


