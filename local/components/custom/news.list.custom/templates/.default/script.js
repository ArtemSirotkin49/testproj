$(document).ready(function() {
    $(document).on('click', '.inc', function() {
        var num = $($(this).parent().children(".vote_number")[0]).find("h3")[0];
        $.ajax({
            type: 'POST',
            url: '/ajax/change_likes_count.php',
            data: {value: '1', id: $(this).attr("data-value")},
            success: function(data) {
                console.log(data);
                num.innerHTML = "Количество голосов: " + data.number;
                //$(this).html(val);
            }
        })
    });

    $(document).on('click', '.dec', function() {
        var num = $($(this).parent().children(".vote_number")[0]).find("h3")[0];
        $.ajax({
            type: 'POST',
            url: '',
            data: {value: '-1', id: $(this).attr("data-value")},
            success: function(data) {
                console.log(data);
                num.innerHTML = "Количество голосов: " + data.number;
            }
        })
    });
});