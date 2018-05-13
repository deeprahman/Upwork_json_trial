<?php include "html/header.html" ?>
    <div id="app-report" class="container-fluid col-md-8 offset-md-2 alert" style="margin-top: 55px;">
    <div class="h1"
         style="text-align: center;padding:30px 50px; text-decoration: underline;"><?= $data['companyName'] ?></div>
    <div class="h3" style="text-align: center;">Weekly Hours of Firstname[loginId] Lastname[loginId]</div>
        <table id="target-table">
            <thead>
            <tr class="lead">
                <td>S.L</td>
                <td>DAY</td>
                <td>HOURS</td>
                <td>YEAR</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <p class="lead">1</p>
                </td>
                <td>
                    <input type="date" class="from-control" name="date1">
                </td>
                <td>
                    <input type="text" class="form-control" name="hours1" placeholder="Hours">
                </td>
                <td>
                    <input type="text" class="form-control" name="job1" placeholder="Job">
                </td>
                <td>
                    <button class="btn" v-on:click="addrow">Add Row</button>
                </td>
                <td>
                    <button class="btn">Subtract Row</button>
                </td>

            </tr>
            </tbody>
        </table>
    </div>

<?php include "html/footer.html" ?>