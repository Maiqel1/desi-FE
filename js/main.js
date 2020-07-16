$('#form').on('submit', function (e){
  e.preventDefault();

  $.post(
    "getnotified.inc.php"
    $('#form').serialize(),
    function(data) {
      const res = JSON.parse(data);

      if (res.signal === 'ok') {
        toastr.success(res.msg);
        $('#msg').hide();
        $('#form input').val(function () {
          return '';
        });
      } else {
        toastr.error(res.msg);
      }
    }
  );

});
