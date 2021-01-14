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
   const result = document.querySelector('.result');

   var allInputs = document.querySelectorAll("input");
   var singleInput;

   selectElement.addEventListener("change", setVal);

   for(singleInput of allInputs) {
     singleInput.addEventListener("change", setVal);
   };

   function setVal(sender){
     //alert(sender.target.type);
     switch (sender.type) {
       case sender.target.type = select-one:
         result.textContent = "Select " + sender.target.type + " " + sender.target.value;
         break;
       default:
         result.textContent = "was anderes " + sender.target.type + " " + sender.target.value;
     }
   }

  </script>
 </body>
</html>
