<!DOCTYPE html>
<html>
<head>
<script>
  const input = document.querySelector('input');
  const log = document.getElementById('values');
  input.addEventListener('input', updateValue);

function updateValue(e) {
  log.textContent = e.target.value;
}
</script>
</head>
<body>

  <table>
    <tr id="row0">
      <td id="00">
        <input type="text" id="s00">
      </td>
      <td id="01">
        <input type="text" id="s01">
      </td>
      <td id="02">
        <input type="text" id="s02">
      </td>
    </tr>
  </table>
  <br />

  <input type="button" onclick="changeText()" value="Set text of selected option">
  <p id="values"></p>
</body>
</html>
