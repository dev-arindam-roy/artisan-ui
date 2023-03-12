@if (!empty($cmd_mackable) && count($cmd_mackable))
    @foreach ($cmd_mackable as $cmd)
        @if (!empty($cmd))
            @php
                $cmdArr = explode(':', $cmd);
                $name = !empty($cmdArr[1]) ? ucfirst($cmdArr[1]) : '';
                $cmdBtnId = str_replace(':', '_', $cmd);
            @endphp
            <tr>
                <td colspan="2" class="td-head">Make {{ $name }}</td>
            </tr>
            <tr>
                <td style="width: 80%; text-align: left;">
                    <div class="name">Create/Make {{ $name }}</div>
                    <div class="mt-ten">
                        <span class="command">Command: </span>
                        <span class="php-artisan">php artisan {{ $cmd }}</span>
                        <input type="text" id="{{ $cmdBtnId }}-cmdName" class="user-input w-md" placeholder="Enter {{ ($name == 'Migration') ? 'Table' : $name }} Name" />
                    </div>
                </td>
                <td style="width: 20%; text-align: right;">
                    <button type="button" class="btn btn-view command-btn" id="{{ $cmdBtnId }}" data-smgs="{{ $name }} has been created successfully - [CMD_NAME]" data-rerun="NO" onclick="runCommand(this.id);">Run It!</button>
                </td>
            </tr>
            @if($name == 'Migration')
            <tr>
                <td style="width: 80%; text-align: left;">
                    <div class="name">Alter/Modify Exist Migration</div>
                    <div class="mt-ten">
                        <span class="command">Command: </span>
                        <span class="php-artisan">php artisan {{ $cmd }}</span>
                        <input type="text" id="alter_{{ $cmdBtnId }}-cmdName" class="user-input w-md" placeholder="Enter Table Alter Text" />
                        --
                        <input type="text" id="alter_{{ $cmdBtnId }}-tabName" class="user-input w-md" placeholder="Enter Table Name" />
                    </div>
                </td>
                <td style="width: 20%; text-align: right;">
                    <button type="button" class="btn btn-view command-btn" id="alter_{{ $cmdBtnId }}" data-smgs="Alter migration created successfully - [CMD_NAME]" data-rerun="NO" onclick="runCommand(this.id);">Run It!</button>
                </td>
            </tr>
            @endif
        @endif
    @endforeach
@endif