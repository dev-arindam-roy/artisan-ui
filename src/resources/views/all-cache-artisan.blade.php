<!-- cache clear -->
<tr>
    <td colspan="2" class="td-head">Cache</td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Application cache clear</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan cache:clear</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="cache_clear" data-smgs="cache has been cleared successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<!-- config clear -->
<tr>
    <td colspan="2" class="td-head">Config Cache</td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Application config cache clear</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan config:clear</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="config_clear" data-smgs="config cache has been cleared successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<!-- config cache -->
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Application config set in cache</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan config:cache</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="config_cache" data-smgs="config has been cached successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<!-- view clear -->
<tr>
    <td colspan="2" class="td-head">View Cache</td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Application view cache clear</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan view:clear</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="view_clear" data-smgs="view cache has been cleared successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<!-- view cache -->
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Application view set in cache</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan view:cache</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="view_cache" data-smgs="view has been cached successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<!-- route clear -->
<tr>
    <td colspan="2" class="td-head">Route Cache</td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Application route cache clear</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan route:clear</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="route_clear" data-smgs="route cache has been cleared successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<!-- route cache -->
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Application route set in cache</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan route:cache</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="route_cache" data-smgs="route has been cached successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<!-- event clear -->
<tr>
    <td colspan="2" class="td-head">Event Cache</td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Application event cache clear</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan event:clear</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="event_clear" data-smgs="event cache has been cleared successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<!-- event cache -->
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Application event set in cache</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan event:cache</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="event_cache" data-smgs="event has been cached successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<!-- Optimize -->
<tr>
    <td colspan="2" class="td-head">Optimize</td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Optimize config and route cache together</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan optimize</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="optimize" data-smgs="optimized config and route cache successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Clearing all cache together</div>
        <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan optimize:clear</span></div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="optimize_clear" data-smgs="cleared all cache successfully" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>