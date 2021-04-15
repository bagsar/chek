    @extends('root.general')
    
    @section('content') 

        
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                      Новый запрос
                    
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <div id="success_message"></div>
                  <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" id="a_all" action="" method="post">
                    <div class="m-portlet__body">
                      <div class="form-group m-form__group row" id="form"></div>
                      <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions--solid">
                          <div class="row">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-7">
                              <input type="button" id="nbtnk22" class="btn btn-brand btn-danger" value="Отправить">
                              </div>
                            </div>
                          </div>
                        </div>
                  </form>
                    </div>
                  </div>
                </div>
              </section>
              <section class="col-lg-12 connectedSortable">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="fas fa-chart-pie mr-1"></i>
                      Запроси
                    
                    </h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content p-0">
                      <div class="card-toolbar">
                        <!--            <div class="dropdown dropdown-inline float-right mb-2 mr-2 show"><button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="svg-icon svg-icon-md"><svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path><path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path></g></svg></span>Export</button><div class="dropdown-menu dropdown-menu-sm dropdown-menu-right show" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-62px, 39px, 0px);" x-placement="bottom-end"><ul class="navi flex-column navi-hover py-2"><li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li><li class="navi-item"><a href="#" class="navi-link" onclick="$('#example').DataTable().buttons(0,4).trigger();"><span class="navi-icon"><i class="la la-print"></i></span><span class="navi-text">Print</span></a></li><li class="navi-item"><a href="#" class="navi-link" onclick="$('#example').DataTable().buttons(0,3).trigger();"><span class="navi-icon"><i class="la la-copy"></i></span><span class="navi-text">Copy</span></a></li><li class="navi-item"><a href="#" class="navi-link" onclick="$('#example').DataTable().buttons(0,2).trigger();"><span class="navi-icon"><i class="la la-file-excel-o"></i></span><span class="navi-text">Excel</span></a></li><li class="navi-item"><a href="#" class="navi-link" onclick="$('#example').DataTable().buttons(0,1).trigger();"><span class="navi-icon"><i class="la la-file-text-o"></i></span><span class="navi-text">CSV</span></a></li><li class="navi-item"><a href="#" class="navi-link" onclick="$('#example').DataTable().buttons(0,0).trigger();"><span class="navi-icon"><i class="la la-file-pdf-o"></i></span><span class="navi-text">PDF</span></a></li></ul></div></div> -->
                      </div>
                      <div style="visibility: hidden;">
                        <a href="javascript:;" class="msgbox basic">Open</a>
                        <a href="javascript:;" class="jMsgbox-close">close</a>
                      </div>
                      <table border="0" cellspacing="5" cellpadding="5" style="float: left;">
                        <tbody>
                          <tr>
                            <td></td>
                            <td>ШИР.ЭТИК.</td>
                          </tr>
                          <tr>
                            <td>Min:</td>
                            <td>
                              <input type="text" id="min" name="min">
                              </td>
                            </tr>
                            <tr>
                              <td>Max:</td>
                              <td>
                                <input type="text" id="max" name="max">
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <table border="0" cellspacing="5" cellpadding="5">
                            <tbody>
                              <tr>
                                <td></td>
                                <td>ДЛ.ЭТИК.</td>
                              </tr>
                              <tr>
                                <td>Min:</td>
                                <td>
                                  <input type="text" id="min1" name="min1">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Max:</td>
                                  <td>
                                    <input type="text" id="max1" name="max1">
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                              <div id="master-table"></div>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="col-lg-6 connectedSortable"></section>
                      <section class="col-lg-6 connectedSortable"></section>
                      <section class="col-lg-12 connectedSortable"></section>
                    </div>
                    <!-- /.row (main row) -->
                  </div>
                  <!-- /.container-fluid -->
                </section>
    
                              <script>
function insert_form(){

input_field('form','НОМЕР','noj1','valid(this,1)','','on');
input_field('form','ФОРМА НОЖА','noj4','','','');
input_field('form','ШИР.ЭТИК','noj2','valid(this,0)','','');
input_field('form','Z','noj8','valid(this,1)','period()','');
input_field('form','ДЛ.ЭТИК','noj3','valid(this,0)','','');
input_field('form','ПЕРИОД','noj9','valid(this,0)','','on');
input_field('form','ЭТ РЯД','noj7','valid(this,1)','','');
input_field('form','М/ЭТ РЯД','noj11','valid(this,0)','','');
input_field('form','ЭТ РАП','noj6','valid(this,1)','','');
input_field('form','М/ЭТ ПО РАП','noj10','valid(this,0)','','');
input_field('form','МАТЕРИАЛ','noj5','','','');
input_field('form','РАД. ЗАКР','noj12','valid(this,0)','','');

}

function write_data(data){
      $("input[name='upnoj1']").val(data[0]);
      $("input[name='upnoj2']").val(data[1]);
      $("input[name='upnoj3']").val(data[2]);
      $("input[name='upnoj4']").val(data[3]);  
      $("input[name='upnoj5']").val(data[4]);
      $("input[name='upnoj6']").val(data[6]);
      $("input[name='upnoj7']").val(data[5]);
      $("input[name='upnoj8']").val(data[7]);
      $("input[name='upnoj9']").val(data[8]);
      $("input[name='upnoj10']").val(data[10]);  
      $("input[name='upnoj11']").val(data[9]);
      $("input[name='upnoj12']").val(data[11]);
}   



function update_form() {

input_field('upform','НОМЕР','upnoj1','valid(this,1)','','on');
input_field('upform','ФОРМА НОЖА','upnoj4','','','');
input_field('upform','ШИР.ЭТИК','upnoj2','valid(this,0)','','');
input_field('upform','Z','upnoj8','valid(this,1)','mperiod()','');
input_field('upform','ДЛ.ЭТИК','upnoj3','valid(this,0)','','');
input_field('upform','ПЕРИОД','upnoj9','valid(this,0)','','on');
input_field('upform','ЭТ РЯД','upnoj7','valid(this,1)','','');
input_field('upform','М/ЭТ РЯД','upnoj11','valid(this,0)','','');
input_field('upform','ЭТ РАП','upnoj6','valid(this,1)','','');
input_field('upform','М/ЭТ ПО РАП','upnoj10','valid(this,0)','','');
input_field('upform','МАТЕРИАЛ','upnoj5','','','');
input_field('upform','РАД. ЗАКР','upnoj12','valid(this,0)','','');
}



funcinit('nojdata',["НОМЕР","ШИР.ЭТИК.","ДЛ.ЭТИК.","ФОРМА НОЖА","МАТЕРИАЛ","ЭТ РЯД.","ЭТ РАП.","z","ПЕРИОД","М/ЭТ РЯД.","М/ЭТ ПО РАП.","РАД. ЗАКР.","РEД."],12,0,'desc');

$(window).on('load', function(){
   get_max_number();














   $(function(){ $('#noj1').click(function(){
    $('#noj1').toggleClass( "swap" );  
    setTimeout(function(){ $('#noj1').removeClass( "swap" ); }, 300);
     
 }) });


$("#noj1").click(function() {
get_max_number();
});


 }); 

function period(){
jQuery("input[name='noj9']")[0].value=(jQuery("input[name='noj8']")[0].value*3175)/1000;
}
function mperiod(){
jQuery("input[name='upnoj9']")[0].value=(jQuery("input[name='upnoj8']")[0].value*3175)/1000;
}

     </script>
          @endsection
    
    
    