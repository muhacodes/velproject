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
        success: function (res) {
            alert('jobcard '+res.jobcard+' succesfully approved  ');
            location.reload(true);
            return false;
        },
    });
    
   });
}

function reject(){
    $('.reject').click(function(){
     var id = $(this).data('id');
    //  alert(id);
 
     $.ajax({
        url: '/reject/'+id+' ',
 
        dataType: 'json',
        success: function (res) {
            alert('jobcard '+res.jobcard+' succesfully rejected  ');
            location.reload(true);
            return false;
        },
     });
     
    });
 }