<div class="content_container">
    <h1>Tőzsér Éva - Contact form</h1>
    <?php
    require_once("../admin/Helpers/db_connect.php");
    ?>
    <section class="contact_content">
        <form action="https://jkorpela.fi/cgi-bin/echo.cgi" method="GET" class="contact_form">
            <h2>Contact Us</h2>
            <label for="fullname" class="required">Your name</label>
            <input type="text" name="fullname" id="fullname" required minlength="1" maxlength="64">
            <label for="email" class="required">Your email address</label>
            <input type="email" name="email" id="email" required minlength="1" maxlength="64">
            <label for="tel">Your phone number</label>
            <input type="tel" name="tel" id="tel">
            <label for="object" class="required">Object of your message</label>
            <select name="object" id="object" required>
                <option value disabled selected>--Select an option below--</option>
                <option value="I want Eyelash Extensions">I want Eyelash Extensions</option>
                <option value="I want Eyelash Lift">I want Eyelash Lift</option>
                <option value="I want Eyelash Tinting">I want Eyelash Tinting</option>
                <option value="I want another thing">I want another thing</option>
            </select>
            <label for="message" class="required">Your message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <button>Send your message</button>
        </form>
        <div class="contact_info">
            <a href="./index.html" class="website_logo"><img src="./images/logo.png" alt="Logo Tőzsér Éva" loading="lazy" width="150"></a>
            <address>
                <?php
                $sql = "SELECT * FROM ContactInformations";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($line = $result->fetch_assoc()) {
                ?>
                        <p><?= $line["telnumber"] ?></p>
                        <p><?= $line["address"] ?></p>

                <?php
                    }
                }

                $conn->close();
                ?>
            </address>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5568577.614137464!2d14.223616073354888!3d47.039602129936405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741837bdf37e4c3%3A0xc4290c1e1010!2sHongrie!5e0!3m2!1shu!2shu!4v1704886388180!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</div>