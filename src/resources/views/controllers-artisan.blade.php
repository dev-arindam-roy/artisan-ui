<tr>
    <td colspan="2" class="td-head">Make Controller</td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Create/Make controller</div>
        <div class="mt-ten">
            <span class="command">Command: </span>
            <span class="php-artisan">php artisan make:controller</span>
            <input type="text" id="make_controller_dynamic-cmdName" class="user-input w-md" placeholder="Enter Controller Name" />
            <span class="php-artisan" id="make_controller_dynamic-argString"></span>
            <div class="mt-ten">
                <strong>With: </strong>
                <input type="radio" name="make_controller_dynamic" value="resource" id="make_controller_dynamic-rdb-resource" onclick="argumentRdb(this.value, this.id, 'make_controller_dynamic-argString', 'make_controller_dynamic');" /> Resource
                <input type="radio" name="make_controller_dynamic" value="api" id="make_controller_dynamic-rdb-api" onclick="argumentRdb(this.value, this.id, 'make_controller_dynamic-argString', 'make_controller_dynamic');" /> Api
                <input type="radio" name="make_controller_dynamic" value="invokable" id="make_controller_dynamic-rdb-invokable" onclick="argumentRdb(this.value, this.id, 'make_controller_dynamic-argString', 'make_controller_dynamic');" /> Invokable
            </div>
        </div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="make_controller_dynamic" data-cmd="make_controller" data-argums="" data-smgs="Controller created successfully - [CMD_NAME]" data-rerun="NO" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>