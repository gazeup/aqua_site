<!-- Namn: Ingela Holmkvist -->
<!-- Datum: 20023-08-06 -->
<!-- Uppgift: Webbprogrammering, Projekt -->

<?php
    include('includes/header.php');
    include('includes/employee.php');

    $empdb = new Employee();
?> 

<div class="content">
    <div class="shadow">
        <h1>Anställda</h1>

        <div class="employee">
            
            <?php
                $employees = $empdb->getEmployees();

                $empdb->printEmployees($employees);
            ?>

        </div> <!-- employee -->
    </div> <!-- shadow -->

</div> <!-- content -->

<?php
    include('includes/footer.php');
?>