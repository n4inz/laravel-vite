var inputElm = document.querySelector('input[name=languages]'),
        whitelist = [
                        { value:'Companion Elders', code:'companion_elders' },
                        { value:'Hour Help', code:'hour_help' },
                        { value:'Cook Meal', code:'cook_meal' },
                    ]

        // initialize Tagify on the above input node reference
        var tagify = new Tagify(inputElm, {
            enforceWhitelist: true,
            // whitelist: inputElm.value.trim().split(/\s*,\s*/) // Array of values. stackoverflow.com/a/43375571/104380
        })

        tagify.on('add', onAddTag)
            .on('remove', onRemoveTag)
            .on('input', onInput)
            .on('edit', onTagEdit)
            .on('invalid', onInvalidTag)
            .on('click', onTagClick)
            .on('focus', onTagifyFocusBlur)
            .on('blur', onTagifyFocusBlur)
            .on('dropdown:hide dropdown:show', e => console.log(e.type))
            .on('dropdown:select', onDropdownSelect)

        var mockAjax = (function mockAjax(){
            var timeout;
            return function(duration){
                clearTimeout(timeout); // abort last request
                return new Promise(function(resolve, reject){
                    timeout = setTimeout(resolve, duration || 700, whitelist)
                })
            }
        })()

        // tag added callback
        function onAddTag(e){
            console.log("onAddTag: ", e.detail);
            console.log("original input value: ", inputElm.value)
            tagify.off('add', onAddTag) // exmaple of removing a custom Tagify event
        }

        // tag remvoed callback
        function onRemoveTag(e){
            // console.log("onRemoveTag:", e.detail, "tagify instance value:", tagify.value)
        }

        // on character(s) added/removed (user is typing/deleting)
        function onInput(e){
            console.log("onInput: ", e.detail);
            tagify.whitelist = null; // reset current whitelist
            tagify.loading(true) // show the loader animation

            // get new whitelist from a delayed mocked request (Promise)
            mockAjax()
                .then(function(result){
                    tagify.settings.whitelist = result.concat(tagify.value) // add already-existing tags to the new whitelist array

                    tagify
                        .loading(false)
                        // render the suggestions dropdown.
                        .dropdown.show(e.detail.value);
                })
                .catch(err => tagify.dropdown.hide())
        }

        function onTagEdit(e){

        }

        // invalid tag added callback
        function onInvalidTag(e){
           
        }

        // invalid tag added callback
        function onTagClick(e){
          
        }

        function onTagifyFocusBlur(e){
           
        }

        function onDropdownSelect(e){
           
        }