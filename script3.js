function show() {
    var table = document.getElementById("myTable"); //assigns the table
    var row = table.insertRow(1); //insert a row in postition 1
    var cell1 = row.insertCell(0); //to insert data in cell 0 row 1
    var cell2 = row.insertCell(1); //to insert data in cell 1 row 1
    //data inserted in cell 0 row 1
    cell1.innerHTML = "Complexes 1,2,3<br/>College of Law<br/>Main Library<br/>College of Medicine and Health Sciences<br/>College of Agriculture and Science Marine<br/>College of Education<br/>College of Science<br/>Shopping Centre<br/>Bus Station"
    //data inserted cell 0 row 1
    cell2.innerHTML = "Complexes 4,5<br/>College of Arts and Social Sciences<br/>Shopping Centre <br/>College of Science<br/>College of Engineering<br/>Centre for Preparatory Studies (CPS)<br/>College of Law<br/>Main Library"
}

function hide() {
    var x = document.getElementById("myTable"); //assigns table
    x.deleteRow(1); //delete row 1
}