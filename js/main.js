/* Check that the bookingform has been filled in */
function validateForm() {
    let namn = document.forms["divingForm"]["namn"].value;
    let epost = document.forms["divingForm"]["epost"].value;
    let antal = document.forms["divingForm"]["antal"].value;
    let datum = document.forms["divingForm"]["datum"].value;

    /* Check that all there are no empty fields*/
    if (namn == "") {
      alert("Namn måste fyllas i");
      return false;
    }
    if (epost == "") {
        alert("E-post måste fyllas i");
        return false;
    }
    if (antal == "") {
        alert("Antal måste fyllas i");
        return false;
    }
    if (datum == "") {
        alert("Datum måste fyllas i");
        return false;
    }

    /* Check that epost has valid characters*/
    let at = epost.indexOf("@");
    let dot = epost.lastIndexOf(".");

    if (at < 1 || ( dot - at < 2 )) {
        alert("Vänligen fyll i en giltig e-post.");
        return false;
    }

    /* Check that antal has valid numbers*/
    if (isNaN(antal) || antal < 1 || antal > 3) {
        alert("Vi har möjlighet att ta emot max 3 personer per bokning.");
        return false;
    }
}