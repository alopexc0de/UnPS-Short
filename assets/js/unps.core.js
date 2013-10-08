jQuery(document).ready(function(){
  // When the page loads, we're gonna want to hide the shorten-password and report-details elements
  $("#shorten-password").slideUp("fast");
  $("#report-details").slideUp("fast");
  $('#link').focus();

  $('#error').fadeIn("slow");
  $('textarea').autoResize();
  $('#shortlab').addClass('fbtn');
});

$(function() { // Fairly messy. Changes submit button based on radio button and shows/hides shorten-password and report-details elements
  $("input[type=radio]").on('click', function(){
    if($('#shorten').is(':checked')){
      $("#short-button").html('Shorten');
      $("#report").val('');
      $("#pass").val('');

      $('#shortlab').addClass('fbtn');
      $('#dellab').removeClass('fbtn');
      $('#replab').removeClass('fbtn');
    }
    if ($('#dellink').is(':checked')){
      $("#shorten-password").slideDown("slow");
      $("#short-button").html('Delete');
      $("#report").val('');

      $('#shortlab').removeClass('fbtn');
      $('#dellab').addClass('fbtn');
      $('#replab').removeClass('fbtn');
    }else{ 
      $("#shorten-password").slideUp("slow");
    }
    if($('#replink').is(':checked')){
      $("#report-details").slideDown("slow");
      $("#short-button").html('Report');
      $("#pass").val('');

      $('#shortlab').removeClass('fbtn');
      $('#dellab').removeClass('fbtn');
      $('#replab').addClass('fbtn');
    }else{
      $("#report-details").slideUp("slow");
    }
  });
});

function copyToClipboard(text){
  window.prompt ("Copy to clipboard: Ctrl+C, Enter (when closed I will open your link in a new tab)", text);
}