@extends('layouts.main')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
            <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content text-center p-md">
        
                            <h2><span class="text-navy">INSPINIA - Responsive Admin Theme</span>
                            is provided with two main layouts <br>three skins and separate configure options.</h2>
        
                            <p>
                                All config options you can trun on/off from the theme box configuration (green icon on the left side of page).
                            </p>
        
        
                        </div>
                    </div>
                </div>
    </div>
    </div>

   

    <!-- Mainly scripts -->
    <script src="../../admin/js/jquery-2.1.1.js"></script>
    <script src="../../admin/js/bootstrap.min.js"></script>
    <script src="../../admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../../admin/js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="../../admin/js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../../admin/js/inspinia.js"></script>
    <script src="../../admin/js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
@endsection
