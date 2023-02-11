<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="CodeExample">
    <meta name="author" content="Anirban"> 

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link rel="shortcut icon" href="favicon.ico"> 
    
       
    <script defer src="{{asset('backend/assets/plugins/fontawesome/js/all.min.js')}}"></script>
    <link id="theme-style" rel="stylesheet" href="{{asset('backend/assets/css/portal.css')}}">

	{{-- new add --}}
	<link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-v5.15.4/css/all.css')}}">
    {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css" integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="  crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.4.1/css/bootstrap.min.css">
     --}}

    <!-- Select2 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">

    {{-- <link rel="stylesheet" href="{{asset('backend/css/adminlte.min.css')}}"> --}}
    
    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet"> --}}

    
    <link href="{{asset('backend/plugins/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/plugins/toastr/toastr.css')}}" rel="stylesheet"/>
    <link href="{{asset('backend/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/js/get_client_info.js')}}"></script>
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/colors.css')}}" rel="stylesheet">
    @livewireStyles
    @stack('styles')

</head> 

<body class="app">   	
    <header class="app-header fixed-top">
		@include('back_end.commons.topbar')
		@include('back_end.commons.sidebar')
	</header>
	<div class="app-wrapper">
		<div class="app-content pt-3 p-md-3 p-lg-4">
			@yield('content')
		</div>
		@include('back_end.commons.footer')
	</div>
	

	<script src="{{asset('backend/assets/plugins/popper.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/chart.js/chart.min.js')}}"></script>
	<script src="{{asset('backend/assets/js/index-charts.js')}}"></script>

	<script src="{{asset('backend/assets/js/app.js')}}"></script>

	{{-- <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
    <script src="{{asset('backend/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{asset('backend/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
    <script src="{{asset('backend/plugins/popper/popper.min.js')}}"></script>

    <!-- InputMask -->
    <script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('backend/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
    <!-- date-range-picker -->
    <script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap color picker -->
    <script src="{{asset('backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Bootstrap Switch -->
    <script src="{{asset('backend/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>

    <script src="{{asset('backend/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('backend/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>

	<script>
        $(function () {
          //Initialize Select2 Elements
          $('.select2').select2()
      
          //Initialize Select2 Elements
          $('.select2bs4').select2({
            theme: 'bootstrap4'
          })

          $('[data-toggle="tooltip"]').tooltip()
          
      
          //Datemask dd/mm/yyyy
          $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
          //Datemask2 mm/dd/yyyy
          $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
          //Money Euro
          $('[data-mask]').inputmask()
      
          //Date range picker
          $('#reservation').daterangepicker()
          //Date range picker with time picker
          $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
              format: 'MM/DD/YYYY hh:mm A'
            }
          })
          //Date range as a button
          $('#daterange-btn').daterangepicker(
            {
              ranges   : {
                'Today'       : [moment(), moment()],
                'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate  : moment()
            },
            function (start, end) {
              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
          )
      
          //Timepicker
          $('#timepicker').datetimepicker({
            format: 'LT'
          })
          
          //Bootstrap Duallistbox
          $('.duallistbox').bootstrapDualListbox()
      
          //Colorpicker
          $('.my-colorpicker1').colorpicker()
          //color picker with addon
          $('.my-colorpicker2').colorpicker()
      
          $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
          });
      
          $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
          });
      
        })
      </script>
	  @livewireScripts
	  @stack('scripts')

	  <script>
        window.onscroll = function() {handleStickyHeader()};
        
        var header = document.getElementById("stickyHeader");
        var sticky = header.offsetTop;
        
        function handleStickyHeader() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
    </script>
	<script>
        $(document).ready( function() {
            $('.dropdown-toggle').dropdown();
        });

		const sweet_confirm_alert=function sweet_confirm_alert(type='warning',title='Are you sure?',desc='',confirm_btn_txt='Yes',cancel_btn_txt='No',showCancelButton=true){
            return new Promise((resolve, reject) => {
                Swal.fire({
                    title: title,
                    text: desc,
                    type: type,
                    showCancelButton: showCancelButton,
                    confirmButtonText: confirm_btn_txt,
                    confirmButtonClass: 'btn btn-primary',
                    confirmButtonColor: '#3085d6',
                    cancelButtonText: cancel_btn_txt,
                    cancelButtonClass: 'btn btn-danger ml-1',
                    cancelButtonColor: '#d33',
                    buttonsStyling: false,
                }).then(function (result) {
                    if(result.value){resolve(true);}else{resolve(false);} 
                });
            });
        }
        window.addEventListener('toster_alert', event => { 
            toastr[event.detail.type](event.detail.message, event.detail.title ?? ''), toastr.options = {"closeButton": true,"progressBar": true,}
        });
        window.addEventListener('sweet_alert', event => { sweet_confirm_alert(event.detail.message,'','Yes','No');});
		window.addEventListener('sweet_alert_success', event => {  sweet_confirm_alert('success',event.detail.message,'','OK','',false);});
        window.addEventListener('sweet_alert_error', event => { sweet_confirm_alert('warning',event.detail.message,'','OK','',false);});
        window.addEventListener('show-delete-confirm', event => { 
            Swal.fire({
                    title: 'Are you sure?',
                    text: "you won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: "Yes",
                    confirmButtonClass: 'btn btn-primary',
                    confirmButtonColor: '#3085d6',
                    cancelButtonText: "No",
                    cancelButtonClass: 'btn btn-danger ml-1',
                    cancelButtonColor: '#d33',
                    buttonsStyling: false,
                }).then(function (result) {
                    if (result.value) {
                        Livewire.emit('deleteConfirmed')
                    } 
                });
        });
	</script>
</body>
</html> 

