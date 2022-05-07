<!DOCTYPE html>
<html lang="th">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<style>
   body {
      display: flex;
      align-items: center;
   }

   p {
      margin: 0 15px;
   }
</style>

<body>
   <div class="before">
      <select name="beforeday" id="beforeday">
         <option value="1">มกราคม </option>
         <option value="2">กุมภาพันธ์ </option>
         <option value="3">มีนาคม </option>
         <option value="4">เมษายน </option>
         <option value="5">พฤษภาคม </option>
         <option value="6">มิถุนายน </option>
         <option value="7">กรกฎาคม </option>
         <option value="8">สิงหาคม </option>
         <option value="9">กันยายน </option>
         <option value="10">ตุลาคม </option>
         <option value="11">พฤศจิกายน </option>
         <option value="12">ธันวาคม </option>
      </select>
      <select name="beforeyear" id="beforeyear">
         <option value="2565">2565</option>
         <option value="2566">2566</option>
         <option value="2567">2567</option>
      </select>
   </div>
   <p>ถึง</p>
   <div class="after">
      <select name="afterday" id="afterday">
         <option value="1">มกราคม </option>
         <option value="2">กุมภาพันธ์ </option>
         <option value="3">มีนาคม </option>
         <option value="4">เมษายน </option>
         <option value="5">พฤษภาคม </option>
         <option value="6">มิถุนายน </option>
         <option value="7">กรกฎาคม </option>
         <option value="8">สิงหาคม </option>
         <option value="9">กันยายน </option>
         <option value="10">ตุลาคม </option>
         <option value="11">พฤศจิกายน </option>
         <option value="12">ธันวาคม </option>
      </select>
      <select name="afteryear" id="afteryear">
         <option value="2565">2565</option>
         <option value="2566">2566</option>
         <option value="2567">2567</option>
      </select>
   </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script type="text/javascript">
   $(document).ready(function() {



      $("#beforeyear").change(function() {
         var beforeyear = parseInt($(this).val())
         $("#afteryear > option").filter(function() {
            return $(this).attr("value") < beforeyear
         }).prop('disabled', true);
         console.log(beforeyear)
      })




      $("#beforeday").change(function() {
         var beforeday = parseInt($(this).val())
         $("#afterday > option").filter(function() {
            return $(this).attr("value") < beforeday
         }).prop('disabled', true);
         console.log(beforeday)
      });


   });
</script>

</html>