function createImageElement(imgSrc, imgID, imgType) {
    var parent = document.getElementById("ice_cream_wrapper");
    var imgDiv = document.createElement("img");
    imgDiv.classList.add("ice_cream_wrapper");
    imgDiv.src = imgSrc;
    imgDiv.setAttribute("data-id", imgID); 
    imgDiv.setAttribute("data-type", imgType); 
    //imgDiv.className = "overlayImage";
    parent.appendChild(imgDiv);
}

function getImage(elementID, typeID) {
    const selected = document.querySelector("#" + elementID)
    let values = Array(...selected.options).reduce((acc, option) => {
        if (option.selected === true) {
            acc.push(option.value);
        }
        return acc;
    }, []);
    let existing = currentImages(typeID)
    values.forEach(value => {
                const url = "/api/image"
        fetch(url, {
            method: "POST",
            body: `value=${value}`,
            headers: {
                'Content-type': 'application/x-www-form-urlencoded'
            }
        })
        .then(function (res) { return res.json() })
        .then((data) => {
            image = `render/${data[0].image}`
            if(existing.length != values.length && !compareArrays(existing, values)){
                // Remove images, then loop
                removeAll(typeID)
                createImageElement(image, data[0].id, data[0].group)
            } else {
                console.log("Do nothing")
            }
        })
        .catch((err) => console.log(err)); 
    })
}

function currentImages(group){
    const current = document.querySelectorAll(`[data-type='${group}']`)
    let array = []
    current.forEach(e => array.push(e.getAttribute("data-id")))
    return array
}

function removeAll(typeID){
    let items = document.querySelectorAll(`[data-type='${typeID}']`)
    items.forEach(x => x.remove())
}

function compareArrays(first, second){
    return first.every((e)=> second.includes(e)) && second.every((e)=> first.includes(e));
}