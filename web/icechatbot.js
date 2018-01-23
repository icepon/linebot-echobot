// Backend URL.
var apiUrl = "icechatapi.php";
// Variable for the conversation state.
var context = "";
var intent = "";
var msgid = "";
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
      //keeplog($("input").val());
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
      intent_ = JSON.parse(response).intents;
      obj = JSON.parse(response);
      //console.log(intent_.intent);
      keeplog(JSON.parse(response).context.conversation_id,obj.intents[0].intent,obj.intents[0].confidence,JSON.parse(response).input.text,'Y');
    }
  }).fail(function () {
    // Display a error message.
    $('#messages').append('<p>A communication error occurred.</p>');
  });
}

function markfalse(){
  var jsondata = {"is_correct": 'N'};
  var str1 = "https://icechatbot-a7be.restdb.io/rest/chatlog/";
  var url = str1.concat(msgid);
  console.log(msgid);
var settings = {
  "async": true,
  "crossDomain": true,
  "url":url ,
  "method": "PUT",
  "headers": {
    "content-type": "application/json",
    "x-apikey": "5a5873c47d7ef24c5cf08c12",
    "cache-control": "no-cache"
  },
  "processData": false,
  "data": JSON.stringify(jsondata)
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
}

function keeplog(msgid,intentt,confi,usertext,is_correct){
var jsondata = {"usertext": usertext,"converid":msgid,"intent":intentt,"confidence":confi,"is_correct":is_correct};
var settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://icechatbot-a7be.restdb.io/rest/chatlog",
  "method": "POST",
  "headers": {
    "content-type": "application/json",
    "x-apikey": "5a5873c47d7ef24c5cf08c12",
    "cache-control": "no-cache"
  },
  "processData": false,
  "data": JSON.stringify(jsondata)
}

$.ajax(settings).done(function (response) {
  console.log(response);
  msgid = response._id;
});
}
