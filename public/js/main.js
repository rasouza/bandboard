$(function() {
    var socket = io.connect('http://wonderland:8890');
    socket.on('message', function (data) {
        var message = '';
        message += '<div class=messages-item> <img src='+ $('#user-avatar').attr('src') +' class="img-circle img-thumbnail" width=36 height=36/>'
        message += '<div class=messages-item-text>' + data.message + '</div>'
        message += '<div class=messages-item-date>'+ moment().format('DD/MM/YYYY HH:mm') +'</div>'
        message += '</div>'
        $('.messages .mCSB_container').append(message);
        console.log(message);
        $('.scroll').mCustomScrollbar('update');
    });

    $('button.send-message').on('click', function() {
        var message = $('input.message').val();
        if (message != '') {
            socket.emit('message', { message: message });
            $('input.message').val('');
        }
    });
});