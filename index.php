<!-- Namn: Ingela Holmkvist -->
<!-- Datum: 20023-08-06 -->
<!-- Uppgift: Webbprogrammering, Projekt -->

<?php
    include('includes/header.php');
    include('includes/diving.php');

    $mydb = new Diving();
?> 

<div class="content">
    
    <div class="diving shadow" id="confirm">
        <div class="info-diving">
    
        <h2>Boka dykning!</h2>
            <p>Möt hajarna, rockorna och de tropiska fiskarna på nära håll! Vårt dykteam ger instruktioner och vägledning.</p>
            <br>
            <ul>
                <li>40 min</li>
                <li>Max 3 personer</li>
                <li>Klockan 13.00 på vardagar</li>
            </ul>
        </div> <!-- info-diving -->

        <div class="form-diving">
            <form id="bookDiving" name="divingForm" onsubmit="return validateForm()" method="post">
                Namn: <input type="text" name="namn"><br>
                E-post: <input type="text" name="epost"><br>
                Antal personer: <input type="text" name="antal"><br>
                Datum: <input type="text" name="datum"><br>
                <input type="submit" value="Boka dykning!">
            </form>
        </div> <!-- form-diving -->

        
        <?php 
            if(!empty($_POST))
            {
                $mydb->divingBooked($_POST["namn"], $_POST["epost"], $_POST["antal"] , $_POST["datum"]);
                $mydb->confirmSent($_POST["namn"]);
            }
        ?>
        

    </div> <!-- diving -->

    <picture>
        <source media="(min-width: 650px)" srcset="images/mangrove.jpg">
        <source media="(min-width: 465px)" srcset="images/mangrove.jpg">
        <img src="images/mangrove.jpg" alt="Picture of mangrove aquarium">
    </picture>

    <script src="js/main.js"></script>

</div> <!-- content -->

<?php
    include('includes/footer.php');
?>