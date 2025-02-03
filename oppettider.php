<!-- Namn: Ingela Holmkvist -->
<!-- Datum: 20023-08-06 -->
<!-- Uppgift: Webbprogrammering, Projekt -->

<?php
    include('includes/header.php');
?> 

<div class="content">
    <div class="shadow">
        <h1>Öppettider</h1>

        <p>
            Mån-Fre 10-17
            <br>
            Lör-Sön 10-14
            <br><br>
            Vänligen observera att öppettider kan variera under högtider.
        </p>
    </div> <!-- shadow -->

    

    <picture>
    <source media="(min-width: 650px)" srcset="images/fishes2.jpg">
    <source media="(min-width: 465px)" srcset="images/fishes2.jpg">
    <img src="images/fishes2.jpg" alt="Picture of aquarium">
    </picture>

</div> <!-- content -->

<?php
    include('includes/footer.php');
?>