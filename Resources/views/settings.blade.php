<form class="form-horizontal margin-top margin-bottom" method="POST" action="">
    {{ csrf_field() }}

    <div class="form-group">
        <label class="col-sm-1 control-label">{{ __('Color') }}</label>

        <div class="col-sm-10">
            <input type="hidden" name="settings[themes.theme]" value="{{ $settings['themes.theme'] }}" />
            <div class="btn-group theme-colours">
                <a class="btn btn-default theme-grey @if ($settings['themes.theme'] == 'grey') active @endif" data-colour="grey">&nbsp;</a>
                <a class="btn btn-default theme-red @if ($settings['themes.theme'] == 'red') active @endif" data-colour="red">&nbsp;</a>
                <a class="btn btn-default theme-green @if ($settings['themes.theme'] == 'green') active @endif" data-colour="green">&nbsp;</a>
                <a class="btn btn-default theme-blue @if ($settings['themes.theme'] == 'blue') active @endif" data-colour="blue">&nbsp;</a>
                <a class="btn btn-default theme-orange @if ($settings['themes.theme'] == 'orange') active @endif" data-colour="orange">&nbsp;</a>
                <a class="btn btn-default theme-purple @if ($settings['themes.theme'] == 'purple') active @endif" data-colour="purple">&nbsp;</a>
                <a class="btn btn-default theme-brown @if ($settings['themes.theme'] == 'brown') active @endif" data-colour="brown">&nbsp;</a>
            </div>
            <span class="help-inline" id="colour-label">{{ $settings['themes.theme'] }}</span>
        </div>
    </div>

    <div class="form-group margin-bottom-30 margin-top-25">
        <div class="col-sm-6 col-sm-offset-2">
            <button type="submit" class="btn btn-primary" name="action">
                {{ __('Save') }}
            </button>
        </div>
    </div>
</form>