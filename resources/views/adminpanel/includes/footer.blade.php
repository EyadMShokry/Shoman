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

<!-- PAGE SCRIPTS -->
<script src="{{asset('packages/adminlte/dist/js/pages/dashboard2.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('packages/adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('packages/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- General script -->
<script>
    $(function () {
        $(".datatable").DataTable();
    });
</script>