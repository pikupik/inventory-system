document.addEventListener("DOMContentLoaded", function() {
  var submenuItems = document.querySelectorAll(".submenu-item");
  submenuItems.forEach(function(item) {
    item.addEventListener("click", function() {
      var parentItem = this.parentNode;
      parentItem.classList.toggle("active");
    });
  });
});

function logoutUser() {
var confirmation = confirm("Apakah Anda yakin ingin keluar dari akun?");

if (confirmation) {
    alert("Anda berhasil keluar dari akun.");
        var currentPage = window.location.href;
        var nextPage = 'login.php';

        window.location.href = nextPage + '?currentPage=' + currentPage;
  } else {
  }
}
