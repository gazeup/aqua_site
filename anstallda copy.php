<!-- Namn: Ingela Holmkvist -->
<!-- Datum: 20023-08-06 -->
<!-- Uppgift: Webbprogrammering, Projekt -->

<?php
    include('includes/header.php');
?> 

<div class="content">
    <div class="shadow">
        <h1>Anställda</h1>

        <div class="employee">
            <picture>
            <source media="(min-width: 650px)" srcset="images/anstallda/wilma.jpg">
            <source media="(min-width: 465px)" srcset="images/anstallda/wilma.jpg">
            <img src="images/anstallda/wilma.jpg" alt="Foto av Wilma">
            </picture>

            <h2>Wilma</h2>
            <p>Ledare för Campus Akvarium</p>
            
                
            <picture>
            <source media="(min-width: 650px)" srcset="images/anstallda/cecilia.jpg">
            <source media="(min-width: 465px)" srcset="images/anstallda/cecilia.jpg">
            <img src="images/anstallda/cecilia.jpg" alt="Foto av Cecilia">
            </picture>

            <h2>Cecilia</h2>
            <p>Djurskötare</p>
        

            <picture>
            <source media="(min-width: 650px)" srcset="images/anstallda/sofia.jpg">
            <source media="(min-width: 465px)" srcset="images/anstallda/sofia.jpg">
            <img src="images/anstallda/sofia.jpg" alt="Foto av Sofia">
            </picture>

            <h2>Sofia</h2>
            <p>Dykaransvarig</p>
        

            <picture>
            <source media="(min-width: 650px)" srcset="images/anstallda/johannes.jpg">
            <source media="(min-width: 465px)" srcset="images/anstallda/johannes.jpg">
            <img src="images/anstallda/johannes.jpg" alt="Foto av Johannes">
            </picture>

            <h2>Johannes</h2>
            <p>Kafe anställd</p>
        </div> <!-- employee -->
    </div> <!-- shadow -->

</div> <!-- content -->

<?php
    include('includes/footer.php');
?>