$(document).ready(function() {
    $('#add-user-form').on('submit', function(event) {
        event.preventDefault();
        // Test Api - UU1DJF00970370860
        $.ajax({
            'headers': {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            'url': '/admin/create_user',
            'method': 'POST',
            'dataType': 'JSON',
            'data': {
                'name': $('#name').val(),
                'surname': $('#surname').val(),
                'email': $('#email').val(),
                'phone': $('#phone').val(),
                'username': $('#username').val(),
                'password': $('#password').val(),
                'username': $('#username').val(),
                'role_id': $('#role_id').val(),
            },
            'success': function(response) {
                alert(response.success);
                
                document.getElementById("#add-user-form").reset();
            }   
        });
    });
});