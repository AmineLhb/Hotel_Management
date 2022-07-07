<!DOCTYPE html>
<html>
    <?php require("head.php");?>
    <body>
    <?php require("header.php");?>
            <div class="grid-container">
                    <img onclick="imagezoom(1)" id="1" class="myImg" src="images/Chambre1.jpg">
                    <img onclick="imagezoom(2)" id="2" class="myImg" src="images/Chambre2.jpg">
                    <img onclick="imagezoom(3)" id="3" class="myImg" src="images/Chambre3.jpg">
                    <img onclick="imagezoom(4)" id="4" class="myImg" src="images/Chambre4.jpg">
                    <img onclick="imagezoom(5)" id="5" class="myImg" src="images/Chambre5.jpg">
                    <img onclick="imagezoom(6)" id="6" class="myImg" src="images/Chambre6.jpg">
                    <img onclick="imagezoom(7)" id="7" class="myImg" src="images/Chambre7.jpg">
                    <img onclick="imagezoom(8)" id="8" class="myImg" src="images/Chambre8.jpg">
                    <img onclick="imagezoom(9)" id="9" class="myImg" src="images/Chambre9.jpg">
                    <img onclick="imagezoom(10)" id="10" class="myImg" src="images/Chambre10.jpg">
                    <!-- The Modal -->
                    <div id="myModal" class="modal">    
                       <span onclick="document.getElementById('myModal').style.display='none'" class="close" title="Close Modal">&times;</span>
                       <img class="modal-content" id="img01">
                       <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                       <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>    
            </div>
            <?php require("footer.php");?>
            <script src="script.js"></script>
<script>
// Get the modal
var modal = document.getElementById('myModal');
 
// Get the image and insert it inside the modal - use its "alt" text as a caption
var modalImg = document.querySelector(".modal-content");
var prev =document.querySelector('.prev');
function imagezoom(slide){
    var img = document.getElementById(slide);
    modal.style.display = "block";
    modalImg.src = img.src;
    modalImg.alt = img.alt;
    modalImg.id = img.id;
    
}
function plusSlides(val){
    slide=modalImg.id;
    console.log(slide);
    if(slide==1 && val==-1){
        imagezoom(10);
    }else if(slide==10 && val==+1){
        imagezoom(1);
    }else{
        imagezoom(parseInt(slide)+val);
    }
    console.log(parseInt(slide)+val);

}
  
    
</script>
    
        </body>
</html>