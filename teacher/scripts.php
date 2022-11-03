  <!-- hiding divs -->
  <script>
  function hidediv()
{
  document.getElementById("hide").style.display="none";
}
  setTimeout("hidediv()", 1000);
</script> 
  <!-- make the sidebar appear disappear and make the span active -->
<script>
   function togglemenu(){
    document.getElementById('sidebar').classList.toggle('active');
   }
  </script>
  <!-- datatables -->
 <script type="text/javascript">
   $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>
<!-- text area design -->
 <script src="ckeditor/ckeditor.js">
 </script>
 <script>
      CKEDITOR.replace('question');
 </script>


<!-- notification dropdown -->
 <script>
var box  = document.getElementById('box');
var down = false;

function toggleNotifi(){
  if (down) {
    box.style.height  = '0px';
    box.style.opacity = 0;
    down = false;
  }else {
    box.style.height  = '430px';
    box.style.opacity = 1;
    down = true;
  }
}
 </script>

 <script>
$(document).ready(function(){
  $("button").click(function(){
    $("#dot").remove();
  });
});
</script>
