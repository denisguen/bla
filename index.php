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
  <input placeholder="Enter some text" name="name"/>
  <p id="values"></p>
 </body>
</html>
