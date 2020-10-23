$('#pop').click(function(){
  $('#pop').fadeOut(5000);
  $('#bot').fadeIn(5000);
});
$.ajax({
  url:'new.txt',
  method:'GET' ,
  success:function(data){
    console.log(data);
  }
})
