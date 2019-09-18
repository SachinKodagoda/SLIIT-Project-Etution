<?php require APPROOT . '/views/_includes/_header.php'; ?>
<style>
    * {
        border-radius: 6px;
        box-sizing: border-box;
    }

    div {
        background-color: grey;
        padding: 20px;
        width: 50%;
        alignment: center;
    }

    input[type=file],
    [type=textarea],
    select {
        width: 92%;
        padding: 5px;
        margin: 8px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: black;
        color: white;
        padding: 11px 19px;
        border: none;
        border-radius: 6px;
        margin: 10px 7px 10px 0;
        width: 45%;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>
</head>

<body>
    <div>
        <form>
            <label for="Choose file"> Choose the file to upload </label>
            <input type="file" id="fileupload" name="file" required>
            <label for="Subjectname"> Subject</label>
            <select name="Subject" id="subname" required>
                <option value="" selected></option>
                <option value="php">PHP</option>
                <option value="css">CSS</option>
                <option value="html">HTML</option>
                <option value="c++">C++</option>
                <option value="javascript">JAVASCRIPT</option>
            </select>
            <label for="Description">Description</label><br>
            <input type="textarea" id="description" style="height:100px;" required><br>
            <input type="submit" value="Upload" id="upload">
            <input type="submit" value="Cancel" id="cancel">
        </form>
    </div>
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>