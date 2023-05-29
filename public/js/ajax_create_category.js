$(document).ready(function() {
    $('#add-user-form').on('submit', function(event) {
        event.preventDefault();
        // Test Api - UU1DJF00970370860
        $.ajax({
            'headers': {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            'url': '/admin/create_category',
            'method': 'POST',
            'dataType': 'JSON',
            'data': {
                'category_name': $('#name').val(),
            },
            'success': function(response) {
                alert(response.success);
                
                document.getElementById("#add-user-form").reset();
            }   
        });
    });
});