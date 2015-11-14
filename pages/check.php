<form id="fileUpload" action="/Home/Upload" method="POST" enctype="multipart/form-data">

    <!-- Main hero unit for a primary marketing message or call to action dropzone="copy f:image/png f:image/gif f:image/jpeg" f:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet f:application/vnd.ms-excel-->
    <div id="dropbox" dropzone="copy f:image/png f:image/gif f:image/jpeg" class="hero-unit">
        <h2 id="droplabel">Drop zone</h2>

        <p id="dnd-notes">Only images file type are supported. Multiupload is not currentrly supported. Once you will
            drop your image in the dropzone, the upload will start.</p>
        <table id="files-list-table">
            <thead>
            <tr>
                <th></th>
                <th>File name</th>
                <th>File size</th>
                <th>Upload status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td id="td-img-preview" class="tableData">
                    <img id="preview" src="" alt="preview will display here"/>
                </td>
                <td id="td-file-name" class="tableData"></td>
                <td id="td-file-size" class="tableData"></td>
                <td id="td-progress-bar" class="tableData">
                    <div id="progressBarBox" class="progress progress-info progress-striped">
                        <div class="bar"></div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <br/>

        <div id="multiupload-alert" class="alert alert-error">
            <h4 class="alert-heading">Warning!</h4>
            <span id="multiupload-alert-message"></span>
        </div>
        <input id="fileSelect" type="file" name="fileSelect"/>

        <p>
            <button id="fallback-submit" type="submit" class="btn btn-primary btn-large">Upload</button>
        </p>
    </div>
</form>