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
                console.log(response)
                // document.getElementById('make').textContent = response;

                console.log(typeof response);

                const reso = JSON.parse(response);
                const make = document.getElementById('make')
                let keys = ['Make', 'Model', 'Model Year']

                keys.forEach(key => {
                    const jekabs = document.createElement("p")
                    jekabs.textContent = key + ": " + reso[key]
                    make.appendChild(jekabs) 
                })
            }
        });
    });
});