$(document).ready(function () {
     createItemTable();
});



$(document).on('click', '.btnEdit', function () {
     showConfirm(
          "Are you sure?",
          "Item details will be chnaged",
          "Yes",
          "No",
          "#166CE1 ",
          "#E11C1C"
     );
})

$('.btnDelete').click(function () {
     showToast(
          "Item deleted", 
          "success", 
          "top-end"
     );
});

$('#btnClear').click(function () {
     clearItemForm();
});

function clearItemForm() {
     $('#itemName').val("");
     $('#UOMDropDown')
     $('#itemUnits').val("");
     $('#itemUnitPrice').val("");
}



function createItemTable() {
     showAlert(
          "Success!", 
          "Table is loaded", 
          "success", 
          "Ok"
     );
}