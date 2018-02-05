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
      //$('#messages').append('<p>'+$("input").val()+'</p>');
      
      //Insert text in chatbox
      var div = document.createElement('div');
      
      div.className = 'row';
    //div.innerHTML = txt1.concat(txt2, txt3);
      div.innerHTML = '<ul class="chat">\
                        <li class="right clearfix"><span class="chat-img pull-right">\
                            <img src="http://placehold.it/50/FA6F57/fff&text=YOU" alt="User Avatar" class="img-circle" />\
                        </span>\
                            <div class="chat-body clearfix">\
                                <div class="header" style="text-align: right">\
                                    <small class=" text-muted"></small>\
                                    <strong class="primary-font">You said</strong> <small class="pull-right text-muted">\
                                </div>\
                                <p style="text-align: right">'+$("input").val()+'</p>\
                            </div>\
                        </li>\
      </ul>';
    document.getElementById('panelbody').appendChild(div);
      
      var chatHistory = document.getElementById("panelbody");
    chatHistory.scrollTop = chatHistory.scrollHeight;
      //Keep log
      //keeplog($("input").val());
    }
  })
})

// A function for sending message to the backend and getting result.
function chatbot(message){
   $('#wrongbtn').attr('disabled', true);
  var e = document.getElementById("wrongbtn");
  if (e !== null) {
  e.id = "oldbtn";
    }
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
      //$('#messages').append('<p>A communication error occurred.</p>');
    }else{
      // Succeeded at getting result.
      // Clear the input element.
      $("input").val("");
      // Display the message.
      //$('#messages').append('<p>'+JSON.parse(response).output.text+'</p>');
      // Upodate the conversation state.
      context = JSON.stringify(JSON.parse(response).context);
      intent_ = JSON.parse(response).intents;
      obj = JSON.parse(response);
      
       var msgid2 = document.getElementById('txtmsgid').innerText;
      //add row in chatbox
      var div = document.createElement('div');

    div.className = 'row';
    div.innerHTML =
        '<ul class="chat">\
        <li class="left clearfix"><span class="chat-img pull-left">\
                            <img src="https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/robot2.png" alt="User Avatar" class="img-circle" />\
                        </span>\
                            <div class="chat-body clearfix">\
                                <div class="header">\
                                    <strong class="primary-font">Bot said</strong> <small class="pull-right text-muted">\
                                        </small>\
                                </div>\
                                <p>'+JSON.parse(response).output.text+'</p>\
                          <button type="button" onclick="markfalse();" id="wrongbtn" > wrong </button>\
                            </div>\
                        </li>\
                        </ul>';
    document.getElementById('panelbody').appendChild(div);
      var chatHistory = document.getElementById("panelbody");
    chatHistory.scrollTop = chatHistory.scrollHeight;
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
 
  var msgid2 = document.getElementById('txtmsgid').innerText;
   var url = str1.concat(msgid2);
  console.log(url);
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

  var div = document.createElement('div');

    div.className = 'row';
    div.innerHTML =
        '<ul class="chat">\
        <li class="left clearfix"><span class="chat-img pull-left">\
                            <img src="https://raw.githubusercontent.com/icepon/linebot-echobot/master/web/robot2.png" alt="User Avatar" class="img-circle" />\
                        </span>\
                            <div class="chat-body clearfix">\
                                <div class="header">\
                                    <strong class="primary-font">Bot said</strong> <small class="pull-right text-muted">\
                                        </small>\
                                </div>\
                                <p>Thank you</p>\
                            </div>\
                        </li>\
                        </ul>';
    document.getElementById('panelbody').appendChild(div);
  var chatHistory = document.getElementById("panelbody");
    chatHistory.scrollTop = chatHistory.scrollHeight;
    $('#wrongbtn').attr('disabled', true);
  var e = document.getElementById("wrongbtn");
  if (e !== null) {
  e.id = "oldbtn";
    }

$.ajax(settings).done(function (response) {
  console.log(response);
});
}

function markfalsewithid(messageid){
  var jsondata = {"is_correct": 'N'};
  var str1 = "https://icechatbot-a7be.restdb.io/rest/chatlog/";
 
  var msgid2 = messageid;
   var url = str1.concat(msgid2);
  console.log(url);
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
   $('#txtmsgid').text(response._id);
  $('#txtmsgid').hide();
  $('#wrongbtn').removeAttr('disabled');
});
}
