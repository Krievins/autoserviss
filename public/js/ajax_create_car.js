const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d");

canvas.height = 300;
canvas.width = 400;

let count = 0;
let canvasCircles = [];

canvas.addEventListener("click", function(event) {
    var rect = canvas.getBoundingClientRect();
    const x = event.clientX - rect.left;
    const y = event.clientY - rect.top;

    console.log(x, y);

    ctx.beginPath();
    ctx.arc(x, y, 10, 0, 2 * Math.PI);
    ctx.lineWidth = 3;
    ctx.strokeStyle = '#FF0000';
    ctx.stroke();
    ctx.fillText(count, x, y);

    // Store the coordinates in the array
    canvasCircles.push({ x: x, y: y });

    let parent = document.getElementById('parent');
    let box = document.createElement("div");
    box.id = "box" + count;
    box.innerHTML = "<p>Id:" + count + "</p> <input type='text' name='mytext" + count + "' value='' />";
    parent.appendChild(box);

    count++;
});




$(document).ready(function() {
    $('#add-user-form').on('submit', function(event) {
        event.preventDefault();

        var inputValues = [];

        $('input[name^="mytext"]').each(function() {
            var inputValue = $(this).val();
            inputValues.push(inputValue);
        });

        // Convert the canvasCircles array to JSON
        // var jsonData = JSON.stringify({
        //     canvas_circles: canvasCircles
        // });

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/create_car',
            method: 'POST',
            dataType: 'JSON',
            data: {
                vin: $('#vin').val(),
                owner_name: $('#owner_name').val(),
                owner_phone: $('#owner_phone').val(),
                number_plate: $('#number_plate').val(),
                brand: $('#make').val(),
                model: $('#model').val(),
                release_year: $('#release_year').val(),
                body_type: $('#body_type').val(),
                motor: $('#motor').val(),
                fuel_type: $('#fuel_type').val(),
                drive_type: $('#drive_type').val(),
                sql_number: $('#sql_number').val(),
                canvas_circles: canvasCircles,
                input_values: inputValues
            },
            success: function(response) {
                alert(response.success);
                $('#add-user-form')[0].reset();
            }
        });
    });
});