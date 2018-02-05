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
      
      //Insert text in chatbox
      var div = document.createElement('div');
      var txt1 = '<ul class="chat">\
        <li class="right clearfix"><span class="chat-img pull-right">\
                            <img src="http://placehold.it/50/FA6F57/fff&text=YOU" alt="User Avatar" class="img-circle" />\
                        </span>\
                            <div class="chat-body clearfix">\
                                <div class="header">\
                                    <small class=" text-muted"></small>\
                                    <!--<strong class="pull-right primary-font">Bhaumik Patel</strong>-->\
                                </div>\
                                <p>\';
      var txt2 = '';
      var txt3 = '</p>\
                            </div>\
                        </li>\
                        </ul>';
      div.className = 'row';
    div.innerHTML = txt1.concat(txt2, txt3);
    document.getElementById('panelbody').appendChild(div);
      
      //Keep log
      //keeplog($("input").val());
    }
  })
})

// A function for sending message to the backend and getting result.
function chatbot(message){
   $('#wrongbtn').attr('disabled', true);
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
      
      //add row in chatbox
      var div = document.createElement('div');

    div.className = 'row';
    div.innerHTML =
        '<ul class="chat">\
        <li class="left clearfix"><span class="chat-img pull-left">\
                            <img src="http://placehold.it/50/55C1E7/fff&text=BOT" alt="User Avatar" class="img-circle" />\
                        </span>\
                            <div class="chat-body clearfix">\
                                <div class="header">\
                                    <strong class="primary-font">Bot said</strong> <small class="pull-right text-muted">\
                                        </small>\
                                </div>\
                                <p>\
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare\
                                    dolor, quis ullamcorper ligula sodales.\
                                </p>\
                            </div>\
                        </li>\
                        </ul>';
    document.getElementById('panelbody').appendChild(div);
      
      //console.log(intent_.intent);
      keeplog(JSON.parse(response).context.conversation_id,obj.intents[0].intent,obj.intents[0].confidence,JSON.parse(response).input.text,'Y');
    }
  }).fail(function () {
    // Display a error message.
    $('#messages').append('<p>A communication error occurred.</p>');
  });
}

function addRow() {
    var div = document.createElement('div');

    div.className = 'row';

    div.innerHTML =
        '<input type="text" name="name" value="" />\
        <input type="text" name="value" value="" />\
        <label> <input type="checkbox" name="check" value="1" /> Checked? </label>\
        <input type="button" value="-" onclick="removeRow(this)">';

    document.getElementById('content').appendChild(div);
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
