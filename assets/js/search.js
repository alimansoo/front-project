let searchInput = document.querySelector('input[type=search]');
if (searchInput) {
    searchInput.addEventListener('keyup',SearchProduct)
}
function SearchProduct(e) {
    let searchcontroller = '../controllers/searchProduct_controller.php'
    fetch(searchcontroller+'?q='+this.value)
    .then(
        function (response) {
            return response.json();
        }
    )
    .then(
        function (data) {
            if (data.status === 1) {
                console.log("render");
                RenderSearchResut(data);
            }else{
                let searchResult = document.querySelector('#searchResult');
                searchResult.classList.remove('show');
            }
            
        }
    )
    .catch(
        function (error) {
            console.log(error);
        }
    )
}

function RenderSearchResut(jsonObject) {
    let searchResult = document.querySelector('#searchResult');
    searchResult.classList.add('show');
    searchResult.innerHTML = "";
    for (let product of jsonObject.data) {
        let option = document.createElement('div')

        let linkElement = document.createElement('a')
        linkElement.href = product.link;
        linkElement.innerText = product.name;

        let image = document.createElement('img')
        image.src = product.image;

        option.appendChild(image);
        option.appendChild(linkElement);
        searchResult.appendChild(option);
    }
}