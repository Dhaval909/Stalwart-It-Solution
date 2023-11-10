@extends('Frontend.layouts.main')

@section('title','Portfolio | ')

@section('main-container')

  {{-- ======= Portfolio Section ======= --}}
  @include('Frontend.portfolio_section')
  {{-- End Portfolio Section --}}
{{-- ======= Contact Section ======= --}}
    @include('Frontend.contact_section')
    {{-- EndContactSection --}}
@endsection
