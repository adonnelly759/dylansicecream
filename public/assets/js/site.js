function create_image_element(imgSrc) {
    var parent = document.getElementById("ice_cream_wrapper");
    var imgDiv = document.createElement("img");
    imgDiv.classList.add("ice_cream_wrapper");
    imgDiv.src = imgSrc;
    parent.appendChild(imgDiv);
}

function getImage(value){
    value === parseInt(value)
    const url = "/api/image"
    fetch(url, {
        method: "POST",
        body: `value=${value}`,
        headers: { 
            'Content-type': 'application/x-www-form-urlencoded' 
        }
    })
    .then(function(res){return res.json()})
    .then((data) => {
        image = `render/${data[0].image}`
        create_image_element(image)
    })
    .catch((err) => console.log(err));
}