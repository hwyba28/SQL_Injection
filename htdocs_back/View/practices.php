<!DOCTYPE html>

<?php include($_SERVER['DOCUMENT_ROOT']."/View/common/header.php"); ?>


<?php include($_SERVER['DOCUMENT_ROOT']."/View/common/sidebar.php"); ?>
  <div id="main" style="height: 383px; text-align: center;">
    <form action="practice1.html" method="post" name="search">
    <h3>Search &nbsp; <input type="text" value="search" style="width: 30%;">
      <button type="submit" style="background-color:white; border: none; cursor: pointer;">🔍</button></h3></form>
    <table border="1" width="400px" height="300px"style="margin: 0 auto; margin-bottom:60px;">
      <th>test</th><th>score</th><th>level</th>
      <tr><td><a href="practice1.html">최댓값 구하기</a></td><td>140</td><td>1</td></tr>
      <tr><td>순위 정렬하기</td><td>400</td><td>2</td></tr>
      <tr><td>사칙 연산</td><td>1000</td><td>3</td></tr>
      <tr><td>가운데 글자 가져오기</td><td>1400</td><td>4</td></tr>
      <tr><td>두 정수 사이의 합</td><td>2400</td><td>5</td></tr>
      <tr><td>하노이의 탑</td><td>3200</td><td>#</td></tr>

    </table>
  </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/View/common/footer.php"); ?>

