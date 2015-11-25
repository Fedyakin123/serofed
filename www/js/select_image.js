$(".select_image").click(function()
{
    var url = $(this).attr('href');
    var num = getUrlParam('CKEditorFuncNum');
    window.opener.CKEDITOR.tools.callFunction(num, url);
});

function getUrlParam(paramName)
{
    var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
    var match = window.location.search.match(reParam) ;

    return (match && match.length > 1) ? match[1] : '' ;
}
//кажется ненужный файл