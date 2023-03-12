<tr>
    <td colspan="2" class="td-head">Run Migrations</td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Database migration run</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan migrate</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="migrate" data-smgs="Databse migrations executed successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Database migration run forcefully</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan migrate --force</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="migrate_force" data-cmd="migrate" data-argums="force" data-smgs="Databse migrations executed forcefully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Database seed run</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan db:seed</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="db_seed" data-smgs="Databse seeds executed successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Database seed run forcefully</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan db:seed --force</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="db_seed_force" data-cmd="db_seed" data-argums="force" data-smgs="Databse seeds executed forcefully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Rollback all migrations</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan migrate:reset</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="migrate_reset" data-smgs="Rollback all migrations successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Rollback and re-create all migrations</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan migrate:refresh</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="migrate_refresh" data-smgs="Rollback and re-create all migrations successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Drop all tables and migrate</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan migrate:fresh</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="migrate_fresh" data-smgs="Migration run successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Rollback and re-create all migrations with seeds</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan migrate:refresh --seed</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="migrate_refresh_seed" data-cmd="migrate_refresh" data-argums="seed" data-smgs="Rollback and re-create all migrations with seeds successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Drop all tables and migrate with seeds</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan migrate:fresh --seed</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="migrate_fresh_seed" data-cmd="migrate_fresh" data-argums="seed" data-smgs="Migration run with seeds successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Roll back the latest migration</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan migrate:rollback</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="migrate_rollback" data-smgs="Roll back the latest migration successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Roll back last N no. of migrations</div>
        <div class="mt-ten">
            <span class="command">Command: </span>
            <span class="php-artisan">php artisan migrate:rollback --step=</span>
            <input type="number" id="migrate_rollback_step-param" class="user-input w-sm" min="1" value="1" />
        </div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="migrate_rollback_step" data-cmd="migrate_rollback" data-param="step" data-smgs="Roll back last [paramValue] migration successfully" data-rerun="NO" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
