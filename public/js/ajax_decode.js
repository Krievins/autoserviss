$(document).ready(function() {
    $('#vin').on('blur', function() {
        // alert('Works On Blur')
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
            
                let obj = JSON.parse(response);

                console.log(obj);

                let parent1 = document.getElementById('car_left').children;
                let parent2 = document.getElementById('car_right').children;

                let id1 = parent1;
                let id2 = parent2;

                // console.log(id);

                var map = {
                    
                    vin: "VIN",
                    owner_name: " ",
                    make: "Make",
                    model: "Model",
                    release_year: "Model Year",
                    body_type: "Body",
                    motor: "Engine Displacement (ccm)",
                    fuel_type: "Fuel Type - Primary",
                    drive_type: "Drive",
                    sql_number: "Sequential Number"

                }

                for (let i = 0; i < id1.length ; i++) {
                    if (id1[i].id) {
                    console.log(id1[i]);
                    console.log( typeof id1[i].id);
                    console.log(map[id1[i].id])
                    document.getElementById(id1[i].id).value = obj[map[id1[i].id]]
                    }

                }

                for (let i = 0; i < id2.length ; i++) {
                    if (id2[i].id) {
                    console.log(id2[i]);
                    console.log( typeof id2[i].id);
                    console.log(map[id2[i].id])
                    document.getElementById(id2[i].id).value = obj[map[id2[i].id]]
                    }
                }

                
                
            }
        });
    });
});