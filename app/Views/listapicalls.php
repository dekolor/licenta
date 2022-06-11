<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Payload</th>
                <th>Source</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($apicalls as $apicall) { ?>
            <tr>
                <td><?php echo $apicall['payload']; ?></td>
                <td><?php echo $apicall['source']; ?></td>
                <td><?php echo $apicall['timestamp']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>