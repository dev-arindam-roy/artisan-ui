<div class="table-box">
    <div class="logout-box">
        @if(Session::has('artisanUiAdminAccessEnabled') && Session::get('artisanUiAdminAccessEnabled') == 'YES')
            <a href="{{ route('artisan-ui.adminLogout') }}" class="onexlogout">Logout</a>
        @else
            <!-- a href="javascript:void(0);" id="tab_close" class="onexlogout" onclick="closeCurrentWindow();">Close</a -->
        @endif
    </div>
    <table class="table">
        <thead>
            <tr>
                <th style="width: 33.33%">PHP: <span class="highlight">{{ !empty($init_data['php']) ? $init_data['php'] : '' }}</span></th>
                <th style="width: 33.33%">Laravel: <span class="highlight">{{ !empty($init_data['laravel']) ? $init_data['laravel'] : '' }}</span></th>
                <th style="width: 33.33%">MySQL: <span class="highlight">{{ !empty($init_data['mysql']) ? $init_data['mysql'] : 'DB not found!' }}</span></th>
            </tr>
        </thead>
    </table>
</div>

<div class="table-box mt-10" style="margin-bottom: 50px;">
    <div class="search-box">
        <input type="text" class="search-txt" id="searchText" placeholder="Search..." onkeyup="searchArtisanUI(this.value);" />
        <label id="responseText"></label>
    </div>
    <table class="table" id="artisanUI">
        <tbody>
            <!-- key generate -->
            <tr>
                <td colspan="2" class="td-head">Key</td>
            </tr>
            <tr>
                <td style="width: 80%; text-align: left;">
                    <div class="name">Application key generate</div>
                    <div class="mt-ten"><span class="command">Command: </span><span class="php-artisan">php artisan key:generate</span></div>
                </td>
                <td style="width: 20%; text-align: right;">
                    <button type="button" class="btn btn-view command-btn" id="key_generate" data-smgs="key generated successfully" data-rerun="NO" onclick="runCommand(this.id);">Run It!</button>
                </td>
            </tr>
            @include('artisan-ui::all-cache-artisan')
            @include('artisan-ui::storage-artisan')            
            @if(!empty($init_data['mysql']))
                @include('artisan-ui::default-table-artisan')
            @else
                <tr>
                    <td colspan="2"><strong>Database connection not found! Please connect the database first.</strong></td>
                </tr>
            @endif
            @if(!empty($init_data['mysql']))
                @include('artisan-ui::migrations-artisan')
            @else
                <tr>
                    <td colspan="2"><strong>Migration can not be run! Please connect the database first.</strong></td>
                </tr>
            @endif
            @include('artisan-ui::controllers-artisan')
            @include('artisan-ui::models-artisan')
            @include('artisan-ui::makeable-artisan')
        </tbody>
    </table>
</div>