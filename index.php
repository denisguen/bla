<!DOCTYPE html>
<html>
 <head>
  
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
  <script>
   const selectElement = document.querySelector('.ice-cream');
   selectElement.addEventListener("change", setVal);
   function setVal(sender){
     const result = document.querySelector('.result');
     result.textContent = `You like ${sender.target.value}`;
   }
  </script>
 </body>
</html>
