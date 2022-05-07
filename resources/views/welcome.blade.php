<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <div class="mb-3 xl:w-full md:col-span-2 lg:col-span-4">
      <label for="send" class="form-label inline-block mb-2 text-lg text-gray-800 font-medium">ส่งเมื่อ</label>
      <div class="grid grid-cols-5 gap-4 ">

         <select name="sfrommonth" id="sfrommonth" class="form-select appearance-none block w-full px-3 py-1.5 text-lg text-gray-800 font-medium bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300
                        rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
            <!-- <option>เดือน</option> -->
            <option value="" selected disabled>เดือน</option>
            <option value="1">มกราคม</option>
            <option value="2">กุมภาพันธ์</option>
            <option value="3">มีนาคม</option>
            <option value="4">เมษายน</option>
            <option value="5">พฤษภาคม</option>
            <option value="6">มิถุนายน</option>
            <option value="7">กรกฎาคม</option>
            <option value="8">สิงหาคม</option>
            <option value="9">กันยายน</option>
            <option value="10">ตุลาคม</option>
            <option value="11">พฤศจิกายน</option>
            <option value="12">ธันวาคม</option>
         </select>

         <select name="sfromyear" id="sfromyear" class="form-select appearance-none block w-full px-3 py-1.5 text-lg text-gray-800 font-medium bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300
                        rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
            <option value="" selected disabled>ปี</option>
            <option value="2017">2560</option>
            <option value="2018">2561</option>
         </select>

         <span class=" flex justify-center items-center text-lg text-gray-800 font-medium">ถึง</span>

         <select disabled name="stomonth" id="stomonth" class="form-select appearance-none block w-full px-3 py-1.5 text-lg text-gray-800 font-medium bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300
                        rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
            <!-- <option>เดือน</option> -->
            <option value="" selected disabled>เดือน</option>
            <option value="1">มกราคม</option>
            <option value="2">กุมภาพันธ์</option>
            <option value="3">มีนาคม</option>
            <option value="4">เมษายน</option>
            <option value="5">พฤษภาคม</option>
            <option value="6">มิถุนายน</option>
            <option value="7">กรกฎาคม</option>
            <option value="8">สิงหาคม</option>
            <option value="9">กันยายน</option>
            <option value="10">ตุลาคม</option>
            <option value="11">พฤศจิกายน</option>
            <option value="12">ธันวาคม</option>
         </select>

         <select disabled name="stoyear" id="stoyear" class="form-select appearance-none block w-full px-3 py-1.5 text-lg text-gray-800 font-medium bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300
                        rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
            <option value="" selected disabled>ปี</option>
            <option value="2017">2560</option>
            <option value="2018">2561</option>
         </select>
      </div>
   </div>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script type="text/javascript">
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      $('#sfrommonth').change(function() {
         $('#stomonth').val('')
         $('#stomonth').prop('required', true);
         $('#stomonth').prop('disabled', false);
         var frommonthid = parseInt($(this).val())
         $("#stomonth > option").filter(function() {
            return $(this).attr("value") < frommonthid
         }).prop('disabled', true);

         $("#stomonth > option").filter(function() {
            return $(this).attr("value") >= frommonthid
         }).prop('disabled', false);
      });

      $('#sfromyear').change(function() {
         $('#stoyear').val('')
         $('#stoyear').prop('required', true);
         $('#stoyear').prop('disabled', false);
         var fromyearid = parseInt($(this).val());
         $("#stoyear > option").filter(function() {
            return $(this).attr("value") < fromyearid
         }).prop('disabled', true);

         $("#stoyear > option").filter(function() {
            return $(this).attr("value") >= fromyearid
         }).prop('disabled', false);

         $('#stoyear').change(function() {
            var toyearid = parseInt($(this).val())
            $('#stomonth').val('')
            if (toyearid > fromyearid) {
               $("#stomonth > option").prop('disabled', false);
            } else {
               var frommonthid = $('#sfrommonth option:selected').val()
               $("#stomonth > option").filter(function() {
                  return $(this).attr("value") < frommonthid
               }).prop('disabled', true);
            }
         });
      });
   </script>
</body>

</html>