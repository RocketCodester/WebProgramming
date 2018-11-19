<!--Form submitted with GET-->
<form action="index.php" method="GET">
    List: <input type="text" name="list" /><br />
    Order by:
    <select name="orderby">
        <option value="name">Name</option>
        <option value="city">City</option>
        <option value="zip">ZIP Code</option>
    </select><br />
    Sort order:
    <select name="direction">
        <option value="asc">Ascending</option>
        <option value="desc">Descending</option>
    </select>
</form>