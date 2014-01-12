function showPhoto(link, title) {
  var output='<h2>' + title + '</h2>';
  output += '<a href="#" data-rel="back" data-transition="fade">';
  output += '<img class="fullscreen" src="' + link + '" alt="' + title +'" />';
  output += '</a>';
  $('#myphoto').html(output);
}

$(document).ready(function() {
  $("[class^='ui-grid'] img").on('click', function() {
    var mytitle = $( this ).attr('alt');
    var mysrc = $( this ).attr('src').substr(0,$( this ).attr('src').length-7)+'.jpg';
    showPhoto(mysrc, mytitle);
    $.mobile.changePage("#showphoto");
  });
});
