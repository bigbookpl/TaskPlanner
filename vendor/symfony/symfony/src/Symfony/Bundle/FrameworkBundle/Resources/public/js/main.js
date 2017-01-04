/**
 * Created by neelam on 22.12.16.
 */


$(document).ready(function () {


    var $showComm = $('.showComm');
    var $comments = $('.comments');
    $comments.hide();
    $showComm.on('click', function (event) {
        event.preventDefault();
        $(this).parent().parent().parent().parent().next().slideToggle();
    });

    var $buttons = $('.buttonsTP');
    $buttons.hide();
    var $tasks = $('div.tasks');

    $tasks.on('mouseenter', function (e) {
        $buttons.filter('.' + e.currentTarget.id).show();
    });

    $tasks.on('mouseleave', function (e) {
        $buttons.filter('.' + e.currentTarget.id).hide();
    });

    var $delBtn = $('.delBtn');

    $delBtn.on('click', function () {

        var taskId = $(this).closest('div').attr('data-content');
        $.ajax({
            url: '/deleteTask/' + taskId,
            context: document.body,
            success: (function () {
                $("#" + taskId).remove();
            }),
            error: (function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            })
        });

    });

    var $doneFilBtn = $('#doneFilter');

    $doneFilBtn.on('change', function (e) {
        e.currentTarget.submit();
    });

    $('button').addClass('btn btn-deep-orange');


    // $('#calendar').fullCalendar({});
    //
    $(function () {
        $("#datepicker").datepicker("option", "dateFormat", 'yy-mm-dd');
    });

});