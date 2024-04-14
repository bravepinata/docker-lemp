<h2>Step 3: Created Databases</h2>

<p>
    &emsp;Below is a list of required local databases. The databases have been created and
    the tables have been defined.
</p>

<h3>Databases</h3>

<ol>

<?  foreach ($dbs as $db) : ?>

    <li><?= $db['name'] ?></li>

<?  endforeach; ?>

</ol>

<hr/>
