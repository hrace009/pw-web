<div class="row">
    <div class="col-md-6">
        <div class="well bg-white">
            <ul class="nav nav-pills mb-none">
                <li {{ str_contains( Request::url(), 'player' ) ? 'class=active' : NULL }}><a
                            href="{{ url( 'ranking' ) }}">{{ trans( 'ranking.player' ) }}</a></li>
                <li {{ str_contains( Request::url(), 'faction' ) ? 'class=active' : NULL }}><a
                            href="{{ url( 'ranking/faction' ) }}">{{ trans( 'ranking.faction' ) }}</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="well bg-white">
            <ul class="nav nav-pills mb-none">
                @if( Route::is('ranking.player') )
                    <li {{ str_contains( Request::url(), 'level' ) ? 'class=active' : NULL }}><a
                                href="{{ url( 'ranking/' . Request::segment(2) . '/level' ) }}">{{ trans( 'ranking.type.level' ) }}</a>
                    </li>
                    <li {{ str_contains( Request::url(), 'rep' ) ? 'class=active' : NULL }}><a
                                href="{{ url( 'ranking/' . Request::segment(2) . '/rep' ) }}">{{ trans( 'ranking.type.rep' ) }}</a>
                    </li>
                    <li {{ str_contains( Request::url(), 'time' ) ? 'class=active' : NULL }}><a
                                href="{{ url( 'ranking/' . Request::segment(2) . '/time' ) }}">{{ trans( 'ranking.type.time' ) }}</a>
                    </li>
                    <li {{ str_contains( Request::url(), 'pvp' ) ? 'class=active' : NULL }}><a
                                href="{{ url( 'ranking/' . Request::segment(2) . '/pvp' ) }}">{{ trans( 'ranking.type.pvp' ) }}</a>
                    </li>
                @endif
                @if( Route::is('ranking.faction') )
                    <li {{ str_contains( Request::url(), 'level' ) ? 'class=active' : NULL }}><a
                                href="{{ url( 'ranking/' . Request::segment(2) . '/level' ) }}">{{ trans( 'ranking.type.level' ) }}</a>
                    </li>
                    <li {{ str_contains( Request::url(), 'members' ) ? 'class=active' : NULL }}><a
                                href="{{ url( 'ranking/' . Request::segment(2) . '/members' ) }}">{{ trans( 'ranking.type.members' ) }}</a>
                    </li>
                    <li {{ str_contains( Request::url(), 'territories' ) ? 'class=active' : NULL }}><a
                                href="{{ url( 'ranking/' . Request::segment(2) . '/territories' ) }}">{{ trans( 'ranking.type.territories' ) }}</a>
                    </li>
                    <li {{ str_contains( Request::url(), 'pvp' ) ? 'class=active' : NULL }}><a
                                href="{{ url( 'ranking/' . Request::segment(2) . '/pvp' ) }}">{{ trans( 'ranking.type.pvp' ) }}</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>