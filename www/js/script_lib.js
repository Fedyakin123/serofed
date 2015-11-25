/**
 * Created by Asus on 29.09.2015.
 */
function ajaxRequest()
{
    try
    {
        var request = new XMLHttpRequest()
    }
    catch(e1)
    {
        try
        {
            request = new ActiveXObject("MsXML2.XMLHTTP")
        }
        catch(e2)
        {
            try
            {
                request = new ActiveXObject("Microsoft.XMLHTTP")
            }
            catch(e3)
            {
                request = false
            }
        }
    }
    return request
}

function delete_article_js(arg,article_id)
{
    var confirmed = confirm('Вы точно хотите удалить эту статью?');
    if (article_id == undefined) {
        var tr = arg.parentNode;
        var art_id = tr.getElementsByTagName("td")[0].innerHTML;
    } else {
        var art_id = article_id;
    }

    var request = new ajaxRequest();
    var params = 'art_id=' + art_id;

    request.open("POST", "/actions/request_handler.php", true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.setRequestHeader("Content-length", params.length);
    request.setRequestHeader("Connection", "close");

    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            if (request.status == 200) {
                location.reload();
                //как сделать чтобы перезагружалась только табличка?
            } else alert("Error 2" + this.statusText);
        }
    };
    if (confirmed) {
        request.send(params);
    }
}

function choose_category_js()
{
    var sel = document.getElementById('categories');
    var val = sel.options[sel.selectedIndex].value;
    location.href='/cabinet/article_list?category_id='+val;

}
function validate_article_js()
{
    var fail = '';
    var sel = document.getElementById('select_cat');
    var val = sel.options[sel.selectedIndex].value;
    var name = document.getElementById('art_header').value;
    fail = (val == 'non_selected') ? 'Не выбрана категория.\n' : '';
    fail += (name == '') ? 'Отсутствует заголовок статьи.' : '';
    if (fail != '') {
        alert(fail);
        return false
    } else {
        return true
    }
}
