<div class="content_container prestation padding_less">
    <?php
    require_once("../admin/Helpers/db_connect.php");
    ?>
    <?php
    $sql = "SELECT * FROM PrestationsList WHERE id = 2";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($line = $result->fetch_assoc()) {
    ?>
            <h1><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="currentColor">
                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                </svg> Tőzsér Éva - <?= $line["title"] ?> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="currentColor">
                    <path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z"></path>
                </svg></h1>
            <section>
                <div>
                    <div class="top_text">
                        <h2><?= $line["title"] ?></h2>
                        <p>Duration : ~<?= $line["duration"] ?></p>
                    </div>
                    <hr>
                    <p><?= $line["description"] ?></p>
                </div>
                <img src="../images/prestation2.png" alt="Eyelash Extension" loading="lazy">
            </section>
            <table class="prestation_table">
                <thead>
                    <tr>
                        <th>Price</th>
                        <th>Salon</th>
                        <th>Prestation</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= number_format($line["price"], 2) ?> Ft</td>
                        <td><?= $line["salon"] ?></td>
                        <td><?= $line["prestation"] ?></td>
                        <td>~<?= $line["duration"] ?></td>
                    </tr>
                </tbody>
            </table>
    <?php
        }
    }

    $conn->close();
    ?>

</div>