<tr>
    <td colspan="2" class="td-head">Make Model</td>
</tr>
<tr>
    <td style="width: 80%; text-align: left;">
        <div class="name">Create/Make model</div>
        <div class="mt-ten">
            <span class="command">Command: </span>
            <span class="php-artisan">php artisan make:model</span>
            <input type="text" id="make_model_dynamic-cmdName" class="user-input w-md" placeholder="Enter Model Name" />
            <span class="php-artisan" id="make_model_dynamic-argString"></span>
            <div class="mt-ten">
                <strong>With: </strong>
                <input type="checkbox" value="seed" id="make_model_dynamic-ckb-seed" onchange="argumentCkb(this.value, this.id, 'make_model_dynamic-argString', 'make_model_dynamic');" /> Seed
                <input type="checkbox" value="factory" id="make_model_dynamic-ckb-factory" onchange="argumentCkb(this.value, this.id, 'make_model_dynamic-argString', 'make_model_dynamic');" /> Factory
                <input type="checkbox" value="migration" id="make_model_dynamic-ckb-migration" onchange="argumentCkb(this.value, this.id, 'make_model_dynamic-argString', 'make_model_dynamic');" /> Migration
                <input type="checkbox" value="controller" id="make_model_dynamic-ckb-controller" onchange="argumentCkb(this.value, this.id, 'make_model_dynamic-argString', 'make_model_dynamic');" /> Controller
            </div>
        </div>
    </td>
    <td style="width: 20%; text-align: right;">
        <button type="button" class="btn btn-view command-btn" id="make_model_dynamic" data-cmd="make_model" data-argums="" data-smgs="Model created successfully - [CMD_NAME]" data-rerun="NO" onclick="runCommand(this.id);">Run It!</button>
    </td>
</tr>