function createImageElement(imgSrc, imgType) {
    var parent = document.getElementById("ice_cream_wrapper");
    var imgDiv = document.createElement("img");
    imgDiv.classList.add("ice_cream_wrapper");
    imgDiv.src = imgSrc;
    imgDiv.setAttribute("data-type", imgType); 
    imgDiv.className = "overlayImage";
    parent.appendChild(imgDiv);
}

function getImage(elementID) {
    const selected = document.querySelector("#" + elementID)
    console.log(selected);
    let values = [...selected.options].filter((x) => x.selected).map((x) => x.value);
    console.log(values);
    for (i = 0; i < values.length; i++) {
        if (!document.getElementById("img" + values[i])) {
            const url = "/api/image"
            fetch(url, {
                method: "POST",
                body: `value=${values[i]}`,
                headers: {
                    'Content-type': 'application/x-www-form-urlencoded'
                }
            })
                .then(function (res) { return res.json() })
                .then((data) => {
                    image = `render/${data[0].image}`
                    createImageElement(image, data[0].group)
                })
                .catch((err) => console.log(err));
        } 
    }
}

function removeItems(typeID){
    let items = document.querySelectorAll(`[data-type='${typeID}']`)
    items.forEach(x => x.remove())
}