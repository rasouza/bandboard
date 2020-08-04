$(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var socket = io.connect('http://wonderland:8890');
    socket.on('history', function (data) {
        console.log(data);
    });

    socket.on('message', function (data) {
        data = JSON.parse(data);
        appendMessage(data, true);
    });

    $('button.send-message').on('click', function() {
        var params = { "message": $('input.message').val(), "avatar": $('#user-avatar').attr('src') };
        if (params.message != '') {
            appendMessage(params, false)
            $.ajax({
                method: 'POST',
                url: '/mensagem',
                data: params,
                success: function() {
                    $('input.message').val('');
                }
            });
        }
    });
});

function appendMessage(data, inbox) {
    var container = $('<div class="messages-item">');
    var message = '';
    message += '<img src='+ data.avatar +' class="img-circle img-thumbnail" width=36 height=36/>'
    message += '<div class=messages-item-text>' + data.message + '</div>'
    message += '<div class=messages-item-date>'+ moment().format('DD/MM/YYYY HH:mm') +'</div>'
    if (inbox === true) {
        container.addClass('inbox');
    }
    container.append(message);
    $('.messages .mCSB_container').append(container);
    $('.scroll').mCustomScrollbar('update');
}