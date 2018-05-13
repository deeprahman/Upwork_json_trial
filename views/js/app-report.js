let report = new Vue({
    el:"#app-report",
    data:{
        // serial:"S.L",
        heading1:"DAY",
        heading2:"HOURS",
        heading3:"JOB",
        rowCount:1
    },
    methods:{
        addrow:function(){
            var tableRow = document.getElementById("table-row").insertRow(2);
            var tablecol0= tableRow.insertCell(0);
            var tablecol1= tableRow.insertCell(1);
            var tablecol2= tableRow.insertCell(2);
            var tablecol3= tableRow.insertCell(3);
            var tablecol4= tableRow.insertCell(4);
            var tablecol5= tableRow.insertCell(5);
            data.rowCount++;
            cell0.innerHTML=data.rowCount;
            cell1.innerHTML='<input type="date" class="from-control" name="date1">';
            cell1.innerHTML='<input type="text" class="form-control" name="hours1" placeholder="Hours">';
            cell1.innerHTML='<input type="text" class="form-control" name="job1" placeholder="Job">';
            cell1.innerHTML="<button class='btn' @click='addrow'>Add Row</button>";
            cell1.innerHTML="<button class='btn' @click='subrow'>Subtract Row</button>";

        }
    }
});
