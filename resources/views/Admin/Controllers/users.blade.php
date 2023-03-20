@extends('layouts.admin', [
    'stylesheet' => mix('css/admin/users.css'),
    'pagename' => 'Darbinieku Saraksts'
])

@section('content')
    <div class="users">
        <div class="users__nav">
            <a href="{{ url('admin/create_user') }}" class="users__nav--button">+ Pievienot</a>
        </div>
            <table class="users__table">
                <tr>
                    <th>Vārds</th>
                    <th>E-pasts</th>
                    <th>Lietotājvārds</th>
                    <th>Darbības</th>
                </tr>
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $member['name'] }}</td>
                        <td>{{ $member['email'] }}</td>
                        <td>{{ $member['username'] }}</td>
                        <td>
                            <form onchange="redirect()">
                                <select id="redirect" name="redirect">
                                    <option value="">-</option>
                                    <option value="">Skatit</option>
                                    <option value="">Labot</option>
                                    <option value="">Dzēst</option>
                                </select>
                            </form>
                        </td>
                    </tr> 
                @endforeach 
            </table>
            @if ($members->hasPages())
                <div class="users__paginators">
                    @if ($members->onFirstPage())
                        <a class="users__paginators--link hidden" tabindex="-1" href="{{ $members->previousPageUrl() }}"><</a>
                    @else
                        <a class="users__paginators--link" tabindex="-1" href="{{ $members->previousPageUrl() }}"><</a>
                    @endif
                        <p class="users__paginators--index" >{{ $members->currentPage() }}</p>
                    @if ($members->hasMorePages())
                        <a class="users__paginators--link" href="{{ $members->nextPageUrl() }}">></a>
                    @else
                        <a class="users__paginators--link hidden" href="{{ $members->nextPageUrl() }}">></a>
                    @endif
                </div>
            @endif           
        </div>  
    </div>
@endsection