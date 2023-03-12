<tr>
    <td colspan="2" class="td-head">Create Default Tables</td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Create cache table migration</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan cache:table</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="cache_table" data-smgs="cache table migration created successfully" data-emgs="cache table migration already exist" data-tabkey="create_cache_table" data-rerun="NO" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Create notifications table migration</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan notifications:table</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="notifications_table" data-smgs="notifications table migration created successfully" data-emgs="notifications table migration already exist" data-tabkey="create_notifications_table" data-rerun="NO" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Create job batches table migration for queue</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan queue:batches-table</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="queue_batches-table" data-smgs="job batches table migration created successfully" data-emgs="job batches table migration already exist" data-tabkey="create_job_batches_table" data-rerun="NO" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Create failed job table migration for queue</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan queue:failed-table</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="queue_failed-table" data-smgs="failed job table migration created successfully" data-emgs="failed job table migration already exist" data-tabkey="create_failed_jobs_table" data-rerun="NO" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Create job table migration for queue</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan queue:table</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="queue_table" data-smgs="job table migration created successfully" data-emgs="job table migration already exist" data-tabkey="create_jobs_table" data-rerun="NO" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Create session table migration</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan session:table</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="session_table" data-smgs="session table migration created successfully" data-emgs="session table migration already exist" data-tabkey="create_sessions_table" data-rerun="NO" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>