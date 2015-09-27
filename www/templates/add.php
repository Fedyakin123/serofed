<form id="js-new_post_form" name=pf method="POST" enctype="multipart/form-data" action="/asylum/" onSubmit="newPostHandler.validateNewPost(); return false;">
<!--    <input id="js-new_post_media_id" type="hidden" name="media">-->
<!--    <input class="js-new_post_domain_selected" type="hidden" name="domain" value="">-->
    <br><br>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="2" id="js-new_post_body_wysiwyg" style="white-space:nowrap;">
            </td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" valign="top">
                <textarea id="js-new_post_body" name="body" cols="50" rows="8" wrap="VIRTUAL" style="width:100%;height:200px;" class="i-form_text_input i-form_textarea"></textarea>
            </td>
            <script type="text/javascript">
                new wysiwyg($('js-new_post_body_wysiwyg'), $('js-new_post_body'));
                $('js-new_post_body').addEvent('keydown', function (e) {
                    var e = new Event(e);
                    if ((e.meta || e.control) && e.code == 13) {
                        e.preventDefault();
                        newPostHandler.submitNewPost();
                    }
                });
            </script>
            <td width="40%" valign="top">
<!--                <table width="100%" border="0" cellspacing="2" cellpadding="2">-->
<!--                    <tr>-->
<!--                        <td><b>Cпециальные опции:</b></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <table width="100%" border="0" cellspacing="2" cellpadding="2">-->
<!--                                <tr>-->
<!--                                    <td width="10" align="center" valign="middle" bgcolor="#F1F1F1">-->
<!--                                        <input type="checkbox" name="checkbox" value="checkbox" id="checkbox1">-->
<!--                                    </td>-->
<!--                                    <td bgcolor="#F1F1F1"><label for="checkbox1">Закрытый пост != ОТКРЫТЙ ПОСТ</label></td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td width="10" align="center" valign="middle">-->
<!--                                        <input type="checkbox" name="checkbox3" value="checkbox" id="checkbox3">-->
<!--                                    </td>-->
<!--                                    <td><label for="checkbox3">Не смотреть на работе</label></td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td width="10" align="center" valign="middle" bgcolor="#F1F1F1">-->
<!--                                        <input type="checkbox" name="checkbox2" value="checkbox" id="checkbox2">-->
<!--                                    </td>-->
<!--                                    <td bgcolor="#F1F1F1"><label for="checkbox2">Смешная третья опция</label></td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td align="center" valign="middle">-->
<!--                                        <input type="checkbox" name="checkbox45" value="checkbox" id="checkbox45">-->
<!--                                    </td>-->
<!--                                    <td><label for="checkbox45">Паранормальное</label></td>-->
<!--                                </tr>-->
<!--                                <tr bgcolor="#F1F1F1">-->
<!--                                    <td align="center" valign="middle">-->
<!--                                        <input type="checkbox" name="checkbox44" value="checkbox" id="checkbox44">-->
<!--                                    </td>-->
<!--                                    <td><label for="checkbox44">4 -&gt; 8 -&gt; 16</label></td>-->
<!--                                </tr>-->
<!--                                <tr bgcolor="#F1F1F1">-->
<!--                                    <td align="center" valign="middle">-->
<!--                                        <input type="checkbox" name="checkbox43" value="checkbox" id="checkbox43">-->
<!--                                    </td>-->
<!--                                    <td><label for="checkbox43">отключить комментарии</label></td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td align="center" valign="middle">-->
<!--                                        <input type="checkbox" name="checkbox42" value="checkbox" id="checkbox42">-->
<!--                                    </td>-->
<!--                                    <td>-->
<!--                                        <label for="checkbox42"><img src="http://img.dirty.ru/lepro/love.gif" width="20" height="20"><img src="http://img.dirty.ru/lepro/love.gif" width="20" height="20"><img src="http://img.dirty.ru/lepro/love.gif" width="20" height="20"><img src="http://img.dirty.ru/lepro/love.gif" width="20" height="20"><img src="http://img.dirty.ru/lepro/love.gif" width="20" height="20"></label>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                            </table>-->
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td colspan="3">
<!--                <table width="100%" border="0" cellspacing="2" cellpadding="2">-->
<!--                    <tr>-->
<!--                        <td colspan="6" bgcolor="#F1F1F1">-->
<!--                            Выберите категорию <span class="small"><i>(Посты без категории автоматически получают "ПОСТ БЕЗ КАТЕГОРИИ"):</i></span>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr bgcolor="#F1F1F1">-->
<!--                        <td width="3%">-->
<!--                            <input type="radio" name="radiobutton" value="radiobutton" id="radiobutton1">-->
<!--                        </td>-->
<!--                        <td width="30%" bgcolor="F8F8F8"><label for="radiobutton1">Паранормальное</label></td>-->
<!--                        <td width="3%">-->
<!--                            <input type="radio" name="radiobutton" value="radiobutton" id="radiobutton2">-->
<!--                        </td>-->
<!--                        <td width="30%" bgcolor="F8F8F8"><label for="radiobutton2">Книги / Книги</label></td>-->
<!--                        <td width="3%">-->
<!--                            <input type="radio" name="radiobutton" value="radiobutton" id="radiobutton3">-->
<!--                        </td>-->
<!--                        <td width="30%" bgcolor="F8F8F8"><label for="radiobutton3">Дизайн / Книги</label></td>-->
<!--                    </tr>-->
<!--                    <tr bgcolor="#F1F1F1">-->
<!--                        <td width="3%">-->
<!--                            <input type="radio" name="radiobutton" value="radiobutton" id="radiobutton4">-->
<!--                        </td>-->
<!--                        <td width="30%" bgcolor="F8F8F8"><label for="radiobutton4">Фотографии / Книги</label></td>-->
<!--                        <td width="3%">-->
<!--                            <input type="radio" name="radiobutton" value="radiobutton" id="radiobutton5">-->
<!--                        </td>-->
<!--                        <td width="30%" bgcolor="F8F8F8"><label for="radiobutton5">Паранормальное</label></td>-->
<!--                        <td width="3%">-->
<!--                            <input type="radio" name="radiobutton" value="radiobutton" id="radiobutton6">-->
<!--                        </td>-->
<!--                        <td width="30%" bgcolor="F8F8F8" class="small"><label for="radiobutton6">Паранормальное</label></td>-->
<!--                    </tr>-->
<!--                    <tr bgcolor="#F1F1F1">-->
<!--                        <td width="3%">-->
<!--                            <input type="radio" name="radiobutton" value="radiobutton" id="radiobutton7">-->
<!--                        </td>-->
<!--                        <td width="30%" bgcolor="F8F8F8"><label for="radiobutton7">Паранормальное</label></td>-->
<!--                        <td width="3%">-->
<!--                            <input type="radio" name="radiobutton" value="radiobutton" id="radiobutton8">-->
<!--                        </td>-->
<!--                        <td width="30%" bgcolor="F8F8F8"><label for="radiobutton8">Музыка / Книги</label></td>-->
<!--                        <td width="3%">-->
<!--                            <input type="radio" name="radiobutton" value="radiobutton" id="radiobutton9">-->
<!--                        </td>-->
<!--                        <td width="30%" bgcolor="F8F8F8"><label for="radiobutton9">Книги / Паранормальное</label></td>-->
<!--                    </tr>-->

                    <tr>
                        <td colspan="6">
                            <hr noshade size="1">
                            <table width="100%" border="0" cellspacing="4" cellpadding="4">
                                <tr>
                                    <td>
                                        <table width="100%" border="0" cellspacing="4" cellpadding="4">
                                            <tr>
                                                <td style="vertical-align:top;">
                                                    <div class="b-new_post_file_uploader" style="zoom:1; text-align:right; position:relative;" id="js-new_post_file">
                                                        <a href="#" class="b-file_uploader_button"><span class="b-uploader_button_text">я, пожалуй, прикреплю картинку</span></a>
                                                        <div class="b-file_uploader hidden">
                                                            <a href="#" class="b-new_post_delete_file" onclick="newPostHandler.deleteFile(); return false;">я передумал</a>
                                                            <div id="js-file_uploader">
                                                                <a href="#" id="js-file_uploader_button" class="b-file_uploader_browse_button">выбрать файл</a>
                                                                <span class="b-file_uploader_drag" id="js-file_uploader_drag">или перетащить сюда</span>																	</div>
                                                        </div>
                                                    </div>


                                                    <script type="text/javascript">
                                                        newPostHandler.initFileUploader();
                                                    </script>
                                                </td>
                                                <td width="100" align="center" valign="middle" bgcolor="#F1F1F1">
                                                    <input type="image" id="js-new_post_submit" name="dopost" src="/static/i/lepra/yarrr.gif"  title="написать" border="0" alt="написать" onclick="newPostHandler.submitNewPost();">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
