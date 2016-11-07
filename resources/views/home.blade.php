@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>
                <div class="panel-body">
                    @if(isset($obj))
                        {!! Form::open(['method' => 'post', 'action' => 'HomeController@info', 'files' => false ,'class' => 'form-group']) !!}
                            <div class="form-group">
                                {!! Form::label('username', 'Username', ['class' => 'form-label']) !!}
                                {!! Form::text('username', $obj->battletag, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
                            </div>
                            {!! Form::submit('Validation', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                        <p>battletag: {{ $obj->battletag }}</p>
                        <p>region: {{ $obj->region }}</p>
                        <p>level: {{ $obj->overall_stats->level }}</p>
                        <p>comprank: {{ $obj->overall_stats->comprank }}</p>
                        <p>prestige: {{ $obj->overall_stats->prestige }}</p>
                        <p>avatar: <img src={{ $obj->overall_stats->avatar }} alt="avatar">
                        <p>wins: {{ $obj->overall_stats->wins }}</p>
                        <p>eliminations_avg: {{ $obj->average_stats->eliminations_avg }}</p>
                        <p>offensive_assists_avg: {{ $obj->average_stats->offensive_assists_avg }}</p>
                        <p>healing_done_avg: {{ $obj->average_stats->healing_done_avg }}</p>
                        <p>objective_time_avg: {{ $obj->average_stats->objective_time_avg }}</p>
                        <p>time_spent_on_fire_avg: {{ $obj->average_stats->time_spent_on_fire_avg }}</p>
                        <p>damage_done_avg: {{ $obj->average_stats->damage_done_avg }}</p>
                        <p>solo_kills_avg: {{ $obj->average_stats->solo_kills_avg }}</p>
                        <p>objective_kills_avg: {{ $obj->average_stats->objective_kills_avg }}</p>
                        <p>deaths_avg: {{ $obj->average_stats->deaths_avg }}</p>
                        <p>melee_final_blows_avg: {{ $obj->average_stats->melee_final_blows_avg }}</p>
                        <p>defensive_assists_avg: {{ $obj->average_stats->defensive_assists_avg }}</p>
                        <p>final_blows_avg: {{ $obj->average_stats->final_blows_avg }}</p>
                        <p>objective_kills_most_in_game: {{ $obj->game_stats->objective_kills_most_in_game }}</p>
                        <p>solo_kills_most_in_game: {{ $obj->game_stats->solo_kills_most_in_game }}</p>
                        <p>damage_done: {{ $obj->game_stats->damage_done }}</p>
                        <p>melee_final_blows: {{ $obj->game_stats->melee_final_blows }}</p>
                        <p>multikills: {{ $obj->game_stats->multikills }}</p>
                        <p>eliminations_most_in_game: {{ $obj->game_stats->eliminations_most_in_game }}</p>
                        <p>offensive_assists_most_in_game: {{ $obj->game_stats->offensive_assists_most_in_game }}</p>
                        <p>objective_time: {{ $obj->game_stats->objective_time }}</p>
                        <p>offensive_assists: {{ $obj->game_stats->offensive_assists }}</p>
                        <p>defensive_assists_most_in_game: {{ $obj->game_stats->defensive_assists_most_in_game }}</p>
                        <p>cards: {{ $obj->game_stats->cards }}</p>
                        <p>medals_bronze: {{ $obj->game_stats->medals_bronze }}</p>
                        <p>time_played: {{ $obj->game_stats->time_played }}</p>
                        <p>objective_time_most_in_game: {{ $obj->game_stats->objective_time_most_in_game }}</p>
                        <p>deaths: {{ $obj->game_stats->deaths }}</p>
                        <p>multikill_best: {{ $obj->game_stats->multikill_best }}</p>
                        <p>defensive_assists: {{ $obj->game_stats->defensive_assists }}</p>
                        <p>damage_done_most_in_game: {{ $obj->game_stats->damage_done_most_in_game }}</p>
                        <p>damage_done_most_in_game: {{ $obj->game_stats->damage_done_most_in_game }}</p>
                        <p>solo_kills: {{ $obj->game_stats->solo_kills }}</p>
                        <p>medals_silver: {{ $obj->game_stats->medals_silver }}</p>
                        <p>medals_gold: {{ $obj->game_stats->medals_gold }}</p>
                        <p>final_blows: {{ $obj->game_stats->final_blows }}</p>
                        <p>recon_assists: {{ $obj->game_stats->recon_assists }}</p>
                        <p>games_won: {{ $obj->game_stats->games_won }}</p>
                        <p>objective_kills: {{ $obj->game_stats->objective_kills }}</p>
                        <p>melee_final_blows_most_in_game: {{ $obj->game_stats->melee_final_blows_most_in_game }}</p>
                        <p>eliminations: {{ $obj->game_stats->eliminations }}</p>
                        <p>environmental_kills: {{ $obj->game_stats->environmental_kills }}</p>
                        <p>final_blows_most_in_game: {{ $obj->game_stats->final_blows_most_in_game }}</p>
                        <p>healing_done: {{ $obj->game_stats->healing_done }}</p>
                        <p>teleporter_pads_destroyed: {{ $obj->game_stats->teleporter_pads_destroyed }}</p>
                        <p>environmental_deaths: {{ $obj->game_stats->environmental_deaths }}</p>
                        <p>kpd: {{ $obj->game_stats->kpd }}</p>
                        <p>medals: {{ $obj->game_stats->medals }}</p>
                        <p>time_spent_on_fire_most_in_game: {{ $obj->game_stats->time_spent_on_fire_most_in_game }}</p>
                        <p>healing_done_most_in_game: {{ $obj->game_stats->healing_done_most_in_game }}</p>
                        <p>time_spent_on_fire: {{ $obj->game_stats->time_spent_on_fire }}</p>
                    @else
                        {!! Form::open(['method' => 'post', 'action' => 'HomeController@info', 'files' => false ,'class' => 'form-group']) !!}
                            <div class="form-group">
                                {!! Form::label('username', 'Username', ['class' => 'form-label']) !!}
                                {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
                            </div>
                            {!! Form::submit('Validation', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
