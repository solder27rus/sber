
<footer>
    <div class="textfooter">сбер</div> 
    <button class="open-button" onclick="openForm()">Чат</button>

<div class="chat-popup" id="myForm">
  <form action="action_page.php" class="form-container" method="post">
    <h1 style="color:black">Чат</h1>

    <label style="color:black" for="msg"><b>Сообщение</b></label>
    <textarea placeholder="Тип сообщения.." name="otzuv" required></textarea>

    <button type="submit" class="btn">Отправить</button>
    <button type="button" class="btn cancel" name="btn_cancel" onclick="closeForm()">Закрыть</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</footer>

</body>
<!-- <script src="forkorzin.js"></script> -->
<script src="scroll.js"></script>
<script src="tovar_kor.js"></script>
<script src="inf_pr.js"></script>
<script src="PROFIL_INF.js"></script>
<script src="course.js"></script>
</html>