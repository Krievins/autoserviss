const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d");

canvas.height = 300;
canvas.width = 400;

let count = 0;


// var x = at.clientX - rect.left;
// var y = at.clientY - rect.top;

canvas.addEventListener("click", function(event) {

    var rect = canvas.getBoundingClientRect();


    const x = event.clientX - rect.left;
    const y = event.clientY - rect.top;

    console.log(x,y)

    ctx.beginPath();
    ctx.arc(x, y, 20, 0, 2 * Math.PI);
    ctx.lineWidth = 3;
    ctx.strokeStyle = '#FF0000';
    ctx.stroke();
    ctx.fillText(count, x, y);

    let parent = document.getElementById('parent');
    let box = document.createElement("div");
    box.id = "box" + count;
    box.innerHTML = "<p>Id:"+ count +"</p> <input type='text' name='mytext[]' value='' />";
    parent.appendChild(box);

    count++;
});