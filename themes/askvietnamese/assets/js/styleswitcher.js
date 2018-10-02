function setActiveStyleSheet(title) {
  if (title == 'large'){
    $("p").css("font-size", 18);
  }else if (title == 'standard'){
    $("p").css("font-size", 14);
  }else{
    $("p").css("font-size", 10);
  }
}