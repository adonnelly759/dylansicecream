function createImageElement(imgSrc, imgID) {
    var parent = document.getElementById("ice_cream_wrapper");
    var imgDiv = document.createElement("img");
    imgDiv.classList.add("ice_cream_wrapper");
    imgDiv.src = imgSrc;
    imgDiv.id = "img" + imgID;
    imgDiv.className = "overlayImage";
    parent.appendChild(imgDiv);
}

function displayCream() {
    var checked = document.getElementById("customSwitch1").checked;
    if ((checked == true) && (!document.getElementById("img-cream"))) {
        var parent = document.getElementById("ice_cream_wrapper");
        var imgDiv = document.createElement("img");
        imgDiv.classList.add("ice_cream_wrapper");
        imgDiv.src = base_url + "/assets/images/cream.png";
        imgDiv.className = "overlayImage img-fluid";
        imgDiv.id = ("img-cream");
        parent.appendChild(imgDiv);
    } else {
        var item = document.getElementById("img-cream");
        item.remove();
    }
}

function getImage(elementID) {
    var selected = $("#" + elementID).val();
    var deselected = $("#" + elementID + " option:not(:selected)");
    var removeArr = [];

    for (i = 0; i < deselected.length; i++) {
        removeArr.push(deselected[i].value);
    }

    for (i = 0; i < removeArr.length; i++) {
        if (document.getElementById("img" + removeArr[i])) {
            var item = document.getElementById("img" + removeArr[i]);
            item.remove();
        }
    }

    for (i = 0; i < selected.length; i++) {
        if (!document.getElementById("img" + selected[i])) {
            const url = "/api/image"
            fetch(url, {
                method: "POST",
                body: `value=${selected[i]}`,
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