<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    {{--    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>--}}
    {{--    All rights reserved.--}}
    <strong>ShoUman-Group</strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.1
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('packages/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('packages/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('packages/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('packages/adminlte/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('packages/adminlte/dist/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('packages/adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('packages/adminlte/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('packages/adminlte/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('packages/adminlte/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('packages/adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('packages/adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('packages/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- General script -->
<script>
    $(function () {
        $(".datatable").DataTable();
        // Change input file name when file is chosen (Required in bootstrap v4)
        $(document).on('change', '.custom-file-input', function (event) {
            $(this).next('.custom-file-label').html(event.target.files[0].name);
            let preview_url = URL.createObjectURL(event.target.files[0]);
            $("#image-preview").attr('src', preview_url);
        });
        $('#flash-overlay-modal').modal();
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    function ToggleActive(active, id, table_name) {
        $.ajax({
            url: "{{ url('ajax/toggleActive') }}",
            type: "POST",
            data: {
                active: active,
                id: id,
                table_name: table_name
            },
            success: function () {
                let img = '';
                let active_val = 0;
                if (active == 1) {
                    img = 'action_active.gif';
                } else {
                    active_val = 1;
                    img = 'action_inactive.gif';
                }
                $("#status-" + id).attr('href', 'javascript:ToggleActive(' + active_val + ',' + id + ', "testimonials")');
                $("#status-" + id + " img").attr('src', '{{asset('icons')}}/' + img);
                Swal.fire({
                    title: "{{trans('adminpanel/general.swal.toggled_title')}}",
                    text: "{{trans('adminpanel/general.swal.toggled_text')}}",
                    icon: 'success'
                });
            }
        });
    }

    function DeleteItem(id, table_name, image_path) {
        Swal.fire({
            title: "{{trans('adminpanel/general.swal.delete_confirmation_title')}}",
            text: "{{trans('adminpanel/general.swal.delete_confirmation_text')}}",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "{{trans('adminpanel/general.swal.delete_confirmation_button')}}"
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "{{ url('ajax/delete') }}",
                    type: "POST",
                    data: {
                        id: id,
                        table_name: table_name,
                        image_path: image_path
                    },
                    success: function () {
                        let table = $('#' + table_name).DataTable();
                        table
                            .row($("#item-" + id))
                            .remove()
                            .draw();
                        Swal.fire({
                            title: "{{trans('adminpanel/general.swal.deleted_title')}}",
                            text: "{{trans('adminpanel/general.swal.deleted_text')}}",
                            icon: 'success'
                        });
                    }
                });
            } else {
                Swal.fire("{{trans('adminpanel/general.swal.cancelled_title')}}", "{{trans('adminpanel/general.swal.cancelled_text')}}", "error");
            }
        });
    }
</script>
<!-- page specific scripts -->
@yield('pagespecificscripts')