var row_count = 1;
function addFunc(){

    row_count++;

    var table = document.getElementById("target-table");
    var row = table.insertRow(row_count);
    var cell0= row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell(2);
    var cell3 = row.insertCell(3);
    var cell4 = row.insertCell(4);
    var cell5 = row.insertCell(5);

    cell0.innerHTML = '<span class="lead">'+row_count+'.</span>';
    cell1.innerHTML = '<input type="date" class="from-control" name="date'+row_count+'">';
    cell2.innerHTML = '<input type="text" class="form-control" name="hours'+row_count+'" placeholder="Hours">';
    cell3.innerHTML = '<input type="text" class="form-control" name="job'+row_count+'" placeholder="Job">';
    cell4.innerHTML = '<button class="btn" onclick="addFunc()">Add Row</button>';
    cell5.innerHTML = '<button class="btn" onclick="subFunc()">Subtract Row</button>';

}

function subFunc(){
    if (row_count > 1){
        document.getElementById("target-table").deleteRow(row_count);
        row_count--;
    }
}