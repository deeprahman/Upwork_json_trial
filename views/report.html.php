<?php include "html/header.html" ?>
    <div id="app-report" class="container-fluid col-md-8 offset-md-2 alert" style="margin-top: 55px;">
    <div class="h1"
         style="text-align: center;padding:30px 50px; text-decoration: underline;"><?= $data['companyName'] ?></div>
    <div class="h3" style="text-align: center;">Weekly Hours of <?=$name?> </div>
        <table id="target-table">
            <thead>
            <tr class="lead">
                <td>serial</td>
                <td class="pl-3">Date</td>
                <td class="pl-3">Hours</td>
                <td class="pl-3">Job</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <p class="lead ml-3">1</p>
                </td>
                <td>
                    <input form="sub-form" type="datetime-local" class="from-control ml-3" name="date1">
                </td>
                <td>
                    <input form="sub-form" type="text" class="form-control ml-3" name="hours1" placeholder="Hours">
                </td>
                <td>
                    <input form="sub-form" type="text" class="form-control ml-3" name="job1" placeholder="Job">
                </td>
                <td>
                    <button  class="btn ml-3" onclick="addFunc()">Add Row</button>
                </td>
                <td>
                    <button class="btn ml-3" onclick="subFunc()">Subtract Row</button>
                </td>

            </tr>
            </tbody>
        </table>
        <form id="sub-form" action="" method="post">
            <input type="submit" class="btn-danger float-right" name="submit" value="Report">
        </form>
    </div>
    <script src="views/js/app.js"></script>
<?php include "html/footer.html" ?>