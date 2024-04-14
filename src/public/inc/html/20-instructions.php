<h2>Step 1: Domain Setup</h2>

<p>
    &emsp;Add the entries below to your local hosts file, C:\Windows\System32\drivers\etc\hosts.
</p>

<h3>Host File Entries</h3>

<ul class="no-bullets">

<?  foreach ($hosts as $idx => $host) : ?>
        <li><?= $host['ip'] ?> <?= $host['alias']?></li>
<?  endforeach; ?>

</ul>

<hr/>
