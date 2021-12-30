let AlladdQtyElement = document.querySelectorAll(".productCounter .addQty");
for (let addQtyElement of AlladdQtyElement) {
    addQtyElement.addEventListener('click',changeQtyProduct);
}
let AllminusQtyElement = document.querySelectorAll(".productCounter .minusQty");
for (let minusQtyElement of AllminusQtyElement) {
    minusQtyElement.addEventListener('click',changeQtyProduct);
}
function changeQtyProduct(e) {
    e.preventDefault();
    let href = this.href;
    let thisElement = this;
    fetch(this.href)
    .then(
        function (response) {
            return response.json();
        }
    )
    .then(
        function (data) {
            if (data.subject === "changed") {
                let productCounterElement = thisElement.closest('.productCounter');
                let productQty = productCounterElement.querySelector('.productQty')
                productQty.innerText = data.qty;
            }else if(data.subject === "delete"){
                deleterowTable(thisElement);
            }
        }
    )
    .catch(
        function (error) {
            console.log(error);
        }
    )
}

function deleterowTable(e) {
    let rowElement = e.closest('tr');
    rowElement.remove();
}

let AllremoveProduct = document.querySelectorAll("tr .removeProduct");
for (let removeProductElement of AllremoveProduct) {
    removeProductElement.addEventListener('click',removeProductElementEvent);
}
function removeProductElementEvent(e) {
    e.preventDefault();
    let href = this.href;
    let thisElement = this;
    fetch(this.href)
    .then(
        function (response) {
            return response.text();
        }
    )
    .then(
        function (data) {
            if (data === "deletecard") {
                deleterowTable(thisElement);
            }else{
                console.log("errore");
            }
        }
    )
    .catch(
        function (error) {
            console.log(error);
        }
    )
}