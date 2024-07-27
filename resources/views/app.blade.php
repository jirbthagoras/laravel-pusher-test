<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('50107aee234568786fe9', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function (data) {

            var logger = document.getElementById('log');

            if (typeof data == 'object') {
                logger.innerHTML += (JSON && JSON.stringify ? JSON.stringify(data) : data) + '<br />';
            } else {
                logger.innerHTML += data + '<br />';
            }

        });

    </script>
</head>
<body>
<h1>Pusher Test</h1>
<p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
</p>

<h1 id="log"></h1>


</body>
