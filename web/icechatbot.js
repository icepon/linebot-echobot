// Backend URL.
var apiUrl = "icechatapi.php";
// Variable for the conversation state.
var context = "";

$(function(){
  // Initialization of the chatbot.
  chatbot("");

  // Send a Message, When the form will be submitted.
  $("form").submit(function(e){
    // Prevent the form submission.
    e.preventDefault();
    if($("input").val()){
      // Send the message.
      chatbot($("input").val());
      // Display the message.
      $('#messages').append('<p>'+$("input").val()+'</p>');
      //Keep log
      keeplog($("input").val());
    }
  })
})

// A function for sending message to the backend and getting result.
function chatbot(message){
  $.ajax({
    url: apiUrl,
    type: 'post',
    dataType: 'json',
    data: {
      message: message,
      context: context
    },
    timeout:5000
  }).done(function (response) {
    // Check the result.
    console.log(response);
    if(response.error){
      // Failed at getting result.
      // Display a error message.
      $('#messages').append('<p>A communication error occurred.</p>');
    }else{
      // Succeeded at getting result.
      // Clear the input element.
      $("input").val("");
      // Display the message.
      $('#messages').append('<p>'+JSON.parse(response).output.text+'</p>');
      // Upodate the conversation state.
      context = JSON.stringify(JSON.parse(response).context);
    }
  }).fail(function () {
    // Display a error message.
    $('#messages').append('<p>A communication error occurred.</p>');
  });
}


function keeplog(message){
var jsondata = {"field1": "xyz","field2": "abc"};
var settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://inventory-fac4.restdb.io/rest/motorbikes",
  "method": "POST",
  "headers": {
    "content-type": "application/json",
    "x-apikey": "560bd47058e7ab1b2648f4e7",
    "cache-control": "no-cache"
  },
  "processData": false,
  "data": JSON.stringify(jsondata)
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
}
