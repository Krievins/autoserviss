$(document).ready(function() {
    $('#vin').on('blur', function() {
        // Test Api - UU1DJF00970370860
        $.ajax({
            'headers': {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            'url': '/admin/get-car-data',
            'method': 'GET',
            'dataType': 'html',
            'data': {
                'VIN': $('#vin').val()
            },
            'success': function(response) {

                console.log(response);
            
                let obj = JSON.parse(response);

                var map = {

                    'VIN': 'vin',
                    'Make': 'make',
                    'Model': 'model',
                    'Model Year': 'release_year',
                    'Body': 'body_type',
                    'Engine Displacement (ccm)': 'motor',
                    'Fuel Type - Primary': 'fuel_type',
                    'Drive': 'drive_type',
                    'Sequential Number': 'sql_number'

                }

                for (var datafield in obj) {
                    /* map JSON field to Form field */
                        if (!map.hasOwnProperty(datafield)) {
                            continue;
                        }
                        /* field exists? */
                        let field = document.getElementById(map[datafield]);
                        if (field) {
                            /* set value */
                            field.value = obj[datafield];
                        }
                    }
            }
        });
    });
});