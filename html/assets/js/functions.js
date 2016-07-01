function isDesktop() {
  var isDesktop = window.matchMedia("only screen and (min-width: 760px)");
  if (isDesktop.matches) {
    $(function() {
      $(".dropdown").hover(
        function(){ $(this).addClass('open') },
        function(){ $(this).removeClass('open') }
      );
    });
  }
};
function abreMenu() {
    $( ".menu" ).toggle("fast");
};
function abreBusca() {
    $( ".navbar-form" ).toggle("fast");
}
