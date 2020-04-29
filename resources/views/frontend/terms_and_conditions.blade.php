@extends('layouts.frontend.app')
@include('layouts.frontend.nav')
@section('title')
Terms And Conditions
@endsection
@section('extra_css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/terms_and_conditions.css')}}">
@endsection
@section('content')
    <!-- main body -->
    <div class="mg_top container" style="width: 100%">

        <!-- main title -->
        <h1 style="margin: 1.5vw auto; color: hsl(35,100%,50%)">{{__('common.terms_and_conditions')}}</h1>
        <!-- main title -->

        <!-- foundation -->
        <div class="container foundation">
            <!-- subtitle foundation -->
            <h3 class="subtitle-foundation-h2" style="color: hsl(35,100%,50%)">{{__('common.people_in_need')}}</h3>
            <!-- subtitle foundation -->

            <!-- content foundation -->
            <ul class="content-foundation-ul">
                <li>
                    {{__('term_condition.organization_tc1')}}
                </li>
                <li>
                    {{__('term_condition.organization_tc2')}}
                </li>
                <li>
                    {{__('term_condition.organization_tc3')}}
                </li>
                <li>
                    {{__('term_condition.organization_tc4')}}
                </li>
                <li>
                    {{__('term_condition.organization_tc5')}}
                </li>
            </ul>
            <!-- content foundation -->
        </div>
        <!-- foundation -->

        <!-- people-in-need -->
        <div class="container people-in-need">
            <!-- subtitle people-in-need -->
            <h3 class="subtitle-people-in-need-h2" style="color: hsl(35,100%,50%)">{{__('common.people_in_need')}}</h3>
            <!-- subtitle/ people-in-need -->
            <!-- content people-in-need -->
            <ul class="content-people-in-need-ul">
                <li>
                    {{__('term_condition.people_tc1')}}
                </li>
                <li>
                    {{__('term_condition.people_tc2')}}
                </li>
                <li>
                    {{__('term_condition.people_tc3')}}
                </li>
            </ul>
            <!-- content people-in-need -->
        </div>
        <!-- people-in-need -->

        <!-- donor -->
        <div class="container donor">
            <!-- subtitle donor -->
            <h3 class="subtitle-donor-h2" style="color: hsl(35,100%,50%)">{{__('common.visitor')}}</h3>
            <!-- subtitle donor -->
            <!-- content donor -->
            <ul class="content-donor-ul">
                <li>
                    {{__('term_condition.donor_tc1')}}
                </li>
                <li>
                    {{__('term_condition.donor_tc2')}}
                </li>
                <li>
                    {{__('term_condition.donor_tc3')}}
                </li>
            </ul>
            <!-- content donor -->
        </div>
        <!-- donor -->
    </div>
    <!-- main body -->
@endsection
