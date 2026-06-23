//output
console.log("Pesan ini tampil di console browser")

//output alert
alert("Selamat datang")

//output inner html
document.getElementById("nama").innerHTML = "Nama Saya Ahmad"

//variabel
let pesan = "belajar java script itu menyenangkan"
document.getElementById("pesan").innerHTML = pesan

//array
let kompetensi = ["fullstack", "project manager", "UI/UX"]
document.getElementById("kompetensi").innerHTML = kompetensi[2]

//perulangan
kompetensi.forEach(element => {
    //cara pertama
   // document.getElementById("kompetensi").innerHTML +=`<li>${element} </li> `
    //cara kedua
    document.getElementById("kompetensi").innerHTML +="<li>"+ element + "</li>"
});