<style>
    /* Create three equal columns that floats next to each other */
    .card {
        float: left;
        width: 33.33%;
        display: none;
        /* Hide columns by default */
    }

    /* Clear floats after rows */
    .cards-campaigns:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Content */
    .content {
        background-color: white;
        padding: 10px;
    }

    /* The "show" class is added to the filtered elements */
    .show {
        display: block;
    }

    /* Style the buttons */
    .btn {
        border: none;
        outline: none;
        padding: 12px 16px;
        background-color: white;
        cursor: pointer;
    }

    /* Add a grey background color on mouse-over */
    .btn:hover {
        background-color: #ddd;
    }

    /* Add a dark background color to the active button */
    .btn.active {
        background-color: #666;
        color: white;
    }
</style>
<div class="cpnt cpnt-3">
    <div class="grid-buttons">
        <button class="btn active" onclick="filterSelection('todas')"> Mostrar todos</button>
        <button class="btn" onclick="filterSelection('embriaguez')"> Embriaguez</button>
        <button class="btn" onclick="filterSelection('velocidad')"> Velocidad</button>
    </div>
    <div class="cards-campaigns">
        <div class="card card-embriaguez embriaguez">
            emb1
        </div>
        <div class="card card-velocidad velocidad">
            vel1
        </div>

    </div>
</div>
<script>
    filterSelection("todas")

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("card");
        if (c == "todas") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    // Show filtered elements
    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    // Hide elements that are not selected
    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.querySelector(".grid-buttons");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
