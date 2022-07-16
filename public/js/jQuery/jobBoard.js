function onlyOneStatus(checkbox, name) {
    var checkboxes = document.getElementsByName(name)
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}