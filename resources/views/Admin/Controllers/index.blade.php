@extends('layouts.admin', [
    'stylesheet' => mix('css/admin/index.css'),
    'title' => 'Admin - All Cars',
    'pagename' => 'Sākums'
])

@section('content')

    <div class="stats">
        <div class="stats__box">
            <div class="stats__box__icon">
                <i class="icon fa fa-car"></i>
            </div>
            <div class="stats__box__data">
                Mašīnas Rindā: 20
            </div>
        </div>
        <div class="stats__box">
            <div class="stats__box__icon">
                <i class="icon fa fa-user"></i>
            </div>
            <div class="stats__box__data">
                Darbinieki: 20
            </div>
        </div>
        <div class="stats__box">
            <div class="stats__box__icon">
                <i class="icon fa fa-car"></i>
            </div>
            <div class="stats__box__data">
                ...
            </div>
        </div>
        
    </div>

    


    
@endsection



