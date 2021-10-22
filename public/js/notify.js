// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher("313b0e3e73cd0bee3b34", {
    cluster: "ap1"
});

var channel = pusher.subscribe("my-channel");
channel.bind("my-event", function(data) {
    swal("Good job!", data, "success");
    // console.log(data);
});
