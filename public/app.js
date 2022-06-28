$(document).ready(function(){


    approve();
    reject();

});


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