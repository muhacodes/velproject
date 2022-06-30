$(document).ready(function(){


    approve();
    reject();
    PreventSorting();

});

function PreventSorting(){
    // alert('hey');
    $("#mytable th").click(function( event ) {
        event.stopPropagation();
        // Do something
      });
};

function approve(){
   $('.approve').click(function(){
    var id = $(this).data('id');
    // alert(id);

    $.ajax({
        url: '/approve/'+id+' ',

        dataType: 'json',
        success: function (response) {
            var msg = response.message;
            // location.reload(true);
            // alert(msg);

        }
    });
    location.reload(true);
   });
}

function reject(){
    $('.reject').click(function(){
     var id = $(this).data('id');
    //  alert(id);
 
     $.ajax({
         url: '/reject/'+id+' ',
 
         dataType: 'json',
         success: function (response) {
             var msg = response.message;
            //  location.reload(true);
            //  alert(msg);
 
         }
     });
     location.reload(true);
    });
 }