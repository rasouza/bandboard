var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var redis = require('redis');

server.listen(8890);
io.on('connection', function (socket) {
    console.log("new client connected");
    var redisClient = redis.createClient();

    redisClient.subscribe('message');

    redisClient.lrange('message', 0, 99, function (err, reply) {
        console.log('enviando historico');
        socket.emit('history', reply)
    });

    redisClient.on("message", function(channel, message) {
        console.log(message);
        socket.broadcast.emit('message', message);
    });



    //socket.on('message', function(data) {
    //    io.sockets.emit('message', data);
    //    console.log(data);
    //});
});


