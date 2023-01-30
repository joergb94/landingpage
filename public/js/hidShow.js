function show_hide(no){
    $(".tab-pane").hide();
    $(".nav-link").removeClass("active");
    $("#div-link"+no).show();
    $("#nav-link"+no).addClass("active");
    $("#div-link"+no).addClass("active");

}
