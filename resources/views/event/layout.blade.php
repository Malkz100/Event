<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Event Admin Panel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

</head>
<body style="background: #e2e2e2;">

<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1">
            @yield('content')
        </div>
    </div>
</div>
{{--<script src="//code.jquery.com/jquery-1.10.2.js"></script>--}}
{{--<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>--}}
{{--<script>--}}
{{--    $(function() {--}}
{{--        $( "#datepicker" ).datepicker({format: 'Y-m-d H:i:s'});--}}
{{--    });--}}
{{--    // $("#date-picker").datepicker({--}}
{{--    //     format: 'yy/mm/dd',--}}
{{--    //     autoclose: true,--}}
{{--    //     todayHighlight: true--}}
{{--    // });--}}
{{--</script>--}}
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
    $(function() {
        $('#datetimepicker').datetimepicker({format:'YYYY/MM/DD HH:mm'});
    });
</script>
</html>
