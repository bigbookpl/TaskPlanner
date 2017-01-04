$(document).ready(function () {

    var $twitarea = $('#twitarea');
    var $twitcounter = $('#twitcounter');
    var twitcounter = "";
    twitcounter = $twitarea.val().length;
    $twitcounter.text("Characters: " + twitcounter + "/140");
    var $commarea = $('#commarea');
    var $commcounter = $('#commcounter');
    var commcounter = "";
    commcounter = $commarea.val().length;
    $commcounter.text("Characters: " + twitcounter + "/60");
    $commarea.on('input', function (event) {
        commcounter = $commarea.val().length;
        $commcounter.text("Characters: " + commcounter + "/60");
        if (commcounter > 59) {
            $(this).val($(this).val().substring(0, 59));
        }

    });
    $twitarea.on('input', function (event) {
        twitcounter = $twitarea.val().length;
        $twitcounter.text("Characters: " + twitcounter + "/140");
        if (twitcounter > 139) {
            $(this).val($(this).val().substring(0, 139));
        }

    });
    var $comments = $('.comments');
    $comments.hide();
    $comments.prev().prev().on('click', function (event) {
        event.preventDefault();
        console.log('click');
        console.log($(this));
        console.log($(this).next().next());
        if ($(this).text().substr(0, 4) === "Show") {
            $(this).next().next().slideToggle();
        }
    });
});

