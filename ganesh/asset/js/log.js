$(".vl  ").click(function(){
      let name=$("#staticEmail").val();
      let phno=$(".phone").val();
      let latn=$("#exampleFormControlSelect1").val();
      let prlm=$("#exampleFormControlTextarea1").val();

      // let name=$(".form-control").val();
      // let phono=$(".form-control").val();
      // let latn=$(".form-control").val();
      // let prlm=$(".form-control").val();



      alert(name);
      alert(phono);
      // console.log(phono);
      alert(latn);
      alert(prlm);
});

$(".bk").click(function(){
       alert("Booking");
});
// $(".btn").click(function{
//    window.location.href="client.html"
// });
$(function () {
    $('input, select').on('focus', function () {
        $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
    });
    $('input, select').on('blur', function () {
        $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
    });
});