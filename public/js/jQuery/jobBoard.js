function onlyOneStatus(checkbox) {
    var checkboxes = document.getElementsByName('onlyOneStatus')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}