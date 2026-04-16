fetch("https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.json")
.then(response => response.json())
.then(data => {
    console.log(data);
    console.log(data.Infogempa.gempa)

    data.Infogempa.gempa.forEach(element => {
        document.getElementById("data-gempa").innerHTML += `${element.Tanggal} <br> ${element.Wilayah} <hr>`
        
    });
})
//gempabumi
//gempabumi terbaru
fetch("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.json")
.then(response => response.json())
.then(data => {
    console.log(data);
    console.log(data.Infogempa.gempa)

   
        document.getElementById("gempa-terbaru").innerHTML += `${data.Infogempa.gempa.Tanggal} <br> ${data.Infogempa.gempa.Wilayah} <img src="https://static.bmkg.go.id/20260406085646.mmi.jpg" alt=""><hr>`
        
})
