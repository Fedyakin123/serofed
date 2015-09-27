<script>
    function notice(ths)
    {
        var tr = ths.parentNode,
            art_id = tr.getElementsByTagName("td")[0].innerHTML,
            params,
            request;

        params = "art_id="+art_id;
        request = new XMLHttpRequest();

        request.open("POST","mysql_query.php",true);
        request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        request.setRequestHeader("Content-length",params.length);
        request.setRequestHeader("Connection","close");
        request.onreadystatechange = ajaxCallback();


        function ajaxCallback()
        {
            if (request.readyState == 4)
            {
                if (request.status == 200)
                {
                    if (request.responseText != null)
                    {
//                    document.write("Success");
                        alert("success");
                    }
                } else alert("Error 1");
            } //else alert("Error 2"+this.statusText+request.readyState+art_id+params);
        }
        request.send(params);

    }

</script>
<table border="2" cellpadding="5" class="center2">
    <thead>
    <tr>
        <th>  <!-- перенес из прошлой таблички-->
            ID статьи
        </th>
        <th>
            Название статьи
        </th>
        <th>
            Содержание
        </th>
        <th>
            Дата создания
        </th>
        <th>
            Редактировать
        </th>
        <th>
            Удалить
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (isset($article_list)) {
        foreach ($article_list as $sub_arr) {
            echo '<tr>
                      <td class="article_id">
                         ' . $sub_arr['id'] . '
                      </td>
                      <td>
                         ' . $sub_arr['article_name'] . '
                      </td>
                      <td>
                         ' . $sub_arr['content'] . '
                      </td>
                      <td>
                         ' . $sub_arr['create_date'] . '
                      </td>
                      <td>
                          <form method="post">
                              <input type="submit" name="edit_article_btn" value="EDIT" />
                          </form>
                      </td>
                      <td class="delete_article_btn" onclick="notice(this)">
                          <form method="post">
                              <input type="submit" name="delete_article_btn" value="DELETE" />
                          </form>
                      </td>
                  </tr>';
        }
    }
    ?>
    </tbody>
</table>