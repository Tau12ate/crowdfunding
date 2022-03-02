$(document).ready(function() {
    
    // email validation
    $('.email').first().keyup(function () {
        var $email = this.value;
        validateEmail($email);
    });

    function validateEmail(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test(email)) {
            $('.email-validation').css('color', 'red');
            $('.validation-error').css('display', 'block');
            $('.submit-btn').prop('disabled', true);
            $('.auth.theme-one .auto-form-wrapper .form-group .input-group .form-control').css('border-color', 'red');
            $('.auth.theme-one .auto-form-wrapper .form-group .input-group .input-group-append .input-group-text').css('border-color', 'red');
        } else {
            $('.email-validation').css('color', 'green');
            $('.validation-error').css('display', 'none');
            $('.submit-btn').prop('disabled', false);
            $('.auth.theme-one .auto-form-wrapper .form-group .input-group .form-control').css('border-color', '#cfd5db');
            $('.auth.theme-one .auto-form-wrapper .form-group .input-group .input-group-append .input-group-text').css('border-color', '#cfd5db');
        }
    }

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
});