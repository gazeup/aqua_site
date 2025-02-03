<!-- Namn: Ingela Holmkvist -->
<!-- Datum: 20023-08-06 -->
<!-- Uppgift: Webbprogrammering, Projekt -->

<?php
    include('includes/header.php');
?> 

<div class="content">
    <div class="page shadow">
        <h1>Om Akvariet</h1>

        <p>
        Ayu neon tetra dwarf gourami armored searobin pygmy sunfish poacher, dusky grouper orbicular velvetfish. Mud catfish Mexican golden trout--ghost fish trench bandfish seamoth torrent catfish roanoke bass pencil catfish starry flounder. Moses sole flier skipjack tuna batfish: great white shark flathead yellowtail.
        <br><br>
        Hammerhead shark round stingray bobtail snipe eel ribbon eel roach. Labyrinth fish, crocodile icefish goblin shark dusky grouper tube-eye spiny-back Shingle Fish king-of-the-salmon African lungfish snapper bala shark? Sea chub cichlid cobia sand eel featherfin knifefish. Bamboo shark rough scad Pacific herring crevice kelpfish Pacific hake Atlantic herring Oregon chub pilot fish? Flabby whalefish deepwater cardinalfish; snailfish blue-redstripe danio kelp perch Arctic char Oregon chub madtom codlet spiny-back pufferfish. Tripletail springfish whalefish ponyfish barfish oarfish mahseer queen danio lemon sole wobbegong European minnow firefish tilapia. Scissor-tail rasbora milkfish yellowtail clownfish tilefish, clown triggerfish mudfish goldeye mail-cheeked fish."
        </p>

        <!-- Slideshow container -->
        <div class="slideshow">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <img src="images/clownfish.jpg" alt="Foto av en Clownfisk" style="width:100%">
            <div class="text">Clownfisk</div>
            </div>

            <div class="mySlides fade">
            <img src="images/discus.jpg" alt="Foto av en Discusfisk" style="width:100%">
            <div class="text">Diskusfisk</div>
            </div>

            <div class="mySlides fade">
            <img src="images/lionfish.jpg" alt="Foto av en Drakfisk" style="width:100%">
            <div class="text">Drakfisk</div>
            </div>

            <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
        </div> <!-- slideshow-container -->

    </div> <!-- shadow -->

    <picture>
        <source media="(min-width: 650px)" srcset="images/fishes.jpg">
        <source media="(min-width: 465px)" srcset="images/fishes.jpg">
        <img src="images/fishes.jpg" alt="Picture of aquarium">
    </picture>

    <script src="js/slideshow.js"></script>
    
</div> </div> <!-- content -->

<?php
    include('includes/footer.php');
?>