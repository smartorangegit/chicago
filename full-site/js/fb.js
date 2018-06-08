$(".d-close span").click(function(event){
  event.preventDefault();
    $(".modals").hide();
    //var text = "otdel";
  //$.cookie("newotdel",text,{expires: 365, path: '/', domain: 'chicago.kiev.ua'});
});

$(document).ready(function(){
  var str = $.cookie("demoCookie");
  if(str != "facebook"){
    // $(document).mouseleave(function() {
    //
    // });
  function my(){
        $(".modals").show();
  }
  setTimeout(my, 60000);
}
});
  $(".podval a").click(function(event){
    event.preventDefault();
      $(".modals").hide();
    var text = "facebook";
    $.cookie("demoCookie",text,{expires: 365, path: '/', domain: 'chicago.kiev.ua'});
  });
