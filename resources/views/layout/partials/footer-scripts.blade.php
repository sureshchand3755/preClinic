    {{-- <script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script> --}}
    <script src="{{ URL::asset('assets/js/jquery-3.6.1.min.js')}}"></script>
    {{-- <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
    <script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    {{-- <script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script> --}}
    {{-- <script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script> --}}
    {{-- <script src="{{ URL::asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script> --}}
    {{-- <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script> --}}
    <!-- Datatables JS -->
    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/datatables.min.js')}}"></script>

    <!-- Calendar Js -->
	<script src="{{ URL::asset('assets/plugins/simple-calendar/jquery.simple-calendar.js')}}"></script>
	<script src="{{ URL::asset('assets/js/calander.js')}}"></script>

	<!-- Apexchart JS -->
	<script src="{{ URL::asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
	<script src="{{ URL::asset('assets/plugins/apexchart/chart-data.js')}}"></script>

	<!-- Circle Progress JS -->
	<script src="{{ URL::asset('assets/js/circle-progress.min.js')}}"></script>

	<!-- Slick JS -->
	<script src="{{ URL::asset('assets/plugins/slick/slick.js')}}" ></script>


    <script src="{{ URL::asset('assets/js/moment.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/Chart.bundle.js')}}"></script>
    @if(Route::is(['index']))
    <script src="{{ URL::asset('/assets/js/chart.js')}}"></script>
    @endif
    <script src="{{ URL::asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/fullcalendar.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery.fullcalendar.js')}}"></script>
    {{-- <script src="{{ URL::asset('assets/plugins/lightgallery/js/lightgallery-all.min.js')}}"></script> --}}
    <script src="{{ URL::asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>

    <!-- Slimscroll -->
    <script src="{{ URL::asset('assets/js/jquery.slimscroll.js')}}"></script>

	<!-- Select2 Js -->
	<script src="{{ URL::asset('assets/js/select2.min.js')}}"></script>

   {{-- <script src="{{ URL::asset('assets/js/ckeditor.js')}}"></script> --}}
    <script src="{{ URL::asset('assets/js/feather.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/app.js')}}"></script>


    <script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'

                });
            });



//             $(document).ready(function(){
//   $('ul li a').click(function(){
//     $('li a').removeClass("active");
//     $(this).addClass("active");
// });
// });


         </script>
