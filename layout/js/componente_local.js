$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
});

$('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
});

