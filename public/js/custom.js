

function funcinit(source,head,editeNum,orderBy,sort) {
     var table = [];
    // window.localStorage.clear();

table.push('<table id="example"   style="width: 100%;"  class="table table-striped table-bordered"><thead><tr>');

  head.forEach(function(element) {  
    table.push('<th>'+element+'</th>');  
}); 
table.push('</tr></thead><tbody>');
// for (var i = 0; i <=10; i++) {
//   table.push('<tr>');  
//      head.forEach(function(element) {  
//     table.push('<td></td>');  
// }); 
//      table.push('</tr>');   
// }

table.push('</tbody><tfoot><tr>');
  head.forEach(function(element) {  
    table.push('<th style="width: 300px;">'+element+'</th>');  
}); 
table.push('</tr></tfoot></table>');

// document.write(table.join(''));
$( "#master-table" ).append(table.join(''));
 $.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});  

 var table = $('#example').DataTable({

ajax: {    
       url: source,
       type: "POST",
       headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
       
},
columnDefs : [
   {

    targets : [editeNum],
     render : function(data, type, row) {
      if(editeNum>0){
 return '<span class="dropdown show"><a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" style="width: 100% " data-toggle="dropdown" aria-expanded="true"><img src="images/editing.png" style="margin-top: 4px; " width="20px"></a><div class="dropdown-menu dropdown-menu-right show" x-placement="top-end"  style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-1961px, -1310px, 0px);"><a class="dropdown-item" id="'+data+'"   onclick="editer1(this.id);" href="#open-modal"><i class="la la-edit"></i>Редактировать</a></div></span>'
      }else{

      }
       
      }
      }
    
   
],  
 keys: true,
  stateSave: true,
        select: {
            style: 'single'
        },
          dom: 'Bfrtip',  buttons: [ {
                extend: 'pdf',
                orientation: 'landscape',
                pageSize: 'LEGAL', 
                className: "buttonsToHide"
            },


            'csv', 'excel','copy',{
                extend: 'print',
                orientation: 'landscape', 
                className: "buttonsToHide",
                pageSize: 'LEGAL'
            },  ],

    });

$('#example').DataTable().column( orderBy ).order( sort ).draw();

    $('#example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
     $('#example tfoot th').each( function () { 
        var title = $(this).text();
        $(this).append( '<p><input class="serch"  type=\'text\'  /></p>' );
    } );



    // Apply the search<i class="fa fa-search" aria-hidden="true" ></i>
 $('#example').DataTable().columns().every( function () {
        var that = this;

        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value ).draw();
            }

 window.localStorage.clear();

        } );
    } );

 $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = parseInt( $('#min').val(), 10 );
        var max = parseInt( $('#max').val(), 10 );
        var age = parseFloat( data[1] ) || 0; // use data for the age column
 
        if ( ( isNaN( min ) && isNaN( max ) ) ||
             ( isNaN( min ) && age <= max ) ||
             ( min <= age   && isNaN( max ) ) ||
             ( min <= age   && age <= max ) )
        {
            return true;
        }
        return false;
    }
);
 $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = parseInt( $('#min1').val(), 10 );
        var max = parseInt( $('#max1').val(), 10 );
        var age = parseFloat( data[2] ) || 0; // use data for the age column
 
        if ( ( isNaN( min ) && isNaN( max ) ) ||
             ( isNaN( min ) && age <= max ) ||
             ( min <= age   && isNaN( max ) ) ||
             ( min <= age   && age <= max ) )
        {
            return true;
        }
        return false;
    }
); 
$(document).ready(function() {
    var table = $('#example').DataTable();
     
    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').keyup( function() {
        table.draw();
    } );
    $('#min1, #max1').keyup( function() {
        table.draw();
    } );    
} );
}





// ---------------------------------------------------------------------

$(window).on('load', function(){
  
$(".msgbox.basic").msgbox({
content: '<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" id="up_all" action="" method="post"><div class="m-portlet__body"><div class="form-group m-form__group row" id="upform"></div></div> <div class="row"> <div class="col-lg-5"></div><div class="col-lg-7"> <input type="button" id="upbtn" class="btn btn-brand btn-danger" value="Отправить"> </div></div></form>'
});

insert_form();


 }); 


function get_max_number() {
    $.ajax({
      
         type: "post",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
         url: "/nojnum",
    success: function(data){

console.log(data);   
         $("input[name='noj1']")[0].value=parseInt(data)+1;
    }
  });
}


