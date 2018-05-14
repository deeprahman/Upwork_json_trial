<?php include "html/header.html" ?>
<div class="container" style="width: 450px; margin-top: 55px;">
    <div class="h1 pt-4 pb-3"><?=$data['companyName']?></div>
    <div class="alert alert-secondary">
        <div class="h3 text-center pt-2 pb-2">Choose a valid JSON file</div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>

                        <input class="form-control" type="file" name="file" id="choose-file">
                    </td>
                    <td>
                        <input class="form-control" type="submit" name="submit" value="Upload">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include "html/footer.html" ?>
