function getLogout() {
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
       type:'POST',
       url:'/logout',
       success:function(data) {
          $("#logout-form").submit();
       }
    });
}
