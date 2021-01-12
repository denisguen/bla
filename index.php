<!DOCTYPE html>
<html>
 <head>
  <script>
   const selectElement = document.querySelector('.ice-cream');
   selectElement.addEventListener('change', (event) => {
     const result = document.querySelector('.result');
     result.textContent = `You like ${event.target.value}`;
    });
  </script>
 </head>
 <body>
  <label>Choose an ice cream flavor:
    <select class="ice-cream" name="ice-cream">
      <option value="">Select One …</option>
      <option value="chocolate">Chocolate</option>
      <option value="sardine">Sardine</option>
      <option value="vanilla">Vanilla</option>
    </select>
  </label>

  <div class="result"></div>
 </body>
</html>
