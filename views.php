<?php
function editForm($data = [])
{
    if (!$data) $data = [];
?>
    <link rel="stylesheet" href="style.css" type="text/css">
    <div class="header">
        <h1>
            <?php
            if ($data["id"]) echo "Edit";
            else echo "New";
            ?>
            element
        </h1>
        <div class="auLeft">
            <p class="username">username</p>
            <form method="POST">
                <input type="hidden" name="token" value="test">
                <input type="submit" value="Esci">
            </form>
        </div>
    </div>
    <form class="content" method="POST">

        <div class="grid-container">
            <div class="gridItem item1">
                <input type="text" name="title" placeholder="Title">
                <select name="drawType">
                    <option <?php if ($data["drawType"] == "tag" || empty($data["drawType"])) {
                                echo "selected";
                            } ?> value="tag">Tag</option>
                    <option <?php if ($data["drawType"] == "drawing") {
                                echo "selected";
                            } ?> value="drawing">Drawing</option>
                    <option <?php if ($data["drawType"] == "symbol") {
                                echo "selected";
                            } ?> value="symbol">Symbol</option>
                    <option <?php if ($data["drawType"] == "other") {
                                echo "selected";
                            } ?> value="other">Other</option>
                </select>
            </div>
            <div class="gridItem">
                <label for="lang">Language</label><br />
                <select id="lang">
                    <option value="AF">Afrikaans</option>
                    <option value="SQ">Albanian</option>
                    <option value="AR">Arabic</option>
                    <option value="HY">Armenian</option>
                    <option value="EU">Basque</option>
                    <option value="BN">Bengali</option>
                    <option value="BG">Bulgarian</option>
                    <option value="CA">Catalan</option>
                    <option value="KM">Cambodian</option>
                    <option value="ZH">Chinese (Mandarin)</option>
                    <option value="HR">Croatian</option>
                    <option value="CS">Czech</option>
                    <option value="DA">Danish</option>
                    <option value="NL">Dutch</option>
                    <option value="EN">English</option>
                    <option value="ET">Estonian</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finnish</option>
                    <option value="FR">French</option>
                    <option value="KA">Georgian</option>
                    <option value="DE">German</option>
                    <option value="EL">Greek</option>
                    <option value="GU">Gujarati</option>
                    <option value="HE">Hebrew</option>
                    <option value="HI">Hindi</option>
                    <option value="HU">Hungarian</option>
                    <option value="IS">Icelandic</option>
                    <option value="ID">Indonesian</option>
                    <option value="GA">Irish</option>
                    <option value="IT">Italian</option>
                    <option value="JA">Japanese</option>
                    <option value="JW">Javanese</option>
                    <option value="KO">Korean</option>
                    <option value="LA">Latin</option>
                    <option value="LV">Latvian</option>
                    <option value="LT">Lithuanian</option>
                    <option value="MK">Macedonian</option>
                    <option value="MS">Malay</option>
                    <option value="ML">Malayalam</option>
                    <option value="MT">Maltese</option>
                    <option value="MI">Maori</option>
                    <option value="MR">Marathi</option>
                    <option value="MN">Mongolian</option>
                    <option value="NE">Nepali</option>
                    <option value="NO">Norwegian</option>
                    <option value="FA">Persian</option>
                    <option value="PL">Polish</option>
                    <option value="PT">Portuguese</option>
                    <option value="PA">Punjabi</option>
                    <option value="QU">Quechua</option>
                    <option value="RO">Romanian</option>
                    <option value="RU">Russian</option>
                    <option value="SM">Samoan</option>
                    <option value="SR">Serbian</option>
                    <option value="SK">Slovak</option>
                    <option value="SL">Slovenian</option>
                    <option value="ES">Spanish</option>
                    <option value="SW">Swahili</option>
                    <option value="SV">Swedish </option>
                    <option value="TA">Tamil</option>
                    <option value="TT">Tatar</option>
                    <option value="TE">Telugu</option>
                    <option value="TH">Thai</option>
                    <option value="BO">Tibetan</option>
                    <option value="TO">Tonga</option>
                    <option value="TR">Turkish</option>
                    <option value="UK">Ukrainian</option>
                    <option value="UR">Urdu</option>
                    <option value="UZ">Uzbek</option>
                    <option value="VI">Vietnamese</option>
                    <option value="CY">Welsh</option>
                    <option value="XH">Xhosa</option>
                </select>
            </div>
            <div class="gridItem">
                <input type="text" name="lat" placeholder="Latitude [Decimal]" value="<?php if (!empty($data["lat"])) {
                                                                                            echo htmlentities($data["lat"]);
                                                                                        } ?>">
                <input type="text" name="lon" placeholder="Longitude [Decimal]" value="<?php if (!empty($data["lat"])) {
                                                                                            echo htmlentities($data["lon"]);
                                                                                        } ?>">
            </div>
            <div class="gridItem">
                <input type=" text" name="author" placeholder="Author [attributed]" value="<?php if (!empty($data["author"])) {
                                                                                                echo htmlentities($data["author"]);
                                                                                            } ?>">
            </div>
            <div class="gridItem">
                <textarea name="transcription" placeholder="Transcription"><?php if (!empty($data["transcription"])) {
                                                                                echo htmlentities($data["transcription"]);
                                                                            } ?></textarea>
            </div>
            <div class="gridItem">
                <textarea name="description" placeholder="Description"><?php if (!empty($data["description"])) {
                                                                            echo htmlentities($data["description"]);
                                                                        } ?></textarea>
            </div>
            <div class="gridItem">
                <label>Last seen</label><br />
                <input type="date" name="dateRel" value="<?php if (!empty($data["dateRel"])) {
                                                                echo htmlentities($data["dateRel"]);
                                                            } ?>">
                <input type="time" name="timeRel" value="<?php if (!empty($data["timeRel"])) {
                                                                echo htmlentities($data["timeRel"]);
                                                            } ?>">
            </div>
            <div class="gridItem">
                <label>Completion</label><br />
                <select name="completion">
                    <option <?php if ($data["completion"] == "draft") {
                                echo "selected";
                            } ?> value="draft">Draft</option>
                    <option <?php if ($data["completion"] == "partial") {
                                echo "selected";
                            } ?> value="partial">Partial [visibly incomplete]</option>
                    <option <?php if ($data["completion"] == "almostComplete") {
                                echo "selected";
                            } ?> value="almostComplete">Almost complete</option>
                    <option <?php if ($data["completion"] == "complete") {
                                echo "selected";
                            } ?> value="complete">Complete</option>
                </select>
            </div>
            <div class=" gridItem">
                <label>Visibility</label><br />
                <select name="visibility">
                    <option <?php if ($data["visibility"] == "barely") {
                                echo "selected";
                            } ?> value="barely">Barely Visible</option>
                    <option <?php if ($data["visibility"] == "veryDamaged") {
                                echo "selected";
                            } ?> value="veryDamaged">Very Damaged</option>
                    <option <?php if ($data["visibility"] == "damaged") {
                                echo "selected";
                            } ?> value="damaged">Damaged</option>
                    <option <?php if ($data["visibility"] == "good") {
                                echo "selected";
                            } ?> value="good">Good</option>
                    <option <?php if ($data["visibility"] == "excellent") {
                                echo "selected";
                            } ?> value="excellent">Excellent</option>
                    <option <?php if ($data["visibility"] == "perfect") {
                                echo "selected";
                            } ?> value="perfect">Perfect</option>
                </select>
            </div>
            <div class=" gridItem">
                <input type="file">
            </div>
            <div class="gridItem">
                <input type="submit" value="Save">
            </div>
        </div>
    </form>
<?php
}
