fetch("https://al-quran-8d642.firebaseio.com/data.json?print=pretty")
.then(response => response.json())
.then(data => {
    console.log(data);
        data.forEach(element => {
        document.getElementById("card").innerHTML += `
        <div class="col-lg-4 col-md-3 col-sm-12">
            <h2 class="card-title text-success">${element.arti}</h2><br> 
            <p class="card-title text-center" style="font-size : 24px;">${element.asma}<p>
            <p class="card-text" style="text-align: justify;">${element.keterangan}</p> 
            <br>
        </div>
        `
        }
    );
})