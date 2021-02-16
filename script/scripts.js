/* $(document).ready(function() {
  $("#tblSample img").click(function() {
      $("#mydelete");
       
      $(this).fadeOut(400, function(){
          $(this).remove();
      });
  });
});
 */
//logic checkbox

$(document).on('change', 'input[type=checkbox]', function () {
    let $this = $(this), $chks = $(document.getElementsByName(this.name)), $all = $chks.filter(".chk-all");
    
    if ($this.hasClass('chk-all')) {
      $chks.prop('checked', $this.prop('checked'));
    } else switch ($chks.filter(":checked").length) {
      case +$all.prop('checked'):
        $all.prop('checked', false).prop('indeterminate', false);
        break;
      case $chks.length - !!$this.prop('checked'):
        $all.prop('checked', true).prop('indeterminate', false);
        break;
      default:
        $all.prop('indeterminate', true);
    }
  });

//custom switch(google)

$('.switch-btn').click(function(){
    $(this).toggleClass('switch-on');
    if ($(this).hasClass('switch-on')) {
        $(this).trigger('on.switch');
        $('#click-text').html('Active');
    } else {
        $(this).trigger('off.switch');
        $('#click-text').html('Inactive');
    }
});

//confirm

bootbox.confirm({
  message: "You want to delete this user?",
  buttons: {
      confirm: {
          label: 'Yes',
          className: 'btn-success'
      },
      cancel: {
          label: 'No',
          className: 'btn-danger'
      }
  },
  callback: function (result) {
      console.log('This user has been deleted: ' + result);
  }
});


