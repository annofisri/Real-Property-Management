var tog = document.getElementById("mySidenav");
var tog1 = document.getElementById("top-nav");
var tog2 = document.getElementById("main-section");
function openNav() {
  tog.classList.toggle("hide");
  tog1.classList.toggle("top-nav-new");
  tog2.classList.toggle("main-section");
}

// dragable menu code

function handleDragStart(e) {
  this.style.opacity = '0.4';
}

function handleDragEnd(e) {
  this.style.opacity = '1';
}

let items = document.querySelectorAll('.menu-drag .box');
items.forEach(function (item) {
  item.addEventListener('dragstart', handleDragStart);
  item.addEventListener('dragend', handleDragEnd);
});

// CMS NAV active link code
document.querySelectorAll(".link-body-emphasis").forEach((link) => {
  if (link.href === window.location.href) {
      link.classList.add("cms-side-active");
      link.setAttribute("aria-current", "page");
  }
});

$(document).ready(function() {
  $(".toRotate").click(function(){
    $('.img-rotate1').toggle('img-rotate');
  });
  
});


// jQuery code to handle button click
$(document).ready(function() {
  // Globally handle to delete item with attribute [data-delete-id]
  $('[data-delete-id]').click(function(e) {
    e.preventDefault();
    // Get delete id from data attribute
    var deleteId = $(this).data('delete-id');
    // Set href of delete link in modal footer
    $('#modal-delete-confirmation .modal-footer .btn-delete').attr('href', '?delete-id=' + deleteId);
    // Show modal
    $('#modal-delete-confirmation').modal('show');
  });

  // Globally handle to select all and unselect all checkbox
  $('#check-all').click(function(){
    const parentChecked = $(this).prop('checked');
    $(this).parents('table').find('tbody').find('td:first-child input[type="checkbox"]').prop('checked', parentChecked);
  });

  $('.btn-delete-selected').click(function(e){
    e.preventDefault();
    const checkedIds = [];
    $("table tbody td:first-child input[type='checkbox']:checked").each(function() {
      const id = $(this).closest("tr").find('[data-delete-id]').data("delete-id");
      checkedIds.push(id);
    });

    // Set href of delete link in modal footer
    $('#modal-delete-confirmation .modal-footer .btn-delete').attr('href', '?delete-id=' + checkedIds.join(","));
    // Show modal
    $('#modal-delete-confirmation').modal('show');


  });


  // rich text editor code
  $('.rich-text-editor').richText();
  


});




