fetch("https://www.themealdb.com/api/json/v1/1/categories.php")
    .then(response => response.json())
    .then(data => {
        console.log(data);
        console.log(data.categories)
        data.categories.forEach(element => {
            document.getElementById("categories").innerHTML += `
            <div class="col-lg-6">
                <h2 class="text-success">
                ${element.strCategory}</h2>
                <img src="${element.strCategoryThumb}" alt="">
                <br> 
                <p class="fs-6 text" style="text-align: justify;">${element.strCategoryDescription}</p> 
                <hr>
                <br>
            </div>
            `

           


        });


    })