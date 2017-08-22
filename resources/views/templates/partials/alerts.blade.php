@if(Session::has('title'))
<script type="text/javascript">
      swal({
            title: '{{Session('title')}}',
            text: '{{Session('text')}}',
            type:  '{{Session('type')}}'
            @if(Session::has('timer'))
            ,timer: '{{Session('timer')}}'
            @endif
          });

</script>
@endif
