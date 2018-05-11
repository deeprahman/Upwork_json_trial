<?php include "html/header.html" ?>
<div class="container" style="width: 450px;">
    <div class="h1"><?=$data['companyName']?></div>
    <div class="alert alert-secondary">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        <label for="choose-file">Upload a valid JDON file</label>
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
