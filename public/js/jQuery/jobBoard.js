function onlyOneStatus(checkbox, name) {
    var checkboxes = document.getElementsByName(name)
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}

function chileAge(checkbox, name) {
    var checkboxes = document.getElementsByName(name)
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}

function chileGender(checkbox, name) {
    var checkboxes = document.getElementsByName(name)
    checkboxes.forEach((item) => {
        console.log(item.id)
        if (item !== checkbox) item.checked = false
    })
}

function onlyOneSetting(checkbox, name){

    var tmp = ` <div id="checklist-EB5757" class="absolute bottom-0 right-0 w-5 h-5 rounded-full bg-palet flex items-center justify-center">
                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6866 0.313439C11.8818 0.508701 11.8818 0.825283 11.6866 1.02055L5.01989 7.68721C4.82463 7.88247 4.50805 7.88247 4.31279 7.68721L0.979454 4.35388C0.784192 4.15862 0.784192 3.84203 0.979454 3.64677C1.17472 3.45151 1.4913 3.45151 1.68656 3.64677L4.66634 6.62655L10.9795 0.313439C11.1747 0.118177 11.4913 0.118177 11.6866 0.313439Z" fill="white"/>
                    </svg>  
                </div>`;

        var checkboxes = document.getElementsByName(name)
        checkboxes.forEach((item) => {


        if (item !== checkbox){
            item.checked = false

        }
        
        if(item.checked){
            console.log(item.value)
            $('#checklist-'+item.value).html(tmp)
        }else{
            $('#checklist-'+item.value).html('')
        }
    })
}

function onlyOneJob(checkbox, name) {
    var checkboxes = document.getElementsByName(name)
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
