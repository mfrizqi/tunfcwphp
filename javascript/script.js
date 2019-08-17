var sfade = 200;

$("#ToMenu").click(()=>{
    $("#FullMenu").fadeIn(sfade);
    $("#BodyContent").fadeOut(sfade);
})

$("#CloseBtn").click(()=>{
    $("#FullMenu").fadeOut(sfade);
    $("#BodyContent").fadeIn(sfade);
})


// Upload File Forms
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });