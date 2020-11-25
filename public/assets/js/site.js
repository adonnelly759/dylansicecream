function createImageElement(imgSrc, imgID) {
    var parent = document.getElementById("ice_cream_wrapper");
    var imgDiv = document.createElement("img");
    imgDiv.classList.add("ice_cream_wrapper");
    imgDiv.src = imgSrc;
    imgDiv.id = "img" + imgID;
    imgDiv.className = "overlayImage";
    parent.appendChild(imgDiv);
}

function getImage(elementID) {
    var value = $('#' + elementID).val();
    console.log(value);
    for (i = 0; i < value.length; i++) {
        if (!document.getElementById("img" + value[i])) {
            const url = "/api/image"
            fetch(url, {
                method: "POST",
                body: `value=${value[i]}`,
                headers: {
                    'Content-type': 'application/x-www-form-urlencoded'
                }
            })
                .then(function (res) { return res.json() })
                .then((data) => {
                    image = `render/${data[0].image}`
                    createImageElement(image, data[0].id)
                })
                .catch((err) => console.log(err));
        } 
    }
}