var Clickhandler = Class.extend({
    init:function () {

    },

    actionButtonClicked:function (td, controller, id) {
        $.get('?r=' + controller + '/delete&id=' + id, function (data) {
            $(td.parentNode).fadeOut('slow');
        })
    }

});


$(document).ready(function () {

    var clickhandler = new Clickhandler();

    $("td.delete").each(function (index, td) {
        $(td).click(function () {
            clickhandler.actionButtonClicked(td, $('html').data('controller'), $(td).data('id'));
        });
    });
});