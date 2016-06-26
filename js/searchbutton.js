// Get the button, and when the user clicks on it, execute myFunction
document.getElementById("DropdownSearchButton").onclick = function() {searchbuttononclick()};

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function searchbuttononclick() {
    document.getElementById("DropdownSearchDiv").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropdown-search-button')) {

    var dropdowns = document.getElementsByClassName("dropdown-search-div");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
