let count = 0;

const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d");

canvas.addEventListener("click", function(event) {

    const ctx = canvas.getContext("2d");

    const x = event.clientX;
    const y = event.clientY;

    console.log(x,y)
    let parent = document.getElementById('parent');
    let box = document.createElement("div");
    
    ctx.beginPath();
    ctx.arc(x, y, 20, 0, 2 * Math.PI);
    ctx.lineWidth = 3;
    ctx.strokeStyle = '#FF0000';
    ctx.stroke();
    ctx.fillText(count, x, y);

    box.id = "box" + count;
    box.innerHTML = "<p>Id:"+ count +"</p> <input type='text' name='mytext[]' value='' />";


    parent.appendChild(box);
    count++;

});