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
  <input type="text" id="t1" />
  <input type="text" id="t2" />
  <input type="text" id="t3" />

  <div class="result"></div>
  <script>
   const selectElement = document.querySelector('.ice-cream');
   const allInputs = document.querySelector('input');

   selectElement.addEventListener("change", setVal);

   forEach((singleInput in allInputs) => {
     singleInput.addEventListener("change", setVal);
   });

   function setVal(sender){
     switch (sender.type) {
       case select:
         alert("Select");
         break;
       default:
         alert("was anderes");
     }
     const result = document.querySelector('.result');
     result.textContent = `You like ${sender.target.value}`;
   }

  </script>
 </body>
</html>
