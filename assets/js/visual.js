    document.getElementById("img1").addEventListener('onmouseover',function putInformation(){
        var label = document.getElementById("Label1");

        label.innerHTML = "<h1>Lorem ipsum dolor sit amet consectetur.</h1>";
        console.log("Funciona?");

    }) 

    document.getElementById("img2").addEventListener('click',function putInformation(){
        var label = document.getElementById("Label1");

        label.innerHTML = "<h1>Pelicula 2</h1>";
        console.log("Funciona?");

    })  