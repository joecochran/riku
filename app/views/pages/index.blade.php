@extends('layouts.default')

@section('main')
<div class="container">
    <h1 class="ui header">All Pages</h1>
    <a href="{{ url('pages/create') }}" class="ui blue tiny labeled icon button"><i class="add icon"></i> Add Page</a> 

    @if ($pages->count())
    <table class="ui sortable padded table blue segment">
        <thead>
            <tr>
                <th class="ascending">Title</th>
                <th colspan="2">Description</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td>{{{ $page->title }}}</td>
                    <td>{{{ $page->description }}}</td>
                    <td>
                        <div class="ui tiny buttons pull-right">
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('pages.destroy', $page->id))) }}
                            {{ link_to_route('pages.edit', 'Edit', array($page->id), array('class' => 'ui button')) }}
                            <div class="or"></div>
                            {{ Form::submit('Delete', array('class' => 'ui button red')) }}
                        {{ Form::close() }}
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    <a href="{{ url('pages/create') }}" class="ui blue tiny labeled icon button"><i class="add icon"></i> Add Page</a> 
                </td>
            </tr>
        </tfoot>
    </table>
    @else
        There are no pages
    @endif
</div>
@stop
