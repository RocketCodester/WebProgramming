<form action="index.php" form method="post">
    <p>
        Please choose all languages you currently know or
        would like to learn in the next 12 months.
    </p>
    <p>
        <label>
            <input type="checkbox"
                   name="languages[]"
                   value="PHP" />
            PHP
        </label>
        <label>
            <input type="checkbox"
                   name="languages[]"
                   value="Perl" />
            Perl
        </label>
        <label>
            <input type="checkbox"
                   name="languages[]"
                   value="Ruby" />
            Ruby
        </label>
        <br />
        <input type="submit" value="Send" name="poll" />
    </p>
</form>

<?php
//foreach ($_POST['languages'] as $language) {
//    switch ($language) {
//        case 'PHP' :
//            echo "PHP? Awesome! <br />";
//            break;
//        case 'Perl' :
//            echo "Perl? Ew. Just Ew. <br />";
//            break;
//        case 'Ruby' :
//            echo "Ruby? Can you say... 'bandwagon?' <br />";
//            break;
//        default:
//            echo "Unknown language!";
//    }
//}
//?>