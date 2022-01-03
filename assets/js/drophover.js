let dropfirstchild = document.querySelectorAll('.drophover:first-child');
if (dropfirstchild.length > 0 ) {
    for (let dropchild of dropfirstchild) {
        dropchild.addEventListener('click',toggledrop)
    }
}
function toggledrop(e) {
    let dropdown = this.closest('.drophover');
    dropdown.classList.toggle('show');
}