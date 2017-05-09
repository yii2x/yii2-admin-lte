
function showalert(message, alerttype, delay) {

    var alerttype = alerttype || 'alert-info';
    var delay = delay || 5000;
  $('#alert-placeholder').append('<div id="alertdiv" class="alert ' +  alerttype + '"><a class="close" data-dismiss="alert">×</a><span>'+message+'</span></div>')

  setTimeout(function() { 
    $("#alertdiv").fadeOut().remove();
  }, delay);
}

