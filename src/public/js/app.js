
$(document).ready(function() {
    $('#word_select_id').on('change',function(e)
    {
        const word_id = e.target.value;
        let defSelectId = $('#def_select_id');
        defSelectId.empty();

        for (const word of words) {
            console.log(word)
            if (word_id == word.id) {
                let definitions = word.definitions;
                for (const def of definitions) {
                    console.log(def)
                    defSelectId.append(`<option value="${def.id}">${def.definition}</option>`);
                }
            }
        }

        defSelectId.show();
        $('#def_select_label').show();
    });
});
