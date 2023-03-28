img.onclick = function() {
modal.style.display = "block";
modalImg.src = this.src;
captionText.innerHTML = this.alt;
}

function closeModal() {
// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }


        <div class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                </div>
            </div>
        </div>
