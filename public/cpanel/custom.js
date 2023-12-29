//hide sidebar
var tog = document.getElementById("mySidenav");
var tog1 = document.getElementById("top-nav");
var tog2 = document.getElementById("main-section");
function openNav() {
  tog.classList.toggle("hide");
  tog1.classList.toggle("top-nav-new");
  tog2.classList.toggle("main-section");
}
//hide sidebar end

//client side searching
$(document).ready(function () {
  $("[data-control-filter]").on("input", function () {
    const targetTableId = $(this).data("control-filter");
    const filterValue = $(this).val().toLowerCase();
    $(`${targetTableId} tbody tr`).each(function () {
      const rowText = $(this).text().toLowerCase();
      $(this).toggle(rowText.includes(filterValue));
    });
  });
});
//client side searching end
