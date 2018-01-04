function confirm(pLink, e) {
    e.preventDefault();
    window.location = pLink;
}

function confirmBox(thisElm, process) {
    var alertBoxWrapper = "<div class='alert-box-wrapper' onclick='$(this).remove();'></div>";
    var alertBox = "<div class='alert-box'></div>";
    var alertText = '';
    if(process === 'delete') {
        alertText = "<p>Are you sure want to <span style='color: #f00'>permanently delete</span> this customer?</p>";
    }else if(process === 'soft-delete') {
        alertText = "<p>Are you sure want to delete this customer?</p>";
    }
    var yesLink = "<a href='#' onclick=\"confirm('" + $(thisElm).attr('href') + "', event);\">Yes</a>";
    var noLink = "<a href='#' onclick='event.preventDefault();'>No</a>";

    $(thisElm).after(alertBoxWrapper);
    $(thisElm).next('.alert-box-wrapper').html(alertBox);
    $(thisElm).next('.alert-box-wrapper').find('.alert-box').html(alertText);
    $(thisElm).next('.alert-box-wrapper').find('.alert-box').find('p').after(yesLink, noLink);
}