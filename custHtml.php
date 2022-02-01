

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="modalStyle.css">
    <script>
        function loadCust() {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("custRows").innerHTML = this.responseText;
                    initModal();
                }
            };
            xhttp.open("GET", "custModel.php", true);
            xhttp.send();
        }

        function initModal(){
            // Get the modal
            var modal = document.getElementById("myModal");

            modal.style.display = "none";

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            }
        }

        function openDetail(name) {

            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("modalContent").innerHTML = this.responseText;
                    // Get the modal
                    var modal = document.getElementById("myModal");
                    modal.style.display = "block";
                }
            };
            xhttp.open("GET", "custDetailModel.php?name="+name, true);
            xhttp.send();
        }


    </script>
    <title>Interstate Plastic</title>
</head>

<body onload="loadCust()">

<div id="outer">
    <div id="inner"><img src="interstate-plastics-logo-2020-smallest.png" alt="Interstate Plastics" /></div>
    <div id="inner"><h2>CRM Customer Information</h2></div>
</div>

<div id="custRows"></div>






<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <span id="modalContent"></span>
    </div>

</div>

<script>

</script>





</body>
</html>

