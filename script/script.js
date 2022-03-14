$(" input[name='type']").click(function() {
    alert('You clicked radio!');
    if ($('input:radio[name=type]:checked').val() == "") {
        alert($('input:radio[name=type]:checked').val());
        //$('#select-table > .roomNumber').attr('enabled',false);
    }
});