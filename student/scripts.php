  <!-- hiding divs -->
  <script>
  function hidediv()
{
  document.getElementById("hide").style.display="none";
}
  setTimeout("hidediv()", 2000);
</script> 

<!-- make the sidebar appear disappear and make the span active -->
<script>
    $(document).ready(function(){
      $(".hamburger").click(function(){
        $(".links-container").toggleClass("active")
      })
    });
  </script>

  <!-- datatables -->
 <script type="text/javascript">
   $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>

<!-- ckeditor for text area -->
 <script src="ckeditor/ckeditor.js">
 </script>
 <script>
      CKEDITOR.replace('question');
 </script>

<!-- show/hide password -->
   <script type="text/javascript">
    const pswrdField = document.querySelector(".forms input[type='password']"),
toggleIcon = document.querySelector(".input-box i");

toggleIcon.onclick = () =>{
  if(pswrdField.type === "password"){
    pswrdField.type = "text";
    toggleIcon.classList.add("active");
  }else{
    pswrdField.type = "password";
    toggleIcon.classList.remove("active");
  }
}
  </script>

<script>
$(document).ready(function(){
  $("a").click(function(){
    $("#dot").remove();
  });
});
</script>

