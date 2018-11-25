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
