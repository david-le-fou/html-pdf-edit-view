<script src="jquery.js"></script>
<script src="script.js"></script>
<p> coller html ci-dessous</p>
<div style="display:flex;flex-wrap:nowrap">
    <div style="width:20%;height:95vh">
        <p style="
        color: red;
        font-size: 50px;
        text-align: center;
        background-color: aqua;
        ">action</p>
        <button onclick="valide()">Enregistrer</button>
    </div>
    <div style="width:40%;height:95vh;background-color: aliceblue;">   
        <textarea name="code_html" id="code_html" style="width:100%;height:95vh;background-color: aliceblue;">
            <?php echo htmlentities(file_get_contents('page.php'));?>
        </textarea>
    </div>
   
    <iframe src="http://exo.host/htmltopdf/view.php" style="width:40%;height:95vh"></iframe>
</div>
