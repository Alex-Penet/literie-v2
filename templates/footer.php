<footer>
    <div class="dimensions">
        <p>Vous y découvrirez toures nos dimensions :</p>
        <?php foreach ($data as $key => $value) {
        ?>
            <p><?= $data["name"] ?></p>
        <?php
        } ?>
    </div>

    <div class="marques">
        <p>et toutes nos marque de matelas</p>
        <?php foreach ($data as $key => $value) {
        ?>
            <p><?= $data["name"] ?></p>
        <?php
        } ?>
    </div>

</footer>
</body>

</html>