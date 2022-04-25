let code_zone = $('code-zone');
let ready_code = '';

function codeGenerate(code) {
    console.log(code);
    $('#code-zone').html(code);
}

function parseColumns() {
    let columns = $('[name="columns[]"]');
    let str = '';

    $.each(columns, function (index, value) {
        let parent = $(value).parent().parent();
        let type = $(parent).find('select').val();

        str += ' `' + $(value).val() + '` ' + type + ', ';
    });

    str.substring(0, str.length - 1);

    return str;
}

function addColumn() {
    $('#form #columns').append('<div class="row mt-2"> <div class="col-6"> <input type="text" placeholder="Название столбца" name="columns[]" class="form-control"> </div> <div class="col-6"> <select name="type" id="" class="form-control"> <option value="varchar(255)">Строка</option> <option value="int">Число</option> </select> </div> </div>');
}

$('*').on('input', function () {
    let table_name = '`' + $('[name=table-name]').val() + '`';
    let columns = parseColumns();

    ready_code = 'CREATE TABLE ' + table_name + ' (' + columns + ')';

    codeGenerate(ready_code);
});