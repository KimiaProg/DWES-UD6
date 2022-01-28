$(document).ready(function () {
    $('.delete').click(function (e) {
        
        var $removeBtn = $(this);
        var id = $removeBtn.data('id');

        $.ajax({
            type: "DELETE",
            url: "./index?controller=gatos&action=delete&id=". id,  // or whatever is the URL to the destroy action in the controller
            success: function (data) {
                $(this).parent().remove(); // assumes that the wrapper for each line item is cart-data-details__total
            }               
        });

        return false;
    });
});