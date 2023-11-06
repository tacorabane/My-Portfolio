// Get the modal
var modal = document.getElementById('myModal');
         
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.querySelectorAll('.thumbnail');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");


for (var i = 0; i<img.length; i++) {
    img[i].onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        modalImg.alt = this.alt;
        captionText.innerHTML = this.alt;
    }
}

 
//if (modal) {
modal.onclick = function() {
    img01.className += " out";
    setTimeout(function() {
        modal.style.display = "none";
        img01.className = "modal-content";
    }, 400);
}    
//}