@extends('admin.layouts.layout')

@section('title')
  users control
@endsection


@section('header')
<link rel="stylesheet" href="URL::asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

@endsection


@section('content')
<section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>DataTables</h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{url('/adminpanel')}}">Home</a></li>
             <li class="breadcrumb-item"><a href="{{url('/adminpanel/users')}}">Users Control</a></li>

             <li class="breadcrumb-item active">DataTables</li>
           </ol>
         </div>
       </div>
     </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="row">
       <div class="col-12">
         <div class="card">
           <div class="card-header">
             <h3 class="card-title">DataTable with minimal features & hover style</h3>
           </div>
           <!-- /.card-header -->
           <div class="card-body">
             <table id="data" class="table table-bordered table-hover">
               <thead>
               <tr>
                 <th>#</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Created at</th>
                 <th>permissions</th>
                 <th>Control</th>

               </tr>
               </thead>
               <tbody>

               </tbody>
               <tfoot>
               <tr>
                 <th>#</th>
                 <th>Name</th>
                 <th>Email)</th>
                 <th>Created at</th>
                 <th>permissions</th>
                 <th>Control</th>
               </tr>
               </tfoot>
             </table>
           </div>
         </div>


             </section>
@endsection



@section('footer')

<script src="/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script type="text/javascript">

  var lastIdx = null;

      $('#data thead th').each( function () {
          if($(this).index()  < 4 ){
              var classname = $(this).index() == 6  ?  'date' : 'dateslash';
              var title = $(this).html();
              $(this).html( '<input type="text" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" البحث '+title+'" />' );
          }else if($(this).index() == 4){
              $(this).html( '<select><option value="0"> عضو </option><option value="1"> مدير الموقع </option></select>' );
          }

      } );

      var table = $('#data').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{ url('/adminpanel/users/data') }}',
          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'created_at', name: 'created_at'},
              {data: 'admin', name: 'admin'},
            //  {data: 'exame', name: 'exame'},
              {data: 'control', name: ''}
          ],
          "language": {
              "url": "{{ Request::root()  }}/admin/cus/Arabic.json"
          },
          "stateSave": false,
          "responsive": true,
          "order": [[0, 'desc']],
          "pagingType": "full_numbers",
          aLengthMenu: [
              [25, 50, 100, 200, -1],
              [25, 50, 100, 200, "All"]
          ],
          iDisplayLength: 25,
          fixedHeader: true,

          "oTableTools": {
              "aButtons": [


                  {
                      "sExtends": "csv",
                      "sButtonText": "ملف اكسل",
                      "sCharSet": "utf16le"
                  },
                  {
                      "sExtends": "copy",
                      "sButtonText": "نسخ المعلومات",
                  },
                  {
                      "sExtends": "print",
                      "sButtonText": "طباعة",
                      "mColumns": "visible",


                  }
              ],

              "sSwfPath": "{{ Request::root()  }}/admin/cus/copy_csv_xls_pdf.swf"
          },

          "dom": '<"pull-left text-left" T><"pullright" i><"clearfix"><"pull-right text-right col-lg-6" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-6" pi > <"pull-left text-left" l><"clearfix"> '
          ,initComplete: function ()
          {
              var r = $('#data tfoot tr');
              r.find('th').each(function(){
                  $(this).css('padding', 8);
              });
              $('#data thead').append(r);
              $('#search_0').css('text-align', 'center');
          }

      });

      table.columns().eq(0).each(function(colIdx) {
          $('input', table.column(colIdx).header()).on('keyup change', function() {
              table
                      .column(colIdx)
                      .search(this.value)
                      .draw();
          });




      });



      table.columns().eq(0).each(function(colIdx) {
          $('select', table.column(colIdx).header()).on('change', function() {
              table
                      .column(colIdx)
                      .search(this.value)
                      .draw();
          });

          $('select', table.column(colIdx).header()).on('click', function(e) {
              e.stopPropagation();
          });
      });


      $('#data tbody')
              .on( 'mouseover', 'td', function () {
                  var colIdx = table.cell(this).index().column;

                  if ( colIdx !== lastIdx ) {
                      $( table.cells().nodes() ).removeClass( 'highlight' );
                      $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
                  }
              } )
              .on( 'mouseleave', function () {
                  $( table.cells().nodes() ).removeClass( 'highlight' );
              } );





</script>
@endsection