function valid(a,int) {

if(int==1){

   if(a.value.length<2){
$('#'+a.id).val(a.value.replace(/[^1-9]/g, '').replace(/(\..*)\./g, '$1'));

  } else{
  $('#'+a.id).val(a.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1'));
}}
else if(int==0){

      if(a.value.length<2){
$('#'+a.id).val(a.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1'));
  }
 else if(a.value.length>1){
  $('#'+a.id).val(a.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'));
}
}
}




 function editer1(id) {


$( ".msgbox.basic" ).click();
console.log(id);
$( "#upform" ).empty();

update_form();

 var data = 'id='+ id ;
   
    $.ajax({
         data: data,
         type: "post",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
         url: "/nojinfo",
    success: function(data){
write_data(data);

      // $("input[name='noj4']").val(data[12]);           
console.log(data[0]);
    },
    error: function (err) {
        if (err.status == 422) { // when status code is 422, it's a validation issue
            console.log(err.responseJSON);
            $('#success_message').fadeIn().html(err.responseJSON.message);
            $( ".m-form__help" ).remove();
            // you can loop through the errors object and show it to the user
            console.warn(err.responseJSON.errors);
            // display errors on each form field
            $.each(err.responseJSON.errors, function (i, error) {
                var el = $(document).find('[name="'+i+'"]');
                el.after($('<span class="m-form__help" style="color:red">'+error[0]+'</span>'));
            });
        }
    }
  });
 }


$(document).on('click','#nbtnk22',function(e) {
      

    var data = $("#a_all").serialize();
    $.ajax({
         data: data,
         type: "post",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
         url: "/submit",
    success: function(data){
       $("#a_all").trigger("reset");
$('#example').DataTable().ajax.reload();                    
get_max_number();

alert_info(data.info);

console.log(data.info);   
         $('#success_message').fadeIn().html(data.message);
    },
    error: function (err) {
        if (err.status == 422) { // when status code is 422, it's a validation issue
            console.log(err.responseJSON);
            $('#success_message').fadeIn().html(err.responseJSON.message);
            $( ".m-form__help" ).remove();
            // you can loop through the errors object and show it to the user
            console.warn(err.responseJSON.errors);
            // display errors on each form field
            $.each(err.responseJSON.errors, function (i, error) {
                var el = $(document).find('[name="'+i+'"]');
                el.after($('<span class="m-form__help" style="color:red">'+error[0]+'</span>'));
            });
        }
    }
  });

  });
$(document).on('click','#upbtn',function(e) {
      

    var data = $("#up_all").serialize();
    $.ajax({
         data: data,
         type: "post",
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
         url: "/nojupdate",
    success: function(data){
       $("#up_all").trigger("reset");
       $( ".jMsgbox-close" ).click();
$('#example').DataTable().ajax.reload();                    
get_max_number();

alert_info(data.info);

console.log(data.info);   
         $('#success_message').fadeIn().html(data.message);
    },
    error: function (err) {
        if (err.status == 422) { // when status code is 422, it's a validation issue
            console.log(err.responseJSON);
            $('#success_message').fadeIn().html(err.responseJSON.message);
            $( ".m-form__help" ).remove();
            // you can loop through the errors object and show it to the user
            console.warn(err.responseJSON.errors);
            // display errors on each form field
            $.each(err.responseJSON.errors, function (i, error) {
                var el = $(document).find('[name="'+i+'"]');
                el.after($('<span class="m-form__help" style="color:red">'+error[0]+'</span>'));
            });
        }
    }
  });

  });

function alert_info(msg) {
  
var _alert = window.alert;
window.alert = function (){
  $.msgbox({type:'success', content: msg});
  // $(".msgbox.info").msgbox({  type: 'info',  content: 'This is an info!',  title: 'Info'});
};
$( ".jMsgbox-success" ).html(msg);
window.alert(msg);
// recover original alert
window.alert = _alert;
  }

  function input_field(form,text,name,oninput,onkeyup,checkbox){
check='';
if(checkbox=='on'){

   console.log(name);

 check='<div class="input-group-prepend"><span class="input-group-text"><input type="checkbox" id="'+name+'_checkbox" onclick="chkd(\''+name+'\')"></span></div>';

}
    $('#'+form).append('<div class="col-lg-1"></div><div class="col-lg-4"><div class="input-group mb-3"><div class="input-group-prepend"> <span class="input-group-text " style="width: 122px;">'+text+'</span></div>    <input type="text" autocomplete="off" oninput="'+oninput+'" value="" class="form-control m-input cl1" name="'+name+'" id="'+name+'" onkeyup="'+onkeyup+'">  '+check+'  </div></div><div class="col-lg-1"></div>');  
    if(checkbox=='on'){
    $("input[name='"+name+"']").prop("readonly",true);
  }
  }

    function chkd(id){   

  if($('#'+id+'_checkbox').is(':checked')){
$("#"+id).prop("readonly",false)
  }else{
$("#"+id).prop("readonly",true)
  } 

   }